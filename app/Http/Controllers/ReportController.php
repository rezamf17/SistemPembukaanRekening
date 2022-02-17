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
        $pdf = PDF::loadview('super-admin.Report.LaporanDataNasabah', compact('formulir'))->setPaper('a4');
        // return $pdf->download('ReportTabungan'.$formulir->identitas_nasabah->nama.'.pdf');
        return $pdf->stream();
    }

    public function depositoNasabahReport($id)
    {
        $deposito = Deposito::where('id', $id)->first();
        // return view('super-admin.Report.LaporanDataNasabahDeposito', compact('deposito'));
        // set_time_limit(300);
        $pdf = PDF::loadview('super-admin.Report.LaporanDataNasabahDeposito', compact('deposito'))->setPaper('a4');
        // return $pdf->download('ReportDeposito.pdf');
        return $pdf->stream();
    }

    public function wadiahNasabahReport($id)
    {
        $formulir = Formulir::where('id', $id)->first();
        // return view ('super-admin.Report.LaporanWadiah', compact('formulir'));
        $pdf = PDF::loadview('super-admin.Report.LaporanWadiah', compact('formulir'))->setPaper('a4');
        // return $pdf->download('ReportWadiah-'.$formulir->identitas_nasabah->nama.'.pdf');
        return $pdf->stream();
    }

    public function mudharabahNasabahReport($id)
    {
         $formulir = Formulir::where('id', $id)->first();
        // return view ('super-admin.Report.LaporanMudharabah', compact('formulir'));
        $pdf = PDF::loadview('super-admin.Report.LaporanMudharabah', compact('formulir'))->setPaper('A4');
        // return $pdf->download('ReportMudharabah-'.$formulir->identitas_nasabah->nama.'.pdf');
        return $pdf->stream();
    }

     public function tabunganNasabahReportAdmin($id)
    {
        $formulir = Formulir::where('id', $id)->first();
        // return view('super-admin.Report.LaporanDataNasabah', compact('formulir'));
        // set_time_limit(300);
        $pdf = PDF::loadview('super-admin.Report.LaporanDataNasabah', compact('formulir'))->setPaper('a4');
        // return $pdf->download('ReportTabungan'.$formulir->identitas_nasabah->nama.'.pdf');
        return $pdf->stream();
    }

    public function depositoNasabahReportAdmin($id)
    {
        $deposito = Deposito::where('id', $id)->first();
        // return view('super-admin.Report.LaporanDataNasabahDeposito', compact('deposito'));
        // set_time_limit(300);
        $pdf = PDF::loadview('super-admin.Report.LaporanDataNasabahDeposito', compact('deposito'))->setPaper('a4');
        // return $pdf->download('ReportDeposito.pdf');
        return $pdf->stream();
    }

    public function wadiahNasabahReportAdmin($id)
    {
        $formulir = Formulir::where('id', $id)->first();
        // return view ('super-admin.Report.LaporanWadiah', compact('formulir'));
        $pdf = PDF::loadview('super-admin.Report.LaporanWadiah', compact('formulir'))->setPaper('a4');
        // return $pdf->download('ReportWadiah-'.$formulir->identitas_nasabah->nama.'.pdf');
        return $pdf->stream();
    }

    public function mudharabahNasabahReportAdmin($id)
    {
         $formulir = Formulir::where('id', $id)->first();
        // return view ('super-admin.Report.LaporanMudharabah', compact('formulir'));
        $pdf = PDF::loadview('super-admin.Report.LaporanMudharabah', compact('formulir'))->setPaper('A4');
        // return $pdf->download('ReportMudharabah-'.$formulir->identitas_nasabah->nama.'.pdf');
        return $pdf->stream();
    }
}
