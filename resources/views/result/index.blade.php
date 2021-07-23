@extends('layout.base')

@section('body')
<div class="test-content">
    {{$student->last_name}}
    <div class="container bg-white">
            @include('test.listening')
            @include('test.reading')
            @include('test.writing')
    </div>
</div>
<script>
    
</script>
@endsection