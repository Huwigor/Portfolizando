
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home</title>
    

    </head>
    <body>

        <div class="main-carousel">
            <div class="box-img active mx-auto text-center">
                <img class="img-carousel" src="{{asset('imgs/portfolio-carousel1.png')}}" alt="">
                <div class="box-title-carousel">
                     <h3 class="title-carousel mx-auto">Design moderno, profissional e 100% seu!</h3>            
                </div>
            </div>
            <div class="box-img mx-auto text-center">
                <img class="img-carousel" src="{{asset('imgs/portfolio-carousel2.png')}}" alt="">
                <div class="box-title-carousel">
                     <h3 class="title-carousel mx-auto">Destaque-se! Seu portfólio é sua identidade profissional.</h3>            
                </div>
            </div>

            <button class="btn prev"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svg-btn">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
            </svg></button>

            <button class="btn next"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 svg-btn">
            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
            </svg></button>

        </div>



        <script defer src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

        
    </body>
</html>        