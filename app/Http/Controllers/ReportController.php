<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;
use App\Models\Deposito;
use PDF;

class ReportController extends Controller
{
    public function index()
    {
        return view ('super-admin.Report.report');
    }

    public function tabunganNasabahReport($id)
    {
        $formulir = Formulir::where('id', $id)->first();
        // return view('super-admin.Report.LaporanDataNasabah', compact('formulir'));
        // set_time_limit(300);
        $pdf = PDF::loadview('super-admin.Report.LaporanDataNasabah', compact('formulir'))->setPaper('legal');
        return $pdf->download('ReportTabungan'.$formulir->identitas_nasabah->nama.'.pdf');
        // return $pdf->stream();
    }

    public function depositoNasabahReport($id)
    {
        $deposito = Deposito::where('id', $id)->first();
        // return view('super-admin.Report.LaporanDataNasabahDeposito', compact('deposito'));
        // set_time_limit(300);
        $pdf = PDF::loadview('super-admin.Report.LaporanDataNasabahDeposito', compact('deposito'))->setPaper('legal');
        return $pdf->download('ReportDeposito.pdf');
        // return $pdf->stream();
    }
}
