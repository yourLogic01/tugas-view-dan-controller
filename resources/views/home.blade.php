@extends('layouts.main')

@section('container')
<h1>Selamat datang di Halaman Landing Page</h1>
<hr class="w-75">

<section id="blog" class="py-3">
    <div class="container">
        <div class="row">
            <div class="col py-3" style="text-align: justify;">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non porro, alias repellat necessitatibus facere expedita, ipsam cupiditate quia, quaerat aliquam nihil inventore quidem nulla debitis. Dolores quas eius consequuntur ipsa, cum maxime a eligendi officiis hic explicabo molestias tempore et quam incidunt dolorum consequatur amet! A atque excepturi quas voluptate nihil quisquam expedita dolorum nulla esse eum ab hic eius vitae ducimus quibusdam, ipsa veniam ullam aliquam amet, voluptas adipisci? Veritatis ea reprehenderit exercitationem dolor nihil illum?</p>
            </div>
        </div>
        <section id="showoff-1" >
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/{{ $image }}" alt="Laptop" class="img-fluid mb-3">
                    </div>
                    <div class="col-md-7" style="text-align: justify;">
                        <h2>Lorem!</h2>
                        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laborum, error. Atque assumenda minima quos officia harum unde facere!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut, voluptas aperiam error quas at suscipit rerum cumque quia nisi temporibus ut enim, facere asperiores rem, imilique, sunt!</p>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia iste sapiente autem rem laborum sint! Accusantium illum sed nisi excepturi! Placeat quidem deleniti debitis illo.</p>
                    </div>
                </div>
            </div>
        </section>
<a href="{{ url('/about') }}"><button type="button" class="btn btn-explore btn-lg btn3d"></span>Cari tahu tentang saya <i
    class="bi bi-arrow-up-right-square p-1"></i></i></button></a>
@endsection