<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Jamaah extends Model
{
    use HasFactory;
    protected $table = 'jamaah'; 
    protected $fillable = [
        'nama_lengkap', 'nik', 'tempat_lahir', 'tanggal_lahir', 'alamat',
        'provinsi', 'kab_kota', 'kecamatan', 'kelurahan', 'jenis_kelamin',
        'no_paspor', 'masa_berlaku_paspor', 'lampiran_ktp', 'lampiran_kk',
        'lampiran_foto_diri', 'lampiran_paspor', 'no_visa', 'berlaku_sampai',
        'paket_id', 'kamar_id'
    ];

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }

    public function kamar()
    {
        return $this->belongsTo(Kamar::class);
    }
}

