@extends('layouts.app') 
@section('body-style', 'thebg') 
@section('footer-style', 'footerbgblack') 
@section('footer-style-2','footerbg3black')

@section('styles')
<!-- Updates -->
<link href="{{ asset('updates/update1/css/style01.css') }}" rel="stylesheet" media="screen">
<!-- bin/jquery.slider.min.css') }} -->
<link rel="stylesheet" href="{{ asset('plugins/jslider/css/jslider.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('plugins/jslider/css/jslider.round.css') }}" type="text/css">
@endsection
 
@section('content')
<div class="container breadcrub">
    <div>
        <a class="homebtn left" href="{{ route('index') }}"></a>
        <div class="left">
            <ul class="bcrumbs">
                <li>/</li>
                <li class="active"> Hotels </li>
            </ul>
        </div>
        <a class="backbtn right" href="{{ route('index') }}"></a>
    </div>
    <div class="clearfix"></div>
    <div class="brlines"></div>
</div>

<!-- CONTENT -->
<div class="container">
    <div class="container pagecontainer offset-0">

        <!-- FILTERS -->
        <div class="col-md-3 filters offset-0">


            <!-- TOP TIP -->
            <div class="filtertip">
                <div class="padding20">
                    <p class="size13"><b>9</b> vehicles found</p>
                    <p class="size30 bold"><span class="size13 normal darkblue">Starting</span> $<span class="countprice"></span>.78 <span class="size13 normal darkblue">/way</span></p>

                </div>
                <div class="tip-arrow"></div>
            </div>


            <div class="bookfilters hpadding20">


                <div class="size30 dark"> Book a Cab </div>
                <!-- CARS TAB -->
                <div class="">

                    <table class="wh100percent margtop7">
                        <tr>
                            <td>
                                <div class="radio radiomargin0">
                                    <label>
										<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
										Airports&nbsp;&nbsp;&nbsp;
									  </label>
                                </div>
                            </td>
                            <td>
                                <div class="radio radiomargin0">
                                    <label>
										<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
										Ports
									  </label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="radio radiomargin0">
                                    <label>
										<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
										Ski
									  </label>
                                </div>
                            </td>
                            <td>
                                <div class="radio radiomargin0">
                                    <label>
										<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
										Trains
									  </label>
                                </div>
                            </td>
                        </tr>
                    </table>

                    <select class="form-control mySelectBoxClass margtop20">
						  <option selected>From the airport</option>
						  <option>To the airport</option>
						</select>
                    <div class="margtop10">
                        <span class="opensans size13">Picking up location</span>
                        <input type="text" class="form-control" placeholder="Enter airport">
                    </div>
                    <select class="form-control mySelectBoxClass margtop10">
						  <option selected>Drop off location</option>
						  <option>Cambridge</option>
						</select>

                    <div class="clearfix pbottom15"></div>

                    <div class="w50percent">
                        <div class="wh90percent textleft">
                            <span class="opensans size13">Date</span>
                            <input type="text" class="form-control mySelectCalendar" id="datepicker5" placeholder="mm/dd/yyyy" />
                        </div>
                    </div>

                    <div class="w50percentlast">
                        <div class="wh90percent textleft right">
                            <span class="opensans size13">Nr. of persons</span>
                            <input type="text" class="form-control" placeholder="2">
                        </div>
                    </div>

                    <div class="clearfix pbottom15"></div>

                    <div class="room1">
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
                    <div class="clearfix"></div><br/>
                    <button type="submit" class="btn-search3">Search</button>
                </div>
                <!-- END OF CARS TAB -->



            </div>
            <!-- END OF BOOK FILTERS -->

            <div class="line2"></div>

            <div class="padding20title">
                <h3 class="opensans dark">Filter by</h3>
            </div>
            <div class="line2"></div>


            <!-- Price range -->
            <button type="button" class="collapsebtn" data-toggle="collapse" data-target="#collapse2">
				  Price range <span class="collapsearrow"></span>
				</button>

            <div id="collapse2" class="collapse in">
                <div class="padding20">
                    <div class="layout-slider wh100percent">
                        <span class="cstyle09"><input id="Slider1" type="slider" name="price" value="400;700" /></span>
                    </div>

                </div>
            </div>
            <!-- End of Price range -->

            <div class="line2"></div>

            <!-- Car type -->
            <button type="button" class="collapsebtn last" data-toggle="collapse" data-target="#collapse3">
				 Vehicle <span class="collapsearrow"></span>
				</button>
            <div id="collapse3" class="collapse in">
                <div class="hpadding20">
                    <div class="checkbox">
                        <label>
							  <input type="checkbox">Bus (2)
							</label>
                    </div>
                    <div class="checkbox">
                        <label>
							  <input type="checkbox">Mini bus (6)
							</label>
                    </div>
                    <div class="checkbox">
                        <label>
							  <input type="checkbox">Private car (11)
							</label>
                    </div>
                    <div class="checkbox">
                        <label>
							  <input type="checkbox">Supercar (3)
							</label>
                    </div>




                </div>
                <div class="clearfix"></div>
            </div>
            <!-- End of Car type -->

            <div class="line2"></div>



            <div class="clearfix"></div>
            <br/>
            <br/>
            <br/>


        </div>
        <!-- END OF FILTERS -->

        <!-- LIST CONTENT-->
        <div class="rightcontent col-md-9 offset-0">

            <div class="hpadding20">
                <!-- Top filters -->
                <div class="topsortby">
                    <div class="col-md-4 offset-0">

                        <div class="left mt7"><b>Sort by:</b></div>

                        <div class="right wh70percent">
                            <select class="form-control mySelectBoxClass ">
									  <option selected>Name</option>
									  <option>A to Z</option>
									  <option>Z to A</option>
									</select>
                        </div>

                    </div>
                    <div class="col-md-4">
                        <div class="w50percent">
                            <div class="wh90percent">
                                <select class="form-control mySelectBoxClass ">
									  <option selected>Price</option>
									  <option>Ascending</option>
									  <option>Descending</option>
									</select>
                            </div>
                        </div>
                        <div class="w50percentlast">
                            <div class="wh90percent none">
                                <select class="form-control mySelectBoxClass ">
									  <option selected>Price</option>
									  <option>Ascending</option>
									  <option>Descending</option>
									</select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 offset-0">
                        <div class="wh50percent left none">
                            <select class="form-control mySelectBoxClass ">
								  <option selected>Fuel type</option>
								  <option>Diesel</option>
								  <option>Petrol</option>
								  <option>Hibrid</option>
								  <option>Electric</option>
								</select>
                        </div>
                    </div>
                </div>
                <!-- End of topfilters-->
            </div>
            <!-- End of padding -->

            <br/><br/>
            <div class="clearfix"></div>




            <div class="itemscontainer offset-1">


                <div class="hpadding20">
                    <!-- GOING TO -->
                    <div>
                        <div class="wh33percent left size12 bold dark">
                            AIRPORT &nbsp;&nbsp;<span class="grey normal">04:05 PM</span>
                        </div>
                        <div class="wh33percent right textright size12 bold dark">
                            <span class="grey normal">07:35 PM</span> &nbsp;&nbsp; DESTINATION
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
                            United Kingdom - London City (LCY)
                        </div>
                        <div class="wh33percent right textright size12 grey">
                            Resort/City Information - CAMBRIDGE
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <!-- END OF GOING TO -->
                </div>

                <br/>



                <div class="col-md-4 border">
                    <!-- CONTAINER-->
                    <div class="carscontainer">
                        <div class="center">
                            <a href="#"><img src="{{ asset('updates/update1/img/cars/car01.jpg') }}" alt="" /></a>
                        </div>
                        <div class="hpadding20">
                            <span class="glyphicon glyphicon-info-sign right lblue cpointer" rel="popover" id="username" data-content="This field is mandatory"
                                data-original-title="Here you can add additional information about the car"></span>

                            <span class="size14 bold dark">Shared Transfer</span><br/>
                            <span class="size13 grey">
								
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								
								</span>
                        </div>
                        <div class="purchasecontainer">
                            <span class="size18 bold green mt5">$54.74</span><br/>
                            <span class="size12 mt-3 grey"><i>per way</i></span>
                            <button class="bookbtn right margtop-20">Book</button>
                        </div>
                    </div>
                    <!-- END OF CONTAINER-->
                </div>
                <div class="col-md-4">
                    <!-- CONTAINER-->
                    <div class="carscontainer">
                        <div class="center">
                            <a href="#"><img src="{{ asset('updates/update1/img/cars/car02.jpg') }}" alt="" /></a>
                        </div>
                        <div class="hpadding20">
                            <span class="size14 bold dark">Private Transfer</span><br/>
                            <span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
                        </div>
                        <div class="purchasecontainer">
                            <span class="size18 bold green mt5">$75.00</span><br/>
                            <span class="size12 mt-3 grey"><i>per way</i></span>
                            <button class="bookbtn right margtop-20">Book</button>
                        </div>
                    </div>
                    <!-- END OF CONTAINER-->
                </div>
                <div class="col-md-4">
                    <!-- CONTAINER-->
                    <div class="carscontainer">
                        <div class="center">
                            <a href="#"><img src="{{ asset('updates/update1/img/cars/car03.jpg') }}" alt="" /></a>
                        </div>
                        <div class="hpadding20">
                            <span class="size14 bold dark">Luxury Vehicle</span><br/>
                            <span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
                        </div>
                        <div class="purchasecontainer">
                            <span class="size18 bold green mt5">$95.75</span><br/>
                            <span class="size12 mt-3 grey"><i>per way</i></span>
                            <button class="bookbtn right margtop-20">Book</button>
                        </div>
                    </div>
                    <!-- END OF CONTAINER-->
                </div>

                <div class="clearfix"></div><br/>

                <div class="col-md-4 border">
                    <!-- CONTAINER-->
                    <div class="carscontainer">
                        <div class="center">
                            <a href="#"><img src="{{ asset('updates/update1/img/cars/car10.jpg') }}" alt="" /></a>
                        </div>
                        <div class="hpadding20">
                            <span class="size14 bold dark">Shared Transfer</span><br/>
                            <span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
                        </div>
                        <div class="purchasecontainer">
                            <span class="size18 bold green mt5">$120.00</span><br/>
                            <span class="size12 mt-3 grey"><i>per way</i></span>
                            <button class="bookbtn right margtop-20">Book</button>
                        </div>
                    </div>
                    <!-- END OF CONTAINER-->
                </div>
                <div class="col-md-4">
                    <!-- CONTAINER-->
                    <div class="carscontainer">
                        <div class="center">
                            <a href="#"><img src="{{ asset('updates/update1/img/cars/car05.jpg') }}" alt="" /></a>
                        </div>
                        <div class="hpadding20">
                            <span class="size14 bold dark">Luxury Vehicle</span><br/>
                            <span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
                        </div>
                        <div class="purchasecontainer">
                            <span class="size18 bold green mt5">$100.00</span><br/>
                            <span class="size12 mt-3 grey"><i>per way</i></span>
                            <button class="bookbtn right margtop-20">Book</button>
                        </div>
                    </div>
                    <!-- END OF CONTAINER-->
                </div>
                <div class="col-md-4">
                    <!-- CONTAINER-->
                    <div class="carscontainer">
                        <div class="center">
                            <a href="#"><img src="{{ asset('updates/update1/img/cars/car06.jpg') }}" alt="" /></a>
                        </div>
                        <div class="hpadding20">
                            <span class="size14 bold dark">Luxury Vehicle</span><br/>
                            <span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
                        </div>
                        <div class="purchasecontainer">
                            <span class="size18 bold green mt5">$120.00 </span><br/>
                            <span class="size12 mt-3 grey"><i>per way</i></span>
                            <button class="bookbtn right margtop-20">Book</button>
                        </div>
                    </div>
                    <!-- END OF CONTAINER-->
                </div>

                <div class="clearfix"></div><br/>

                <div class="col-md-4 border">
                    <!-- CONTAINER-->
                    <div class="carscontainer">
                        <div class="center">
                            <a href="#"><img src="{{ asset('updates/update1/img/cars/car07.jpg') }}" alt="" /></a>
                        </div>
                        <div class="hpadding20">
                            <span class="size14 bold dark">Supercar vehicle</span><br/>
                            <span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
                        </div>
                        <div class="purchasecontainer">
                            <span class="size18 bold green mt5">$2500.00 </span><br/>
                            <span class="size12 mt-3 grey"><i>per way</i></span>
                            <button class="bookbtn right margtop-20">Book</button>
                        </div>
                    </div>
                    <!-- END OF CONTAINER-->
                </div>
                <div class="col-md-4">
                    <!-- CONTAINER-->
                    <div class="carscontainer">
                        <div class="center">
                            <a href="#"><img src="{{ asset('updates/update1/img/cars/car08.jpg') }}" alt="" /></a>
                        </div>
                        <div class="hpadding20">
                            <span class="size14 bold dark">Supercar vehicle</span><br/>
                            <span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
                        </div>
                        <div class="purchasecontainer">
                            <span class="size18 bold green mt5">$500.00 </span><br/>
                            <span class="size12 mt-3 grey"><i>per way</i></span>
                            <button class="bookbtn right margtop-20">Book</button>
                        </div>
                    </div>
                    <!-- END OF CONTAINER-->
                </div>
                <div class="col-md-4">
                    <!-- CONTAINER-->
                    <div class="carscontainer">
                        <div class="center">
                            <a href="#"><img src="{{ asset('updates/update1/img/cars/car09.jpg') }}" alt="" /></a>
                        </div>
                        <div class="hpadding20">
                            <span class="size14 bold dark">Supercar vehicle</span><br/>
                            <span class="size13 grey">
									<table>
										<tr>
											<td class="dark bold" valign="top">From:&nbsp;&nbsp;&nbsp;</td>
											<td>Barcelona Airport</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">To:</td>
											<td>Barcelona Hotels</td>
										</tr>
										<tr>
											<td class="dark bold" valign="top">On:</td>
											<td>Feb 6, 2014 at 06:12 for 2 person(s)</td>
										</tr>
									</table>
								</span>
                        </div>
                        <div class="purchasecontainer">
                            <span class="size18 bold green mt5">$1500.00 </span><br/>
                            <span class="size12 mt-3 grey"><i>per way</i></span>
                            <button class="bookbtn right margtop-20">Book</button>
                        </div>
                    </div>
                    <!-- END OF CONTAINER-->
                </div>


                <div class="clearfix"></div>
                <div class="offset-2">
                    <hr class="featurette-divider3">
                </div>


            </div>
            <!-- End of offset1-->

            <div class="hpadding20">

                <ul class="pagination right paddingbtm20">
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>

            </div>

        </div>
        <!-- END OF LIST CONTENT-->



    </div>
    <!-- END OF container-->

</div>
<!-- END OF CONTENT -->
@endsection
 
@section('scripts')

<!-- Javascript -->
<script src="{{ asset('assets/js/js-list.js') }}"></script>

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

<!-- Counter -->
<script src="{{ asset('assets/js/counter.js') }}"></script>

<script>
    //Popover tooltips
    $(function() {
        $("#username").popover({
            placement: 'top',
            trigger: 'hover'
        });
    });

</script>

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