@extends('layouts.default')

@section('title', 'Sertão Belo - DashBoard')

@section('content')

    @include('components.header');

    <div class="text-center container align-items-center justify-content-center">

        <h1 class="mb-5">Dashboard</h1>

        <div class="row">
            <div class="col-md-6 border border-danger">

                <div class="col-md-6 mb-5" style="margin-left: 25%">
                    <div class="bg-dark shadow p-3 text-center text-white d-flex align-items-center rounded">
                        <i class="bi bi-card-text fs-1 me-3"></i>
                        <div class="w-100">
                            <span class="fs-5 d-block">Vouchers vendidos</span>
                            <span class="fs-2"><b>{{ $voucher }}</b></span>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 mb-5" style="margin-left: 25%">
                    <div class="bg-dark shadow p-3 text-center text-white d-flex align-items-center rounded">
                        <i class="bi bi-airplane-engines fs-1 me-3"></i>
                        <div class="w-100">
                            <span class="fs-5 d-block">Clientes</span>
                            <span class="fs-2"><b>{{ $clientes }}</b></span>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-md-6 border border-danger">
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <Script>
                     const graficoCargos = document.getElementById('grafico-cargos');

            new Chart(graficoCargos, {
                type: 'doughnut',
                data: {
                    labels: [
                        @foreach ($passeios as  $passeio)
                            '{{ $passeio->nome }}',
                        @endforeach
                    ],
                    datasets: [{
                        label: '',
                        data: [
                            @foreach ($qtdPasseioVendido as $key)
                                {{ $qtdPasseioVendido; }},
                            @endforeach
                        ],
                        backgroundColor: [
                            'rgb(255, 99, 132)',
                            'rgb(255, 159, 64)',
                            'rgb(255, 205, 86)',
                            'rgb(75, 192, 192)',
                            'rgb(54, 162, 235)',
                            'rgb(153, 102, 255)',
                            'rgb(201, 203, 207)'
                        ],
                        hoverOffset: 10,
                    }]
                },
            });
                </Script>
            </div>
        </div>
    </div>

@endsection
