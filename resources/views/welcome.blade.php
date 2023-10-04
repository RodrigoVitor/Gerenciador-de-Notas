@extends('layouts.app')

@section('title', 'Bem vindo ao gerenciador de notas')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection

@section('content')
    <section class="section">
        <img src="{{ asset('logo.png')}}" alt="logo da nota">
        <h1>Bem vindo ao <span>Gerenciador de Notas</span></h1>
        @guest
            <p>Aqui você pode gerenciar suas notas, para fazer isso basta fazer o cadastro <a href="{{route('login')}}">Clicando aqui</a></p>
        @endguest
    </section>
@endsection