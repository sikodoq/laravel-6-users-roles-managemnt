@extends('layouts.app-log')

@section('content')
        <div class="container">
            <div id="app">
                <div class="login-form">
                    <div class="card ">
                        <div class="card-body">
                            <div class="main-logo text-center my-3">
                                <img src="http://www.madcoderz.com/madol/asset/images/user/thumb/default-thumb.jpg" alt="madol">
                            </div>
                            <p class="text-center text-muted mb-3">Create your account</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus placeholder="Name">
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                </div>
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
                                <div class="form-group {{ $errors->has('password-confirm') ? ' has-error' : '' }}">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password">
                                </div>
                                <div class="form-group my-3 row">
                                    <div class="col-12 text-right">
                                        <input type="submit" class="btn btn-custom btn-fullwidth" data-id="dashboard" value="Submit">
                                    </div>
                                </div>
                            </form>
                            <div class="form-group mb-0 mt-2">
                                <div class="col-12 text-center text-muted text-signup">
                                Already have an account? <a href="{{ route('login') }}" class="text-info ml-2"><b>Sign In</b></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
