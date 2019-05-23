@extends('layouts.user-app') 
@section('content')
<!-- 100% Width & Height container  -->
<div class="login-fullwidith">

    <!-- Login Wrap  -->
    <div class="login-wrap">
        <a href="index.html"><img src="{{ asset('images/logo.png') }}" class="login-img" alt="logo" /></a><br/>
        <div class="login-c1" style="height: 147px!important;">
            <div class="cpadding50">
                <input type="text" class="form-control logpadding" placeholder="Enter email to reset password">
            </div>
        </div>
        <div class="login-c2" style="height: 174px!important;">
            <div class="logmargfix">
                <div class="chpadding50">
                    <div class="alignbottom">
                        <button class="btn-search4" type="submit" onclick="errorMessage()">Submit</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="login-c3" style="margin-top: 221px!important;">
            <div class="left"><a href="{{ route('register') }}" class="whitelink">Register</a></div>
            <div class="right"><a href="{{ route('login') }}" class="whitelink">Login</a></div>
        </div>
    </div>
    <!-- End of Login Wrap  -->

</div>
<!-- End of Container  -->
@endsection