@extends('layout.base')

@section('body')
<div class="test-content">
    <div class="container bg-white">
        {{ $user }}
        <form action="{{ url('/test') }}" method="POST">
            @csrf
            @include('test.listening')
            @include('test.reading')
            @include('test.writing')
        </form>
    </div>
</div>

@endsection