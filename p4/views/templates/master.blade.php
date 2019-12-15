<!doctype html>
<html lang='en'>
<head>

    <title>@yield('title', $app->config('app.name'))</title>

    <meta charset='utf-8'>

    <link rel='shortcut icon' href='/favicon.ico'>

    <link href='/css/app.css' rel='stylesheet'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    @yield('head')

</head>
<body>

<header>
    <center>
    <img id='logo' src='/images/p4-logo.jpg'  alt='Dice Logo'>
    <h1><a href='/'>{{ $app->config('app.name') }}</a></h1>
    </center>
</header>

<main>
    <center>
    @yield('content')
    </center>
</main>

@yield('body')

</body>
</html>