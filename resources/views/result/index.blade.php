@extends('layout.base')

@section('body')
<h3 class="text-center my-3">FINAL RESULT</h3>
<div>
<div class="text-center d-flex flex-column align-items-center">
                <span class="text-warning">Cảm ơn <span class="font-weight-bold">{{ $student->first_name }}</span> đã hoàn thành bài test.</span>
                <span class="text-warning col-8">Kết quả bài thi sẽ được thầy cô liên hệ trực tiếp tư vấn + Test Speaking nhanh để giúp bạn đánh giá đầy đủ kỹ năng và lựa chọn khóa học phù hợp nhất</span>
            </div>
</div>
@endsection