<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Register</title>
        @vite('resources/css/mobile/create-account.css')
        @vite('resources/js/form-user-js/validate-create-user.js')
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
                <button class="btn-login" onclick="window.location.href='/login-user'"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6" style="height:18px;margin-bottom:8px;">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>Login</button>
            </div>
        </div>
       </div>

        <div class="main-form">
            <form action="{{route('create-user')}}" method="POST" id="form-create-acc" class="form-create-acc mx-auto">
                @csrf
                <div class="mx-auto box-inputs">
                    <label class="labels" for="name">Nome</label>
                    <br>
                    <input class="inputs" type="text" id="name" name="name" placeholder="Digite seu nome">
                    <p id="error-name" class="errors-inputs"></p>
                </div>
                <div>
                    <label class="labels" for="email">Email</label>
                    <br>
                    <input class="inputs" type="text" id="email" name="email" placeholder="Digite seu email">
                    <p id="error-email" class="errors-inputs"></p>
                </div>
                <div>
                    <label class="labels" for="password">Senha</label>
                    <br>
                    <div class="d-flex">
                        <input class="inputs" type="text" id="password" name="password" placeholder="Digite sua senha">
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
                    <p id="error-password" class="errors-inputs"></p>
                </div>
                <div>
                    <label class="labels" for="repeat-password">Repita sua senha</label>
                    <br>
                    <div class="d-flex">
                        <input class="inputs" type="text" id="repeat-password" placeholder="Digite sua senha novamente">
                        <div>
                            <button class="btn-hidden" id="btn-esconder-repeat"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svg-esconder" style="height:20px">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.98 8.223A10.477 10.477 0 0 0 1.934 12C3.226 16.338 7.244 19.5 12 19.5c.993 0 1.953-.138 2.863-.395M6.228 6.228A10.451 10.451 0 0 1 12 4.5c4.756 0 8.773 3.162 10.065 7.498a10.522 10.522 0 0 1-4.293 5.774M6.228 6.228 3 3m3.228 3.228 3.65 3.65m7.894 7.894L21 21m-3.228-3.228-3.65-3.65m0 0a3 3 0 1 0-4.243-4.243m4.242 4.242L9.88 9.88" />
                            </svg></button>

                            <button class="btn-hidden" id="btn-mostrar-repeat"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svg-mostrar" style="height:20px">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                            </svg></button>
                        </div>
                    </div>
                    <p id="error-repeat-password" class="errors-inputs"></p>
                </div>
                <div class="container-fluid text-center" style="margin-top:50px">
                    <button type="submit" class="btn btn-sm btn-primary" style="min-width:40vh">Criar conta</button>
                    <p class="link-login">Bem vindo de volta! acesse sua conta  <a href="/login-user">clicando aqui</a> ...</p>
                </div>
            </form>
        </div>
</body>
</html>