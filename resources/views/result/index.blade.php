@extends('layout.base')

@section('body')
<h3 class="text-center my-3">FINAL RESULT</h3>
<div>
    <div class="container bg-white">
        <div class="form-header p-3 font-weight-bold">
            <div class="form-group row">
                <dt class="col-sm-2">Name: </dt>
                <dd>{{ $student-> last_name }} {{ $student->first_name }}</dd>
            </div>
            <div class="form-group row">
                <dt class="col-sm-2">Phone: </dt>
                <dd>{{ $student-> phone }}</dd>
            </div>
            <div class="form-group row">
                <dt class="col-sm-2">Listening score: </dt>
                <div class="text-success">{{ $examDetail->score_listen }} / 20</div>
            </div>
            <div class="form-group row">
                <dt class="col-sm-2">Reading score: </dt>
                <div class="text-success">{{ $examDetail->score_read }} / 20</div>
            </div>
            <div class="form-group row">
                <dt class="col-sm-2">Exam time: </dt>
                <div>{{ $examDetail->exam_time }}</div>
            </div>
            <hr class="mb-4" style="border: 1px solid">
            <div class="form-group row">
                <dt class="col-sm-2">Writing result: </dt>
                <textarea class="w-100 col-6" readonly>{{ $examDetail->writing }}</textarea>
            </div>
            <div class="form-group row">
                <dt class="col-sm-2">Number of word: </dt>
                <dd>{{ str_word_count($examDetail->writing, 0) }}</dd>
            </div>
        </div>
    </div>
</div>
@endsection