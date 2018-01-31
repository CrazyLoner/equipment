@extends('layouts.skeleton_auth')

@section('title') Log In @endsection

@section('content')
    <div class="form">

        <ul class="tab-group">
            <li class="tab active"><a href="#login">Log In</a></li>
            <li class="tab"><a href="#signup">Sign Up</a></li>
        </ul>

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group form-material">
                    @if ($errors->any())
                        <span class="help-block alert alert-danger">
                            <strong>{{ $errors->first() }}</strong>
                        </span>
                    @endif
                </div>
            </div>
        </div>

        <div class="tab-content">
            <div id="login">
                <h1>Please log in!</h1>

                <form action="{{ route('login') }}" method="post">

                    {{ csrf_field() }}

                    <div class="field-wrap row">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email" id="login-email" name="email" required autocomplete="off"/>
                    </div>
                    <div class="field-wrap row">
                        <label>
                            Password<span class="req">*</span>
                        </label>
                        <input type="password" name="password" id="login-password" required autocomplete="off"/>
                    </div>

                    <div class="row">
                        {{--<label>
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>--}}
                        <div class="col-md-2">
                            <input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : ''}}>
                        </div>
                        <div class="col-md-4">
                            <label class="remember" for="remember">Remember Me</label>
                        </div>

                        <div class="col-md-6">
                            <p class="forgot"><a href="{{ route('password.request') }}">Forgot Password?</a></p>
                        </div>

                    </div>

                    <button class="button button-block"/>Log In</button>

                </form>

            </div>

            <div id="signup">
                <h1>Registration</h1>

                <form action="{{ route('register') }}" method="post">

                    {{ csrf_field() }}

                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                First Name<span class="req">*</span>
                            </label>
                            <input type="text" name="first_name" id="first-name" required autocomplete="off" />
                        </div>

                        <div class="field-wrap">
                            <label>
                                Last Name<span class="req">*</span>
                            </label>
                            <input type="text" name="last_name" id="last-name" required autocomplete="off"/>
                        </div>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Email Address<span class="req">*</span>
                        </label>
                        <input type="email"required name="email" id="email" autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Password<span class="req">*</span>
                        </label>
                        <input type="password" name="password" id="password" required autocomplete="off"/>
                    </div>

                    <div class="field-wrap">
                        <label>
                            Confirm Password<span class="req">*</span>
                        </label>
                        <input type="password" name="password_confirmation" id="password-confirm" required autocomplete="off"/>
                    </div>

                    <button type="submit" class="button button-block"/>Register</button>

                </form>

            </div>

        </div><!-- tab-content -->

    </div> <!-- /form -->
@endsection
