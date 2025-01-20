<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
<div class="wrapper">
            <div class="hrader-bg bg-indigo-300">
                <header class="header md:flex p-10 justify-between">
                    <a href="/">Logo</a>
                    <div class="menu">
                        <a class="ml-2" href="card">Cards</a>
                        <a class="ml-2" href="#">Menu</a>
                        <a class="ml-2" href="#">Settigs</a>
                    </div>
                </header>
            </div>
        </div>
        
        <main class="main  inline-block">
            <div class="grid grid-cols-2 gap-4 ">
            @foreach ($cards as $card)
            <div class="p-5 m-3 shadow-2xl">
                <h1>{{$card->Title}}</h1>
                <p>{{$card->Desc}}</p>
                </div>
            @endforeach
            </div>
        </main>
</body>
</html>


