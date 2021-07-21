@extends('layout.base')

@section('body')
<div class="container">
    {{ $user }}
    <form action="{{ url('/test') }}" method="POST">
        @csrf
        @include('test.listening')
        @include('test.reading')
        @include('test.writing')
    </form>
</div>

@endsection