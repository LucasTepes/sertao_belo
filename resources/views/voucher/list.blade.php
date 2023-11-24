@extends('layouts.default')

@section('title', 'Sertão Belo - Lista de Vouchers')

@section('content')
    @include('components.header')

    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col text-center">
                <h1 class="fs-2 mb-3">Lista de Vouchers</h1>

                @if (Session::get('sucesso'))
                    <div class="alert alert-success text-center">{{ Session::get('sucesso') }}</div>
                @endif
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr class="text-center">
                            <th scope="col">ID</th>
                            <th scope="col">Data</th>
                            <th scope="col">Passeio</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vouchers as $voucher)
                            <tr class="text-center align-middle">
                                <td scope="row">{{ $voucher->id }}</td>
                                <td scope="row">{{ $voucher->data_passeio }}</td>
                                <td scope="row">{{ $voucher->passeio->nome }}</td>
                                <td scope="row">{{ $voucher->valor_passeio }}</td>
                                <td scope="row">{{ $voucher->status }}</td>
                                <td>
                                    <a href="{{ route('voucher.edit', $voucher->id) }}" title="Editar" class="btn btn-primary"><i class="bi bi-pen"></i></a>
                                    <a href="" title="Deletar" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modal-delete-{{ $voucher->id }}"><i class="bi bi-trash"></i></a>
                                    <x-modal-delete>
                                        <x-slot name="id">{{ $voucher->id }}</x-slot>
                                        <x-slot name="tipo">Voucher</x-slot>
                                        <x-slot name="nome">{{ $voucher->passeio->nome }}</x-slot>
                                        <x-slot name="rota">voucher.destroy</x-slot>
                                    </x-modal-delete>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection