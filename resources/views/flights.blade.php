@extends('layouts.app')
@section('body-style', 'thebg')
@section('footer-style', 'footerbgblack')
@section('footer-style-2','footerbg3black')

@section('styles')
<!-- Updates -->
<link href="{{ asset('updates/update1/css/style01.css') }}" rel="stylesheet" media="screen">

<!-- bin/jquery.slider.min.css') }} -->
<link rel="stylesheet" src="{{ asset('plugins/jslider/css/jslider.css') }}" type="text/css">
<link rel="stylesheet" src="{{ asset('plugins/jslider/css/jslider.round.css') }}" type="text/css">
@endsection

@section('content')


<div class="container breadcrub">
    <div class="clearfix"></div>
</div>



<!-- CONTENT -->
<div class="container">

    <script charset="utf-8" src="//www.travelpayouts.com/widgets/3ce3789c3818d7f5e5f4f1fb283f21b8.js?v=1739" async>
    </script>



    <script
        src="//tp.media/content?promo_id=2811&shmarker=217105&campaign_id=100&locale=en&target_host=flights.bestbooking.online%2Fflights&origin=LON&destination=LAX&border_radius=0&color_background=%23000080&color_text=white&powered_by=false"
        charset="utf-8"></script>

    <div class="">
        <div class="TPWL-front-content-weedle text-center">
            <h2 class="TPWL-front-content-weedle-title"><span class="translation_missing"
                    title="translation missing: en.fresh_white_labels.front_page_content.weedle_title">Popular
                    Destinations</span></h2>
        </div>
    </div>

    <div class="container pagecontainer offset-0">


        <div class="TPWL-front-content">

            <div class="row">
                <div class="col-md-4">
                    <script async
                        src="//www.travelpayouts.com/weedle/widget.js?marker=217105&host=flights.bestbooking.online&locale=en&currency=usd&powered_by=false&destination=LAX&destination_name=Los%20Angeles%2C%20CA"
                        charset="UTF-8"></script>
                </div>

                <div class="col-md-4">
                    <script async
                        src="//www.travelpayouts.com/weedle/widget.js?marker=217105&host=flights.bestbooking.online&locale=en&currency=usd&powered_by=false&destination=LON&destination_name=London"
                        charset="UTF-8"></script>
                </div>

                <div class="col-md-4">
                    <script async
                        src="//www.travelpayouts.com/weedle/widget.js?marker=217105&host=flights.bestbooking.online&locale=en&currency=usd&powered_by=false&destination=NYC&destination_name=New%20York%2C%20NY"
                        charset="UTF-8"></script>
                </div>

            </div>

            <div class="row">
                <div class="col-md-4">
                    <script async
                        src="//www.travelpayouts.com/weedle/widget.js?marker=217105&host=flights.bestbooking.online&locale=en&currency=usd&powered_by=false&destination=SIN&destination_name=Singapore"
                        charset="UTF-8"></script>
                </div>

                <div class="col-md-4">
                    <script async
                        src="//www.travelpayouts.com/weedle/widget.js?marker=217105&host=flights.bestbooking.online&locale=en&currency=usd&powered_by=false&destination=PAR&destination_name=Paris"
                        charset="UTF-8"></script>
                </div>

                <div class="col-md-4">
                    <script async
                        src="//www.travelpayouts.com/weedle/widget.js?marker=217105&host=flights.bestbooking.online&locale=en&currency=usd&powered_by=false&destination=TYO&destination_name=Tokyo"
                        charset="UTF-8"></script>
                </div>

            </div>
        </div>
        <!-- END OF container-->

    </div>

    <div class="lastminute3">
        <div class="container">
            <img src="images/rating-4.png" alt=""><br> LAST MINUTE: <b>Barcelona</b> - 2 nights - Flight+4* Hotel, Dep
            27h Aug from $209/person<br>
            <form action="http://titanicthemes.com/travel/blue/z-hotels-list.html">
                <button class="btn iosbtn" type="submit">Read more</button>
            </form>
        </div>
    </div>

    <script async
        src="//www.travelpayouts.com/ducklett/scripts_en.js?widget_type=brickwork&currency=usd&host=flights.bestbooking.online%2Fflights&marker=217105.&limit=8&powered_by=false"
        charset="UTF-8"></script>

</div>
<!-- END OF CONTENT -->
@endsection

@section('scripts')

<!-- Counter -->
<script src="{{ asset('assets/js/counter.js') }}"></script>

<!-- Javascript -->
<script src="{{ asset('assets/js/js-list4.js') }}"></script>
<!-- Custom Select -->
<script type='text/javascript' src="{{ asset('js/lightbox.js') }}"></script>

<!-- CarouFredSel -->
<script src="{{ asset('updates/update1/js/js-flights.js') }}"></script>



<!-- bin/jquery.slider.min.js -->
<script type="text/javascript" src="{{ asset('plugins/jslider/js/jshashtable-2.1_src.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jslider/js/jquery.numberformatter-1.2.3.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jslider/js/tmpl.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jslider/js/jquery.dependClass-0.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jslider/js/draggable-0.1.js') }}"></script>
<script type="text/javascript" src="{{ asset('plugins/jslider/js/jquery.slider.js') }}"></script>
<!-- end -->

<script type="text/javascript">
    jQuery("#Slider1").slider({
        from: 100,
        to: 5000,
        step: 5,
        smooth: true,
        round: 0,
        dimension: "&nbsp;$",
        skin: "round"
    });

</script>
@endsection