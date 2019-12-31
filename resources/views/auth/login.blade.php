@extends('layouts.app-log')

@section('content')
        <div class="container">
            <div id="app">
                <div class="login-form">
                    <div class="card ">
                        <div class="card-body">
                            <div class="main-logo text-center my-3">
                                <img src="http://www.madcoderz.com/madol/asset/images/logo-color.svg" alt="madol">
                            </div>
                            <p class="text-center mb-3">Sign in to your account</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="E-mail">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
									</div>
									<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
									@enderror
									</div>
                                <div class="row form-group mt-3">
                                    <div class="col-6">
                                        <div class="custom-control custom-checkbox checkbox-info float-left mb-1">
                                            <input type="checkbox" class="custom-control-input form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            <label class="custom-control-label" for="remember">Remember Me!</label>
                                        </div>
                                    </div>
                                    <div class="col-6 text-right">
                                        <a href="{{ route('password.request') }}" class="text-forgot"><i class="icon-lock"></i> Forgot password?</a>
                                    </div>
                                </div>
                                <div class="form-group my-3 row">
                                    <div class="col-12 text-right">
                                        <input type="submit" class="btn btn-custom btn-fullwidth" data-id="dashboard" value="Submit">
                                    </div>
                                </div>
                            </form>
                            <div class="form-group mb-0 mt-2">
                                <div class="col-12 text-center text-muted text-signup">
                                Don't have an account? <a href="{{ route('register') }}" class="text-info ml-2"><b>Sign Up</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
