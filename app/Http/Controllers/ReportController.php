<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Formulir;
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
        $pdf = PDF::loadview('super-admin.Report.LaporanDataNasabah', compact('formulir'))->setPaper('f4');
        return $pdf->download('Report.pdf');
        // return $pdf->stream();
    }
}
