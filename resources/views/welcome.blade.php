<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #fff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .bg {
                /* The image used */
                background-image: url("/images/restaurante.jpg");

                /* Full height */
                height: 100%;

                /* Center and scale the image nicely */
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
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
                font-size: 84px;
                font-weight: 900;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .restaurantes > a {
                color: #fff;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                display: block;
                margin-top: 5px;
            }

            .restaurantes > a:hover
            {
                text-decoration: underline;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .button {
  /* background-color: #4CAF50; */
  background-color: Transparent;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
        </style>
    </head>
    <body class="bg">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                        <button type="submit" class="button">Cerrar sesión</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}">Ingresar</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Registro</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Restaurantes de México
                </div>

                <div class="restaurantes">
                    @foreach ($restaurantes as $restaurante)
                        <a href="{{ route('restaurante.show', $restaurante) }}">{{ $restaurante->nombre }} - {{ $restaurante->horario }}</a>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
</html>
