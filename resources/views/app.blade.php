<!doctype html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}"/> 
    <title>{{env('APP_NAME')}}</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>
      body{
        font-family: 'Poppins';
        background-color: azure;
        padding-top: 100px;
      }
    </style>
     @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

@if(Auth::check())

    <script>
        window.Laravel = {!!json_encode([
            'isLoggedin' => true,
            'user' => $auth_user
        ])!!}
    </script>
@else
    <script>
        window.Laravel = {!!json_encode([
            'isLoggedin' => false
        ])!!}
    </script>
@endif

<div id="app">
<App/>
</div>
   
</body>
</html>