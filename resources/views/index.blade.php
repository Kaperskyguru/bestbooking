@extends('layouts.app')
@section('body-style', 'thebg')
@section('content')
@section('footer-style', 'footerbgblack')
@section('footer-style-2',
'footerbg3black')

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
            <div class="col-md-12" style="background-color:white">
                <script charset="utf-8" src="//www.travelpayouts.com/widgets/06e715a287ff5444fb024dca4b4e9dc0.js?v=1688"
                    async></script>

            </div>

        </div>
    </div>

    <div class="col-md-12 top-header">
            <div class="container">
                <div class="row">
                    <h3 class="text-center">Why Choose Us</h3>
                    <div class="col-md-6">
                        <!-- <span class="dtitle">Last Minute</span> -->
                        <div class="deal">
                            <p>We find the best travel deals from multiple travel providers and you choose the one you prefer.</p>
                        </div>
                        <div class="deal">
                            <p>Search and compare from over 70 travel providers with one easy search.</p>
                        </div>
                        <div class="deal">
                            <p>We work with multiple providers so you can have a huge choice of destinations, promotions, and discounts.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="deal">
                            <p>There are no extra charges or hidden fees. The price you see is exactly what you pay.</p>
                        </div>
                        <div class="deal">
                            <p>We only allow trusted and proven travel providers to be included in our search engine.</p>
                        </div>
                        <div class="deal">
                            <p>We search both the largest booking websites and small local systems ensuring you’ll find the lowest price.</p>
                        </div>
                    </div>
                    <!-- End of first row-->
                </div>
            </div>

    {{-- <div class="deals3"> --}}
    <div class="container">
        <h2 class="text-center">Best hotels around the world!</h2>
        <script async
            src="//www.travelpayouts.com/blissey/scripts_en.js?categories=5stars%2Csea_view%2Cluxury&id=30553&type=compact&currency=usd&host=hotels.bestbooking.online%2Fhotels&marker=217105.&limit=3&powered_by=false"
            charset="UTF-8"></script>
    </div>


    <div class=" container">
        <div class="lmc">


            <div class="row">
                <div class="col-md-4" style="margin-top: -20px;">
                    <!-- <span class="dtitle">Last Minute</span> -->
                    <div class="deal">
                        <img src="images/compass.png" alt="" class="mt-10" style="display:block;margin:0 auto;">
                        <h4 class="text-center">Easy Navigation</h4>
                        <!-- <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb" /></a>
                                <div class="dealtitle">
                                    <p><a href="details.html" class="dark">Diana Hotel</a></p>
                                    <img src="images/smallrating-4.png" alt="" class="mt-10" /><span class="size13 grey mt-9">Zakynthos</span>
                                </div>
                                <div class="dealprice">
                                    <p class="size12 grey lh2">from<span class="price">$35</span><br/>per night</p>
                                </div> -->
                    </div>
                    <div class="deal" style="border:none;">
                        <p>With our simple website, we make your travel booking very easy.</p>
                        <!-- <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb" /></a>
                                <div class="dealtitle">
                                    <p><a href="details.html" class="dark">Village Inn Studios & Family Apartments</a></p>
                                    <img src="images/smallrating-3.png" alt="" class="mt-10" /><span class="size13 grey mt-9">Zakynthos</span>
                                </div>
                                <div class="dealprice">
                                    <p class="size12 grey lh2">from<span class="price">$49</span><br/>per night</p>
                                </div> -->
                    </div>
                    <!-- <div class="deal">
                                <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb" /></a>
                                <div class="dealtitle">
                                    <p><a href="details.html" class="dark">Palatino Hotel</a></p>
                                    <img src="images/smallrating-4.png" alt="" class="mt-10" /><span class="size13 grey mt-9">Zakynthos</span>
                                </div>
                                <div class="dealprice">
                                    <p class="size12 grey lh2">from<span class="price">$90</span><br/>per night</p>
                                </div>
                            </div> -->
                </div>
                <!-- End of first row-->

                <div class="col-md-4" style="margin-top: -20px;">
                    <!-- <span class="dtitle">Early Booking</span> -->
                    <div class="deal">
                        <img src="images/difference.png" alt="" class="mt-10" style="display:block;margin:0 auto;">
                        <h4 class="text-center">Precise Searches</h4>
                        <!-- <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb" /></a>
                                    <div class="dealtitle">
                                        <p><a href="details.html" class="dark">Comfort Suites Paradise Island</a></p>
                                        <img src="images/smallrating-4.png" alt="" class="mt-10" /><span class="size13 grey mt-9">Bahamas</span>
                                    </div>
                                    <div class="dealprice">
                                        <p class="size12 grey lh2">from<span class="price">$29</span><br/>per night</p>
                                    </div> -->
                    </div>
                    <div class="deal" style="border:none;">
                        <p>We narrow down your searches to what you really need, making it easy and simple to complete
                            your travel booking.</p>
                        <!-- <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb" /></a>
                                    <div class="dealtitle">
                                        <p><a href="details.html" class="dark">Barcelo Malaga</a></p>
                                        <img src="images/smallrating-3.png" alt="" class="mt-10" /><span class="size13 grey mt-9">Spain</span>
                                    </div>
                                    <div class="dealprice">
                                        <p class="size12 grey lh2">from<span class="price">$32</span><br/>per night</p>
                                    </div> -->
                    </div>
                    <!-- <div class="deal">
                                    <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb" /></a>
                                    <div class="dealtitle">
                                        <p><a href="details.html" class="dark">Palatino Hotel</a></p>
                                        <img src="images/smallrating-3.png" alt="" class="mt-10" /><span class="size13 grey mt-9">Zakynthos</span>
                                    </div>
                                    <div class="dealprice">
                                        <p class="size12 grey lh2">from<span class="price">$90</span><br/>per night</p>
                                    </div>
                                </div> -->
                </div>
                <!-- End of first row-->

                <div class="col-md-4" style="margin-top: -20px;">
                    <!-- <span class="dtitle">Hot Deals</span> -->
                    <div class="deal">
                        <img src="images/piggy-bank-with-dollar-coin.png" alt="" class="mt-10"
                            style="display:block;margin:0 auto;">
                        <h4 class="text-center">Save More</h4>
                        <!-- <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb" /></a>
                                        <div class="dealtitle">
                                            <p><a href="details.html" class="dark">Parayso Hotel And Spa</a></p>
                                            <img src="images/smallrating-4.png" alt="" class="mt-10" /><span class="size13 grey mt-9">Zakynthos</span>
                                        </div>
                                        <div class="dealprice">
                                            <p class="size12 grey lh2">from<span class="price">$49</span><br/>per night</p>
                                        </div> -->
                    </div>
                    <div class="deal" style="border:none;">
                        <p>We also give you the best prices there is to help you spend less.</p>
                        <!-- <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb" /></a>
                                        <div class="dealtitle">
                                            <p><a href="details.html" class="dark">Village Inn Studios & Family Apartments</a></p>
                                            <img src="images/smallrating-3.png" alt="" class="mt-10" /><span class="size13 grey mt-9">Zakynthos</span>
                                        </div>
                                        <div class="dealprice">
                                            <p class="size12 grey lh2">from<span class="price">$79</span><br/>per night</p>
                                        </div> -->
                    </div>
                    <!-- <div class="deal">
                                        <a href="details.html"><img src="images/thumb-img.jpg" alt="" class="dealthumb" /></a>
                                        <div class="dealtitle">
                                            <p><a href="details.html" class="dark">Diana Hotel</a></p>
                                            <img src="images/smallrating-3.png" alt="" class="mt-10" /><span class="size13 grey mt-9">Zakynthos</span>
                                        </div>
                                        <div class="dealprice">
                                            <p class="size12 grey lh2">from<span class="price">$299</span><br/>per night</p>
                                        </div>
                                    </div> -->
                </div>
                <!-- End of first row-->
            </div>


            {{-- <img src="{{ asset('images/rating-4.png') }}" alt="" /><br /> LAST MINUTE: <b>Barcelona</b> - 2 nights
            -
            Flight+4*
            Hotel, Dep 27h Aug from $209/person<br />
            <form action="http://titanicthemes.com/travel/blue/{{ route('hotel-page') }}">
                <button class="btn iosbtn" type="submit">Read more</button>
            </form> --}}
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
            <script async
                src="//www.travelpayouts.com/ducklett/scripts_en.js?widget_type=slider&currency=usd&host=flights.bestbooking.online%2Fflights&marker=217105.&limit=9&powered_by=false&origin_iatas=LOS&destination_iatas=PHC"
                charset="UTF-8"></script>

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