@extends('layouts.user-app') 
@section('content')
<!-- 100% Width & Height container  -->
<div class="login-fullwidith">

    <!-- Login Wrap  -->
    <div class="login-wrap">
        <a href="{{ route('index') }}"><img src="{{ asset('images/logo.png') }}" class="login-img" alt="logo" /></a><br/>
        <div class="login-c1">
            <div class="cpadding50">
                <input type="text" class="form-control logpadding" placeholder="Username">
                <br/>
                <input type="text" class="form-control logpadding" placeholder="Password">
            </div>
        </div>
        <div class="login-c2">
            <div class="logmargfix">
                <div class="chpadding50">
                    <div class="alignbottom">
                        <button class="btn-search4" type="submit" onclick="errorMessage()">Submit</button>
                    </div>
                    <div class="alignbottom2">
                        <div class="checkbox">
                            <label>
                              <input type="checkbox">Remember
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-c3">
            <div class="left"><a href="{{ route('register') }}" class="whitelink">Register</a></div>
            <div class="right"><a href="{{ route('reset-page') }}" class="whitelink">Forgot password?</a></div>
        </div>
    </div>
    <!-- End of Login Wrap  -->

</div>
<!-- End of Container  -->
@endsection