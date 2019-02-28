<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo Prospect</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <script type="text/javascript" src="{{ asset('../public/js/app.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../public/bootstrap/js/bootstrap.min.js"></script>
        <link href="../public/css/app.css" rel="stylesheet">
    </head>
    <body>
        <div>
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="top-right log btn btn-dark" style="margin-right: 110px; color: white;">Connexion</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="top-right log btn btn-dark" style="color: white;">S'inscrire</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content grid">
                <div class="title m-b-md flex-center border-bottom border-secondary">
                    Demo Prospect
                </div>

                <span style="height: 375px"></span>

                <span class="footer"></span>
                <div class="textfooter">© 2019 Copyright: DemoProspect.fr
                </div>
            </div>
        </div>
    </body>
</html>
