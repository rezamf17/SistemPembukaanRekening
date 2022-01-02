<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class KelolaAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::all();
        return view ('super-admin.Kelola Akun.DataAkun', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->id_cabang = $request->id_cabang;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = $request->password;
        $user->save();

        return redirect('KelolaAkun')->with('success', 'Data Akun Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        return view ('super-admin.Kelola Akun.EditAkun', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($request->password == null) {
            $user->id_cabang = $request->id_cabang;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->save();
        }else{
            $user->id_cabang = $request->id_cabang;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->role = $request->role;
            $user->password = $request->password;
            $user->save();
        }

        return redirect('KelolaAkun')->with('success', 'Data Akun Berhasil Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('KelolaAkun')->with('success', 'Data Terhapus!');    
    }
    public function delete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('KelolaAkun')->with('success', 'Data Terhapus!');
    }
}
