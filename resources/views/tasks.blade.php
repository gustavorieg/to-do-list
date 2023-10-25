@extends('layouts.main')

@section('title', "To-Do List")

@section('TasksAtivo', "ativo")

@section('content')

<div class="container-tasks">
    <div class="conteudo-tasks">
        <div class="titulo-desc">
            <div class="titulo">
                <h1>Tarefas</h1>
                <p>Última modificação realizada por <span>Gustavo Rieg</span>, hoje as 13:00.</p>
            </div>
        </div>
        <div class="input-tasks">
            <div class="pesquisa-tasks">
                <input type="text" placeholder="Pesquisar">
                <button><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
        </div>
    </div>
    <div class="container-menus-tasks">
        <div class="conteudo-menus-tasks">
            <div class="menu-task">
                <div class="tit-add-menu">
                    <div class="tit-menu">
                        <p>To do<span>(2)</span></p>
                    </div>
                    <div class="add-menu">
                        <button><i class="fa-solid fa-plus"></i> Add Tarefa</button>
                    </div>
                </div>
            </div>
            <div class="menu-task">
                <div class="tit-add-menu">
                    <div class="tit-menu">
                        <p>Em progresso<span>(5)</span></p>
                    </div>
                    <div class="add-menu">
                        <button><i class="fa-solid fa-plus"></i> Add Tarefa</button>
                    </div>
                </div>
            </div>
            <div class="menu-task">
                <div class="tit-add-menu">
                    <div class="tit-menu">
                        <p>Em revisão<span>(8)</span></p>
                    </div>
                    <div class="add-menu">
                        <button><i class="fa-solid fa-plus"></i> Add Tarefa</button>
                    </div>
                </div>
            </div>
            <div class="menu-task">
                <div class="tit-add-menu">
                    <div class="tit-menu">
                        <p>Completado<span>(20)</span></p>
                    </div>
                    <div class="add-menu">
                        <button><i class="fa-solid fa-plus"></i> Add Tarefa</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection