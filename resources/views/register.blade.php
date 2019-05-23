@extends('layouts.user-app') 
@section('content')
<!-- 100% Width & Height container  -->
<div class="register-fullwidth">

    <!-- Login Wrap  -->
    <div class="login-wrap">
        <a href="{{route('index')}}"><img src="{{ asset('images/logo.png') }}" class="login-img" alt="logo" /></a><br/><br><br><br><br><br><br>
        <div class="register-c1">
            <div class="cpadding50">
                <input type="text" class="form-control logpadding" placeholder="Full Name">
                <br/>
                <input type="text" class="form-control logpadding" placeholder="Email">
                <br/>
                <input type="text" class="form-control logpadding" placeholder="Phone Number">
                <br/>
                <input type="text" class="form-control logpadding" placeholder="Password">
            </div>
        </div>
        <div class="register-c2">
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
        <div class="register-c3">
            <div class="left"><a href="{{route('login')}}" class="whitelink">Login</a></div>
            <div class="right"><a href="{{route('reset-page')}}" class="whitelink">Forgot password?</a></div>
        </div>
    </div>
    <!-- End of Login Wrap  -->

</div>
<!-- End of Container  -->
@endsection