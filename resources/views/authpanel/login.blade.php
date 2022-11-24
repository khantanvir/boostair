@extends('authpanel')
@section('authpanel')
<div class="row justify-content-center h-100 align-items-center">
    <div class="col-md-6">
        <div class="authincation-content">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="auth-form">
                        <div class="text-center mb-3">
                            <a href="index.html"><img src="{{ asset('backend/images/logo-full.png') }}" alt=""></a>
                        </div>
                        <h4 class="text-center mb-4">Admin Login</h4>
                        <form method="POST" action="{{ URL::to('admin-login') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="mb-1"><strong>Email</strong></label>
                                <input name="email" type="email" class="form-control" value="{{ old('email') }}" placeholder="hello@example.com">
                                @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label class="mb-1"><strong>Password</strong></label>
                                <input name="password" type="password" class="form-control" placeholder="password">
                                @if ($errors->has('password'))
                                    <span class="text-danger">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                            </div>
                        </form>
                        <div class="new-account mt-3">
                            <p>Forgot Your Password? <a class="text-primary" href="{{ URL::to('forgot-password') }}">Click Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop