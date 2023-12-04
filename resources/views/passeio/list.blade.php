@extends('layouts.default')

@section('title', 'Sertão Belo - Lista de Clientes')


@section('content')
    @include('components.header')

    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col text-center">
                <h1 class="fs-2 mb-3">Lista de Clientes</h1>

                <a href="{{ route('passeio.index') }}" class="btn btn-primary rounded-circle float-end  mb-3"
                    title="Criar Passeio">
                    <i class="bi bi-plus fs-4"></i>
                </a>

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
                            <th scope="col">Nome</th>
                            <th scope="col">Cidade</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Status</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($passeios as $passeio)
                            <tr class="text-center align-middle">
                                <td scope="row">{{ $passeio->id }}</td>
                                <td scope="row">{{ $passeio->nome }}</td>
                                <td scope="row">{{ $passeio->cidade }}</td>
                                <td scope="row">{{ $passeio->tipo }}</td>
                                <td scope="row">{{ $passeio->status }}</td>
                                <td>
                                    <a href="{{ route('passeio.edit', $passeio->id) }}" title="Editar"
                                        class="btn btn-primary"><i class="bi bi-pen"></i></a>
                                    <a href="" title="Deletar" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modal-delete-{{ $passeio->id }}"><i class="bi bi-trash"></i></a>
                                    <x-modal-delete>
                                        <x-slot name="id">{{ $passeio->id }}</x-slot>
                                        <x-slot name="tipo">Passeio</x-slot>
                                        <x-slot name="nome">{{ $passeio->nome }}</x-slot>
                                        <x-slot name="rota">passeio.destroy</x-slot>
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
