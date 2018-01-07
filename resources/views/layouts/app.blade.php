<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
        <title>{{config('app.name', 'Goal Tracker')}}</title>
    </head>
    <body>
        @include('partials.navbar')
        <div class="container" id="app">
            <div class="starter-template">
                @include('partials.messages')
                @yield('content')
            </div>
        </div><!-- /.container -->
    </body>
</html>    