<header class="p-3" style="background-color: #09B703">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="{{ route('lobby.index') }}"
                class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                <img src="{{ asset('img/2.png') }}" alt="" href="">
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('lobby.index') }}" class="nav-link px-2 text-white">Lobby</a></li>
                <li><a href="@if (auth()->check()) {{ route('voucher.list', auth()->user()->id) }} @endif"
                        class="nav-link px-2 text-white">Vouchers</a></li>
                <li><a href="{{ route('lobby.catamara') }}" class="nav-link px-2 text-white">Catamarâ</a></li>
                <li><a href="{{ route('lobby.passeio') }}" class="nav-link px-2 text-white">Passeio</a></li>
                <li><a href="{{ route('lobby.lv') }}" class="nav-link px-2 text-white">Lancha e Voadeiras</a></li>
                <li><a href="{{ route('lobby.tecnica') }}" class="nav-link px-2 text-white">Visita Técnica</a></li>
                <li><a href="{{ route('lobby.eco') }}" class="nav-link px-2 text-white">Ecológico</a></li>
                <li><a href="{{ route('lobby.pedagocica') }}" class="nav-link px-2 text-white">Visita Pedagógica</a></li>
                <li><a href="{{ route('lobby.mergulho') }}" class="nav-link px-2 text-white">Mergulho</a></li>
            </ul>


            @if (auth()->check())
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <strong><i class="bi bi-person-fill"></i> {{ auth()->user()->name }}</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                        @can('type-user')
                            <li><a href="{{ route('cliente.list') }}" class="dropdown-item">Clientes</a></li>
                        @endcan

                        @can('type-user')
                            <li><a href="{{ route('passeio.list') }}" class="dropdown-item">Passeios</a></li>
                        @endcan

                        @can('type-user')
                            <li><a href="{{ route('dashboard.index') }}" class="dropdown-item">Dashboard</a></li>
                        @endcan

                        <li><a class="dropdown-item" href="{{ route('login.logout') }}">Sair</a></li>
                    </ul>
                </div>
            @else
                <div class="text-end">
                    <a href="{{ route('login.index') }}" type="button"
                        class="btn btn-sm btn-outline-light me-2">Login</a>
                    <a href="{{ route('cliente.create') }}" class="btn btn-sm btn-light">Cadastra-se</a>
                </div>
            @endif

            <div>
                <a href="https://wa.me/75991966075?text=Olá,%20Sertão%20belo,%20vim%20pelo%20link%20do%20site"
                    target="_blank" class="btn btn-sm btn-success" style="margin-left: 10px; "><i
                        class="bi bi-whatsapp"></i></a>
            </div>
            <div>
                <a href="https://www.instagram.com/oficialsertaobelo/" target="_blank" class="btn btn-sm btn-danger"
                    style="margin-left: 10px; margin-right: 10px; "><i class="bi bi-instagram"></i></a>
            </div>

        </div>
    </div>
</header>
