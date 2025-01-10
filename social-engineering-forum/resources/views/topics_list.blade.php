@extends('layout')

@section('title', 'Список тем')

@section('content')
    <h1>Список тем</h1>
    <ul>
        @foreach($topics as $topic)
            <li>{{ $topic->title }}</li>
        @endforeach
    </ul>
@endsection