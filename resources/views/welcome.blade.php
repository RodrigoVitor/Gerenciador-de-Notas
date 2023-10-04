@extends('layouts.app')

@section('title', 'Bem vindo ao gerenciador de notas')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
@endsection

@section('content')
    <section class="section">
        <img src="{{ asset('logo.png')}}" alt="logo da nota">
        <h1>Bem vindo ao <span>Gerenciador de Notas</span></h1>
        <p>Aqui você pode gerenciar suas notas, para fazer isso basta fazer o cadastro</p>
    </section>
@endsection