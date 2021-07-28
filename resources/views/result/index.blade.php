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
                <div class="text-success">@if(is_null($examDetail)) 0 @else {{ $examDetail->score_listen }} @endif / 20
                <span class='text-white'>(@if(!is_null($examDetail) && $examDetail->score_listen <= 7)
                A1
                @elseif (!is_null($examDetail) && $examDetail->score_listen > 7 && $examDetail->score_listen <= 14)
                A2
                @elseif (!is_null($examDetail) && $examDetail->score_listen > 14)
                B1
                @endif)
                </span>
                </div>
            </div>
            <div class="form-group row">
                <dt class="col-sm-2">Listening score: </dt>
                <div class="text-success">@if(is_null($examDetail)) 0 @else {{ $examDetail->score_read }} @endif / 20
                <span class='text-white'>(@if(!is_null($examDetail) && $examDetail->score_read <= 7)
                A1
                @elseif (!is_null($examDetail) && $examDetail->score_read > 7 && $examDetail->score_read <= 14)
                A2
                @elseif (!is_null($examDetail) && $examDetail->score_read > 14)
                B1
                @endif)
                </span>
                </div>
            </div>

            <div class="form-group row">
                <dt class="col-sm-2">Exam time: </dt>
                <div>@if(is_null($examDetail)) 2h 45m @else {{ $examDetail->exam_time }} @endif</div>
            </div>
            <hr class="mb-4" style="border: 1px solid">
            <div class="form-group row">
                <dt class="col-sm-2">Writing result: </dt>
                <textarea class="w-100 col-6" readonly>@if(is_null($examDetail))  @else {{ $examDetail->writing }} @endif</textarea>
            </div>
            <div class="form-group row">
                <dt class="col-sm-2">Number of word: </dt>
                <dd>@if(is_null($examDetail)) 0 @else {{ str_word_count($examDetail->writing, 0) }} @endif</dd>
            </div>
        </div>
    </div>
</div>
@endsection