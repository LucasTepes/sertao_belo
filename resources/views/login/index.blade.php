<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sertão Belo</title>
    <link rel="shortcut icon" href="{{ asset('img/2.png') }}" type="image/x-icon">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body class="">
    <div class="bg-white container p-5 position-absolute translate-middle top-50 start-50 rounded-5 shadow-"
        style="max-width: 400px ">
        <img src="{{ asset('img/logo.png') }}" alt="SisRH" height="40" class="d-block mx-auto mb-4">

        @if ($errors->any)
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger text-center p-2">{{ $error }}</div>
            @endforeach
        @endif

        @if (Session::get('erro'))
            <div class="alert alert-danger text-center p-2">{{ Session::get('erro') }}</div>
        @endif

        @if (Session::get('sucesso'))
            <div class="alert alert-success text-center p-2">{{ Session::get('sucesso') }}</div>
        @endif

        <form action="{{ route('login.auth') }}" class="row g-3" method="POST">
            @csrf
            <div>
                <label for="email" class="form-label fs-5">E-mail</label>
                <input type="text" id="email" name="email" class="form-control form-control-lg bg-light">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" id="password" name="password" class="form-control form-control-lg bg-light">
            </div>
            <button type="submit" class="btn btn-lg" style="background-color: #09B703; color: white">Entrar</button>
        </form>
    </div>


</body>

</html>
