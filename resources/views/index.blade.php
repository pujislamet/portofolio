<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Laravel 5</title>
    {!! Html::script(elixir('js/app.js')) !!}
    {!! Html::style(elixir('css/app.css')) !!}
</head>
<body>
    @yield('content')    
</body>
</html>