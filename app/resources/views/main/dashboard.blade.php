@extends('layouts.main')

@section('content')
    <h1>Здравствуйте {{$user->name}}</h1>
    <div class="col-xs-12 col-md-6">
        Тут скоро будет Ваша статистика
    </div>
    <div class="col-xs-12 col-md-6">
        @include("inc.main.block-list")
    </div>
@endsection

