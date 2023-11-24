@extends('layouts.default')

@section('title', 'Sertão Belo - Lista de Clientes')


@section('content')
    @include('components.header')

    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col text-center">
                <h1 class="fs-2 mb-3">Lista de Clientes</h1>

                <a href="{{ route('cliente.create') }}" class="btn btn-primary rounded-circle float-end  mb-3"
                    title="Cadastrar Cliente">
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
                            <th scope="col">cpf</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr class="text-center align-middle">
                                <th scope="row">{{ $cliente->id }}</th>
                                <td>{{ $cliente->name }}</td>
                                <td>{{ $cliente->cpf }}</td>
                                <td>
                                    <a href="{{ route('cliente.edit', $cliente->id) }}" title="Editar"
                                        class="btn btn-primary"><i class="bi bi-pen"></i></a>
                                    <a href="#" title="Deletar" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target="#modal-delete-{{ $cliente->id }}"><i class="bi bi-trash"></i></a>
                                    <x-modal-delete>
                                        <x-slot name="id">{{ $cliente->id }}</x-slot>
                                        <x-slot name="tipo">Cliente</x-slot>
                                        <x-slot name="nome">{{ $cliente->name }}</x-slot>
                                        <x-slot name="rota">cliente.destroy</x-slot>
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
