@extends('layouts.app')
@section('body-style', 'thebg')
@section('content')

<!--
	#################################
		- THEMEPUNCH BANNER -
	#################################
	-->
<div id="dajy" class="fullscreen-container mtslide sliderbg fixed">
    <div class="fullscreenbanner">
        <ul>

            <!-- papercut fade turnoff flyin slideright slideleft slideup slidedown-->


            <!-- FADE -->
            <li data-transition="fade" data-slotamount="1" data-masterspeed="300">

                <img src="{{ asset('images/slider/paris.jpg') }}" alt="" />
                <div class="tp-caption scrolleffect sft" data-x="center" data-y="120" data-speed="1000" data-start="800"
                    data-easing="easeOutExpo">
                    <div class="sboxpurple textcenter">
                        <span class="lato size28 slim caps white">France</span><br /><br /><br />
                        <span class="lato size100 slim caps white">Paris</span><br />
                        <span class="lato size20 normal caps white">from</span><br /><br />
                        <span class="lato size48 slim uppercase yellow">$1500</span><br />
                    </div>
                </div>
            </li>

            <!-- FADE -->
            <li data-transition="fade" data-slotamount="1" data-masterspeed="300">
                <img src="{{ asset('images/slider/rome.jpg') }}" alt="" />
                <div class="tp-caption scrolleffect sft" data-x="center" data-y="120" data-speed="1000" data-start="800"
                    data-easing="easeOutExpo">
                    <div class="sboxpurple textcenter">
                        <span class="lato size28 slim caps white">Italy</span><br /><br /><br />
                        <span class="lato size100 slim caps white">Rome</span><br />
                        <span class="lato size20 normal caps white">from</span><br /><br />
                        <span class="lato size48 slim uppercase yellow">$1500</span><br />
                    </div>
                </div>
            </li>

            <!-- FADE -->
            <li data-transition="fade" data-slotamount="1" data-masterspeed="300">
                <img src="{{ asset('images/slider/santorini.jpg') }}" alt="" />
                <div class="tp-caption scrolleffect sft" data-x="center" data-y="120" data-speed="1000" data-start="800"
                    data-easing="easeOutExpo">
                    <div class="sboxpurple textcenter">
                        <span class="lato size28 slim caps white">Greece</span><br /><br /><br />
                        <span class="lato size100 slim caps white">Santorini</span><br />
                        <span class="lato size20 normal caps white">from</span><br /><br />
                        <span class="lato size48 slim uppercase yellow">$1500</span><br />
                    </div>
                </div>
            </li>


        </ul>
        <div class="tp-bannertimer none"></div>
    </div>
</div>



<!-- WRAP -->
<div class="wrap cstyle03">

    <div class="container mt-130 z-index100">
        <div class="row">
            <div class="col-md-12">
                <script charset="utf-8" src="//www.travelpayouts.com/widgets/06e715a287ff5444fb024dca4b4e9dc0.js?v=1688"
                    async></script>

            </div>

        </div>
    </div>

    <div class="container">
        <h2 class="text-center">Best hotels around the world!</h2>
        <script async
            src="//www.travelpayouts.com/blissey/scripts_en.js?categories=5stars%2Csea_view%2Cluxury&id=30553&type=compact&currency=usd&host=hotels.bestbooking.online%2Fhotels&marker=217105.&limit=3&powered_by=false"
            charset="UTF-8"></script>
    </div>


    <div class="lastminute3">
        <div class="container lmc">
            <img src="{{ asset('images/rating-4.png') }}" alt="" /><br /> LAST MINUTE: <b>Barcelona</b> - 2 nights -
            Flight+4*
            Hotel, Dep 27h Aug from $209/person<br />
            <form action="http://titanicthemes.com/travel/blue/{{ route('hotel-page') }}">
                <button class="btn iosbtn" type="submit">Read more</button>
            </form>
        </div>
    </div>

    <div class="container cstyle06">

        <div class="row anim2">
            <div class="col-md-3">
                <h2>Today's Top<br />Deals</h2><br /> Start your search with a look at the best rates on our site.
            </div>


            <script async
                src="//www.travelpayouts.com/ducklett/scripts_en.js?widget_type=slider&currency=usd&host=flights.bestbooking.online%2Fflights&marker=217105.&limit=9&powered_by=false&origin_iatas=LOS&destination_iatas=PHC"
                charset="UTF-8"></script>

        </div>

        <hr class="featurette-divider2">

        <div class="row anim3">
            <div class="col-md-3">
                <h2>Featured<br />Offers</h2><br /> Start your search with a look at the best rates on our site.
            </div>
            <div class="col-md-9">

                <!-- Carousel -->
                <div class="wrapper">
                    <div class="list_carousel">
                        <ul id="foo2">
                            <li>
                                <a href="list3.html"><img src="{{ asset('images/thumb-africa.jpg') }}" alt="" /></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>South Africa Adventures</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list3.html"><img src="{{ asset('images/thumb-egipt.jpg') }}" alt="" /></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Egipt</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list3.html"><img src="{{ asset('images/thumb-machupicchu.jpg') }}"
                                        alt="" /></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Machu Picchu</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list3.html"><img src="{{ asset('images/thumb-africa.jpg') }}" alt="" /></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>South Africa Adventures</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list3.html"><img src="{{ asset('images/thumb-egipt.jpg') }}" alt="" /></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Egipt</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                            <li>
                                <a href="list3.html"><img src="{{ asset('images/thumb-machupicchu.jpg') }}"
                                        alt="" /></a>
                                <div class="m1">
                                    <h6 class="lh1 dark"><b>Machu Picchu</b></h6>
                                    <h6 class="lh1 green">Save up to 30%</h6>
                                </div>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                        <a id="prev_btn2" class="prev" href="#"><img src="{{ asset('images/spacer.png') }}"
                                alt="" /></a>
                        <a id="next_btn2" class="next" href="#"><img src="{{ asset('images/spacer.png') }}"
                                alt="" /></a>
                    </div>
                </div>

            </div>
        </div>

    </div>
    @endsection

    @section('footer-style', 'footerbg')
    @section('footer-style-2', 'footerbg3')
    @section('scripts')
    <!--
		##############################
		 - ACTIVATE THE BANNER HERE -
		##############################
		-->
    <script type="text/javascript">
        var tpj = jQuery;
        tpj.noConflict();

        tpj(document).ready(function() {

            if (tpj.fn.cssOriginal != undefined)
                tpj.fn.css = tpj.fn.cssOriginal;

            tpj('.fullscreenbanner').revolution({
                delay: 9000,
                startwidth: 1170,
                startheight: 600,

                onHoverStop: "on", // Stop Banner Timet at Hover on Slide on/off

                thumbWidth: 100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                thumbHeight: 50,
                thumbAmount: 3,

                hideThumbs: 0,
                navigationType: "bullet", // bullet, thumb, none
                navigationArrows: "solo", // nexttobullets, solo (old name verticalcentered), none

                navigationStyle: false, // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


                navigationHAlign: "left", // Vertical Align top,center,bottom
                navigationVAlign: "bottom", // Horizontal Align left,center,right
                navigationHOffset: 30,
                navigationVOffset: 30,

                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                touchenabled: "on", // Enable Swipe Function : on/off


                stopAtSlide: -1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                stopAfterLoops: -1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

                hideCaptionAtLimit: 0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                hideAllCaptionAtLilmit: 0, // Hide all The Captions if Width of Browser is less then this value
                hideSliderAtLimit: 0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value


                fullWidth: "on", // Same time only Enable FullScreen of FullWidth !!
                fullScreen: "off", // Same time only Enable FullScreen of FullWidth !!


                shadow: 0 //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

            });


        });
    </script>
    @endsection