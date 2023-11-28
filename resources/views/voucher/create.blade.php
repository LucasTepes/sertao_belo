@extends('layouts.default')

@section('title', 'Sertão Belo - Voucher')

@section('content')
    @include('components.header')
    <div class="container d-flex justify-content-center pt-5">
        <div class="col-12" style="max-width: 800px;">
            <h1 class="fs-2 mb-5 text-center">Cadastro de Voucher</h1>

            @if (Session::get('erro'))
                <div class="alert alert-warning text-center p-2">{{ Session::get('erro') }}</div>
            @endif

            <form class="row g-3" method="POST" action="{{ route('voucher.store') }}" enctype="multipart/form-data">
                @csrf
                @include('voucher.partials.form')
                <div class="col-12">
                    <button class="btn btn-primary" >Cadastrar</button>
                    <a href="{{ route('lobby.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    {{-- <script>
        function submitFormAndRedirect() {
            // Submete o formulário
            document.getElementById('myForm').submit();

            // Redireciona para o link em uma nova aba
            window.open('https://wa.me/75981640778?text=Olá,%20Acabei%20de%20criar%20um%20voucher%20novo', '_blank');
        }
    </script> --}}
@endsection

