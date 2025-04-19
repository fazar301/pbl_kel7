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
        Schema::table('reservasis', function (Blueprint $table) {
            $table->string('status_pembayaran')->default('belum_bayar')->after('status');
            $table->string('metode_pembayaran')->nullable()->after('status_pembayaran');
            $table->decimal('total_biaya', 10, 2)->after('metode_pembayaran');
            
            // Baby information
            $table->string('nama_bayi')->after('total_biaya');
            $table->integer('umur_bayi')->after('nama_bayi');
            $table->decimal('berat_bayi', 5, 2)->after('umur_bayi');
            $table->decimal('tinggi_bayi', 5, 2)->after('berat_bayi');
            $table->string('no_hp_ortu')->after('tinggi_bayi');
            
            // Midtrans fields
            $table->string('midtrans_order_id')->nullable()->after('no_hp_ortu');
            $table->string('midtrans_transaction_id')->nullable()->after('midtrans_order_id');
            $table->string('midtrans_payment_type')->nullable()->after('midtrans_transaction_id');
            $table->string('midtrans_transaction_status')->nullable()->after('midtrans_payment_type');
            $table->timestamp('midtrans_transaction_time')->nullable()->after('midtrans_transaction_status');
            $table->string('midtrans_va_number')->nullable()->after('midtrans_transaction_time');
            $table->string('midtrans_bank')->nullable()->after('midtrans_va_number');
            $table->string('midtrans_bill_key')->nullable()->after('midtrans_bank');
            $table->string('midtrans_biller_code')->nullable()->after('midtrans_bill_key');
            $table->string('midtrans_pdf_url')->nullable()->after('midtrans_biller_code');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reservasis', function (Blueprint $table) {
            $table->dropColumn([
                'status_pembayaran',
                'metode_pembayaran',
                'total_biaya',
                'nama_bayi',
                'umur_bayi',
                'berat_bayi',
                'tinggi_bayi',
                'no_hp_ortu',
                'midtrans_order_id',
                'midtrans_transaction_id',
                'midtrans_payment_type',
                'midtrans_transaction_status',
                'midtrans_transaction_time',
                'midtrans_va_number',
                'midtrans_bank',
                'midtrans_bill_key',
                'midtrans_biller_code',
                'midtrans_pdf_url'
            ]);
        });
    }
}; 