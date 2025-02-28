{{-- use layout --}}
@extends('layouts.app')

@section('content')
    <div class="card">
        <h1 class="card-title">Home page</h1>
        <div class="btn btn-primary">prova</div>
    </div>

    @foreach ($comics as $comic)
        <x-comic-card :comic="$comic" />
    @endforeach
@endsection
