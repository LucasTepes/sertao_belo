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
                @can('type-user')
                    <li><a href="{{ route('cliente.list') }}" class="nav-link px-2 text-white">Clientes</a></li>
                @endcan

                @can('type-user')
                    <li><a href="{{ route('passeio.list') }}" class="nav-link px-2 text-white">Passeios</a></li>
                @endcan

                @can('type-user')
                    <li><a href="{{ route('dashboard.index') }}" class="nav-link px2 text-white">Dashboard</a></li>
                @endcan
            </ul>

            <div>
                <a href="https://wa.me/75991966075?text=Olá,%20Sertão%20belo,%20vim%20pelo%20link%20do%20site"
                    target="_blank" class="btn btn-success" style="margin-left: 10px; "><i
                        class="bi bi-whatsapp"></i></a>
            </div>
            <div>
                <a href="https://www.instagram.com/oficialsertaobelo/" target="_blank" class="btn btn-danger"
                    style="margin-left: 10px; margin-right: 10px; "><i class="bi bi-instagram"></i></a>
            </div>

            @if (auth()->check())
                <div class="dropdown">
                    <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <strong>{{ auth()->user()->name }}</strong>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-light text-small shadow">
                        <li><a class="dropdown-item" href="">Alterar
                                dados</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('login.logout') }}">Sair</a></li>
                    </ul>
                </div>
            @else
                <div class="text-end">
                    <a href="{{ route('login.index') }}" type="button" class="btn btn-outline-light me-2">Login</a>
                    <a href="{{ route('cliente.create') }}" class="btn btn-warning">Cadastra-se</a>
                </div>
            @endif
        </div>
    </div>
</header>
