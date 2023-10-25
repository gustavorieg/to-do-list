<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="/css/style.css">
    <script src="https://kit.fontawesome.com/9e57034c47.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <div class="container-menu">
                <div class="logo">
                    <a href=""><i class="fa-solid fa-clipboard-list"></i></a>
                </div>
                <div class="opcoes">
                    <a href="/"><li><i class="fa-solid fa-gauge"></i></li></a>
                    <a href="/"><li><i class="fa-solid fa-folder"></i></li></a>
                    <a href="/"><li><i class="fa-solid fa-user-group"></i></li></a>
                </div>
                <div class="sair">
                    <a href=""><i class="fa-solid fa-door-open"></i></a>
                </div>
            </div>
        </nav>
    </header>

@yield('content')
</body>
</html>