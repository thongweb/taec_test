@extends('layout.base')

@section('body')
<div class="container" id="container">
	<div class="form-container sign-in-container">
		<form method="POST" novalidate action="{{ url('/') }}" accept-charset="UTF-8">
		@csrf
			<h1>Sign in</h1>
			<div class="social-container">
            				<li  class="social"><i class="fab fa-facebook-f"></i></li>
            				<li  class="social"><i class="fab fa-google-plus-g"></i></li>
            				<li  class="social"><i class="fab fa-linkedin-in"></i></li>
            			</div>
            			@error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
			<input type="text" placeholder="First name" name="first_name" value="{{ old('first_name') }}" class="{{ $errors->has('first_name') ? ' is-invalid' : '' }}"/>
			<input type="text" placeholder="Last name" name="last_name" value="{{ old('last_name') }}" class="{{ $errors->has('last_name') ? ' is-invalid' : '' }}"/>
			<input id="title" type="email" placeholder="Email" name="email" class="{{ $errors->has('email') ? ' is-invalid' : '' }}" value="{{ old('email') }}" >
			<input type="number" placeholder="Phone" name="phone" value="{{ old('phone') }}" class="{{ $errors->has('phone') ? ' is-invalid' : '' }}"/>
			<button class="sign-in">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
			</div>
		</div>
	</div>
</div>

@endsection

