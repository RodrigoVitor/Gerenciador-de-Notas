@extends('layouts.app')

@section('title', 'Página Inicial')

<style>
    div#form {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        min-height: 80vh;
    }

    form {
        margin-top: 25px;
        text-align: center;
    }

    form input {
        height: 40px;
        width: 480px;
        display: flex;
        font-size: 20px;
        padding: 10px;
        margin: 0 0 20px 0
    }

    form button {
        background-color: #333;
        color:white;
        font-size: 18px;
        padding: 10px;
        margin-top: 16px;
        cursor: pointer;
    }
    form button:hover {
        background-color: #ddd; 
        color: black; 
    }
</style>

@section('content')
<div id="form">
    <h1>Crie sua task</h1>
    <form action="{{ route('create') }}" method="post">
        @csrf
        <input type="text" name="task" placeholder="Digite aqui sua nota. Ex: Estudar inglês" required>
        <input type="text" name="category" placeholder="Se tiver uma categoria, digite qual é." value="">
        <button type="submit">Criar nota</button>
    </form>
</div>
@endsection