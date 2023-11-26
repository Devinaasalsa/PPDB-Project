<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function beranda()
    {
        return view('beranda');
    }

    public function error()
    {
        return view('error');
    }

    public function login()
    {
        return view('login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function print()
    {
        $dataSiswa   = Siswa::all();
        return view('print', compact('dataSiswa'));
    }

    public function dashboard()
    {
        $item = Payment::where('user_id', '=', Auth::user()->id)->first();
        $student   = Siswa::where('uniquecode', Auth::user()->register_id)->first();
        return view('dashboard.welcome', compact('student', 'item'));
    }

    public function pembayaran()
    {
        $item = Payment::where('user_id', '=', Auth::user()->id)->first();
        $students = Payment::with('siswa')->paginate(5);
        return view('dashboard.pembayaran', compact('students', 'item'));
    }

    public function validasi($user_id){
        Payment::where('user_id', '=', $user_id)->update([
            'status' => 1,
        ]);
        return redirect()->back();
    }

    public function tolak($user_id){
        Payment::where('user_id', '=', $user_id)->update([
            'status' => 2,
        ]);
        return redirect()->back();
    }

    public function detail_pendaftaran($user_id)
    {
        $detailSiswa = Siswa::findOrFail($user_id);
        return view('dashboard.detail_pendaftaran', compact('detailSiswa'));
    }

    public function bukti_pembayaran($user_id)
    {
        $detailSiswa = Siswa::findOrFail($user_id);
        $pay = Payment::where('user_id', $user_id)->first();
        return view('dashboard.bukti_pembayaran', compact('detailSiswa', 'pay'));
    }

    public function store(Request $request)
    {
        $select = $request->asal_sekolah;
        if ($select == "sekolah_lainnya") {
            $ambil = $request->asal_sekolah_lainnya;
        } else {
            $ambil = $request->asal_sekolah;
        }
        $request->validate([
            'nisn' => 'required|unique:siswas,nisn',
            'jk' => 'required',
            'nama' => 'required',
            'asal_sekolah' => 'required',
            'email' => 'required|unique:siswas,email',
            'no_hp' => 'required|min:11|max:13',
            'no_hp_ayah' => 'required|min:11|max:13',
            'no_hp_ibu' => 'required|min:11|max:13',
        ], [
            'nisn.unique' => 'Nisn sudah terdaftar',
            'email.unique' => 'Email sudah terdaftar',
            'no_hp.min' => 'Jumlah digit No Hp tidak sesuai',
            'no_hp_ayah.min' => 'Jumlah digit No Hp Ayah tidak sesuai',
            'no_hp_ibu.min' => 'Jumlah digit No Hp Ibu tidak sesuai',
            'no_hp.max' => 'Jumlah digit No Hp tidak sesuai',
            'no_hp_ayah.max' => 'Jumlah digit No Hp Ayah tidak sesuai',
            'no_hp_ibu.max' => 'Jumlah digit No Hp Ibu tidak sesuai',
        ]);
        $getId = substr($request->nisn, -4);
        Siswa::create([
            'nisn' => $request->nisn,
            'uniquecode' => $getId,
            'jk' => $request->jk,
            'nama' => $request->nama,
            'asal_sekolah' => $ambil,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'no_hp_ayah' => $request->no_hp_ayah,
            'no_hp_ibu' => $request->no_hp_ibu,
        ]);
        User::create([
            'register_id' => $getId,
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->nisn),
            'role' => 'student',
        ]);
        return redirect('/print');
    }

    public function auth(Request
    $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ], [
            'email.exist' => 'email ini belum tersedia',
            'email.required' => 'email harus diisi',
            'password.required' => 'password harus diisi',
        ]);
        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Gagal login, silahkan cek dan coba lagi!');
        }
    }

    public function postPayment(Request
    $request)
    {
        $select = $request->nama_bank;
        if ($select == "bank_lainnya") {
            $ambil = $request->nama_bank_lainnya;
        } else {
            $ambil = $request->nama_bank;
        }
        // dd($request->all());
        $request->validate([
            'nama_bank' => 'required',
            'pemilik_rekening' => 'required',
            'nominal' => 'required',
            'img_bukti' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $image = $request->file('img_bukti');
        $imgName = time().rand().'.'.$image->extension();
        if(!file_exists(public_path('/buktipembayaran'.$image->getClientOriginalName()))){
            $destinationPath = public_path('/buktipembayaran');
            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
        }else {
            $uploaded = $image->getClientOriginalName();
        }
        Payment::create([
            'user_id' => Auth::user()->id,
            'nama_bank' => $ambil,
            'pemilik_rekening' => $request->pemilik_rekening,
            'nominal' => $request->nominal,
            'img_bukti' => $uploaded,
            'status' => '0',
        ]);
        return redirect('/dashboard/pembayaran')->with('done', 'Todo has complated!');
    }

    public function pembayaran_update(Request $request)
    {
        $select = $request->nama_bank;
        if ($select == "bank_lainnya") {
            $ambil = $request->nama_bank_lainnya;
        } else {
            $ambil = $request->nama_bank;
        }
        $request->validate([
            'nama_bank' => 'required',
            'pemilik_rekening' => 'required',
            'nominal' => 'required',
            'img_bukti' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);
        $image = $request->file('img_bukti');
        $imgName = time().rand().'.'.$image->extension();
        if(!file_exists(public_path('/buktipembayaran'.$image->getClientOriginalName()))){
            $destinationPath = public_path('/buktipembayaran');
            $image->move($destinationPath, $imgName);
            $uploaded = $imgName;
        }else {
            $uploaded = $image->getClientOriginalName();
        }

        Payment::where('user_id', Auth::user()->id)->update([
            'nama_bank' => $ambil,
            'pemilik_rekening' => $request->pemilik_rekening,
            'nominal' => $request->nominal,
            'img_bukti' => $uploaded,
            'status' => '0',
        ]);
        return redirect('/dashboard/pembayaran');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $ppdb)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        // Payment::where('id', '=', $id)->update([
        //     'status' => 1,
        // ]);
        // return redirect('/dashboard/pembayaran')->with('done', 'Todo has complated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $ppdb)
    {
        //
    }
}
