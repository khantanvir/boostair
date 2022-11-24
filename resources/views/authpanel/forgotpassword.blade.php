@extends('authpanel')
@section('authpanel')
<div class="row justify-content-center h-100 align-items-center">
    <div class="col-md-6">
        <div class="authincation-content">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="auth-form">
                        <div class="text-center mb-3">
                            <a href="index.html"><img src="images/logo-full.png" alt=""></a>
                        </div>
                        <h4 class="text-center mb-4">Forgot Password</h4>
                        <form action="index.html">
                            <div class="mb-3">
                                <label><strong>Email</strong></label>
                                <input type="email" class="form-control" value="hello@example.com">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                            </div>
                        </form>
                        <div class="new-account mt-3">
                            <p>Login Here <a class="text-primary" href="{{ URL::to('login') }}">Click Here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop