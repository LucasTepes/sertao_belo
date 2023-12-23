<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PDF Voucher</title>
    <link rel="shortcut icon" href="{{ asset('img/2.png') }}" type="image/x-icon">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        #div1 {
            display: flex;
            justify-content:
                center;
            align-items: center;
        }

        #img {
            max-width: 100%;
            height: auto;
        }

        #div2 {
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
            text-align: center;
            margin-bottom: 10px;
        }

        #div3 {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
        }

        #div4 {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }

        #div5 {
            width: 600px;
            margin-right: auto;
            margin-left: auto;
            padding-right: 15px;
            padding-left: 15px;
            text-align: center;
            margin-bottom: 20px;
        }

        #div6 {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
        }

        #div7 {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
            margin-right: 10px
        }

        #div8 {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }

        #div9 {
            margin-right: auto;
            margin-left: auto;
            text-align: center
        }

        #div10 {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
        }

        #div11 {
            flex-basis: 0;
            flex-grow: 1;
            max-width: 100%;
        }

        #div12 {
            width: 600px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 1rem;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 0.375rem;
        }

        #div13 {
            margin-bottom: 10px
        }

        #div14 {
            width: 600px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 1rem;
            padding: 1rem;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 0.375rem;
        }
    </style>
</head>

<body>
    <div id="div1">
        <div>
            <img src="{{ asset('img/logo.png') }}" alt="Logo">
            <!-- A classe img-fluid faz a imagem se ajustar ao tamanho da div -->
        </div>
    </div>

    <div id="div2">
        <div id="div3">

            <div id="div4">
                <h3>N° do Voucher: {{ $voucher->id }}</h3>
            </div>

        </div>
    </div>

    <div id="div5">
        <div id="div6">

            <div id="div7">
                <label for="">Passeio</label>
                <input type="text" class="form-control" value="{{ $voucher->passeio->nome }}" disabled>
            </div>

            <div id="div7">
                <label for="">Data do Passeio</label>
                <input type="text" class="form-control" value="{{ $voucher->data_passeio }}" disabled>
            </div>

            <div id="div8">
                <label for="">Horario</label>
                <input type="text" class="form-control" value="{{ $voucher->passeio->hora_inicio }}" disabled>
            </div>

        </div>
    </div>

    <div id="div9">
        <div id="div10">

            <div id="div11">
                <h5>Local do passeio: {{ $voucher->passeio->cidade }} - {{ $voucher->passeio->uf }}</h5>
            </div>

        </div>
    </div>

    <div id="div12">
        <div>

            <div>

                <div id="div13">
                    <h5>Quantidade de adultos: {{ $voucher->qtd_adulto }}</h5>
                    <p>Valor do adulto: {{ $voucher->passeio->valor_adulto }}</p>
                </div>

                <div id="div13">
                    <h5>Quantidade de crianças: {{ $voucher->qtd_crianca }}</h5>
                    <p>Valor da criança: {{ $voucher->passeio->valor_crianca }}</p>
                </div>

                <div id="div13">
                    <h5>Quantidade de bebes: {{ $voucher->qtd_bebe }}</h5>
                    @if ($voucher->passeio->valor_bebe == 0.0)
                        <p>Valor do bebe: Não paga</p>
                    @else
                        <p>Valor do bebe: {{ $voucher->passeio->valor_bebe }}</p>
                    @endif
                </div>

            </div>

        </div>
    </div>

    <div id="div14">
        <div>

            <div>

                <div id="div13">
                    <h5>Valor adultos: R${{ $voucher->passeio->valor_adulto }} X {{ $voucher->qtd_adulto }}
                        = R${{ $voucher->passeio->valor_adulto * $voucher->qtd_adulto }}</h5>
                </div>
                <div id="div13">
                    <h5>Valor crianças: R${{ $voucher->passeio->valor_crianca }} X {{ $voucher->qtd_crianca }}
                        = R${{ $voucher->passeio->valor_crianca * $voucher->qtd_crianca }}</h5>
                </div>

                <div id="div13">
                    <h5>Valor bebes: R${{ $voucher->passeio->valor_bebe }} X {{ $voucher->qtd_bebe }}
                        = R${{ $voucher->passeio->valor_bebe * $voucher->qtd_bebe }}</h5>
                </div>

                <div>
                    <h5>Total: R${{ $voucher->valor_passeio }}</h5>
                </div>
            </div>

        </div>
    </div>

</body>

</html>
