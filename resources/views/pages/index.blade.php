@extends('template.layout')


@section('content')

<div>
    <br>
    <br>
    <br>
    <div class="col-lg-12 text-center">
        <h1 class="mt-5">Statistika</h1>
        <p class="lead">Masukkan Jumlah Data!</p>
        <div class="col-lg d-flex justify-content-center text-center">
            <div class="card-transparent mb-3" style="min-width: 30rem; ">
                <div class="card-header" style="background-color: rgba(61, 57, 49, 0.877);"><b>Jumlah Data</b></div>
                <div class="card-body" style="background-color: rgba(70, 61, 53, 0.4);">
                    <h5 class="card-title">{{$data}}</h5>
                    <a href="/Data/create" class="btn btn-outline-light" name='new'>Data Baru</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- <div class="row align-items-md-stretch">
    <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3" style=" background-image: url(img/img2.jpg); background-size: cover; color:white; box-shadow: 10px 10px 5px grey; border-radius: 10px;">
            <h2 >lihat daftar entry</h2>
            <p>daftar data yang sudah di input ditampilkan dalam bentuk table</p>
            <a class="btn btn-outline-light" type="button" href="/Data"> tabel data</a>
        </div> --}}
    {{-- </div>
    <div class="col-md-6">
        <div class="h-100 p-5 text-white bg-dark rounded-3" style=" background-image: url(img/img3.jpg); background-size: cover; color:white; box-shadow: 10px 10px 5px grey; border-radius: 10px;">
            <h2>lihat hasil pengolahan</h2>
            <p>hasil pengolahan data secara statistik ditampilakan dalam tabel dan rubrik</p>
            <a class="btn btn-outline-light" type="button" href="/info">rangkuman info</a>
        </div>
    </div> --}}
{{-- </div>
<div class="row align-items-md">
    <div class="col-lg-12 text-center" style= 'padding: 30px;'>
        <div class="h-100 p-5 text-white bg-dark rounded-3" style="  margin: auto; max-width: 700px; background-image: url(img/img4.png); background-size: cover; color:white; box-shadow: 10px 10px 5px grey; border-radius: 10px;">
            <div style="background-color: rgba(5, 5, 5, 0.6); padding:50px;">
                <h2 >data dari spreadsheet</h2>
                <p>daftar data yang sudah di input ditampilkan dalam bentuk table</p>
                <a class="btn btn-outline-light" type="button" href="/import"> import</a>
                <a class="btn btn-outline-light" type="button" href="/export"> export</a>
            </div>
            
        </div>
    </div>
</div> --}}
@endsection
