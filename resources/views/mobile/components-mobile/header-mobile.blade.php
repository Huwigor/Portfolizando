

   <nav class="d-flex navbar-expand-lg container-fluid" id="nav-main">

   <button class="menu-btn" id="menu-btn" onclick=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" style="height:25px">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg></button>

    <div class="main-menu" id="main-menu">
        <div class="overflow-img"></div>
        <img class="img-menu" src="{{asset('imgs/port-logo.webp')}}" alt="">
        <button class="btn-fechar-categorias mx-auto" id="btn-fechar-categorias"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" style="height:30px">
        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg></button>

        <img class="icone-menu" src="{{asset('icons/logo.png')}}" alt="">

        <div class="menu">
            @auth
                <div class="box-categoria" id="box-categoria">
                    <button class="btn-categoria">Olá, {{auth()->user()->name}}</button>
                    <div>
                        <button class="btn-categoria">Seus Portfolios</button>
                        <button class="btn-categoria">Seus Dados</button>
                        <button class="btn-categoria">Sair</button>
                    </div>
                </div>
            @endauth
            @guest
                <div class="btn-categoria">
                    <button class="btn-menu"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svg-menu">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg> Entre ou cadastre-se!</button>
                </div>
            @endguest
                <div class="btn-categoria">
                    <button class="btn-menu"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svg-menu" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 11.25v8.25a1.5 1.5 0 0 1-1.5 1.5H5.25a1.5 1.5 0 0 1-1.5-1.5v-8.25M12 4.875A2.625 2.625 0 1 0 9.375 7.5H12m0-2.625V7.5m0-2.625A2.625 2.625 0 1 1 14.625 7.5H12m0 0V21m-8.625-9.75h18c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125h-18c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                    </svg> Planos</button>
                </div>
                <div class="btn-categoria">
                    <button class="btn-menu"><img src="{{asset('icons/add-port.png')}}" alt="" class="svg-menu"> Criar Portfólio</button>
                </div>
                <div class="btn-categoria">
                    <button class="btn-menu"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svg-menu" >
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Zm-9 5.25h.008v.008H12v-.008Z" />
                    </svg>Central de Ajuda</button>
                </div>
        </div>
    </div>

        <div class="container-fluid text-center">
              <h1 class="navbar-brand" onclick="window.location.href='/home-mobile'">Portfolizando <img src="{{asset('icons/logo.png')}}" alt="" height="25px"></h1>
        </div>

        <button class="btn-carrinho ms-auto"><img src="{{asset('icons/add-port.png')}}" alt="" height="25px"></button>


    </nav>
