<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title> {{config('app.name')}} </title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
         <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.css" rel="stylesheet">
    <!-- My CSS -->
    <link href="/css/style.css" rel="stylesheet">
    <!-- font awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    </head>
    <body>
        @include('partials._navbar')
            @yield('content')
        @include('partials._footer')
      <script src="/js/jquery-3.2.1.min.js"></script>
      <script src="/js/bootstrap.js"></script>
        @include('flashy::message')
    </body>
</html>
