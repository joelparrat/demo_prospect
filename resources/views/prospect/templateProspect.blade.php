<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="css/bootstrap/js/bootstrap.min.js"></script>
        <link href="css/style.css" rel="stylesheet">
        <!-- <style> 
        html{
            height:100%;
        }
        body{
            height:100%;
        }
        .container{
            height:100%;
            display: flex;
            align-items: center;
        }
        .card {
            width:25em;
        }
        .listeAddresse {
            width:50em;
        }
        </style> -->
    </head>
    <body>
        <div>
            <a href="{{ route('login') }}" class="top-right log btn btn-light" style="margin-right: 135px; color: #4e413b;">Connexion</a>
            <a href="{{ route('register') }}" class="top-right log btn btn-dark" style="color: white;">S'enregistrer</a>
        </div>


        <div class="grid">
                <div class="title flex-center border-bottom border-secondary">
                    Laravel
                </div>

                @yield('content')

                <span class="footer"></span>
                <div class="linkfooter">© 2018 Copyright: DemoProspect.fr
                </div>
        </div>
    </body>
</html>
