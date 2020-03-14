<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maratona - @yield('title')</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{ url('/css/style.css') }}">
</head>

<body>
    <header>
        <h1>Maratona de Programação ETECIA</h1>
    </header>
    
    <div class="container">
        <aside class="box">
            @yield('menu')
        </aside>

        <main>
            @yield('main')
        </main>
    </div>
</body>

</html>