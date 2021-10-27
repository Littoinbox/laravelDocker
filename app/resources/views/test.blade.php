@extends('layouts.app')

@section('content')
    <div class="container">
        <test-component :urldata="{{json_encode($url_data)}}"></test-component>
    </div>
@endsection
