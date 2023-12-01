@extends('layouts.app')

@section('title', 'Cadastrar')
@section('styles')
    <link rel="stylesheet" href="/css/loginAndRegister.css">
@endsection
    
@section('content')
    <div class="container">
        <h2>Entrar</h2>
        <form action="{{route('login-user')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Entrar</button>
            <a href="{{route('register')}}">Não possui conta? Fazer meu cadastro</a>
        </form>
    </div>
@endsection