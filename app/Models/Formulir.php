<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IdentitasNasabah;
use App\Models\NasabahPerorang;

class Formulir extends Model
{
    use HasFactory;
    protected $table = 'formulir';

    public function identitas_nasabah()
    {
        return $this->belongsTo(IdentitasNasabah::class, 'id_identitas_nasabah');
    }
    public function nasabah_perorang()
    {
        return $this->belongsTo(NasabahPerorang::class, 'id_nasabah_perorang');
    }
}
