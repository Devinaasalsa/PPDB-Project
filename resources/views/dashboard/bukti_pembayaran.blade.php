@extends('layout')
@section('breadcrumb')
    Bukti Pembayaran
@endsection
@section('title')
    Bukti Pembayaran
@endsection
@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-info" role="alert">
            <i class="bi bi-info-circle"></i>
            <span>Bukti pendaftaran {{$detailSiswa->nama}}</span>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8 mx-auto">
        <div class="card mb-5 mt-3 p-3 g-2 d-flex"
            style="background-color: #ffffff; box-shadow: 0px 4px 11px 0px #e1e1e1;">
            <div class="detail mt-2 card-body" style="color:#1c2558;">
                <img src="{{asset('buktipembayaran/'.$pay->img_bukti)}}" width="500px" alt="" class="mx-auto">
                <ul class="list-group">
                    <table cellspacing="0" cellpadding="4" class="text-center mt-4">
                        <tr>
                            <th width="50%">Nama Bank</th>
                            <td>:</td>
                            <td>{{ $pay->nama_bank }}</td>
                        </tr>
                        <tr>
                            <th width="50%">Nama pemilik rekening</th>
                            <td>:</td>
                            <td>{{ $pay->pemilik_rekening }}</td>
                        </tr>
                        <tr>
                            <th width="50%">Nominal</th>
                            <td>:</td>
                            <td>{{ $pay->nominal }}</td>
                        </tr>
                    </table>
                </ul>
            </div>
            <a href="/dashboard/pembayaran" class="mx-auto"><button class="btn bg-primary text-white">Kembali</button></a>
        </div>
    </div>
</div>


@endsection