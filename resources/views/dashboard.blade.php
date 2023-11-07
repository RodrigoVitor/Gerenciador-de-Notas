@extends('layouts.app')

@section('title', 'Página Inicial')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
@section('content')
<main>
    <h1>Olá {{$user->name}}</h1>
    <form action="" method="post">
        <input type="text" placeholder="Digite aqui sua nota. Ex: Estudar inglês">
        <button type="submit">Criar nota</button>
    </form>
    <div>
        <div class="tasks">
           <div class="tasks-title">
            Estudar inglês
           </div>
           <div class="tasks-icons">
            <a href="#" class="icon-edit"><ion-icon name="create-outline"></ion-icon></a>
            <a href="#" class="icon-delete"><ion-icon name="trash-outline"></ion-icon></a>
           </div>
        </div>
    </div>
</main>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

@endsection






