@extends("layouts.default")

@section("title", "Sertão Belo - Voucher")

@section("content")
    @include("components.header")
    <div class="container d-flex justify-content-center pt-5">
        <div class="col-12" style="max-width: 800px;">
            <h1 class="fs-2 mb-5 text-center">Cadastro de Voucher</h1>

            <form class="row g-3" method="POST" action="" enctype="multipart/form-data">
                @csrf
                @include('voucher.partials.form')
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="{{ route('lobby.index') }}" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>
@endsection
