@extends('layout.base')

@section('body')
<div class="content">
	<div class="col-sm-12 form-container sign-in-container d-flex">
		<form method="POST" class='w-30 form-login' novalidate action="{{ url('/') }}" accept-charset="UTF-8">
			@csrf
			<img src="{{ asset(url('logo_taec.jpg')) }}" alt="logo">
			<div class="social-container">
				<li class="social"></li>
				<li class="social"></li>
				<li class="social"></li>
			</div>
			@if ($errors->any())
			@foreach ($errors->all() as $error)
			<div class="alert alert-danger">{{ $error }}</div>
			@endforeach
			@endif
			<p><label> Họ tên<br>
					<span class="wpcf7-form-control-wrap your-name"><input type="text" 
							name="first_name" value="{{ old('first_name') }}"
							class="{{ $errors->has('first_name') ? ' is-invalid' : '' }}" /></span> </label></p>
			<p><label> Số điện thoại:<br>
					<span class="wpcf7-form-control-wrap tel-606"><input type="text" 
							name="phone" value="{{ old('phone') }}"
							class="{{ $errors->has('phone') ? ' is-invalid' : '' }}" /></span></label></p>
			<p><label> Địa chỉ Email<br>
					<span class="wpcf7-form-control-wrap your-email"><input id="title" type="email"
							name="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
							value="{{ old('email') }}"></span> </label></p>
			<p><label> Tình trạng học tập tại TAEC<br>
					<span class="wpcf7-form-control-wrap menu-693"><select name="state"
							class="wpcf7-form-control wpcf7-select" aria-invalid="false">
							<option value="">---</option>
							<option value="Đã học">Đã học</option>
							<option value="Đang học">Đang học</option>
							<option value="Chưa học">Chưa học</option>
						</select></span></label></p>
			<p><label> Khóa học quan tâm<br>
					<span class="wpcf7-form-control-wrap menu-693"><select name="course"
							class="wpcf7-form-control wpcf7-select" aria-invalid="false">
							<option value="">---</option>
							<option value="TOEIC">TOEIC</option>
							<option value="IELTS">IELTS</option>
							<option value="GIAO TIẾP">GIAO TIẾP</option>
							<option value="ANH VĂN PHỔ THÔNG">ANH VĂN PHỔ THÔNG</option>
						</select></span></label></p>
			<p><label> Cơ sở muốn đăng ký:<br>
					<span class="wpcf7-form-control-wrap menu-693"><select name="branch"
							class="wpcf7-form-control wpcf7-select" aria-invalid="false">
							<option value="">---</option>
							<option value="Quận 7">Quận 7</option>
							<option value="Quận 3">Quận 3</option>
							<option value="Quận 10">Quận 10</option>
							<option value="Tân Bình">Tân Bình</option>
							<option value="Gò Vấp">Gò Vấp</option>
							<option value="Online">Online</option>
						</select></span></label></p>
			<p><button type="submit" class="">Gửi thông tin</button></p>
		</form>
	</div>
</div>
@endsection