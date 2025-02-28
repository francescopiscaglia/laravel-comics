@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Current Series</h2>

        <div class="comics-list">
            @foreach ($comics as $comic)
                <div class="comic">
                    <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                    <h3>{{ $comic['title'] }}</h3>
                </div>
            @endforeach
        </div>
    </div>
@endsection
