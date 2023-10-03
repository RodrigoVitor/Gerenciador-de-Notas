@extends('layouts.app')

@section('title', 'Cadastrar')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/loginAndRegister.css') }}">
@endsection
    
@section('content')
    <div class="container">
        <h2>Fazer Cadastro</h2>
        <form action="{{route('register-user')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit">Cadastrar</button>
            <a href="{{route('login')}}">Já possuo conta. Fazer login</a>
        </form>
    </div>
@endsection