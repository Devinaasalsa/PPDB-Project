<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB Wikrama</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- bootstrap 5 css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"
    integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous" />

<!-- css untuk select2 -->
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!-- jika menggunakan bootstrap4 gunakan css ini  -->
<link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
<!-- cdn bootstrap4 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>

<body class="bg-daftar">

    <div class="d-flex justify-content-center">
        <div class="card card-form  mx-0 my-5" style="border-radius: 15px !important">
            <div class="card-body px-5">
                <h3 class="card-heading text-center mt-4">Form Pendaftaran PPDB</h3>
                <p class="card-subheading text-center mb-3 font-weight-bold pb-3 text-dark">SMK Wikrama Bogor TP.
                    2023-2024</p>
                <form method="POST" action="{{route ('store') }}">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="nisn" class="mb-2">NISN</label>
                            <input type="text" name="nisn" id="nisn" class="form-control  " placeholder="Masukkan NISN"
                                value="" required autocomplete="nisn">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jk" class="ml-2 mb-2">Jenis Kelamin</label>
                            <select name="jk" class="form-control w-100" id="jk" value="">
                                <option hidden>--Jenis Kelamin--</option>
                                <option value="Perempuan">Perempuan</option>
                                <option value="Laki-Laki">Laki-Laki</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="nama" class="mb-2">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control"
                                placeholder="Masukkan Nama Lengkap" value="" required autocomplete="nama">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="sekolah" class="mb-2">Asal Sekolah</label> <br>
                            <select id="sekolah" name="asal_sekolah" class="col-12 form-control select2  w-100 ml-0"
                                style="" onchange='checkvalue2(this.value)'>
                                <option hidden disabled selected>--Pilih Asal Sekolah--</option>
                                <option value="MTs AL ASMAAUL HUSNA">MTs AL ASMAAUL HUSNA</option>
                                <option value="MTs Ar-Rasyidy">MTs Ar-Rasyidy</option>
                                <option value="MTs AR-ROZZAAQ">MTs AR-ROZZAAQ</option>
                                <option value="MTs Assalaam">MTs Assalaam</option>
                                <option value="MTs Balighul Hikmah">MTs Balighul Hikmah</option>
                                <option value="MTs Darul Irsyad">MTs Darul Irsyad</option>
                                <option value="MTs EL ALAMIA">MTs EL ALAMIA</option>
                                <option value="MTs HIBRUL ULAMA">MTs HIBRUL ULAMA</option>
                                <option value="MTs MANBA&#039;UL HUDA">MTs MANBA&#039;UL HUDA</option>
                                <option value="MTs NUR AKMALIYAH">MTs NUR AKMALIYAH</option>
                                <option value="MTs NURANI">MTs NURANI</option>
                                <option value="MTs NURUL FAJAR">MTs NURUL FAJAR</option>
                                <option value="MTs RIBATHUL MUJTABA">MTs RIBATHUL MUJTABA</option>
                                <option value="MTs RIYADHUL MUSTHOFA">MTs RIYADHUL MUSTHOFA</option>
                                <option value="MTs TAHFIDZ SMART MUROTTAL">MTs TAHFIDZ SMART MUROTTAL</option>
                                <option value="MTs TANBIHUL GHOFILIN">MTs TANBIHUL GHOFILIN</option>
                                <option value="MTs ULIN NUHA">MTs ULIN NUHA</option>
                                <option value="MTs UTSMANIL HAKIM">MTs UTSMANIL HAKIM</option>
                                <option value="MTs Yanfa&#039;&#039;ul Ilmi">MTs Yanfa&#039;&#039;ul Ilmi</option>
                                <option value="MTSN 1 BOGOR">MTSN 1 BOGOR</option>
                                <option value="MTSN 1 CIANJUR">MTSN 1 CIANJUR</option>
                                <option value="MTSN 2 BOGOR">MTSN 2 BOGOR</option>
                                <option value="MTSN 2 CIANJUR">MTSN 2 CIANJUR</option>
                                <option value="MTSN 3 BOGOR">MTSN 3 BOGOR</option>
                                <option value="MTSN 3 CIANJUR">MTSN 3 CIANJUR</option>
                                <option value="MTSN 4 BOGOR">MTSN 4 BOGOR</option>
                                <option value="MTSN 4 CIANJUR">MTSN 4 CIANJUR</option>
                                <option value="MTSN 5 CIANJUR">MTSN 5 CIANJUR</option>
                                <option value="MTSN 6 CIANJUR">MTSN 6 CIANJUR</option>
                                <option value="MTSN 7 CIANJUR">MTSN 7 CIANJUR</option>
                                <option value="MTSN KOTA BOGOR">MTSN KOTA BOGOR</option>
                                <option value="MTSN KOTA DEPOK">MTSN KOTA DEPOK</option>
                                <option value="MTSN KOTA SUKABUMI">MTSN KOTA SUKABUMI</option>
                                <option value="MTSS 2 KOTA SUKABUMI">MTSS 2 KOTA SUKABUMI</option>
                                <option value="MTSS ABDOELLAH BASTARI">MTSS ABDOELLAH BASTARI</option>
                                <option value="MTSS ADAWIYATUL ASLAMIYAH">MTSS ADAWIYATUL ASLAMIYAH</option>
                                <option value="MTSS AINUR RAHMAH">MTSS AINUR RAHMAH</option>
                                <option value="MTSS AKHLAQIYYAH">MTSS AKHLAQIYYAH</option>
                                <option value="MTSS AKMALIYAH">MTSS AKMALIYAH</option>
                                <option value="MTSS AL AMANAH">MTSS AL AMANAH</option>
                                <option value="MTSS AL AMANAH">MTSS AL AMANAH</option>
                                <option value="MTSS AL AMIN">MTSS AL AMIN</option>
                                <option value="MTSS AL ANHAR">MTSS AL ANHAR</option>
                                <option value="MTSS AL ARAFAH">MTSS AL ARAFAH</option>
                                <option value="MTSS AL ARQOM">MTSS AL ARQOM</option>
                                <option value="MTSS AL ASIYAH">MTSS AL ASIYAH</option>
                                <option value="MTSS AL ATIQIYAH">MTSS AL ATIQIYAH</option>
                                <option value="MTSS AL AWWABIN">MTSS AL AWWABIN</option>
                                <option value="MTSS AL AZIZIYYAH">MTSS AL AZIZIYYAH</option>
                                <option value="MTSS AL BAKRIYAH">MTSS AL BAKRIYAH</option>
                                <option value="MTSS AL BAQIYATUSSHOLIHAT">MTSS AL BAQIYATUSSHOLIHAT</option>
                                <option value="MTSS AL BASHRIYYAH">MTSS AL BASHRIYYAH</option>
                                <option value="MTSS AL FALAH">MTSS AL FALAH</option>
                                <option value="MTSS AL FALAH">MTSS AL FALAH</option>
                                <option value="MTSS AL FALAH">MTSS AL FALAH</option>
                                <option value="MTSS AL FALAH">MTSS AL FALAH</option>
                                <option value="MTSS AL FALAHIYAH">MTSS AL FALAHIYAH</option>
                                <option value="MTSS AL FARABI">MTSS AL FARABI</option>
                                <option value="MTSS AL FATA">MTSS AL FATA</option>
                                <option value="MTSS AL FATAH">MTSS AL FATAH</option>
                                <option value="MTSS AL FATHONIYAH">MTSS AL FATHONIYAH</option>
                                <option value="MTSS AL FATMAHIYAH">MTSS AL FATMAHIYAH</option>
                                <option value="MTSS AL FIKRI">MTSS AL FIKRI</option>
                                <option value="MTSS AL FITRIYAH">MTSS AL FITRIYAH</option>
                                <option value="MTSS AL FURQON">MTSS AL FURQON</option>
                                <option value="MTSS AL FURQON">MTSS AL FURQON</option>
                                <option value="MTSS AL FURQONIYAH">MTSS AL FURQONIYAH</option>
                                <option value="MTSS AL FURQONIYAH">MTSS AL FURQONIYAH</option>
                                <option value="MTSS AL GHIFFARI">MTSS AL GHIFFARI</option>
                                <option value="MTSS AL GHIFFARI">MTSS AL GHIFFARI</option>
                                <option value="MTSS AL HAMDANIYAH">MTSS AL HAMDANIYAH</option>
                                <option value="MTSS AL HAMIDIYAH">MTSS AL HAMIDIYAH</option>
                                <option value="MTSS AL HASANAH">MTSS AL HASANAH</option>
                                <option value="MTSS AL HASANI">MTSS AL HASANI</option>
                                <option value="MTSS AL HIDAYAH">MTSS AL HIDAYAH</option>
                                <option value="MTSS AL HIDAYAH">MTSS AL HIDAYAH</option>
                                <option value="MTSS AL HIDAYAH">MTSS AL HIDAYAH</option>
                                <option value="MTSS AL HIDAYAH">MTSS AL HIDAYAH</option>
                                <option value="MTSS AL HIDAYAH">MTSS AL HIDAYAH</option>
                                <option value="MTSS AL HIDAYAH">MTSS AL HIDAYAH</option>
                                <option value="MTSS AL HIDAYAH">MTSS AL HIDAYAH</option>
                                <option value="MTSS AL HIDAYAH">MTSS AL HIDAYAH</option>
                                <option value="MTSS AL HIDAYAH 2">MTSS AL HIDAYAH 2</option>
                                <option value="MTSS AL HIDAYAH CA">MTSS AL HIDAYAH CA</option>
                                <option value="MTSS AL HIDAYAH CINANGKA">MTSS AL HIDAYAH CINANGKA</option>
                                <option value="MTSS AL HIDAYAH RAWA DENOK">MTSS AL HIDAYAH RAWA DENOK</option>
                                <option value="MTSS AL HIDAYAH SUKATANI">MTSS AL HIDAYAH SUKATANI</option>
                                <option value="MTSS AL HIKMAH">MTSS AL HIKMAH</option>
                                <option value="MTSS AL HUDA">MTSS AL HUDA</option>
                                <option value="MTSS AL HUSAINIYAH">MTSS AL HUSAINIYAH</option>
                                <option value="MTSS AL HUSNA">MTSS AL HUSNA</option>
                                <option value="MTSS AL HUSNA">MTSS AL HUSNA</option>
                                <option value="MTSS AL IDRUS">MTSS AL IDRUS</option>
                                <option value="MTSS AL IHSAN">MTSS AL IHSAN</option>
                                <option value="MTSS AL IHSANUL HUSNA">MTSS AL IHSANUL HUSNA</option>
                                <option value="MTSS AL IHYA">MTSS AL IHYA</option>
                                <option value="MTSS AL IKHLAS">MTSS AL IKHLAS</option>
                                <option value="MTSS AL IKHLAS">MTSS AL IKHLAS</option>
                                <option value="MTSS AL IKHWAN">MTSS AL IKHWAN</option>
                                <option value="MTSS AL IKHWAN CIHEA">MTSS AL IKHWAN CIHEA</option>
                                <option value="MTSS AL ILTIZAM">MTSS AL ILTIZAM</option>
                                <option value="MTSS AL INAAYAH">MTSS AL INAAYAH</option>
                                <option value="MTSS AL INAYAH">MTSS AL INAYAH</option>
                                <option value="MTSS AL IRSYADIYAH">MTSS AL IRSYADIYAH</option>
                                <option value="MTSS AL ISLAMIYAH">MTSS AL ISLAMIYAH</option>
                                <option value="MTSS AL ISLAMIYAH AMZ">MTSS AL ISLAMIYAH AMZ</option>
                                <option value="MTSS AL ISTIQOMAH">MTSS AL ISTIQOMAH</option>
                                <option value="MTSS AL ITQON">MTSS AL ITQON</option>
                                <option value="MTSS AL ITTIHAD">MTSS AL ITTIHAD</option>
                                <option value="MTSS AL ITTIHAD">MTSS AL ITTIHAD</option>
                                <option value="MTSS AL ITTIHAD MATHLAUL ANWAR">MTSS AL ITTIHAD MATHLAUL ANWAR</option>
                                <option value="MTSS AL ITTIHADIYAH">MTSS AL ITTIHADIYAH</option>
                                <option value="MTSS AL JAMHURIYAH">MTSS AL JAMHURIYAH</option>
                                <option value="MTSS AL JAYANI">MTSS AL JAYANI</option>
                                <option value="MTSS AL JIHAD">MTSS AL JIHAD</option>
                                <option value="MTSS AL KARIMIYAH">MTSS AL KARIMIYAH</option>
                                <option value="MTSS AL KAUTSAR">MTSS AL KAUTSAR</option>
                                <option value="MTSS AL KHAIRIYAH">MTSS AL KHAIRIYAH</option>
                                <option value="MTSS AL KHOERIYAH">MTSS AL KHOERIYAH</option>
                                <option value="MTSS AL KHOERIYAH">MTSS AL KHOERIYAH</option>
                                <option value="MTSS AL KINANAH">MTSS AL KINANAH</option>
                                <option value="MTSS AL MA HADUL ISLAM">MTSS AL MA HADUL ISLAM</option>
                                <option value="MTSS AL MADANI">MTSS AL MADANI</option>
                                <option value="MTSS AL MAKMUR">MTSS AL MAKMUR</option>
                                <option value="MTSS AL MANAR">MTSS AL MANAR</option>
                                <option value="MTSS AL MANSHURIYAH">MTSS AL MANSHURIYAH</option>
                                <option value="MTSS AL MANSURI">MTSS AL MANSURI</option>
                                <option value="MTSS AL MASYKUR">MTSS AL MASYKUR</option>
                                <option value="MTSS AL MASYKUR 02">MTSS AL MASYKUR 02</option>
                                <option value="MTSS AL MIZAN">MTSS AL MIZAN</option>
                                <option value="MTSS AL MU AWWANAH">MTSS AL MU AWWANAH</option>
                                <option value="MTSS AL MUASYAROH">MTSS AL MUASYAROH</option>
                                <option value="MTSS AL MUAWANAH">MTSS AL MUAWANAH</option>
                                <option value="MTSS AL MUAWANAH">MTSS AL MUAWANAH</option>
                                <option value="MTSS AL MUAWWANAH">MTSS AL MUAWWANAH</option>
                                <option value="MTSS AL MUCHTARI ISLAMIC BOARDING SCHOOL">MTSS AL MUCHTARI ISLAMIC
                                    BOARDING
                                    SCHOOL</option>
                                <option value="MTSS AL MUHAJIRIN">MTSS AL MUHAJIRIN</option>
                                <option value="MTSS AL MUHAJIRIN">MTSS AL MUHAJIRIN</option>
                                <option value="MTSS AL MUJAHIDIN">MTSS AL MUJAHIDIN</option>
                                <option value="MTSS AL MUKHLISHIN">MTSS AL MUKHLISHIN</option>
                                <option value="MTSS AL MUKHLISIN">MTSS AL MUKHLISIN</option>
                                <option value="MTSS AL MUKHSIN">MTSS AL MUKHSIN</option>
                                <option value="MTSS AL MUKHTAROMIYAH">MTSS AL MUKHTAROMIYAH</option>
                                <option value="MTSS AL MUROZZA">MTSS AL MUROZZA</option>
                                <option value="MTSS AL MUTTAQIN">MTSS AL MUTTAQIN</option>
                                <option value="MTSS AL-ABROR">MTSS AL-ABROR</option>
                                <option value="MTSS AL-ACHDAN">MTSS AL-ACHDAN</option>
                                <option value="MTSS AL-AFKAR">MTSS AL-AFKAR</option>
                                <option value="MTSS AL-AHSAN">MTSS AL-AHSAN</option>
                                <option value="MTSS AL-AKHYAR">MTSS AL-AKHYAR</option>
                                <option value="MTSS AL-AMANAH">MTSS AL-AMANAH</option>
                                <option value="MTSS AL-ATHFAL">MTSS AL-ATHFAL</option>
                                <option value="MTSS AL-BADAR">MTSS AL-BADAR</option>
                                <option value="MTSS AL-BAQIATUSSHOLIHAT">MTSS AL-BAQIATUSSHOLIHAT</option>
                                <option value="MTSS AL-BARKAH">MTSS AL-BARKAH</option>
                                <option value="MTSS AL-BARKAH">MTSS AL-BARKAH</option>
                                <option value="MTSS AL-BARKAH">MTSS AL-BARKAH</option>
                                <option value="MTSS AL-BAROKAH">MTSS AL-BAROKAH</option>
                                <option value="MTSS AL-BASIT">MTSS AL-BASIT</option>
                                <option value="MTSS AL-BASYARIAH">MTSS AL-BASYARIAH</option>
                                <option value="MTSS AL-BAYAN">MTSS AL-BAYAN</option>
                                <option value="MTSS AL-FALAH">MTSS AL-FALAH</option>
                                <option value="MTSS AL-FALAH">MTSS AL-FALAH</option>
                                <option value="MTSS AL-FALAH">MTSS AL-FALAH</option>
                                <option value="MTSS AL-FALAK">MTSS AL-FALAK</option>
                                <option value="MTSS AL-FARISI">MTSS AL-FARISI</option>
                                <option value="MTSS AL-FATAH">MTSS AL-FATAH</option>
                                <option value="MTSS AL-FATH">MTSS AL-FATH</option>
                                <option value="MTSS AL-FITRIYAH">MTSS AL-FITRIYAH</option>
                                <option value="MTSS AL-GHOZALY">MTSS AL-GHOZALY</option>
                                <option value="MTSS AL-HAMIDI">MTSS AL-HAMIDI</option>
                                <option value="MTSS AL-HASANAH">MTSS AL-HASANAH</option>
                                <option value="MTSS AL-HIDAYAH">MTSS AL-HIDAYAH</option>
                                <option value="MTSS AL-HIDAYAH">MTSS AL-HIDAYAH</option>
                                <option value="MTSS AL-HIDAYAH">MTSS AL-HIDAYAH</option>
                                <option value="MTSS AL-HIDAYAH">MTSS AL-HIDAYAH</option>
                                <option value="MTSS AL-HIDAYAH ARCO">MTSS AL-HIDAYAH ARCO</option>
                                <option value="MTSS AL-HIKAM GOBANG">MTSS AL-HIKAM GOBANG</option>
                                <option value="MTSS AL-HIKMAH">MTSS AL-HIKMAH</option>
                                <option value="MTSS AL-HIKMAH">MTSS AL-HIKMAH</option>
                                <option value="MTSS AL-HOLILIYAH">MTSS AL-HOLILIYAH</option>
                                <option value="MTSS AL-HUDA">MTSS AL-HUDA</option>
                                <option value="MTSS AL-HUDA">MTSS AL-HUDA</option>
                                <option value="MTSS AL-HUDA CIDAUN">MTSS AL-HUDA CIDAUN</option>
                                <option value="MTSS AL-HUDA RAWAHANJA">MTSS AL-HUDA RAWAHANJA</option>
                                <option value="MTSS AL-IHSAN SARAMPAD">MTSS AL-IHSAN SARAMPAD</option>
                                <option value="MTSS AL-IKHLAS">MTSS AL-IKHLAS</option>
                                <option value="MTSS AL-IKHLAS">MTSS AL-IKHLAS</option>
                                <option value="MTSS AL-IKHLAS">MTSS AL-IKHLAS</option>
                                <option value="MTSS AL-IKHWAN">MTSS AL-IKHWAN</option>
                                <option value="MTSS AL-INAYAH">MTSS AL-INAYAH</option>
                                <option value="MTSS ARRAHMAH UK">MTSS ARRAHMAH UK</option>
                                <option value="MTSS AMIRUDDIN WAL MUNAWAROH">MTSS AMIRUDDIN WAL MUNAWAROH</option>
                                <option value="MTSS RAUDLATUL FALAH">MTSS RAUDLATUL FALAH</option>
                                <option value="MTSS NURUL FALAH DS">MTSS NURUL FALAH DS</option>
                                <option value="MTSS PERSATUAN ISLAM">MTSS PERSATUAN ISLAM</option>
                                <option value="MTSS ZIYADATUL HUDA">MTSS ZIYADATUL HUDA</option>
                                <option value="MTSS AL HIKMAH">MTSS AL HIKMAH</option>
                                <option value="MTSS AL AKHYARIYAH">MTSS AL AKHYARIYAH</option>
                                <option value="MTSS AL KENANIYAH">MTSS AL KENANIYAH</option>
                                <option value="MTSS AL FALAH U-M">MTSS AL FALAH U-M</option>
                                <option value="MTSS AL ASYIROH">MTSS AL ASYIROH</option>
                                <option value="MTSS AL LATHIFIYAH">MTSS AL LATHIFIYAH</option>
                                <option value="MTSS AL HILAL">MTSS AL HILAL</option>
                                <option value="MTSS AL HIDAYAH">MTSS AL HIDAYAH</option>
                                <option value="MTSS AL FALAH KLENDER">MTSS AL FALAH KLENDER</option>
                                <option value="MTSS AL JAUHARIYAH">MTSS AL JAUHARIYAH</option>
                                <option value="MTSS AL HUMAID">MTSS AL HUMAID</option>
                                <option value="MTSS AL WASHLIYAH">MTSS AL WASHLIYAH</option>
                                <option value="MTSS AL WATHONIYAH 2">MTSS AL WATHONIYAH 2</option>
                                <option value="MTSS AL WATHONIYAH 1">MTSS AL WATHONIYAH 1</option>
                                <option value="MTSS AL WATHONIYAH IA">MTSS AL WATHONIYAH IA</option>
                                <option value="MTSS AL WATHONIYAH AL HAMIDIYAH">MTSS AL WATHONIYAH AL HAMIDIYAH</option>
                                <option value="MTSS HASANATUDDARAIN">MTSS HASANATUDDARAIN</option>
                                <option value="MTSS AZ ZIYADAH">MTSS AZ ZIYADAH</option>
                                <option value="MTSS NURUL HIJRAH">MTSS NURUL HIJRAH</option>
                                <option value="MTSS NURUL AMAL">MTSS NURUL AMAL</option>
                                <option value="MTSS AL IKHLAS">MTSS AL IKHLAS</option>
                                <option value="MTSS TAPAK SUNAN">MTSS TAPAK SUNAN</option>
                                <option value="MTSS AL BAHRI">MTSS AL BAHRI</option>
                                <option value="MTSS AN NASYATUL ILMIYAH">MTSS AN NASYATUL ILMIYAH</option>
                                <option value="MTSS INWANUL HUDA">MTSS INWANUL HUDA</option>
                                <option value="MTSS MU&#039;AWANATUL IKHWAN">MTSS MU&#039;AWANATUL IKHWAN</option>
                                <option value="MTSS JAUHAROTUN NAQIYAH">MTSS JAUHAROTUN NAQIYAH</option>
                                <option value="MTSS ZIYADATUL IHSAN">MTSS ZIYADATUL IHSAN</option>
                                <option value="MTSS RUHUL ULUM">MTSS RUHUL ULUM</option>
                                <option value="MTSS PKP DKI JAKARTA">MTSS PKP DKI JAKARTA</option>
                                <option value="MTSS AR-RAHMAH">MTSS AR-RAHMAH</option>
                                <option value="MTSS ASSYAFIIYAH 04">MTSS ASSYAFIIYAH 04</option>
                                <option value="MTSS AL HAMID">MTSS AL HAMID</option>
                                <option value="MTSS YUSUFIYAH">MTSS YUSUFIYAH</option>
                                <option value="MTSS ULUL ILMI">MTSS ULUL ILMI</option>
                                <option value="MTSS AL FALAH AL ANSORIYAH">MTSS AL FALAH AL ANSORIYAH</option>
                                <option value="MTSS AL IKHSAN">MTSS AL IKHSAN</option>
                                <option value="MTSS AL FATHIYAH">MTSS AL FATHIYAH</option>
                                <option value="MTSS AS SAADAH">MTSS AS SAADAH</option>
                                <option value="MTSS AL IHSANIYAH">MTSS AL IHSANIYAH</option>
                                <option value="MTSS AL WAHYU">MTSS AL WAHYU</option>
                                <option value="MTSS AL KAHFI">MTSS AL KAHFI</option>
                                <option value="MTS ASH SHIDDIQ">MTS ASH SHIDDIQ</option>
                                <option value="MTS PESANTREN MODERN PKP JIS">MTS PESANTREN MODERN PKP JIS</option>
                                <option value="MTS NURUL JALAL">MTS NURUL JALAL</option>
                                <option value="MTSN 5 JAKARTA">MTSN 5 JAKARTA</option>
                                <option value="MTSN 15 JAKARTA">MTSN 15 JAKARTA</option>
                                <option value="MTSN 38 JAKARTA">MTSN 38 JAKARTA</option>
                                <option value="MTSN 39 JAKARTA">MTSN 39 JAKARTA</option>
                                <option value="MTSS AL WATHONIYAH 43">MTSS AL WATHONIYAH 43</option>
                                <option value="MTSS EL-NUR EL-KASYSYAF">MTSS EL-NUR EL-KASYSYAF</option>
                                <option value="MTSS AL-AQSHA">MTSS AL-AQSHA</option>
                                <option value="MTSS KHAIRUL UMMAH">MTSS KHAIRUL UMMAH</option>
                                <option value="MTSS NURUL BAHRI">MTSS NURUL BAHRI</option>
                                <option value="MTSS MANDIRI">MTSS MANDIRI</option>
                                <option value="MTSS RAUDHATUL JANNATINNA&#039;IM">MTSS RAUDHATUL JANNATINNA&#039;IM
                                </option>
                                <option value="MTSS NUR ATTAQWA">MTSS NUR ATTAQWA</option>
                                <option value="MTSS PERSIS 12">MTSS PERSIS 12</option>
                                <option value="MTSS AL HIDAYAH RBU">MTSS AL HIDAYAH RBU</option>
                                <option value="MTSS AL MUHAJIRIN TG">MTSS AL MUHAJIRIN TG</option>
                                <option value="MTSS AL-JIHAD">MTSS AL-JIHAD</option>
                                <option value="MTSS YAPIS">MTSS YAPIS</option>
                                <option value="MTSS AL FALAH">MTSS AL FALAH</option>
                                <option value="MTSS DARUL BINA">MTSS DARUL BINA</option>
                                <option value="MTSS IMADUN NAJAH">MTSS IMADUN NAJAH</option>
                                <option value="MTSS AL KHAIRIYAH KP BAHARI">MTSS AL KHAIRIYAH KP BAHARI</option>
                                <option value="MTSS AL WATHONIYAH 14">MTSS AL WATHONIYAH 14</option>
                                <option value="MTSS AL MIFFTAHIYYAH">MTSS AL MIFFTAHIYYAH</option>
                                <option value="MTSS AL MUBASYIRIN">MTSS AL MUBASYIRIN</option>
                                <option value="MTSS RAUDHATUL MUTTAQIN">MTSS RAUDHATUL MUTTAQIN</option>
                                <option value="MTSS AL HIKMAH">MTSS AL HIKMAH</option>
                                <option value="MTSS AR RASYIDIYYAH">MTSS AR RASYIDIYYAH</option>
                                <option value="MTSS ASH SHIDIQIYAH">MTSS ASH SHIDIQIYAH</option>
                                <option value="MTSS AL HIDAYAH UKA">MTSS AL HIDAYAH UKA</option>
                                <option value="MTSS AL MUHAJIRIN KJ">MTSS AL MUHAJIRIN KJ</option>
                                <option value="MTSS AL KHAIRIYAH KOJA">MTSS AL KHAIRIYAH KOJA</option>
                                <option value="SMP 10 November">SMP 10 November</option>
                                <option value="SMP 28 OKTOBER 1928">SMP 28 OKTOBER 1928</option>
                                <option value="SMP ACG SCHOOL JAKARTA">SMP ACG SCHOOL JAKARTA</option>
                                <option value="SMP ACS JAKARTA">SMP ACS JAKARTA</option>
                                <option value="SMP ADIK IRMA">SMP ADIK IRMA</option>
                                <option value="SMP Advent VI">SMP Advent VI</option>
                                <option value="SMP ADVENT VII">SMP ADVENT VII</option>
                                <option value="SMP Al Azhar 4">SMP Al Azhar 4</option>
                                <option value="SMP Al Azhar II">SMP Al Azhar II</option>
                                <option value="SMP Al Fajar">SMP Al Fajar</option>
                                <option value="SMP AL FALAH">SMP AL FALAH</option>
                                <option value="SMP Al Fallah">SMP Al Fallah</option>
                                <option value="SMP AL HIKMAH">SMP AL HIKMAH</option>
                                <option value="SMP AL IHSAN">SMP AL IHSAN</option>
                                <option value="SMP Al Karomiyah">SMP Al Karomiyah</option>
                                <option value="SMP AL KHAIRAAT">SMP AL KHAIRAAT</option>
                                <option value="SMP AL QALAM">SMP AL QALAM</option>
                                <option value="SMP Al Washliyah">SMP Al Washliyah</option>
                                <option value="SMP AL WASHLIYAH 1">SMP AL WASHLIYAH 1</option>
                                <option value="SMP Al Wathoniyah 9">SMP Al Wathoniyah 9</option>
                                <option value="SMP AL WILDAN 4 ISLAMIC SCHOOL JAKARTA">SMP AL WILDAN 4 ISLAMIC SCHOOL
                                    JAKARTA
                                </option>
                                <option value="SMP AL-AKHYAR">SMP AL-AKHYAR</option>
                                <option value="SMP AL-FALAH KALIBATA CITY">SMP AL-FALAH KALIBATA CITY</option>
                                <option value="SMP AL-HADIRIYAH SCHOOL">SMP AL-HADIRIYAH SCHOOL</option>
                                <option value="SMP AL-HIKMAH">SMP AL-HIKMAH</option>
                                <option value="SMP AL-Jannah">SMP AL-Jannah</option>
                                <option value="SMP ALAM">SMP ALAM</option>
                                <option value="SMP ALFATHIYAH JAKARTA">SMP ALFATHIYAH JAKARTA</option>
                                <option value="SMP ALGHURABAA">SMP ALGHURABAA</option>
                                <option value="SMP Amaliyah">SMP Amaliyah</option>
                                <option value="SMP ANGKASA">SMP ANGKASA</option>
                                <option value="SMP ANNURIYYAH">SMP ANNURIYYAH</option>
                                <option value="SMP AS SAADAH">SMP AS SAADAH</option>
                                <option value="SMP Asisi">SMP Asisi</option>
                                <option value="SMP Assalafy">SMP Assalafy</option>
                                <option value="SMP ASSYAIRIYAH ATTAHIRIYAH">SMP ASSYAIRIYAH ATTAHIRIYAH</option>
                                <option value="SMP AUSTRALIAN INDEPENDENT SCHOOL INDONESIA JAKARTA">SMP AUSTRALIAN
                                    INDEPENDENT
                                    SCHOOL INDONESIA JAKARTA</option>
                                <option value="SMP Avicenna">SMP Avicenna</option>
                                <option value="SMP AZHARI ISLAMIC SCHOOL">SMP AZHARI ISLAMIC SCHOOL</option>
                                <option value="SMP AZHARI ISLAMIC SCHOOL RASUNA">SMP AZHARI ISLAMIC SCHOOL RASUNA
                                </option>
                                <option value="SMP BAHAGIA">SMP BAHAGIA</option>
                                <option value="SMP Bait Al Rahman">SMP Bait Al Rahman</option>
                                <option value="SMP BAKTI 17">SMP BAKTI 17</option>
                                <option value="SMP Bakti Idhata">SMP Bakti Idhata</option>
                                <option value="SMP Bakti Mulya 400">SMP Bakti Mulya 400</option>
                                <option value="SMP Bhakti">SMP Bhakti</option>
                                <option value="SMP BHAKTI MULIA">SMP BHAKTI MULIA</option>
                                <option value="SMP Bhakti Nusantara">SMP Bhakti Nusantara</option>
                                <option value="SMP Bina Dharma">SMP Bina Dharma</option>
                                <option value="SMP BINA NUSANTARA SIMPRUG">SMP BINA NUSANTARA SIMPRUG</option>
                                <option value="SMP Bina Pangudi Luhur">SMP Bina Pangudi Luhur</option>
                                <option value="SMP BKUI (Al-Kautsar)">SMP BKUI (Al-Kautsar)</option>
                                <option value="SMP Borobudur">SMP Borobudur</option>
                                <option value="SMP BPSK 2">SMP BPSK 2</option>
                                <option value="SMP BRIGHT WORLD ACADEMY">SMP BRIGHT WORLD ACADEMY</option>
                                <option value="SMP Budaya">SMP Budaya</option>
                                <option value="SMP Buddhis Silaparamita">SMP Buddhis Silaparamita</option>
                                <option value="SMP BUDHAYA III SANTO AGUSTINUS">SMP BUDHAYA III SANTO AGUSTINUS</option>
                                <option value="SMP Budhi Warman">SMP Budhi Warman</option>
                                <option value="SMP BUDI HARAPAN">SMP BUDI HARAPAN</option>
                                <option value="SMP Budi Mulia Utama">SMP Budi Mulia Utama</option>
                                <option value="SMP BUNDA KANDUNG">SMP BUNDA KANDUNG</option>
                                <option value="SMP CAHAYA ALQURAN">SMP CAHAYA ALQURAN</option>
                                <option value="SMP Cahaya Sakti">SMP Cahaya Sakti</option>
                                <option value="SMP CAWANG BARU">SMP CAWANG BARU</option>
                                <option value="SMP CENDERAWASIH I">SMP CENDERAWASIH I</option>
                                <option value="SMP Charitas">SMP Charitas</option>
                                <option value="SMP CIKAL">SMP CIKAL</option>
                                <option value="SMP Cita Buana">SMP Cita Buana</option>
                                <option value="SMP CITRA ALAM">SMP CITRA ALAM</option>
                                <option value="SMP CITRA KASIH DON BOSCO PONDOK INDAH">SMP CITRA KASIH DON BOSCO PONDOK
                                    INDAH
                                </option>
                                <option value="SMP Corpatarin">SMP Corpatarin</option>
                                <option value="SMP D`ROYAL MOROCO INTEGRATIVE ISLAMIC SCHOOL">SMP D`ROYAL MOROCO
                                    INTEGRATIVE
                                    ISLAMIC SCHOOL</option>
                                <option value="SMP DAARUSSALAAM">SMP DAARUSSALAAM</option>
                                <option value="SMP DARUL ARQOM">SMP DARUL ARQOM</option>
                                <option value="SMP DARUL MAARIF JAKARTA">SMP DARUL MAARIF JAKARTA</option>
                                <option value="SMP Darul Mukminin">SMP Darul Mukminin</option>
                                <option value="SMP Darul Muttaqien">SMP Darul Muttaqien</option>
                                <option value="SMP Darus Syifa">SMP Darus Syifa</option>
                                <option value="SMP Darussalam">SMP Darussalam</option>
                                <option value="SMP Delima">SMP Delima</option>
                                <option value="SMP DESA PUTRA">SMP DESA PUTRA</option>
                                <option value="SMP DEWI SARTIKA">SMP DEWI SARTIKA</option>
                                <option value="SMP DEWI SARTIKA">SMP DEWI SARTIKA</option>
                                <option value="SMP Dharma Bakti">SMP Dharma Bakti</option>
                                <option value="SMP Dharma Putra Nusantara 86">SMP Dharma Putra Nusantara 86</option>
                                <option value="SMP DHARMA SATRIA">SMP DHARMA SATRIA</option>
                                <option value="SMP Diponegoro 1">SMP Diponegoro 1</option>
                                <option value="SMP Diponegoro 2">SMP Diponegoro 2</option>
                                <option value="SMP Don Bosco II">SMP Don Bosco II</option>
                                <option value="SMP DWI CAKTI BHAKTI PALAD">SMP DWI CAKTI BHAKTI PALAD</option>
                                <option value="SMP EL RASYAD ISLAMIC JUNIOR HIGH SCHOOL">SMP EL RASYAD ISLAMIC JUNIOR
                                    HIGH
                                    SCHOOL</option>
                                <option value="SMP El Shaddai Intercontinental School">SMP El Shaddai Intercontinental
                                    School
                                </option>
                                <option value="SMP EL-SYIFA">SMP EL-SYIFA</option>
                                <option value="SMP EMBUN PAGI ISLAMIC SCHOOL">SMP EMBUN PAGI ISLAMIC SCHOOL</option>
                                <option value="SMP EMERALD">SMP EMERALD</option>
                                <option value="SMP EMIISc Jakarta">SMP EMIISc Jakarta</option>
                                <option value="SMP ERA PEMBANGUNAN UMAT">SMP ERA PEMBANGUNAN UMAT</option>
                                <option value="SMP FATAHILLAH">SMP FATAHILLAH</option>
                                <option value="SMP GARUDA">SMP GARUDA</option>
                                <option value="SMP GARUDA CENDEKIA">SMP GARUDA CENDEKIA</option>
                                <option value="SMP Global Islamic School">SMP Global Islamic School</option>
                                <option value="SMP GLOBAL MANDIRI">SMP GLOBAL MANDIRI</option>
                                <option value="SMP GLOBAL SEVILLA PULO MAS">SMP GLOBAL SEVILLA PULO MAS</option>
                                <option value="SMP Hangtuah 2">SMP Hangtuah 2</option>
                                <option value="SMP Harapan I">SMP Harapan I</option>
                                <option value="SMP Harnasto Institut">SMP Harnasto Institut</option>
                                <option value="SMP HERITAGE SCHOOL JAKARTA">SMP HERITAGE SCHOOL JAKARTA</option>
                                <option value="SMP HIGHSCOPE INDONESIA">SMP HIGHSCOPE INDONESIA</option>
                                <option value="SMP I Al Azhar Syifa Budi">SMP I Al Azhar Syifa Budi</option>
                                <option value="SMP IBNU HAJAR BOARDING SCHOOL">SMP IBNU HAJAR BOARDING SCHOOL</option>
                                <option value="SMP ICHTHUS SCHOOL">SMP ICHTHUS SCHOOL</option>
                                <option value="SMP IGNATIUS SLAMET RIYADI">SMP IGNATIUS SLAMET RIYADI</option>
                                <option value="SMP IMTAQ DARURRAHIM">SMP IMTAQ DARURRAHIM</option>
                                <option value="SMP INTERNATIONAL ISLAMIC SECONDARY SCHOOL">SMP INTERNATIONAL ISLAMIC
                                    SECONDARY
                                    SCHOOL</option>
                                <option value="SMP Islam Al Azhar I">SMP Islam Al Azhar I</option>
                                <option value="SMP ISLAM AL HIDAYAH">SMP ISLAM AL HIDAYAH</option>
                                <option value="SMP Islam Al Hikmah">SMP Islam Al Hikmah</option>
                                <option value="SMP Islam Al Ikhlas">SMP Islam Al Ikhlas</option>
                                <option value="SMP ISLAM AL ITISHOM">SMP ISLAM AL ITISHOM</option>
                                <option value="SMP ISLAM AL IZHAR PONDOK LABU">SMP ISLAM AL IZHAR PONDOK LABU</option>
                                <option value="SMP ISLAM AL JABR">SMP ISLAM AL JABR</option>
                                <option value="SMP Islam Al Kholidin">SMP Islam Al Kholidin</option>
                                <option value="SMP Islam Al Makiyah">SMP Islam Al Makiyah</option>
                                <option value="SMP Islam Al-Azhar 12">SMP Islam Al-Azhar 12</option>
                                <option value="SMP ISLAM AL-AZHAR 19 CIBUBUR">SMP ISLAM AL-AZHAR 19 CIBUBUR</option>
                                <option value="SMP ISLAM AL-AZHAR 22">SMP ISLAM AL-AZHAR 22</option>
                                <option value="SMP ISLAM AL-MARUF">SMP ISLAM AL-MARUF</option>
                                <option value="SMP Islam An Nuriyah">SMP Islam An Nuriyah</option>
                                <option value="SMP ISLAM ANDALUS">SMP ISLAM ANDALUS</option>
                                <option value="SMP ISLAM AR RAHMAH JAKARTA">SMP ISLAM AR RAHMAH JAKARTA</option>
                                <option value="SMP Islam As-Syafiiyah 02">SMP Islam As-Syafiiyah 02</option>
                                <option value="SMP ISLAM ASSALAAM">SMP ISLAM ASSALAAM</option>
                                <option value="SMP ISLAM AT-TAUFIEQ">SMP ISLAM AT-TAUFIEQ</option>
                                <option value="SMP ISLAM CITRA DHARMA">SMP ISLAM CITRA DHARMA</option>
                                <option value="SMP ISLAM HARAPAN IBU">SMP ISLAM HARAPAN IBU</option>
                                <option value="SMP Islam Karya Darma">SMP Islam Karya Darma</option>
                                <option value="SMP Islam L Pina">SMP Islam L Pina</option>
                                <option value="SMP Islam Malahayati">SMP Islam Malahayati</option>
                                <option value="SMP ISLAM NURUL HUDA">SMP ISLAM NURUL HUDA</option>
                                <option value="SMP ISLAM PB SOEDIRMAN">SMP ISLAM PB SOEDIRMAN</option>
                                <option value="SMP ISLAM RPI">SMP ISLAM RPI</option>
                                <option value="SMP ISLAM TAMAN QURANIYAH">SMP ISLAM TAMAN QURANIYAH</option>
                                <option value="SMP ISLAM TERPADU AL KIYAN">SMP ISLAM TERPADU AL KIYAN</option>
                                <option value="SMP ISLAM TERPADU AL-HALIMIYAH">SMP ISLAM TERPADU AL-HALIMIYAH</option>
                                <option value="SMP ISLAM TERPADU ARRAHMAN">SMP ISLAM TERPADU ARRAHMAN</option>
                                <option value="SMP ISLAM TERPADU DAQTA">SMP ISLAM TERPADU DAQTA</option>
                                <option value="SMP ISLAM TERPADU NURUL HIKMAH">SMP ISLAM TERPADU NURUL HIKMAH</option>
                                <option value="SMP Islam Tugasku">SMP Islam Tugasku</option>
                                <option value="SMP ISLAM YASMIN">SMP ISLAM YASMIN</option>
                                <option value="SMP Islam YPS">SMP Islam YPS</option>
                                <option value="SMP IT AL-WATHONIYAH PUSAT PUTRI">SMP IT AL-WATHONIYAH PUSAT PUTRI
                                </option>
                                <option value="SMP IT ALMUGHNI">SMP IT ALMUGHNI</option>
                                <option value="SMP IT AR-RUDHO">SMP IT AR-RUDHO</option>
                                <option value="SMP JAGAKARSA">SMP JAGAKARSA</option>
                                <option value="SMP JAKARTA INTERCULTURAL SCHOOL DI CILANDAK">SMP JAKARTA INTERCULTURAL
                                    SCHOOL DI
                                    CILANDAK</option>
                                <option value="SMP JAKARTA ISLAMIC SCHOOL">SMP JAKARTA ISLAMIC SCHOOL</option>
                                <option value="SMP JAKARTA MONTESSORI">SMP JAKARTA MONTESSORI</option>
                                <option value="SMP Jayakarta">SMP Jayakarta</option>
                                <option value="SMP KAPIN">SMP KAPIN</option>
                                <option value="SMP Kartika VIII-1">SMP Kartika VIII-1</option>
                                <option value="SMP KARTIKA X-1">SMP KARTIKA X-1</option>
                                <option value="SMP KARTIKA XI-3 JAKARTA">SMP KARTIKA XI-3 JAKARTA</option>
                                <option value="SMP KARTINI 3 JAKARTA">SMP KARTINI 3 JAKARTA</option>
                                <option value="SMP Katolik Nusa Melati">SMP Katolik Nusa Melati</option>
                                <option value="SMP KELUARGA WIDURI">SMP KELUARGA WIDURI</option>
                                <option value="SMP KEMALA BHAYANGKARI 2">SMP KEMALA BHAYANGKARI 2</option>
                                <option value="SMP KEMALA BHAYANGKARI 3">SMP KEMALA BHAYANGKARI 3</option>
                                <option value="SMP Krida Putra">SMP Krida Putra</option>
                                <option value="SMP KRISTEN 5 BPK PENABUR">SMP KRISTEN 5 BPK PENABUR</option>
                                <option value="SMP KRISTEN BERKAT">SMP KRISTEN BERKAT</option>
                                <option value="SMP KRISTEN CAHAYA BANGSA">SMP KRISTEN CAHAYA BANGSA</option>
                                <option value="SMP KRISTEN ORA et LABORA">SMP KRISTEN ORA et LABORA</option>
                                <option value="SMP KRISTEN TUNAS BANGSA">SMP KRISTEN TUNAS BANGSA</option>
                                <option value="SMP Kuntum Wijaya Kusuma">SMP Kuntum Wijaya Kusuma</option>
                                <option value="SMP LABORATORIUM JAKARTA">SMP LABORATORIUM JAKARTA</option>
                                <option value="SMP LABSCHOOL JAKARTA">SMP LABSCHOOL JAKARTA</option>
                                <option value="SMP Labschool Kebayoran">SMP Labschool Kebayoran</option>
                                <option value="SMP LENTERA INDONESIA JAKARTA">SMP LENTERA INDONESIA JAKARTA</option>
                                <option value="SMP MADINA ISLAMIC SCHOOL">SMP MADINA ISLAMIC SCHOOL</option>
                                <option value="SMP MAHAKARYA BANGSA">SMP MAHAKARYA BANGSA</option>
                                <option value="SMP MAHASISWA">SMP MAHASISWA</option>
                                <option value="SMP MAKARYA">SMP MAKARYA</option>
                                <option value="SMP Marsudirini">SMP Marsudirini</option>
                                <option value="SMP MEKAR SARI">SMP MEKAR SARI</option>
                                <option value="SMP MENTARI INTERCULTURAL SCHOOL JAKARTA">SMP MENTARI INTERCULTURAL
                                    SCHOOL
                                    JAKARTA</option>
                                <option value="SMP MUARA INDONESIA">SMP MUARA INDONESIA</option>
                                <option value="SMP Muhamadiyah IV">SMP Muhamadiyah IV</option>
                                <option value="SMP Muhammadiyah 30">SMP Muhammadiyah 30</option>
                                <option value="SMP MUHAMMADIYAH 31">SMP MUHAMMADIYAH 31</option>
                                <option value="SMP Muhammadiyah 35">SMP Muhammadiyah 35</option>
                                <option value="SMP Muhammadiyah 36">SMP Muhammadiyah 36</option>
                                <option value="SMP Muhammadiyah 39">SMP Muhammadiyah 39</option>
                                <option value="SMP Muhammadiyah 5">SMP Muhammadiyah 5</option>
                                <option value="SMP MUHAMMADIYAH 50">SMP MUHAMMADIYAH 50</option>
                                <option value="SMP Muhammadiyah 8">SMP Muhammadiyah 8</option>
                                <option value="SMP MUHAMMADIYAH 9">SMP MUHAMMADIYAH 9</option>
                                <option value="SMP Muhammadiyah I Jagakarsa">SMP Muhammadiyah I Jagakarsa</option>
                                <option value="SMP MUTTAQIEN">SMP MUTTAQIEN</option>
                                <option value="SMP N 202 JAKARTA">SMP N 202 JAKARTA</option>
                                <option value="SMP Nahdlatul Wathan">SMP Nahdlatul Wathan</option>
                                <option value="SMP NASIONAL">SMP NASIONAL</option>
                                <option value="SMP NEGERI 102 JAKARTA">SMP NEGERI 102 JAKARTA</option>
                                <option value="SMP NEGERI 103 JAKARTA">SMP NEGERI 103 JAKARTA</option>
                                <option value="SMP Negeri 104">SMP Negeri 104</option>
                                <option value="SMP NEGERI 106 JAKARTA">SMP NEGERI 106 JAKARTA</option>
                                <option value="SMP Negeri 107">SMP Negeri 107</option>
                                <option value="SMP Negeri 109 JAKARTA">SMP Negeri 109 JAKARTA</option>
                                <option value="SMP NEGERI 11 JAKARTA">SMP NEGERI 11 JAKARTA</option>
                                <option value="SMP NEGERI 110">SMP NEGERI 110</option>
                                <option value="SMP Negeri 115">SMP Negeri 115</option>
                                <option value="SMP Negeri 117">SMP Negeri 117</option>
                                <option value="SMP NEGERI 12">SMP NEGERI 12</option>
                                <option value="SMP NEGERI 124 JAKARTA">SMP NEGERI 124 JAKARTA</option>
                                <option value="SMP NEGERI 126 JAKARTA">SMP NEGERI 126 JAKARTA</option>
                                <option value="SMP NEGERI 128 JAKARTA">SMP NEGERI 128 JAKARTA</option>
                                <option value="SMP Negeri 13">SMP Negeri 13</option>
                                <option value="SMP Negeri 131">SMP Negeri 131</option>
                                <option value="SMP Negeri 135">SMP Negeri 135</option>
                                <option value="SMP NEGERI 138 JAKARTA">SMP NEGERI 138 JAKARTA</option>
                                <option value="SMP NEGERI 139 JAKARTA">SMP NEGERI 139 JAKARTA</option>
                                <option value="SMP NEGERI 14 JAKARTA">SMP NEGERI 14 JAKARTA</option>
                                <option value="SMP Negeri 141">SMP Negeri 141</option>
                                <option value="SMP Negeri 144">SMP Negeri 144</option>
                                <option value="SMP NEGERI 145 JAKARTA">SMP NEGERI 145 JAKARTA</option>
                                <option value="SMP NEGERI 146 JAKARTA">SMP NEGERI 146 JAKARTA</option>
                                <option value="SMP NEGERI 147 JAKARTA">SMP NEGERI 147 JAKARTA</option>
                                <option value="SMP NEGERI 148 JAKARTA">SMP NEGERI 148 JAKARTA</option>
                                <option value="SMP Negeri 149">SMP Negeri 149</option>
                                <option value="SMP Negeri 15">SMP Negeri 15</option>
                                <option value="SMP Negeri 150 Jakarta">SMP Negeri 150 Jakarta</option>
                                <option value="SMP Negeri 153">SMP Negeri 153</option>
                                <option value="SMP NEGERI 154">SMP NEGERI 154</option>
                                <option value="SMP NEGERI 155">SMP NEGERI 155</option>
                                <option value="SMP NEGERI 157 JAKARTA">SMP NEGERI 157 JAKARTA</option>
                                <option value="SMP Negeri 158">SMP Negeri 158</option>
                                <option value="SMP NEGERI 16 JAKARTA">SMP NEGERI 16 JAKARTA</option>
                                <option value="SMP Negeri 160 JAKARTA">SMP Negeri 160 JAKARTA</option>
                                <option value="SMP Negeri 161">SMP Negeri 161</option>
                                <option value="SMP NEGERI 163 JAKARTA">SMP NEGERI 163 JAKARTA</option>
                                <option value="SMP Negeri 164">SMP Negeri 164</option>
                                <option value="SMP Negeri 165 Jakarta">SMP Negeri 165 Jakarta</option>
                                <option value="SMP NEGERI 166">SMP NEGERI 166</option>
                                <option value="SMP NEGERI 167 JAKARTA">SMP NEGERI 167 JAKARTA</option>
                                <option value="SMP Negeri 168">SMP Negeri 168</option>
                                <option value="SMP NEGERI 171 JAKARTA">SMP NEGERI 171 JAKARTA</option>
                                <option value="SMP Negeri 172">SMP Negeri 172</option>
                                <option value="SMP Negeri 174 Jakarta">SMP Negeri 174 Jakarta</option>
                                <option value="SMP Negeri 177">SMP Negeri 177</option>
                                <option value="SMP NEGERI 178">SMP NEGERI 178</option>
                                <option value="SMP NEGERI 179 JAKARTA">SMP NEGERI 179 JAKARTA</option>
                                <option value="SMP Negeri 180 Jakarta">SMP Negeri 180 Jakarta</option>
                                <option value="SMP NEGERI 182">SMP NEGERI 182</option>
                                <option value="SMP NEGERI 184 JAKARTA">SMP NEGERI 184 JAKARTA</option>
                                <option value="SMP Negeri 185">SMP Negeri 185</option>
                                <option value="SMP Negeri 188 Jakarta">SMP Negeri 188 Jakarta</option>
                                <option value="SMP Negeri 19 Jakarta">SMP Negeri 19 Jakarta</option>
                                <option value="SMP NEGERI 192 JAKARTA">SMP NEGERI 192 JAKARTA</option>
                                <option value="SMP Negeri 193">SMP Negeri 193</option>
                                <option value="SMP Negeri 194">SMP Negeri 194</option>
                                <option value="SMP NEGERI 195 JAKARTA">SMP NEGERI 195 JAKARTA</option>
                                <option value="SMP Negeri 196 Jakarta">SMP Negeri 196 Jakarta</option>
                                <option value="SMP Negeri 198">SMP Negeri 198</option>
                                <option value="SMP Negeri 199">SMP Negeri 199</option>
                                <option value="SMP Negeri 20 Jakarta">SMP Negeri 20 Jakarta</option>
                                <option value="SMP NEGERI 203 JAKARTA">SMP NEGERI 203 JAKARTA</option>
                                <option value="SMP NEGERI 208 JAKARTA">SMP NEGERI 208 JAKARTA</option>
                                <option value="SMP Negeri 209 Jakarta">SMP Negeri 209 Jakarta</option>
                                <option value="SMP Negeri 210 Jakarta">SMP Negeri 210 Jakarta</option>
                                <option value="SMP NEGERI 211">SMP NEGERI 211</option>
                                <option value="SMP NEGERI 212 JAKARTA">SMP NEGERI 212 JAKARTA</option>
                                <option value="SMP NEGERI 213 JAKARTA">SMP NEGERI 213 JAKARTA</option>
                                <option value="SMP NEGERI 214 JAKARTA">SMP NEGERI 214 JAKARTA</option>
                                <option value="SMP NEGERI 217 JAKARTA">SMP NEGERI 217 JAKARTA</option>
                                <option value="SMP Negeri 218">SMP Negeri 218</option>
                                <option value="SMP NEGERI 222 JAKARTA">SMP NEGERI 222 JAKARTA</option>
                                <option value="SMP Negeri 223 Jakarta">SMP Negeri 223 Jakarta</option>
                                <option value="SMP Negeri 226">SMP Negeri 226</option>
                                <option value="SMP NEGERI 227 JAKARTA">SMP NEGERI 227 JAKARTA</option>
                                <option value="SMP NEGERI 230 JAKARTA">SMP NEGERI 230 JAKARTA</option>
                                <option value="SMP Negeri 232">SMP Negeri 232</option>
                                <option value="SMP Negeri 233 Jakarta">SMP Negeri 233 Jakarta</option>
                                <option value="SMP Negeri 234">SMP Negeri 234</option>
                                <option value="SMP Negeri 235">SMP Negeri 235</option>
                                <option value="SMP Negeri 236">SMP Negeri 236</option>
                                <option value="SMP Negeri 237 Jakarta">SMP Negeri 237 Jakarta</option>
                                <option value="SMP Negeri 238">SMP Negeri 238</option>
                                <option value="SMP NEGERI 239">SMP NEGERI 239</option>
                                <option value="SMP NEGERI 24 JAKARTA">SMP NEGERI 24 JAKARTA</option>
                                <option value="SMP Negeri 240">SMP Negeri 240</option>
                                <option value="SMP NEGERI 242">SMP NEGERI 242</option>
                                <option value="SMP Negeri 243">SMP Negeri 243</option>
                                <option value="SMP Negeri 245">SMP Negeri 245</option>
                                <option value="SMP Negeri 246 Jakarta">SMP Negeri 246 Jakarta</option>
                                <option value="SMP NEGERI 247 JAKARTA">SMP NEGERI 247 JAKARTA</option>
                                <option value="SMP Negeri 25">SMP Negeri 25</option>
                                <option value="SMP Negeri 250">SMP Negeri 250</option>
                                <option value="SMP Negeri 251 Jakarta">SMP Negeri 251 Jakarta</option>
                                <option value="SMP NEGERI 252 JAKARTA">SMP NEGERI 252 JAKARTA</option>
                                <option value="SMP Negeri 253">SMP Negeri 253</option>
                                <option value="SMP Negeri 254">SMP Negeri 254</option>
                                <option value="SMP Negeri 255">SMP Negeri 255</option>
                                <option value="SMP NEGERI 256 JAKARTA">SMP NEGERI 256 JAKARTA</option>
                                <option value="SMP NEGERI 257 JAKARTA">SMP NEGERI 257 JAKARTA</option>
                                <option value="SMP Negeri 258 Jakarta">SMP Negeri 258 Jakarta</option>
                                <option value="SMP Negeri 259 Jakarta">SMP Negeri 259 Jakarta</option>
                                <option value="SMP NEGERI 26 JAKARTA">SMP NEGERI 26 JAKARTA</option>
                                <option value="SMP Negeri 262">SMP Negeri 262</option>
                                <option value="SMP Negeri 263 Jakarta">SMP Negeri 263 Jakarta</option>
                                <option value="SMP NEGERI 265">SMP NEGERI 265</option>
                                <option value="SMP NEGERI 267 JAKARTA">SMP NEGERI 267 JAKARTA</option>
                                <option value="SMP NEGERI 268 JAKARTA">SMP NEGERI 268 JAKARTA</option>
                                <option value="SMP NEGERI 27 JAKARTA">SMP NEGERI 27 JAKARTA</option>
                                <option value="SMP Negeri 272 Jakarta">SMP Negeri 272 Jakarta</option>
                                <option value="SMP Negeri 275 Jakarta">SMP Negeri 275 Jakarta</option>
                                <option value="SMP NEGERI 276">SMP NEGERI 276</option>
                                <option value="SMP NEGERI 281 JAKARTA">SMP NEGERI 281 JAKARTA</option>
                                <option value="SMP Negeri 283 Jakarta">SMP Negeri 283 Jakarta</option>
                                <option value="SMP NEGERI 284 JAKARTA">SMP NEGERI 284 JAKARTA</option>
                                <option value="SMP Negeri 287 Jakarta">SMP Negeri 287 Jakarta</option>
                                <option value="SMP Negeri 29">SMP Negeri 29</option>
                                <option value="SMP NEGERI 3 JAKARTA">SMP NEGERI 3 JAKARTA</option>
                                <option value="SMP NEGERI 31">SMP NEGERI 31</option>
                                <option value="SMP Negeri 33">SMP Negeri 33</option>
                                <option value="SMP Negeri 35 Jakarta">SMP Negeri 35 Jakarta</option>
                                <option value="SMP Negeri 36">SMP Negeri 36</option>
                                <option value="SMP NEGERI 37 JAKARTA">SMP NEGERI 37 JAKARTA</option>
                                <option value="SMP Negeri 41">SMP Negeri 41</option>
                                <option value="SMP NEGERI 43 JAKARTA">SMP NEGERI 43 JAKARTA</option>
                                <option value="SMP NEGERI 44 JAKARTA">SMP NEGERI 44 JAKARTA</option>
                                <option value="SMP Negeri 46">SMP Negeri 46</option>
                                <option value="SMP NEGERI 48 JAKARTA">SMP NEGERI 48 JAKARTA</option>
                                <option value="SMP Negeri 49 Jakarta">SMP Negeri 49 Jakarta</option>
                                <option value="SMP Negeri 50 Jakarta">SMP Negeri 50 Jakarta</option>
                                <option value="SMP Negeri 51">SMP Negeri 51</option>
                                <option value="SMP NEGERI 52 JAKARTA">SMP NEGERI 52 JAKARTA</option>
                                <option value="SMP NEGERI 56">SMP NEGERI 56</option>
                                <option value="SMP Negeri 57">SMP Negeri 57</option>
                                <option value="SMP Negeri 58">SMP Negeri 58</option>
                                <option value="SMP NEGERI 6 JAKARTA">SMP NEGERI 6 JAKARTA</option>
                                <option value="SMP Negeri 62">SMP Negeri 62</option>
                                <option value="SMP NEGERI 66">SMP NEGERI 66</option>
                                <option value="SMP Negeri 67">SMP Negeri 67</option>
                                <option value="SMP NEGERI 68 JAKARTA">SMP NEGERI 68 JAKARTA</option>
                                <option value="SMP NEGERI 7 JAKARTA">SMP NEGERI 7 JAKARTA</option>
                                <option value="SMP NEGERI 73 JAKARTA">SMP NEGERI 73 JAKARTA</option>
                                <option value="SMP Negeri 74">SMP Negeri 74</option>
                                <option value="SMP NEGERI 80 JAKARTA">SMP NEGERI 80 JAKARTA</option>
                                <option value="SMP NEGERI 81 JAKARTA">SMP NEGERI 81 JAKARTA</option>
                                <option value="SMP NEGERI 85 JAKARTA">SMP NEGERI 85 JAKARTA</option>
                                <option value="SMP Negeri 86">SMP Negeri 86</option>
                                <option value="SMP Negeri 87">SMP Negeri 87</option>
                                <option value="SMP NEGERI 9 JAKARTA">SMP NEGERI 9 JAKARTA</option>
                                <option value="SMP Negeri 90">SMP Negeri 90</option>
                                <option value="SMP Negeri 91 Jakarta">SMP Negeri 91 Jakarta</option>
                                <option value="SMP Negeri 92">SMP Negeri 92</option>
                                <option value="SMP NEGERI 96 JAKARTA">SMP NEGERI 96 JAKARTA</option>
                                <option value="SMP NEGERI 97 JAKARTA">SMP NEGERI 97 JAKARTA</option>
                                <option value="SMP Negeri 98">SMP Negeri 98</option>
                                <option value="SMP Negeri 99">SMP Negeri 99</option>
                                <option value="SMP NEGERI RAGUNAN">SMP NEGERI RAGUNAN</option>
                                <option value="SMP NEW ZEALAND INDEPENDENT SCHOOL">SMP NEW ZEALAND INDEPENDENT SCHOOL
                                </option>
                                <option value="SMP NIZAMIA ANDALUSIA">SMP NIZAMIA ANDALUSIA</option>
                                <option value="SMP NOAH">SMP NOAH</option>
                                <option value="SMP Nuris">SMP Nuris</option>
                                <option value="SMP Nurul Huda">SMP Nurul Huda</option>
                                <option value="SMP NURUL IHSAN">SMP NURUL IHSAN</option>
                                <option value="SMP Nurul Iman">SMP Nurul Iman</option>
                                <option value="SMP PALAPA">SMP PALAPA</option>
                                <option value="SMP Pandawa">SMP Pandawa</option>
                                <option value="SMP Pangudi Luhur">SMP Pangudi Luhur</option>
                                <option value="SMP Pangudi Rahayu">SMP Pangudi Rahayu</option>
                                <option value="SMP Pasar Minggu">SMP Pasar Minggu</option>
                                <option value="SMP Pattimura">SMP Pattimura</option>
                                <option value="SMP Pelita Harapan">SMP Pelita Harapan</option>
                                <option value="SMP PELITA HARAPAN">SMP PELITA HARAPAN</option>
                                <option value="SMP Pelita Tiga No. 1">SMP Pelita Tiga No. 1</option>
                                <option value="SMP PEMBANGUNAN">SMP PEMBANGUNAN</option>
                                <option value="SMP PERDANA KUSUMA">SMP PERDANA KUSUMA</option>
                                <option value="SMP PERGURUAN ADVENT XI TANJUNG BARAT">SMP PERGURUAN ADVENT XI TANJUNG
                                    BARAT
                                </option>
                                <option value="SMP PERGURUAN ADVENT XV">SMP PERGURUAN ADVENT XV</option>
                                <option value="SMP Perguruan Rakyat 02">SMP Perguruan Rakyat 02</option>
                                <option value="SMP PERGURUAN RAKYAT 1">SMP PERGURUAN RAKYAT 1</option>
                                <option value="SMP PERGURUAN RAKYAT 3">SMP PERGURUAN RAKYAT 3</option>
                                <option value="SMP Perintis Pembangunan">SMP Perintis Pembangunan</option>
                                <option value="SMP PERMATA KASIH INDONESIA SCHOOL">SMP PERMATA KASIH INDONESIA SCHOOL
                                </option>
                                <option value="SMP Perwira Jakarta">SMP Perwira Jakarta</option>
                                <option value="SMP Petri Jaya">SMP Petri Jaya</option>
                                <option value="SMP PGRI 10">SMP PGRI 10</option>
                                <option value="SMP PGRI 12">SMP PGRI 12</option>
                                <option value="SMP PGRI 20">SMP PGRI 20</option>
                                <option value="SMP PGRI 3">SMP PGRI 3</option>
                                <option value="SMP PGRI 30">SMP PGRI 30</option>
                                <option value="SMP PGRI 38">SMP PGRI 38</option>
                                <option value="SMP PGRI 9">SMP PGRI 9</option>
                                <option value="SMP PLUS KHADIJAH ISLAMIC SCHOOL">SMP PLUS KHADIJAH ISLAMIC SCHOOL
                                </option>
                                <option value="SMP PLUS YAPIMDA LENTENG AGUNG">SMP PLUS YAPIMDA LENTENG AGUNG</option>
                                <option value="SMP PSKD 3">SMP PSKD 3</option>
                                <option value="SMP PSKD IV BULUNGAN">SMP PSKD IV BULUNGAN</option>
                                <option value="SMP PURNAMA">SMP PURNAMA</option>
                                <option value="SMP PUSPITA PERSADA">SMP PUSPITA PERSADA</option>
                                <option value="SMP PUTRA 1">SMP PUTRA 1</option>
                                <option value="SMP Putra Satria">SMP Putra Satria</option>
                                <option value="SMP QURAN AL-IHSAN">SMP QURAN AL-IHSAN</option>
                                <option value="SMP RAFFLES CHRISTIAN SCHOOL PONDOK INDAH">SMP RAFFLES CHRISTIAN SCHOOL
                                    PONDOK
                                    INDAH</option>
                                <option value="SMP SAMPOERNA">SMP SAMPOERNA</option>
                                <option value="SMP SANTA MARIA FATIMA">SMP SANTA MARIA FATIMA</option>
                                <option value="SMP SANTO BONAVENTURA">SMP SANTO BONAVENTURA</option>
                                <option value="SMP Santo Markus">SMP Santo Markus</option>
                                <option value="SMP SANTO MARKUS II">SMP SANTO MARKUS II</option>
                                <option value="SMP Santo Yoseph">SMP Santo Yoseph</option>
                                <option value="SMP SINGAPORE INTERCULTURAL SCHOOL">SMP SINGAPORE INTERCULTURAL SCHOOL
                                </option>
                                <option value="SMP Srikandi">SMP Srikandi</option>
                                <option value="SMP St. Antonius">SMP St. Antonius</option>
                                <option value="SMP ST. FRANSISKUS II JAKARTA">SMP ST. FRANSISKUS II JAKARTA</option>
                                <option value="SMP St. Vincentius">SMP St. Vincentius</option>
                                <option value="SMP Strada Bakti Utama">SMP Strada Bakti Utama</option>
                                <option value="SMP Strada Marga Mulia">SMP Strada Marga Mulia</option>
                                <option value="SMP STRADA SANTA ANNA">SMP STRADA SANTA ANNA</option>
                                <option value="SMP Sultan Hasanuddin">SMP Sultan Hasanuddin</option>
                                <option value="SMP SULUH JAKARTA">SMP SULUH JAKARTA</option>
                                <option value="SMP Sumbangsih">SMP Sumbangsih</option>
                                <option value="SMP SUNAN GIRI">SMP SUNAN GIRI</option>
                                <option value="SMP SWASTA AL FALAH">SMP SWASTA AL FALAH</option>
                                <option value="SMP TAMAN HARAPAN">SMP TAMAN HARAPAN</option>
                                <option value="SMP Tarakanita 1">SMP Tarakanita 1</option>
                                <option value="SMP Tarakanita 4">SMP Tarakanita 4</option>
                                <option value="SMP Tarakanita 5">SMP Tarakanita 5</option>
                                <option value="SMP Tarakanita III">SMP Tarakanita III</option>
                                <option value="SMP TARUNA HARAPAN BANGSA">SMP TARUNA HARAPAN BANGSA</option>
                                <option value="SMP TELADAN">SMP TELADAN</option>
                                <option value="SMP TIRTA SARI SURYA">SMP TIRTA SARI SURYA</option>
                                <option value="SMP TIRTAYASA">SMP TIRTAYASA</option>
                                <option value="SMP Trampil">SMP Trampil</option>
                                <option value="SMP TRI MULYA">SMP TRI MULYA</option>
                                <option value="SMP Tri Sastra">SMP Tri Sastra</option>
                                <option value="SMP TRISOKO">SMP TRISOKO</option>
                                <option value="SMP TRISULA PERWARI 3">SMP TRISULA PERWARI 3</option>
                                <option value="SMP Trisula Perwari I Jakarta">SMP Trisula Perwari I Jakarta</option>
                                <option value="SMP Uswatun Hasanah">SMP Uswatun Hasanah</option>
                                <option value="SMP VILLA MAS">SMP VILLA MAS</option>
                                <option value="SMP Widya Manggala">SMP Widya Manggala</option>
                                <option value="SMP Yamas">SMP Yamas</option>
                                <option value="SMP YANUSA">SMP YANUSA</option>
                                <option value="SMP YAPENKA">SMP YAPENKA</option>
                                <option value="SMP YAPIMDA JAKARTA">SMP YAPIMDA JAKARTA</option>
                                <option value="SMP Yasda">SMP Yasda</option>
                                <option value="SMP YASPEN">SMP YASPEN</option>
                                <option value="SMP YASPIA">SMP YASPIA</option>
                                <option value="SMP YASPIA">SMP YASPIA</option>
                                <option value="SMP Yasporbi I Jakarta">SMP Yasporbi I Jakarta</option>
                                <option value="SMP YASPORBI II">SMP YASPORBI II</option>
                                <option value="SMP Yayasan Pendidikan Mulia">SMP Yayasan Pendidikan Mulia</option>
                                <option value="SMP YP IPPI">SMP YP IPPI</option>
                                <option value="SMP YP. GKPI Rawamangun">SMP YP. GKPI Rawamangun</option>
                                <option value="SMP YPI">SMP YPI</option>
                                <option value="SMP YPI Al Bayan">SMP YPI Al Bayan</option>
                                <option value="SMP YPI Pulogadung">SMP YPI Pulogadung</option>
                                <option value="SMP YPIA Pengarengan">SMP YPIA Pengarengan</option>
                                <option value="SMP YPKUI">SMP YPKUI</option>
                                <option value="SMP YPMII">SMP YPMII</option>
                                <option value="SMP YPMU">SMP YPMU</option>
                                <option value="SMP YPRI">SMP YPRI</option>
                                <option value="SMP YPUI">SMP YPUI</option>
                                <option value="SMP YWKA I">SMP YWKA I</option>
                                <option value="SMP YWKA II">SMP YWKA II</option>
                                <option value="SMPI AL-HIDAYAH">SMPI AL-HIDAYAH</option>
                                <option value="SMPIT AL-AZHAR JAGAKARSA">SMPIT AL-AZHAR JAGAKARSA</option>
                                <option value="SMPIT An Nizomiyah">SMPIT An Nizomiyah</option>
                                <option value="SMPIT AR RAHMAN">SMPIT AR RAHMAN</option>
                                <option value="SMPIT ASSAADAH ALCHILASHIYYAH">SMPIT ASSAADAH ALCHILASHIYYAH</option>
                                <option value="SMPIT ASSALAAMAH">SMPIT ASSALAAMAH</option>
                                <option value="SMPIT INSAN MADANI">SMPIT INSAN MADANI</option>
                                <option value="SMPIT INSAN MANDIRI">SMPIT INSAN MANDIRI</option>
                                <option value="SMPK TIRTAMARTA-BPK PENABUR">SMPK TIRTAMARTA-BPK PENABUR</option>
                                <option value="SMPN 175 JAKARTA">SMPN 175 JAKARTA</option>
                                <option value="SMPS CIKAL AMRI">SMPS CIKAL AMRI</option>
                                <option value="SMPS DHARMA SURYA">SMPS DHARMA SURYA</option>
                                <option value="SMPS ISLAM ASSAADAH">SMPS ISLAM ASSAADAH</option>
                                <option value="SMPS ISLAM AT TAUBAH">SMPS ISLAM AT TAUBAH</option>
                                <option value="SMPS IT BUAHATI ISLAMIC SCHOOL">SMPS IT BUAHATI ISLAMIC SCHOOL</option>
                                <option value="SMPTQ CITA MULIA">SMPTQ CITA MULIA</option>
                                <option value="SPK SMPS HIGHFIELD">SPK SMPS HIGHFIELD</option>
                                <option value="MTsS DARUL IBTIDA">MTsS DARUL IBTIDA</option>
                                <option value="MTS.UMMUL QURO-Ponpes Modern Ummul Quro Al-Islami">MTS.UMMUL QURO-Ponpes
                                    Modern
                                    Ummul Quro Al-Islami</option>
                                <option value="SMP SAIS 1">SMP SAIS 1</option>
                                <option value="sekolah_lainnya">LAINNYA</option>
                            </select>
                        </div>
                    </div>
                    <div class="row" id="sekolah_lainnya" style="">
                        <div class="form-group col-md-12">
                            <label for="asal_sekolah" class="mb-2">Nama Sekolah</label>
                            <input type="text" name="asal_sekolah_lainnya" id="asal_sekolah_text" class="form-control"
                                placeholder="Masukkan Asal Sekolah">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="email" class="mb-2">Email</label>
                            <input type="email" name="email" id="email" class="form-control "
                                placeholder="Masukkan Email Aktif" value="" required autocomplete="email">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="telp" class="mb-2">Nomor Handphone</label>
                            <input type="number" name="no_hp" id="telp" class="form-control"
                                placeholder="Contoh : 08--------" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="telp-ayah" class="mb-2">Nomor HP Ayah</label>
                            <input type="number" name="no_hp_ayah" class="form-control" id="telp-ayah"
                                placeholder="Contoh : 08--------" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="telp-ibu" class="mb-2">Nomor HP Ibu</label>
                            <input type="number" name="no_hp_ibu" class="form-control" id="telp-ibu"
                                placeholder="Contoh : 08--------" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <p class="text-center mt-4"><b>Setelah menekan tombol registrasi, silahkan untuk <br>mendownload PDF sebagai bukti pendaftaran!</b></p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <div></div>
                        <button type="submit" class="btn btn-main-sm shadow-md bordered mt-3"
                            style="background-color: #1c2558; "><span style="color:white;"> Registrasi</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>
<!-- wajib jquery  -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
crossorigin="anonymous"></script>
<!-- js untuk bootstrap4  -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
crossorigin="anonymous"></script>
<!-- js untuk select2  -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
$(document).ready(function () {
    $(".select2").select2({
        theme: 'bootstrap4',
        placeholder: "Please Select"
    });

});

</script>

<script>
function checkvalue2() {
    var sekolah = document.getElementById("sekolah").value;
    var sekolahLainnya = document.getElementById("sekolah_lainnya");
        if (sekolah === "sekolah_lainnya") {
            sekolahLainnya.style.display = 'block';
        } else {
            sekolahLainnya.style.display = 'none';
    }
}

</script>

</html>