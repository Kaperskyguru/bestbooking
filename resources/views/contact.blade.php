@extends('layouts.app') 
@section('body-style', 'thebg') 
@section('footer-style', 'footerbgblack') 
@section('footer-style-2','footerbg3black')

@section('styles')
<!-- Updates -->
<link href="{{ asset('updates/update1/css/style01.css') }}" rel="stylesheet" media="screen">
<!-- bin/jquery.slider.min.css -->
<link rel="stylesheet" href="{{ asset('plugins/jslider/css/jslider.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('plugins/jslider/css/jslider.round.css') }}" type="text/css">
@endsection
 
@section('content')

{{-- <div id="dajy" class="mtslide sliderbg fixed cstyle11">
    <div id="map-canvas2"></div>
</div> --}}



<!-- WRAP -->
<div class="wrap cstyle03">

    <div class="container mt-200 z-index100">
        <div class="row">
            <div class="col-md-12">
                <div class="bs-example bs-example-tabs cstyle04">

                    <div class="tab-content">

                        <div class="col-md-4">
                            <form action="#">
                                <span class="opensans size24 slim">Contact</span>
                                <input type="text" placeholder="Name" class="form-control logpadding margtop10">
                                <input type="text" placeholder="Phone" class="form-control logpadding margtop20">
                                <input type="text" placeholder="E-mail" class="form-control logpadding margtop20">
                        </div>
                        <div class="col-md-4">
                            <textarea rows="9" class="form-control margtop10"></textarea>
                        </div>
                        <div class="col-md-4 opensans grey">
                            Address:<br/>
                            <span class="dark">
                            Stephen J. Jessen<br/>
                            2 Queen Anne Street<br/>
                            London, W1G 9LQ<br/>
                        </span>
                            <br/> Phone
                            <br/>
                            <p class="opensans size30 lblue xslim">+234-807-053-8333</p>
                            Email<br/>
                            <a href="mailto:office@company.com" class="green2">office@company.com</a>
                        </div>
                    </div>

                    <div class="searchbg3">
                        <button type="submit" class="btn-search right mr20">Send Email</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>



    <div class="lastminutecontact lcfix">
        <div class="container lmc">
            <br/> We Would Love To Hear From You, Through The Social Media Icons Below Or The Form Above
        </div>
    </div>
@endsection
 
@section('scripts')

    <!-- Javascript -->
    
    <!-- Custom Select -->
    <script type='text/javascript' src="{{ asset('js/lightbox.js') }}"></script>

    <!-- Googlemap -->
    {{-- <script src="{{ asset('assets/js/initialize-google-map-contact.js') }}"></script> --}}

    <!-- bin/jquery.slider.min.js-->
    <script type="text/javascript" src="{{ asset('plugins/jslider/js/jshashtable-2.1_src.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jslider/js/jquery.numberformatter-1.2.3.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jslider/js/tmpl.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jslider/js/jquery.dependClass-0.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jslider/js/draggable-0.1.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/jslider/js/jquery.slider.js') }}"></script>
    <!-- end -->
@endsection