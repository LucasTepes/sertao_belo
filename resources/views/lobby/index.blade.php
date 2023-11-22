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
                                <p class="card-title">{{ $passeio->nome }}</p>
                                <p class="card-text">{{ $passeio->descricao }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="{{ route('voucher.create', $passeio->id) }}"
                                            class="btn btn-sm btn-outline-secondary">Agendar</a>
                                        <a href="" class="btn btn-sm btn-outline-secondary">Ver mais</a>
                                    </div>
                                    <a href="{{ route('passeio.edit', $passeio->id) }}" class="btn btn-info"><i
                                            class="bi bi-pencil-square"></i></a>
                                    <div class="">
                                        <small class="text-body-tertiary" style="display:block">Inicio
                                            {{ $passeio->hora_inicio }}</small>
                                        <small class="text-body-tertiary" style="display:block">Fim
                                            {{ $passeio->hora_fim }}</small>
                                    </div>
                                    @php
                                        $inicio = \Carbon\Carbon::parse($passeio->hora_inicio);
                                        $fim = \Carbon\Carbon::parse($passeio->hora_fim);
                                        $duracao = $fim->diffInMinutes($inicio);
                                    @endphp
                                    <small class="text-body-secondary">{{ $duracao }} min</small>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>
@endsection
