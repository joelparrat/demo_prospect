<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>@yield('title')</title>
		<link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" >
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
        <style> 
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
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>
