@extends('layouts.app')
@section('body-style', 'thebg')
@section('footer-style', 'footerbgblack')
@section('footer-style-2',
'footerbg3black')
@section('styles')

<!-- bin/jquery.slider.min.css -->
<link rel="stylesheet" href="{{ asset('plugins/jslider/css/jslider.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('plugins/jslider/css/jslider.round.css') }}" type="text/css">
@endsection

@section('content')
<div class="container breadcrub">
    <div class="clearfix"></div>
</div>

<!-- CONTENT -->
<div class="container">
    <script charset="utf-8" src="//www.travelpayouts.com/widgets/a3b3c92086f330d94efc1fd771db4e8a.js?v=1736" async>
    </script>

    <div class="">
        <div class="TPWL-front-content-weedle text-center">
            <h2 class="TPWL-front-content-weedle-title"><span class="translation_missing"
                    title="translation missing: en.fresh_white_labels.front_page_content.weedle_title">Best hotels
                    around the world!</span></h2>
        </div>
    </div>

    <div class="container pagecontainer offset-0">

        <script async
            src="//www.travelpayouts.com/blissey/scripts_en.js?categories=5stars%2Csea_view%2Cluxury&id=30553&type=compact&currency=usd&host=hotels.bestbooking.online%2Fhotels&marker=217105.&limit=10&powered_by=false"
            charset="UTF-8"></script>
    </div>
    <!-- END OF container-->

    <div class="lastminute3">
        <div class="container">
            <img src="images/rating-4.png" alt=""><br> LAST MINUTE: <b>Barcelona</b> - 2 nights - Flight+4* Hotel, Dep
            27h Aug from $209/person<br>
            <form action="http://titanicthemes.com/travel/blue/z-hotels-list.html">
                <button class="btn iosbtn" type="submit">Read more</button>
            </form>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <script async
                    src="//www.travelpayouts.com/blissey/scripts_en.js?categories=5stars%2Csea_view%2Cluxury&id=30553&type=full&currency=usd&host=hotels.bestbooking.online%2Fhotels&marker=217105.&limit=3&powered_by=false"
                    charset="UTF-8"></script>
            </div>
            <div class="col-md-6">
                <script async
                    src="//www.travelpayouts.com/blissey/scripts_en.js?type=full&currency=usd&host=hotels.bestbooking.online%2Fhotels&marker=217105.&ids=528388%2C996712%2C716125%2C713896&limit=1&powered_by=false"
                    charset="UTF-8"></script>
            </div>
        </div>

    </div>
</div>
<!-- END OF CONTENT -->
@endsection

@section('scripts')

<!-- Custom Select -->
<script type='text/javascript' src="{{ asset('js/lightbox.js') }}"></script>


<!-- bin/jquery.slider.min.js') }} -->
<script type="text/javascript" src="{{ asset('plugins/jslider/js/jshashtable-2.1_src.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jslider/js/jquery.numberformatter-1.2.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jslider/js/tmpl.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jslider/js/jquery.dependClass-0.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jslider/js/draggable-0.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jslider/js/jquery.slider.js') }}"></script>
<!-- end -->

<!-- Javascript -->
<script src="{{ asset('assets/js/js-list4.js') }}"></script>

<!-- Counter -->
<script src="{{ asset('assets/js/counter.js') }}"></script>

<script type="text/javascript">
    jQuery("#Slider1").slider({
        from: 100,
        to: 1000,
        step: 5,
        smooth: true,
        round: 0,
        dimension: "&nbsp;$",
        skin: "round"
    });

</script>
@endsection