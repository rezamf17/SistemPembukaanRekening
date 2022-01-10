<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        $rules = [
            'id_cabang' => 'required',
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'required',
            'password' => 'required|confirmed|min:8',
        ];

        $messages = [
            'id_cabang.required' => 'Kantor Cabang tidak boleh kosong',
            'name.required' => 'Nama tidak boleh kosong',
            'name.string' => 'Nama harus berupa huruf',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email harus email yang valid',
            'role.required' => 'Level tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
            'password.confirmed' => 'Konfirmasi Password harus sama',
            'password.min' => 'Password minimal 8 karakter',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
         return redirect('/KelolaAkun')->with('warning', $validator->errors()->first());
        }

        $user = new User;
        $user->id_cabang = $request->id_cabang;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
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
        $rules = [
            'id_cabang' => 'required',
            'name' => 'required|string',
            'email' => 'required|email',
            'role' => 'required',
            'password' => 'confirmed',
        ];

        $messages = [
            'id_cabang.required' => 'Kantor Cabang tidak boleh kosong',
            'name.required' => 'Nama tidak boleh kosong',
            'name.string' => 'Nama harus berupa huruf',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Email harus email yang valid',
            'role.required' => 'Level tidak boleh kosong',
            'password.confirmed' => 'Konfirmasi Password harus sama',
            'password.min' => 'Password minimal 8 karakter',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
         return redirect('/KelolaAkun/'.$user->id.'/edit')->with('warning', $validator->errors()->first());
        }

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
            $user->password = Hash::make($request->password);
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
