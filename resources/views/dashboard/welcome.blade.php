@extends('layout')
@section('judul')
Selamat Datang {{ Auth::user()->nama }}
@endsection
@section('content')

@if (Session::get('notAllowed'))
<div class="alert alert-danger">
    {{ Session::get('notAllowed') }}
</div>
@endif

@if(Auth::user()->role == 'admin')
<div class="card-content">
    <div class="card-body">
        <div class="d-flex" style="justify-content: center">
        <img src="{{ asset('assets/img/silky.png') }}" alt="" width="400px" class="mx-auto">

        </div>
        <h4 class="text-center">Silahkan cek halaman pembayaran!</h4>

    </div>

</div>

@else

<div class="card-header">
    <h4 class="card-title">Berikut informasi mengenai profil anda</h4>
</div>
<div class="card-body">
    <table cellspacing="0" cellpadding="4">
        <tr>
            <th width="50%">Nomor Seleksi</th>
            <td>:</td>
            <td>{{ $student->id }} </td>
        </tr>
        <tr>
            <th width="50%">NISN</th>
            <td>:</td>
            <td>{{ $student->nisn }}</td>
        </tr>
        <tr>
            <th width="50%">Nama</th>
            <td>:</td>
            <td>{{ $student->nama }}</td>
        </tr>
        <tr>
            <th width="50%">Email</th>
            <td>:</td>
            <td>{{ $student->email }}</td>
        </tr>
        <tr>
            <th width="50%">Asal Sekolah</th>
            <td>:</td>
            <td>{{ $student->asal_sekolah }}</td>
        </tr>
        <tr>
            <th width="50%">Nomor Hp</th>
            <td>:</td>
            <td>{{ $student->no_hp }}</td>
        </tr>
        <tr>
            <th width="50%">Nomor Hp Ayah</th>
            <td>:</td>
            <td>{{ $student->no_hp_ayah }}</td>
        </tr>
        <tr>
            <th width="50%">Nomor Hp Ibu</th>
            <td>:</td>
            <td>{{ $student->no_hp_ibu }}</td>
        </tr>
    </table>
</div>


@endif

@endsection