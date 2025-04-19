<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'layanan_id',
        'sesi_id',
        'tanggal',
        'catatan',
        'status',
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
    ];

    protected $attributes = [
        'status' => 'pending',
        'status_pembayaran' => 'belum_bayar',
        'total_biaya' => 0,
    ];

    protected $casts = [
        'tanggal' => 'date',
        'total_biaya' => 'decimal:2',
        'berat_bayi' => 'decimal:2',
        'tinggi_bayi' => 'decimal:2',
        'midtrans_transaction_time' => 'datetime'
    ];

    // Mutator to convert age to months before saving
    public function setUmurBayiAttribute($value)
    {
        $umurSatuan = request()->input('umur_satuan', 'bulan');
        
        if ($umurSatuan === 'tahun') {
            $this->attributes['umur_bayi'] = $value * 12; // Convert years to months
        } else {
            $this->attributes['umur_bayi'] = $value;
        }
    }

    // Accessor to get age in years or months
    public function getUmurBayiAttribute($value)
    {
        $umurSatuan = request()->input('umur_satuan', 'bulan');
        
        if ($umurSatuan === 'tahun') {
            return $value / 12; // Convert months to years
        }
        return $value;
    }

    // Mutator to ensure numeric values for weight and height
    public function setBeratBayiAttribute($value)
    {
        $this->attributes['berat_bayi'] = (float) $value;
    }

    public function setTinggiBayiAttribute($value)
    {
        $this->attributes['tinggi_bayi'] = (float) $value;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }

    public function sesi()
    {
        return $this->belongsTo(Sesi::class);
    }

    public function isHoliday()
    {
        return \App\Models\Holiday::whereDate('tanggal', $this->tanggal)->exists();
    }

    public function isWeekend()
    {
        return $this->tanggal->isWeekend();
    }

    public function isFriday()
    {
        return $this->tanggal->dayOfWeek === 5; // 5 is Friday
    }

    public function getMaxDuration()
    {
        if ($this->isWeekend()) {
            return 120; // 2 hours on weekends
        }
        return 60; // 1 hour on weekdays
    }

    public function getMaxPatients()
    {
        if ($this->isWeekend()) {
            return 2; // 2 patients on weekends
        }
        return 1; // 1 patient on weekdays
    }
}
