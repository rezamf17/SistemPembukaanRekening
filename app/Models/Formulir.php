<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\IdentitasNasabah;
use App\Models\NasabahPerorang;
use App\Models\File;
use App\Models\JenisSimpanan;
use App\Models\Cabang;

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
    public function files()
    {
        return $this->belongsTo(File::class, 'id_files');
    }
    public function jenis_simpanan()
    {
        return $this->belongsTo(JenisSimpanan::class, 'id_jenis_simpanan');
    }
    public function cabang()
    {
        return $this->belongsTo(Cabang::class, 'id_cabang');
    }
}
