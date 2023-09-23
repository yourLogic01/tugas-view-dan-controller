@extends('layouts.main')

@section('container')
<h1>Halaman About</h1>
<div class="container">
    <div class="card mb-3 mt-3 shadow-sm mx-auto" style="max-width: 800px;">
        <div class="row g-0 ">
            <div class="col-md-4">
                <img src="img/{{ $image }}" class="img-fluid rounded-start " alt="Asyifa Maulana">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h3 class="card-title text-secondary mb-3">Profile</h3>
                <p class="card-text fs-5"> Hai, nama saya {{ $name }},</p>
                <p class="card-text fs-5"> saya sedang menempuh MSIB di {{ $sib }}</p>
                <p class="card-text fs-5"> Asal Kampus saya yaitu {{ $univ }}</p>
                <p class="card-text fs-5"> Hobi saya sehari hari biasanya {{ $hoby }}</p>
                <p class="card-text text-center fs-5 my-3"><q>Sedikit lebih beda, lebih baik daripada sedikit lebih baik</q></p>
            </div>
            </div>
        </div>
    </div>
</div>
<P class="fs-5">Penasaran tentang kampusku ? <a href="{{ url('/campus') }}" class="btn btn-outline-dark">Cari tahu disini!</a> </P>
@endsection