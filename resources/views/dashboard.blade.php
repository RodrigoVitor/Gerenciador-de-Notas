@extends('layouts.app')

@section('title', 'Página Inicial')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/dashboard.css')}}">
@endsection
@section('content')
<main>
    <h1>Olá {{$user->name}}</h1>
    <form action="{{ route('create') }}" method="post">
        @csrf
        <input type="text" name="task" placeholder="Digite aqui sua nota. Ex: Estudar inglês" required>
        <input type="hidden" name="category" value="null">
        <button type="submit">Criar nota</button>
    </form>
    <div>
        @foreach ($tasks as $item)
            <div class="tasks">
                <div class="tasks-title">
                    {{$item->name}}
                </div>
                <div class="tasks-icons">
                    <form method="POST" action="">
                        @csrf
                        <button type="submit" style="background-color: transparent;">
                            <ion-icon class="icon-edit" name="create-outline">
                        </button>
                    </form>
                    <form method="POST" action="{{ route('destroy') }}">
                        @csrf
                        <input type="hidden" name="id" value="{{$item->id}}">
                        <button type="submit" style="background-color: transparent;">
                            <ion-icon class="icon-delete" name="trash-outline"></ion-icon>
                        </button>
                    </form>                    
                </div>
            </div>
        @endforeach
    </div>
</main>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

@endsection






