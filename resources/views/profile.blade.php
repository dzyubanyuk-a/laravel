@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>


    <p><label>Список всех кодов пользователя: </label><a href="/list">Открыть</a></p>
    <div class = "public_codes">
        <h3>Список последних 10 публичных записей</h3>
        @foreach ($pastes[0] as $paste)

            <p><label>Название кода: </label><a href="{{ route('token', ['token'=> $paste->token])}}">{{$paste->title}}</a></p
        @endforeach
    </div>

    <div class = "codes_user">
        <h3>Список последних 10 записей пользователя</h3>
        @foreach ($pastes[1] as $paste)

            <p><label>Название кода: </label><a href="{{ route('token', ['token'=> $paste->token])}}">{{$paste->title}}</a></p
        @endforeach
    </div>


@endsection

