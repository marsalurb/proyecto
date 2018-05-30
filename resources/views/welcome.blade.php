<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Óptica Salas</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
            {{--}} background-image: url("https://st2.depositphotos.com/2010295/5949/v/950/depositphotos_59490863-stock-illustration-abstract-background-with-glasses.jpg");{{--}}
                background-image: url("https://images.pexels.com/photos/53156/glasses-fluke-angel-therapy-glasses-glass-golden-53156.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260");
                background-size: 100% 100%;
                background-color: #f8eae0;
                color: #636b6f;
                font-family: "Courier New";
                font-weight: 100;
                height: 100vh;
                margin: auto;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 150px;
                color: #000204;
                font-family: "Courier New";
                text-align: left;
                font-weight: 600;

            }

            .links1 > a {
                color: #000204;
                padding: 0 15px;
                font-size: 20px;
                font-weight: 900;
                letter-spacing: 0rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .links2 > a {
                color: #000204;
                padding: 0 30px;
                font-size: 35px;
                font-weight: 900;
                letter-spacing: 0rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links1">
                    @auth
                        <a href="{{ url('/home') }}">INICIO</a>
                    @else
                        <a href="{{ route('login') }}">Iniciar sesión</a>
                        <a href="{{ route('register') }}">Registrar empleado</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Óptica Salas
                </div>

                <div class="links2">
                    <a href="{{ url('/information') }}">¿Quiénes somos?</a>
                </div>
            </div>
        </div>
    </body>
</html>
