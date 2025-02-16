<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        @vite('resources/css/mobile/create-account.css')
        @vite('resources/js/mobile/home/auth-user/hidden-password.js')

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" defer integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <style>
            body{
                background: linear-gradient(to right, #abb1b1, #697a79)
            }
        </style>
    </head>
    <body>

    <div class="d-flex header-form">
        <img onclick="window.location.href='/'" class="logo-form" src="{{asset('icons/logo.png')}}" alt="" height="30px;">
        <div class="ms-auto d-flex box-btn-form">
            <div class="">
                <button class="btn-login" onclick="window.location.href='/create-user'"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" style="height:18px;margin-bottom:8px;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18 7.5v3m0 0v3m0-3h3m-3 0h-3m-2.25-4.125a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0ZM3 19.235v-.11a6.375 6.375 0 0 1 12.75 0v.109A12.318 12.318 0 0 1 9.374 21c-2.331 0-4.512-.645-6.374-1.766Z" />
                </svg> Criar conta</button>
            </div>
        </div>
       </div>

        <div class="main-form">
            <form action="{{route('login-user')}}" method="POST" class="form-create-acc mx-auto">
                @csrf
                <div>
                    <label class="labels" for="email">Email</label>
                    <br>
                    <input class="inputs" type="text" id="email" name="email" placeholder="Digite seu email">
                </div>
                <div>
                    <label class="labels" for="password">Senha</label>
                    <br>
                    <div class="d-flex">
                        <input class="inputs" type="password" id="password" name="password" placeholder="Digite sua senha">
                        <div>
                            <button class="btn-hidden" id="btn-esconder"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svg-esconder" style="height:20px">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg></button>

                            <button class="btn-hidden" id="btn-mostrar"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svg-mostrar" style="height:20px">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg></button>
                        </div>
                    </div>
                </div>
                <div class="container-fluid text-center mt-4">
                    <button type="submit" class="btn btn-sm btn-primary" style="min-width:40vh">Entrar</button>
                    <p class="link-login">Junte-se a nós! Faça seu cadastro <a href="/create-user">clicando aqui</a> ...</p>
                </div>
            </form>
        </div>
</body>
</html>