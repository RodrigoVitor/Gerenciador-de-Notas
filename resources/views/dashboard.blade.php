@extends('layouts.app')

@section('title', 'Página Inicial')
@section('content')

<h1>Bem vindo {{$user->name}}</h1>

{{-- <a href="{{route('logout')}}">Sair</a> --}}
    
@endsection






