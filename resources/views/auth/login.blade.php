@extends('layouts.app')

@section('title', 'Cadastrar')
@section('styles')
    <link rel="stylesheet" href="/css/loginAndRegister.css">
@endsection
    
@section('content')
    <div class="container">
        <h2>Entrar</h2>
        <form onsubmit="preventDefault(event)">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required autocomplete="off">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required autocomplete="off">
            </div>
            <button id="button">Entrar</button>
            <a href="{{route('register')}}">Não possui conta? Fazer meu cadastro</a>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $("#button").click(function () {
            if($("#email").val() !== "" && $("#password").val() !== "") {
                $.ajax({
                    url:'/login',
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    headers: {
                        email: $("#email").val(),
                        password: $("#password").val()
                    },
                    success: function (data) {
                        location.reload()
                    },
                    error: function (error) {
                        alert('Dados incorretos')
                        $("#email").val('')
                        $("#password").val('')
                    }
                });
            }
        });

        function preventDefault (e) {
            e.preventDefault()
        }
    </script>
@endsection