<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Formulir;
use App\Models\Deposito;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all()->count();
        $formulir = Formulir::all()->count();
        $deposito = Deposito::all()->count();
        return view('home', compact('user', 'formulir', 'deposito'));
    }

    public function admin($id)
    {
        $formulir = Formulir::where('id_cabang', $id)->count();
        $deposito = Deposito::where('id_cabang', $id)->count();
        return view ('admin.admin', compact('formulir', 'deposito'));
    }
}
