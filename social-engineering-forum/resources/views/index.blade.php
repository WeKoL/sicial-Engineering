@extends('layout')

@section('title', 'Главная')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Добро пожаловать в Social Engineering Forum</h1>
        <p class="lead">Здесь вы сможете найти интересную информацию о социальной инженерии.</p>
        <hr class="my-4">
        <p>Начните изучение прямо сейчас!</p>
        <a class="btn btn-primary btn-lg" href="/topics" role="button">Перейти к темам</a>
    </div>
@endsection