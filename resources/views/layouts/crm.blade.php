<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Название не задано')</title>
    @include('includes::cdn')
    @vite('resources/js/app.js')
    @vite('resources/sass/crm/app.sass')
</head>
<body>
    <div id="app">
        <x-crm.navbar></x-crm.navbar>
        <div class="container py-5">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <x-crm.sidebar></x-crm.sidebar>
                </div>
                <div class="col-12 col-lg-9">
                    <h2>@yield('title')</h2>
                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</body>
</html>