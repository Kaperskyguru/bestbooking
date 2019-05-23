@extends('layouts.app') 
@section('body-style', 'thebg') 
@section('styles')
<!-- PIECHART -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.easy-pie-chart.css') }}">

<!-- Animo css-->
<link href="{{ asset('plugins/animo/animate%2banimo.css') }}" rel="stylesheet" media="screen">
@endsection
 
@section('content')

<div class="container breadcrub">
    <div>
        <a class="homebtn left" href="{{ route('index') }}"></a>
        <div class="left">
            <ul class="bcrumbs">
                <li>/</li>
                <li class="active"> About us </li>
            </ul>
        </div>
        <a class="backbtn right" href="{{ route('index') }}"></a>
    </div>
    <div class="clearfix"></div>
    <div class="brlines"></div>
</div>

<!-- CONTENT -->
<div class="container">


    <div class="container mt25 offset-0">


        <!-- CONTENT -->
        <div class="col-md-12 pagecontainer2 offset-0">
            <div class="hpadding50c">
                <p class="lato size30 slim">Meet The Company</p>
                <p class="aboutarrow"></p>
            </div>
            <div class="line3"></div>

            <div class="hpadding50c">

                <p class="lato size22 slim textcenter">
                    Your best online travel agency.<br/> We make it easy to plan your next business or leisure trip.
                </p>
                <br/>
                <div class="line3"></div>
                <br/>

                <!-- LEFT IMG -->
                <div class="col-md-8 cpdd01">
                    <img src="{{ asset('images/about-man.jpg') }}" class="fwimg" alt="" />
                </div>
                <!-- END OF LEFT IMG -->

                <!-- IMG RIGHT TEXT -->
                <div class="col-md-4 cpdd02">
                    <div class="opensans size18 grey">
                        <span class="lato dark bold">Company</span><br/> Best booking Online is an online travel booking
                        platform, which renders services from flight booking to hotel booking and even booking a taxi. We
                        established this company with the purpose of making the stated services accurate, speedy, stress
                        free and most especially, comfortable.
                        <br/><br/>


                        <span class="lato dark bold">Speciality</span><br/>
                        <div class="progress-about margbtm10">
                            <div class="progress-bar progress-bar-success pbar1" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"
                                style="width: 0%">
                                Quality Assurance 90%
                            </div>
                        </div>
                        <div class="progress-about margbtm10">
                            <div class="progress-bar progress-bar-success pbar2" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                style="width: 0%">
                                24/7 Customer Support 100%
                            </div>
                        </div>
                        <div class="progress-about margbtm10">
                            <div class="progress-bar progress-bar-success pbar3" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                style="width: 0%">
                                Economically Friendly 85%
                            </div>
                        </div>
                        <div class="progress-about">
                            <div class="progress-bar progress-bar-success pbar4" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"
                                style="width: 0%">
                                Security 4 95%
                            </div>
                        </div>

                    </div>
                </div>
                <!-- END OF IMG RIGHT TEXT -->
                <div class="clearfix"></div>
                <br/><br/>
                <div class="clearfix"></div>

                <br/>
                <br/>


                <div class="line3"></div>
                <br/>
                <br/>

                <div class="col-md-4">
                    <div class="opensans grey2">
                        <span class="gcircle">1</span><span class="lato size18 dark mt6 ml10"><b>Flights Booking</b></span><br/><br/>                        Air travel is the fastest way of travelling but it is contrastively stressful; the process of buying
                        a ticket, to boarding a flight and the rigors of the airport environment .Reducing the stress that
                        comes with this type of travel is one of the main reasons we offer our services.

                    </div>
                </div>
                <div class="col-md-4">

                    <p class="opensans grey2">
                        <span class="gcircle">2</span><span class="lato size18 dark mt6 ml10"><b>Hotels Reservations</b></span><br/><br/>                        Alongside flight booking, we also offer services such as hotel bookings and reservations.<br/>
                        <br/> When the topic of hotel selection is discussed, the following criteria are usually taken into
                        consideration: sitting or location, food, facilities and services offered, and clientele service.
                        However, the quality of these characteristics is determined by the type of hotel. There are various
                        kinds of hotels which cater broadly similar but slightly differentiated services, hotels for travellers,
                        resorts, conventions and hotels for residential living.
                    </p>
                </div>
                <div class="col-md-4">

                    <p class="opensans grey2">
                        <span class="gcircle">3</span><span class="lato size18 dark mt6 ml10"><b>Cars Booking</b></span><br/><br/>                        We provide on-demand cab services. We offer our customers an ease of cab booking and reaching their
                        destination with our online cab booking section. You can book a cab in a few tabs from user friendly
                        website.
                        <br/>
                    </p>
                </div>
                <div class="clearfix"></div>


            </div>



            <div class="clearfix"></div><br/><br/>
        </div>
        <!-- END CONTENT -->



    </div>


</div>
<!-- END OF CONTENT -->
@endsection
 
@section('footer-style', 'footerbgblack') 
@section('footer-style-2', 'footerbg3black') 
@section('scripts')
<script src="{{ asset('assets/js/js-about.js') }}"></script>

<!-- Easy Pie Chart  -->
<script src="{{ asset('assets/js/jquery.easy-pie-chart.js') }}"></script>
@endsection