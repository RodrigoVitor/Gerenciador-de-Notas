@extends('layouts.app')

@section('title', 'Cadastrar')
@section('styles')
    <link rel="stylesheet" href="/css/loginAndRegister.css">
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
        <p id="message" style="color:red; margin-top:5px; font-size:16px">{{(session('message')) ? session('message') : ''}}</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Aguarda 3 segundos e esconde a mensagem
            setTimeout(function() {
                $("#message").fadeOut('slow');
            }, 3000); // Tempo em milissegundos (3 segundos no exemplo)
        });
    </script>

@endsection