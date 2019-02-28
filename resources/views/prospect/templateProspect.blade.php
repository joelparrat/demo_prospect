<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
		<link href="{{ asset('../public/css/app.css') }}" rel="stylesheet" type="text/css" >
        <script type="text/javascript" src="{{ asset('../public/js/app.js') }}"></script>
        <link rel="stylesheet" type="text/css" href="../public/bootstrap/css/bootstrap.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="../public/bootstrap/js/bootstrap.min.js"></script>
        <link href="../public/css/app.css" rel="stylesheet">
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
            <!-- <a href="{{ route('login') }}" class="top-right log btn btn-dark" style="margin-right: 135px; color: white;">Connexion</a>
            <a href="{{ route('register') }}" class="top-right log btn btn-dark" style="color: white;">S'enregistrer</a> -->
            
        </div>


        <div class="grid">
                <div class="title m-b-md flex-center border-bottom border-secondary">
                    Demo Prospect
                </div>

                <a class="log btn btn-dark" style="color: white; grid-area: 1/1/2/2; margin: auto 25px auto auto;" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Déconnexion') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
            </form>

                @yield('content')

                <span class="footer"></span>
                <div class="textfooter">© 2019 Copyright: DemoProspect.fr
                </div>
        </div>
    </body>
</html>
