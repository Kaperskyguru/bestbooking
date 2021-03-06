@extends('layouts.app') 
@section('body-style', 'thebg') 
@section('footer-style', 'footerbgblack') 
@section('footer-style-2','footerbg3black')

@section('styles')
@endsection
 
@section('content')

<div class="container breadcrub">
    <div>
        <a class="homebtn left" href="{{ route('index') }}"></a>
        <div class="left">
            <ul class="bcrumbs">
                <li>/</li>
                <li><a href="{{ route('car-page') }}">Cabs</a></li>
                <li>/</li>
                <li class="active">Payment</li>
            </ul>
        </div>
        <a class="backbtn right" href="{{ route('car-page') }}"></a>
    </div>
    <div class="clearfix"></div>
    <div class="brlines"></div>
</div>

<!-- CONTENT -->
<div class="container">

    <div class="container mt25 offset-0">


        <!-- LEFT CONTENT -->
        <div class="col-md-8 pagecontainer2 offset-0">

            <div class="padding30 grey">


                <span class="size16px bold dark left">Cab information</span>
                <div class="roundstep active right">1</div>
                <div class="clearfix"></div>
                <div class="line4"></div>

                From UNITED KINGDOM - LONDON CITY (LCY) to Resort/City Information - CAMBRIDGE

                <br/>
                <div class="col-md-4 textright">
                    <div class="margtop15"><span class="dark">Date:</span><span class="red">*</span></div>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control mySelectCalendar mt10" id="datepicker5" placeholder="mm/dd/yyyy" />
                </div>
                <div class="col-md-4 textleft margtop15">
                </div>
                <div class="clearfix"></div>

                <br/>
                <div class="col-md-4 textright">
                    <div class="margtop7"><span class="dark">Cab arrival time</span><span class="red">*</span></div>
                </div>
                <div class="col-md-4">
                    <div class="w50percent">
                        <div class="wh90percent textleft">
                            <span class="opensans size13">Hour</span>
                            <select class="form-control mySelectBoxClass">
                                          <option>00</option>
                                          <option>01</option>
                                          <option>02</option>
                                          <option>03</option>
                                          <option>04</option>
                                          <option>05</option>
                                          <option>06</option>
                                          <option>07</option>
                                          <option>08</option>
                                          <option>09</option>
                                          <option>10</option>
                                          <option>11</option>
                                          <option selected="yes">12</option>
                                          <option>13</option>
                                          <option>14</option>
                                          <option>15</option>
                                          <option>16</option>
                                          <option>17</option>
                                          <option>18</option>
                                          <option>19</option>
                                          <option>20</option>
                                          <option>21</option>
                                          <option>22</option>
                                          <option>23</option>
                                        </select>
                        </div>
                    </div>

                    <div class="w50percentlast">

                        <div class="wh90percent textleft right">
                            <span class="opensans size13">Minutes</span>
                            <select class="form-control mySelectBoxClass">
                                          <option selected="yes">00</option>
                                          <option>10</option>
                                          <option>20</option>
                                          <option>30</option>
                                          <option>40</option>
                                          <option>50</option>
                                        </select>
                        </div>
                    </div>

                </div>
                <div class="col-md-4 textleft">
                </div>
                <div class="clearfix"></div>

                <br/>
                <div class="col-md-4 textright">
                    <div class="margtop15"><span class="dark">Nr. of persons</span><span class="red">*</span></div>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control mt10" placeholder="2">
                </div>
                <div class="col-md-4 textleft margtop15">
                </div>
                <div class="clearfix"></div>

                <br/>
                <div class="col-md-4 textright">
                    <div class="margtop15"><span class="dark">Company & Cab number</span><span class="red">*</span></div>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control mt10" placeholder="">
                </div>
                <div class="col-md-4 textleft margtop15">
                </div>
                <div class="clearfix"></div>

                <br/>
                <div class="col-md-4 textright">
                    <div class="margtop15"><span class="dark">Cab arrival</span><span class="red">*</span></div>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control mt10" placeholder="">
                </div>
                <div class="col-md-4 textleft margtop15">
                </div>
                <div class="clearfix"></div>

                <br/>
                <div class="col-md-4 textright">
                    <div class="margtop15"><span class="dark">Complete destination address</span><span class="red">*</span></div>
                </div>
                <div class="col-md-4">
                    <textarea rows="3" class="form-control margtop10"></textarea>
                </div>
                <div class="col-md-4 textleft margtop15">
                </div>
                <div class="clearfix"></div>



                <br/>
                <br/>



                <span class="size16px bold dark left">Customer </span>
                <div class="roundstep right">2</div>
                <div class="clearfix"></div>
                <div class="line4"></div>
                Please tell us who will be checking in. Must be 18 or older. <br/><br/>

                <div class="col-md-4 textright">
                    <div class="margtop15"><span class="dark">Contact Name:</span><span class="red">*</span></div>
                </div>
                <div class="col-md-4">
                    <span class="size12">First and Last Name*</span>
                    <input type="text" class="form-control " placeholder="">
                </div>
                <div class="col-md-4 textleft margtop15">
                </div>
                <div class="clearfix"></div>

                <br/>
                <div class="col-md-4 textright">
                    <div class="margtop7"><span class="dark">Phone Number:</span><span class="red">*</span></div>
                </div>
                <div class="col-md-4">
                    <span class="size12">Country code*</span>
                    <select class="form-control mySelectBoxClass">
                              <option selected>xxx-xxx-xxx-772</option>
                              <option>xxx-xxx-xxx-039</option>
                            </select>
                </div>
                <div class="col-md-4 textleft">
                    <span class="size12">Preferred Phone Number*</span>
                    <input type="text" class="form-control" placeholder="">
                </div>
                <div class="clearfix"></div>

                <br/>
                <div class="col-md-4">
                </div>
                <div class="col-md-8 textleft">
                    Special Requests (optional)
                    <!-- Collapse 3 -->
                    <button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse3"></button>
                    <div id="collapse3" class="collapse">
                        <textarea rows="3" class="form-control margtop10"></textarea>
                    </div>
                    <!-- End of collapse 3 -->
                    <div class="clearfix"></div>


                </div>
                <div class="clearfix"></div>


                <br/>
                <br/>
                <span class="size16px bold dark left">How would you like to pay?</span>
                <div class="roundstep right">3</div>
                <div class="clearfix"></div>
                <div class="line4"></div>



                <br/>
                <div class="col-md-4">
                </div>
                <div class="col-md-4">
                    Enter a coupon code
                    <!-- Collapse 5 -->
                    <button type="button" class="collapsebtn3 collapsed mt-5" data-toggle="collapse" data-target="#collapse5"></button>
                    <div id="collapse5" class="collapse">
                        <input type="text" class="form-control margtop10" placeholder="">
                    </div>
                    <!-- End of collapse 5 -->
                    <div class="clearfix"></div>
                </div>
                <div class="col-md-4 textleft">
                </div>
                <div class="clearfix"></div>


                <br/>
                <!-- Nav tabs -->
                <ul class="nav navigation-tabs">
                    <li class="active"><a href="#card" data-toggle="tab">Credit/Debit card</a></li>
                    <li><a href="#paypal" data-toggle="tab">Paypal</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content4">

                    <!-- Tab 1 -->
                    <div class="tab-pane active" id="card">

                        <div class="col-md-4 textright">
                            <div class="margtop15"><span class="dark">Debit/Credit Card Number:</span><span class="red">*</span></div>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control margtop10" placeholder="">
                        </div>
                        <div class="col-md-4 textleft">
                        </div>
                        <div class="clearfix"></div>

                        <br/>
                        <div class="col-md-4 textright">
                            <div class="margtop7"><span class="dark">Card Type:</span><span class="red">*</span></div>
                        </div>
                        <div class="col-md-4">
                            <select class="form-control mySelectBoxClass">
                                      <option selected>xxx-xxx-xxx-772</option>
                                      <option>xxx-xxx-xxx-039</option>
                                    </select>
                        </div>
                        <div class="col-md-4 textleft">
                        </div>
                        <div class="clearfix"></div>

                        <br/>
                        <div class="col-md-4 textright">
                            <div class="margtop7"><span class="dark">Expiration Date:</span><span class="red">*</span></div>
                        </div>
                        <div class="col-md-4">

                            <div class="w50percent">
                                <div class="wh90percent">
                                    <select class="form-control mySelectBoxClass">
                                              <option selected>01 JAN</option>
                                              <option>02 FEB</option>
                                              <option>03 MAR</option>
                                              <option>04 APR</option>
                                              <option>05 MAY</option>
                                              <option>06 JUN</option>
                                              <option>07 JUL</option>
                                              <option>08 AUG</option>
                                              <option>09 SEP</option>
                                              <option>10 OCT</option>
                                              <option>11 NOV</option>
                                              <option>12 DEC</option>
                                            </select>
                                </div>
                            </div>
                            <div class="w50percentlast">
                                <div class="wh90percent right">
                                    <select class="form-control mySelectBoxClass">
                                              <option selected>14</option>
                                              <option>15</option>
                                              <option>16</option>
                                              <option>17</option>
                                              <option>18</option>
                                              <option>19</option>
                                              <option>20</option>
                                              <option>21</option>
                                              <option>22</option>
                                              <option>23</option>
                                              <option>24</option>
                                              <option>25</option>
                                              <option>26</option>
                                            </select>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4 textleft">
                        </div>
                        <div class="clearfix"></div>


                        <br/>
                        <div class="col-md-4 textright">
                            <div class="margtop15"><span class="dark">Card Identification Number:</span><span class="red">*</span></div>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control margtop10" placeholder="">
                        </div>
                        <div class="col-md-4 textleft margtop15">What's this?
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-4 textright">
                            <div class="margtop15"><span class="dark">Billing ZIP Code:</span><span class="red">*</span></div>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control margtop10" placeholder="">
                        </div>
                        <div class="col-md-4 textleft margtop15">
                        </div>
                        <div class="clearfix"></div>


                        <div class="col-md-4 textright">
                            <div class="margtop15"><span class="dark"> Cardholder Name:</span><span class="red">*</span></div>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control margtop10" placeholder="">
                        </div>
                        <div class="col-md-4 textleft margtop15">(as it appears on the card)
                        </div>
                        <div class="clearfix"></div>

                    </div>
                    <!-- End of Tab 1 -->

                    <!-- Tab 2 -->
                    <div class="tab-pane" id="paypal">

                        <div class="alert alert-warning fade in">
                            <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                            <strong>Important:</strong> You will be redirected to PayPal's website to securely complete your
                            payment.
                        </div>

                        <button type="submit" class="btn-search5">Proceed to paypal</button>

                    </div>
                    <!-- End of Tab 2 -->
                </div>


                <br/>
                <br/>
                <span class="size16px bold dark left">Where should we send your confirmation?</span>
                <div class="roundstep right">4</div>
                <div class="clearfix"></div>
                <div class="line4"></div>
                Please enter the email address where you would like to receive your confirmation.<br/>


                <div class="col-md-4 textright">
                    <div class="mt15"><span class="dark">Email Address:</span><span class="red">*</span></div>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control margtop10" placeholder="">
                </div>
                <div class="col-md-4 textleft">
                </div>
                <div class="clearfix"></div>

                <br/>
                <br/>
                <span class="size16px bold dark left">Review and book your trip</span>
                <div class="roundstep right">5</div>
                <div class="clearfix"></div>
                <div class="line4"></div>

                <div class="alert alert-info">
                    Attention! Please read important transfer information! <br/>
                    <p class="size12">• Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque tempor dolor quis sapien rhoncus,
                        a mollis felis hendrerit. Nam dapibus vitae justo in faucibus.</p>
                </div>
                By selecting to complete this booking I acknowledge that I have read and accept the <a href="#" class="clblue">rules & 
                        restrictions</a> <a href="#" class="clblue">terms & conditions</a> , and <a href="#" class="clblue">privacy policy</a>.
                <br/>

                <button type="submit" class="bluebtn margtop20">Complete booking</button>


            </div>

        </div>
        <!-- END OF LEFT CONTENT -->

        <!-- RIGHT CONTENT -->
        <div class="col-md-4">

            <div class="pagecontainer2 paymentbox grey">
                <div class="padding20">
                    <span class="opensans size18 dark bold caps">Your Transfer</span>
                </div>
                <div class="line3"></div>

                <div class="hpadding30 margtop30">



                    <!-- GOING TO -->
                    <div>
                        <div class="wh33percent left size12 bold dark">
                            AIRPORT
                        </div>
                        <div class="wh33percent right textright size12 bold dark">
                            DESTINATION
                        </div>
                        <div class="clearfix"></div>

                        <div class="wh33percent left">
                            <div class="fcircle">
                                <span class="fcaricon"></span>
                            </div>
                        </div>
                        <div class="wh33percent right">
                            <div class="fcircle right">
                                <span class="fhotelicon"></span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="fline2px"></div>

                        <div class="wh33percent left size12 grey">
                            United Kingdom - London City (LCY)<br/> 04:05 PM
                        </div>
                        <div class="wh33percent right textright size12 grey">
                            Resort/City Information - CAMBRIDGE<br/> 07:35 PM
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- END OF GOING TO -->


                    <br/>

                    <img src="{{ asset('updates/update1/img/cars/car02.jpg') }}" width="100" alt="" /><br/>

                    <span class="dark">Private Service</span>
                    <div class="fdash mt10"></div><br/> Barcelona Airport (BCN) to Barcelona Hotels<br/>
                    <span class="grey2">On:</span> February 06 2014<br/>
                    <span class="grey2">Number of persons:</span> 2




                    <br/>
                    <br/>



                </div>
                <div class="line3"></div>
                <div class="padding30">
                    <span class="left size14 dark">Trip Total:</span>
                    <span class="right lred2 bold size18">
                                $54.50<br/>
                                <span class="grey normal size12 mt-10"><i>per way</i></span>
                    </span>
                    <div class="clearfix"></div>
                </div>


            </div><br/>

            <div class="pagecontainer2 needassistancebox">
                <div class="cpadding1">
                    <span class="icon-help"></span>
                    <h3 class="opensans">Need Assistance?</h3>
                    <p class="size14 grey">Our team is 24/7 at your service to help you with your booking issues or answer any related questions</p>
                    <p class="opensans size30 lblue xslim">+234-807-053-8333</p>
                </div>
            </div><br/>

            <div class="pagecontainer2 loginbox">
                <div class="cpadding1">
                    <span class="icon-lockk"></span>
                    <h3 class="opensans">Log in</h3>
                    <input type="text" class="form-control logpadding" placeholder="Username">
                    <br/>
                    <input type="text" class="form-control logpadding" placeholder="Password">
                    <div class="margtop20">
                        <div class="left">
                            <div class="checkbox padding0">
                                <label>
                                          <input type="checkbox">Remember
                                        </label>
                            </div>
                            <a href="#" class="greylink">Lost password?</a><br/>
                        </div>
                        <div class="right">
                            <button class="btn-search5" type="submit" onclick="errorMessage()">Login</button>
                        </div>
                    </div>
                    <div class="clearfix"></div><br/>
                </div>
            </div><br/>

        </div>
        <!-- END OF RIGHT CONTENT -->


    </div>


</div>
<!-- END OF CONTENT -->
@endsection
 
@section('scripts')


<!-- Javascript  -->
<script src="{{ asset('assets/js/js-payment.js') }}"></script>
@endsection