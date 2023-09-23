@extends('layouts.main')

@section('container')
<h1>Halaman Informasi Kampus</h1>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <img src="img/{{ $image }}" class="mt-3 d-flex align-items-center" style="height: 400px; margin:5px auto;" alt="UNSIKA">
        </div>
    </div>
    <div class="row text-center">
        <div class="col-md-12">
            <h2>{{ $name }}</h2>
            <p class="fs-5">{{ $detail }}</p>
        </div>
    </div>
</div>  
@endsection