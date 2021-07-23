@extends('layout.base')

@section('body')
<div class="content">
	<div class="col-sm-12 form-container sign-in-container d-flex">
				<form method="POST" class='w-30 form-login' novalidate action="{{ url('/') }}" accept-charset="UTF-8">
				@csrf
					<img src="{{ asset(url('logo_taec.jpg')) }}" alt="logo">
					<div class="social-container">
									<li  class="social"><i class="fab fa-facebook-f"></i></li>
									<li  class="social"><i class="fab fa-google-plus-g"></i></li>
									<li  class="social"><i class="fab fa-linkedin-in"></i></li>
								</div>
								@error('email')
									<div class="alert alert-danger">{{ $message }}</div>
								@enderror
					<input type="text" placeholder="Họ" name="first_name" value="{{ old('first_name') }}" class="{{ $errors->has('first_name') ? ' is-invalid' : '' }}"/>
					<input type="text" placeholder="Tên" name="last_name" value="{{ old('last_name') }}" class="{{ $errors->has('last_name') ? ' is-invalid' : '' }}"/>
					<input id="title" type="email" placeholder="Email" name="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" >
					<input type="number" placeholder="Số điện thoại" name="phone" value="{{ old('phone') }}" class="{{ $errors->has('phone') ? ' is-invalid' : '' }}"/>
					<button class="sign-in">Làm bài thi!</button>
				</form>
	</div>
</div>
@endsection

