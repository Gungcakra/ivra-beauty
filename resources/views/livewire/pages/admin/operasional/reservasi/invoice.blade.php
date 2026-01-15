<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Print Invoice</title>
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />
</head>

<body>
    <div class="ticket">
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Arial', sans-serif;
                background: #f5f5f5;
            }

            .ticket {
                width: 100%;
                max-width: 1000px;
                margin: 0 auto;
                background: white;
                padding: 40px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 30px;
                border-bottom: 3px solid #e91e63;
                padding-bottom: 20px;
            }

            .header h1 {
                font-size: 32px;
                color: #333;
                font-weight: bold;
            }

            .header-right {
                text-align: right;
            }

            .invoice-number {
                font-size: 14px;
                color: #666;
                margin: 5px 0;
            }

            .invoice-date {
                font-size: 14px;
                color: #666;
                margin: 5px 0;
            }

            .time-info {
                font-size: 13px;
                color: #999;
                margin: 8px 0;
            }
        </style>

        <div class="header">
            <div>
                <h1>Ivira Beauty</h1>
            </div>
            <div class="header-right">
                <div class="invoice-number"><strong>Invoice #:</strong> {{ $transaksi->created_at->addHours(8)->format('YmdHis') }}</div>
                <div class="invoice-date"><strong>Tanggal:</strong> {{ $transaksi->created_at->addHours(8)->translatedFormat('d F Y') }}</div>
                <div class="time-info"><strong>Waktu:</strong> {{ $transaksi->created_at->addHours(8)->format('H:i') }}</div>
            </div>
        </div>

        <div class="body">
            <h2>Terima kasih telah melakukan reservasi di Ivira Beauty!</h2>
            <p>Berikut adalah rincian reservasi Anda:</p>
            <ul>
                <li><strong>Nama Pelanggan:</strong> {{$transaksi->pelanggan?->nama}}</li>
                <li><strong>Email:</strong> {{$transaksi->pelanggan?->email}}</li>
                <li><strong>No Telp:</strong> {{$transaksi->pelanggan?->no_telp}}</li>
                <li><strong>Tanggal & Waktu:</strong> {{ $transaksi->created_at->addHours(8)->translatedFormat('d F Y H:i') }}</li>
            </ul>

            <div style="margin: 30px 0; padding: 20px; background: #f9f9f9; border-radius: 8px;">
                <div style="display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px; margin-bottom: 20px;">
                    <div>
                        <p style="font-size: 12px; color: #999; margin-bottom: 5px;">LAYANAN</p>
                        <p style="font-size: 16px; color: #333; font-weight: bold;">
                            <ul class="list-unstyled mb-0">
                                @foreach ($transaksi->reservasi->layanans as $layanan)
                                    <li>{{ $layanan->nama_layanan }}</li>
                                @endforeach
                            </ul>
                    </div>
                    <div style="text-align: right;">
                        <p style="font-size: 12px; color: #999; margin-bottom: 5px;">HARGA</p>
                        <p style="font-size: 16px; color: #333; font-weight: bold;">
                            <ul class="list-unstyled mb-0">
                                @foreach ($transaksi->reservasi->layanans as $layanan)
                                    <li>Rp {{ number_format($layanan->harga, 0, ',', '.') }}</li>
                                @endforeach
                            </ul>
                        </p>
                    </div>
                </div>
                
                <div style="border-top: 2px solid #e91e63; padding-top: 15px; display: grid; grid-template-columns: 1fr 1fr 1fr; gap: 20px;">
                    <div style="text-align: center;">
                        <p style="font-size: 12px; color: #999; margin-bottom: 5px;">TOTAL PEMBAYARAN</p>
                    </div>
                    <div style="text-align: right;">
                        <p style="font-size: 18px; color: #e91e63; font-weight: bold;">Rp {{ number_format($transaksi->nominal_pembayaran, 0, ',', '.') }}</p>
                    </div>
                </div>
            </div>
            <p>Silakan simpan invoice ini sebagai bukti reservasi Anda. Kami menantikan kehadiran Anda di Ivira Beauty!</p>
        </div>
    </div>
</body>

</html>