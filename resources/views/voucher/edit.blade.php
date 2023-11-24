@extends('layouts.default')

@section('title', 'Sertão Belo - Vouchers')

@section('content')
    <div class="container d-flex justify-content-center pt-5">
        <div class="col-12" style="max-width: 800px;">
            <h1 class="fs-2 mb-5 text-center">Cadastro de Voucher</h1>

            <form class="row g-3" method="POST" action="{{ route('voucher.update', $voucher->id) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                @include('voucher.partials.form_edit')
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <a href="javascript:void(0);" onclick="goBack()" class="btn btn-danger">Cancelar</a>
                </div>
            </form>
        </div>
    </div>

    <script>
    function goBack() {
        window.history.back();
    }
</script>
@endsection

