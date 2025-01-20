<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Create Card</title>
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

        <form action="{{ route('cards.store') }}" method="POST">
            @csrf
            <div>
                <label for="title">Название:</label>
                <input type="text" name="title" id="title" required>
            </div>
            <div>
                <label for="description">Описание:</label>
                <textarea name="description" id="description" required></textarea>
            </div>
            <button type="submit">Добавить карточку</button>
        </form>

        
    </div>
</body>
</html>
