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
                    <a href="/"><i class="fa-solid fa-gauge"></i></a>
                    <a href="tasks" class=@yield('TasksAtivo')><i class="fa-solid fa-folder"></i></a>
                    <a href="/"><i class="fa-solid fa-user-group"></i></a>
                </div>
                <div class="sair">
                    <a href=""><i class="fa-solid fa-door-open"></i></a>
                </div>
            </div>
        </nav>
    </header>

    
<div class="container">
    <div class="container-conteudo">
        <div class="navbar-top">
            <div class="navbar-top-conteudo">
                <div class="voltar-inicio">
                    <a href="/"><i class="fa-solid fa-arrow-left-long"></i> Voltar ao ínicio</a>
                </div>
                <div class="user-menu">
                    <div class="notificacao">
                        <a href="/"><i class="fa-solid fa-bell"></i></a>
                    </div>
                    <div class="usuario">
                        <a href="/"><i><i class="fa-solid fa-circle-user"></i></i></a>
                    </div>
                </div>
            </div>
        </div>
        @yield('content') 
    </div>
</div>

    <script src="/js/script.js"></script>
    <script src="/js/drag&drop.js"></script>
</body>
</html>