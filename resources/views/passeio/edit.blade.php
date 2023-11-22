@extends('layouts.cadastros')

@section('title', 'Sertão Belo - Cadastro de Pessio')

@section('content')
    <div class="container d-flex justify-content-center pt-5">
        <div class="col-12" style="max-width: 800px;">
            <h1 class="fs-2 mb-5 text-center">Cadastro de Passeio</h1>

            <form class="row g-3" method="POST" action="{{ route('passeio.update', $passeio->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('passeio.partials.form_edit')
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="{{ route('lobby.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
