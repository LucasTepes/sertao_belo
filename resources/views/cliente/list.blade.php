@extends('layouts.default')

@section('title', 'Sertão Belo - Lista de Clientes')


@section('content')
    @include('components.header')

    <div class="container pt-5">
        <div class="row justify-content-center">
            <div class="col text-center">
                <h1 class="fs-2 mb-3">Lista de Clientes</h1>

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
                                    <a href="{{ route('cliente.edit', $cliente->id ) }}" title="Editar" class="btn btn-primary"><i class="bi bi-pen"></i></a>
                                    <a href="#" title="Deletar" class="btn btn-danger" data-bs-toggle="modal"
                                        data-bs-target=""><i class="bi bi-trash"></i></a>
                                    <a href="" title="Editar" class="btn btn-info"><i
                                            class="bi bi-info-circle"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
