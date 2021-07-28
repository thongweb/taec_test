@extends('layout.base')

@section('body')
<div class="content">
	<div class="col-sm-12 form-container sign-in-container d-flex">
		<form method="POST" class='w-30 form-login' novalidate action="{{ url('/') }}" accept-charset="UTF-8">
			@csrf
			<img src="{{ asset(url('logo_taec.jpg')) }}" alt="logo">
			<div class="social-container">
				<li class="social"><i class="fab fa-facebook-f"></i></li>
				<li class="social"><i class="fab fa-google-plus-g"></i></li>
				<li class="social"><i class="fab fa-linkedin-in"></i></li>
			</div>
			@if ($errors->any())
			@foreach ($errors->all() as $error)
			<div class="alert alert-danger">{{ $error }}</div>
			@endforeach
			@endif
			<p><label> Tên của bạn<br>
					<span class="wpcf7-form-control-wrap your-name"><input type="text" placeholder="Họ"
							name="first_name" value="{{ old('first_name') }}"
							class="{{ $errors->has('first_name') ? ' is-invalid' : '' }}" /></span> </label></p>
			<p><label> Địa chỉ Email<br>
					<span class="wpcf7-form-control-wrap your-email"><input id="title" type="email" placeholder="Email"
							name="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
							value="{{ old('email') }}"></span> </label></p>

			<p><label> Số điện thoại:<br>
					<span class="wpcf7-form-control-wrap tel-606"><input type="number" placeholder="Số điện thoại"
							name="phone" value="{{ old('phone') }}"
							class="{{ $errors->has('phone') ? ' is-invalid' : '' }}" /></span></label></p>
			<p><label> Khóa học cần tư vấn / Điểm số mong muốn:<br>
					<span class="wpcf7-form-control-wrap text-38"><input type="text" placeholder="Tên" name="last_name"
							value="{{ old('last_name') }}"
							class="{{ $errors->has('last_name') ? ' is-invalid' : '' }}" /></span></label></p>
			<p><label> Cơ sở muốn đăng ký:<br>
					<span class="wpcf7-form-control-wrap menu-693"><select name="menu-693"
							class="wpcf7-form-control wpcf7-select" aria-invalid="false">
							<option value="">---</option>
							<option value="Quận 3">Quận 3</option>
							<option value="Quận 7">Quận 7</option>
							<option value="Quận 10">Quận 10</option>
							<option value="Tân Bình">Tân Bình</option>
							<option value="Gò Vấp">Gò Vấp</option>
						</select></span></label></p>
			<p><button type="submit" class="">Gửi thông tin</button></p>
		</form>
	</div>
</div>
@endsection