<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RekeningTabunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('identitas_nasabah')->insert([
            [
            'nama' => 'udin',
            'jenis_kelamin' => 'Laki-laki',
            'nama_ibu' => 'dsfd',
            'status_kependudukan' => 'WNI',
            'tempat_lahir' => 'solo',
            'tanggal_lahir' => '1988-10-10',
            'no_ktp' => '234234254',
            'alamat' => 'Jalan kenari 9',
            'no_hp' => '24345345',
            'bertindak_sebagai' => 'Diri Sendiri',
            'tujuan_buka_rekening' => 'Saving',
            'zakat' => 'Ya 2.5%'
            ],
            [
            'nama' => 'asep smoking',
            'jenis_kelamin' => 'Laki-laki',
            'nama_ibu' => 'p',
            'status_kependudukan' => 'WNI',
            'tempat_lahir' => 'bandung',
            'tanggal_lahir' => '1968-10-10',
            'no_ktp' => '234234254',
            'alamat' => 'Jalan kenari 133',
            'no_hp' => '24345345',
            'bertindak_sebagai' => 'Diri Sendiri',
            'tujuan_buka_rekening' => 'Gajih',
            'zakat' => 'Ya 2.5%'
            ]
        ]);
        DB::table('jenis_simpanan')->insert([
            [
            'jenis_simpanan' => 'Simpanan Wadiah',
            'jenis_tabungan' => 'Siswa'
            ],
            [
            'jenis_simpanan' => 'Simpanan Mudharabah',
            'jenis_tabungan' => 'Tabungan Mudharabah'
            ],
        ]);
        DB::table('nasabah_perorang')->insert([
            [
            'sumber_penghasilan' => 'Gaji',
            'nama_tempat_kerja' => 'pabrik',
            'jabatan' => 'karyawan',
            'bidang_usaha' => 'pabrik',
            'alamat_perusahaan' => 'Rancaekek',
            'pekerjaan' => 'buruh pabrik',
            'pendidikan' => 'SMA/SMK',
            'agama' => 'Islam',
            'penghasilan' => '23423423',
            ]
        ]);
        DB::table('nasabah_badan')->insert([
            [
            'nama_badan_usaha' => 'xenotex',
            'bentuk_usaha' => 'pabrik',
            'jenis_usaha' => 'pabrik',
            'izin_usaha' => '234234234',
            'alamat_pemilik' => 'Cicalengka',
            'npwp_pemilik' => '23234234234',
            'sumber_dana' => 'Usaha',
            'omzet' => '3242342',
            'pengurus1' => 'diky',
            'pengurus2'  => 'diky',
            'pengurus3'  => 'diky',
            'pengurus4'  => 'diky',
            ]
        ]);
        DB::table('files')->insert([
            [
            'name' => '25345345345',
            ],
            [
            'name' => 'zxvcxvft4524',
            ]
        ]);
        DB::table('formulir')->insert([
            [
            'id_cabang' => 6,
            'id_identitas_nasabah' => 1,
            'id_nasabah_perorang' => 1,
            'id_files' => 1
            ],
            [
            'id_cabang' => 6,
            'id_identitas_nasabah' => 2,
            'id_nasabah_badan' => 1,
            'id_files' => 2
            ],
        ]);
    }
}
