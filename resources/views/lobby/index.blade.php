@extends('layouts.default')

@section('title', 'Sertão Belo')

@section('content')

    @include('components.header')

    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <h1 class="fw-light"><img src="{{ asset('img/5_bg.png') }}" alt=""> Sertão Belo</h1>
            <p class="lead text-body-secondary">É aqui onde sua viagem começa</p>
        </div>
        </div>
    </section>

    <div class="album py-5 bg-body-tertiary">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

                @foreach ($passeios as $passeio)
                    <div class="col">
                        <div class="card shadow-sm">
                            <img class="bd-placeholder-img card-img-top" width="100%" height="225"
                                src="{{ asset("storage/passeios/$passeio->img") }}" alt="">
                            <div class="card-body">
                                <p class="card-text">{{ $passeio->descricao }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="" class="btn btn-sm btn-outline-secondary">Agendar</a>
                                        <a href="" class="btn btn-sm btn-outline-secondary">Ver mais</a>
                                    </div>
                                    <small class="text-body-secondary">{{ $passeio->duracao }} min</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
