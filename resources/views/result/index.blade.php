@extends('layout.base')

@section('body')
<h3 class="text-center my-3">FINAL RESULT</h3>
<div>
    <div class="text-center d-flex flex-column align-items-center">
        <span class="text-thanks">Cảm ơn <span class="text-warning font-weight-bold">{{ $student->first_name }}</span> đã hoàn thành bài kiểm tra trình độ đầu vào.</span>
            <span class="text-thanks col-11 col-sm-7">TAEC sẽ liên hệ báo kết quả và tư vấn lộ trình học tập cho bạn trong vòng 24 giờ kể từ thời điểm nộp bài kiểm tra (không tính Chủ nhật và các ngày nghỉ, lễ Tết).</span>
            <span class="text-thanks col-11 col-sm-8 my-5">Trong trường hợp cần hỗ trợ nhanh nhất, vui lòng liên hệ Hotline <a href="tel:0936892199">093.689.2199</a> hoặc để lại tin nhắn tại <a href="m.me/taec.edu.vn">m.me/taec.edu.vn</a>.</span>
        </div>
    </div>
</div>
</div>
@endsection