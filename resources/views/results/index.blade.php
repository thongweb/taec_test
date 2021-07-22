@extends('layout.base')

@section('body')
<div class="test-content">
    <div class="container bg-white">
            @include('test.listening')
            @include('test.reading')
            @include('test.writing')
    </div>
</div>

@endsection