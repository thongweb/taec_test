@extends('layout.base')

@section('body')
<div class="container">
    @include('test.listening')
    @include('test.reading')
    @include('test.writing')
</div>

@endsection