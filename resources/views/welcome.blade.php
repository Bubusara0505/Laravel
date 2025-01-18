<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Laravel</title>
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    </head>
    <body class="antialiased">
        <div class="wrapper">
            <div class="hrader-bg bg-indigo-300">
                <header class="header md:flex p-10 justify-between">
                    <a href="#">Logo</a>
                    <div class="menu">
                        <a class="ml-2" href="blog">Blog</a>
                        <a class="ml-2" href="#">Menu</a>
                        <a class="ml-2" href="#">Settigs</a>
                    </div>
                </header>
            </div>
        </div>
    </body>
</html>
