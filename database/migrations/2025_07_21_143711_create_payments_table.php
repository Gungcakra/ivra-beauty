<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->unsignedBigInteger('booking_id');
            $table->unsignedBigInteger('transaction_id');
            $table->string('transaction_status');
            $table->string('payment_type');
            $table->string('fraud_status')->nullable();
            $table->decimal('gross_amount', 15, 2);
            $table->string('currency');
            $table->string('payment_code')->nullable();
            $table->string('va_number')->nullable();
            $table->string('pdf_url')->nullable();
            $table->timestamp('transaction_time')->nullable();
            $table->timestamp('settlement_time')->nullable();
            $table->text('raw_response')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
