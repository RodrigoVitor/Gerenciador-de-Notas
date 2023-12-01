@extends('layouts.app')

@section('title', 'Cadastrar')
@section('styles')
    <link rel="stylesheet" href="/css/loginAndRegister.css">
@endsection
    
@section('content')
    <div class="container">
        <h2>Fazer Cadastro</h2>
        <form  onsubmit="preventDefault(event)">
            <div class="form-group">
                <label for="name">Name:</label>
                <input autocomplete="off" type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input autocomplete="off" type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input autocomplete="off" type="password" id="password" name="password" required>
            </div>
            <button id="button">Cadastrar</button>
            <a href="{{route('login')}}">Já possuo conta. Fazer login</a>
        </form>
        <p id="message" style="color:red; margin-top:5px; font-size:16px">{{(session('message')) ? session('message') : ''}}</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        function preventDefault (e) {
            e.preventDefault()
        }

        $(document).ready(function () {
            // Aguarda 3 segundos e esconde a mensagem
            setTimeout(function() {
                $("#message").fadeOut('slow');
            }, 3000); // Tempo em milissegundos (3 segundos no exemplo)
        });

        // Req
        $("#button").click(function () {
            if($("#email").val() !== "" && $("#password").val() !== "" && $("#name").val() !== "") {
                $.ajax({
                    url:'/register',
                    method: "POST",
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    headers: {
                        name: $("#name").val(),
                        email: $("#email").val(),
                        password: $("#password").val()
                    },
                    success: function (data) {
                        location.reload()
                    },
                    error: function (error) {
                        alert('E-mail já registrado.')
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