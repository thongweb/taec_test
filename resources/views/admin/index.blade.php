@extends('layout.base')

@section('body')
<h3 class="text-center my-3">FINAL RESULT</h3>
<div>
    <div class="container bg-white">
        <div class="form-header p-3 font-weight-bold d-flex flex-column align-items-center">
            <div class="result-content col-7">
                <div class="col-12 form-group mt-4 row">
                    <dt class="col-4">Name: </dt>
                    <dd>{{ $student->first_name }}</dd>
                </div>
                <div class="col-12 form-group row">
                    <dt class="col-4">Phone: </dt>
                    <dd>{{ $student-> phone }}</dd>
                </div>
                <div class="col-12 form-group row">
                    <dt class="col-4">Listening score: </dt>
                    <div class="text-success">@if(is_null($examDetail)) 0 @else {{ $examDetail->score_listen }} @endif / 20
                    </span>
                    </div>
                </div>
                <div class="col-12 form-group row">
                    <dt class="col-4">Listening score: </dt>
                    <div class="text-success">@if(is_null($examDetail)) 0 @else {{ $examDetail->score_read }} @endif / 20
                    </div>
                </div>
                <div class="col-12 form-group row">
                    <dt class="col-4">Rank: </dt>
                    <div class="text-success">(@if(!is_null($examDetail) && (((int) ($examDetail->score_listen + $examDetail->score_read) / 2)  <= 6))
                    A1
                    @elseif (!is_null($examDetail) && (((int) ($examDetail->score_listen + $examDetail->score_read) / 2)  > 6) && (((int) ($examDetail->score_listen + $examDetail->score_read) / 2)  <= 11))
                    A2
                    @elseif (!is_null($examDetail) && (((int) ($examDetail->score_listen + $examDetail->score_read) / 2)  > 11) && (((int) ($examDetail->score_listen + $examDetail->score_read) / 2)  <= 16))
                    A2+
                    @elseif (!is_null($examDetail) && (((int) ($examDetail->score_listen + $examDetail->score_read) / 2)  > 17) && (((int) ($examDetail->score_listen + $examDetail->score_read) / 2)  <= 20))
                    B1
                    @endif)
                    </div>
                </div>
                <div class="col-12 form-group row">
                    <dt class="col-4">Course: </dt>
                    <div class="tex-white">@if(!is_null($examDetail) && (((int) ($examDetail->score_listen + $examDetail->score_read) / 2)  <= 6))
                    IELTS PLATFORM
                    @elseif (!is_null($examDetail) && (((int) ($examDetail->score_listen + $examDetail->score_read) / 2)  > 6) && (((int) ($examDetail->score_listen + $examDetail->score_read) / 2)  <= 11))
                    IELTS DEPARTURE
                    @elseif (!is_null($examDetail) && (((int) ($examDetail->score_listen + $examDetail->score_read) / 2)  > 11) && (((int) ($examDetail->score_listen + $examDetail->score_read) / 2)  <= 16))
                    IELTS SPEED UP
                    @elseif (!is_null($examDetail) && (((int) ($examDetail->score_listen + $examDetail->score_read) / 2)  > 17) && (((int) ($examDetail->score_listen + $examDetail->score_read) / 2)  <= 20))
                    IELTS DESTIONATION
                    @endif
                    </div>
                </div>
                <div class="col-12 form-group row">
                    <dt class="col-4">Exam time: </dt>
                    <div>@if(is_null($examDetail)) 45m @else {{ $examDetail->exam_time }} @endif</div>
                </div>
                <hr class="mb-4" style="border: 1px solid">
                <div class="col-12 form-group row align-items-center">
                    <dt class="col-4">Writing result: </dt>
                    <a class="btn btn-primary" href=@if(!is_null($examDetail)) "{{url('writingResultPDF/'.$examDetail->id)}}" @endif>Download PDF</a>
                </div>
                <div class="col-12 form-group row mb-5">
                    <dt class="col-4">Total words: </dt>
                    <dd>@if(is_null($examDetail)) 0 @else {{ str_word_count($examDetail->writing, 0) }} @endif</dd>
                </div>

                <div class="text-center">
                    <a href="{{url('/admin/load-database/taec-test/all')}}" class="btn btn-warning font-weight-bold">TRỞ VỀ</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection