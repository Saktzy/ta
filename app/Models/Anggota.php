<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Penduduk;

class Anggota extends Model
{
    use HasFactory;
    protected $table = 'anggota_keluarga';
    protected $primaryKey = 'id_anggota';

    public function keluarga()
    {
        return $this->belongsTo(Keluarga::class, 'id_kk');
    }

    public function Penduduk()
    {
        return $this->belongsTo(Penduduk::class, 'id_pend');
    }
}
