@extends('layout.base')

@section('body')
<h3 class="text-center my-3">FINAL RESULT</h3>
<div>
    <div class="container bg-white">
        <div class="form-header p-3 font-weight-bold">
            <span class="text-warning">Cảm ơn <span class="font-weight-bold">{{ $student->first_name }}</span> đã hoàn thành bài test. Kết quả bài thi sẽ được thầy cô liên hệ trực tiếp tư vấn + Test Speaking nhanh để giúp bạn đánh giá đầy đủ kỹ năng và lựa chọn khóa học phù hợp nhất</span>
            <div class="form-group mt-4 row">
                <dt class="col-sm-2">Name: </dt>
                <dd>{{ $student->first_name }}</dd>
            </div>
            <div class="form-group row">
                <dt class="col-sm-2">Phone: </dt>
                <dd>{{ $student-> phone }}</dd>
            </div>
            <div class="form-group row">
                <dt class="col-sm-2">Listening score: </dt>
                <div class="text-success">@if(is_null($examDetail)) 0 @else {{ $examDetail->score_listen }} @endif / 20
                </span>
                </div>
            </div>
            <div class="form-group row">
                <dt class="col-sm-2">Listening score: </dt>
                <div class="text-success">@if(is_null($examDetail)) 0 @else {{ $examDetail->score_read }} @endif / 20
                </div>
            </div>
            <div class="form-group row">
                <dt class="col-sm-2">Rank: </dt>
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
            <div class="form-group row">
                <dt class="col-sm-2">Course: </dt>
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