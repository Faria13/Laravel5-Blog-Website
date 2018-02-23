<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .jumSec {
            border: 1px solid #999;
            background-color:#F4F4F3;
        }
        .jumSec h3 {
            font-size: 22px;
        }
        .jumSec small{
            font-size:16px;
        }
        .btn{
            border-radius:0px;
        }
        .bodysec{
            font-size:20px;
        }
        .page-link {
            font-size: 20px;
        }
        .btn-danger{
            float: right;
        }
        .bold{
            color: #4b4b4b;
            text-align: center;
            font-weight: bold;
            font-family: Montserrat, sans-serif;
	    }
        .about .color{
            height: 80px;
            width: 80px;
            font-size: 30px;
            padding: 27px 25px;
            margin-left: 23px;
            margin-bottom: 20px;
            border-radius: 50%;
            background-color: #6699cc;
            color: #fff;
	    }
        .section{
            margin-top: 20px;
		    text-align: center;
            padding: 120px 120px;
        }
        .section-dark{
            background-color: #282e34;
            color: #ddd;
        }
        .section .btn{
            font-weight: bold;
        }
        .section .btn:hover{
            background-color: #222;
            color: #fff;
        }
        .service{
            margin-top:-80px;
        }
        .service i{
            font-size: 30px;
        }
    </style>
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            <main class="py-4">
            @include('inc.messages')                
                @yield('content')
            </main>
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
