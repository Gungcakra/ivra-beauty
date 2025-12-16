<?php

namespace App\Livewire\Admin;

use App\Models\Menu;
use App\Models\Transaksi;
use Livewire\Component;
use Livewire\Attributes\Layout;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

#[Layout('layouts.admin.admin')]
class Dashboard extends Component
{
   
    public function mount()
    {
        $userRole = Auth::user()->role;
        if ($userRole !== 'admin') {
            abort(403, 'Unauthorized access.');
        }
    }
    public function render()
    {
        $thisMonthTransaction = Transaksi::where('created_at', '>=', Carbon::now()->startOfMonth())
            ->where('created_at', '<=', Carbon::now()->endOfMonth())
            ->get();
        $thisMonthIncome = $thisMonthTransaction->sum('nominal_pembayaran');
        $thisMonthReservasiCount = $thisMonthTransaction->count();
        $viewData = [
            'thisMonthIncome' => $thisMonthIncome,
            'thisMonthReservasiCount' => $thisMonthReservasiCount,
        ];
        return view('livewire.pages.admin.dashboard', $viewData);
    }

}
