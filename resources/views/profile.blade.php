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



    <div class = "public_codes">
        <h3>Список последних 10 публичных записей</h3>
        @foreach ($codes as $code)

            <p><label>Название кода: </label><a href="/{{$code->token}}">{{$code->title}}</a></p
        @endforeach
    </div>

    <div class = "codes_user">
        <h3>Список последних 10 записей пользователя</h3>
        @foreach ($user_codes as $code)

            <p><label>Название кода: </label><a href="/{{$code->token}}">{{$code->title}}</a></p
        @endforeach



    </div>
@endsection
</div>
