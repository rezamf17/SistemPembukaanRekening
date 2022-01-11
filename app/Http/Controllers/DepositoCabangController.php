<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposito;
use App\Models\User;

class DepositoCabangController extends Controller
{
    public function view($id)
    {
        $user = User::where('id_cabang', $id)->first();
        $deposito = Deposito::where('id_cabang', $id)->get();
        return view ('Admin.Data Nasabah.DepositoCabang', compact('deposito', 'user'));
    }
}
