@extends('layouts.app')


@section('content')

<div class = "full">
    <div class = "list">
        <p><label>Список всех кодов пользователя: </label><a href="/list">Открыть</a></p>
    </div>


    <div class = "public_codes">
        <h3>Список последних 10 публичных записей</h3>
        @foreach ($pastes[0] as $paste)

            <p><label>Название кода: </label><a href="{{ route('token', ['token'=> $paste->token])}}">{{$paste->title}}</a></p>
        @endforeach
    </div>

    <div class = "codes_user">
        <h3>Список последних 10 записей пользователя</h3>
        @foreach ($pastes[1] as $paste)

            <p><label>Название кода: </label><a href="{{ route('token', ['token'=> $paste->token])}}">{{$paste->title}}</a></p>
        @endforeach
    </div>
</div>

@endsection

