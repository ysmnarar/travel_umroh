<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kamar extends Model
{
    use HasFactory;
    protected $table = 'kamar';

    protected $fillable = ['jenis_kamar', 'deskripsi_kamar'];

    public function jamaah()
    {
        return $this->hasMany(Jamaah::class);
    }

}
