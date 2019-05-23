@extends('layouts.app') 
@section('body-style', 'thebg') 
@section('footer-style', 'footerbgblack') 
@section('footer-style-2','footerbg3black')

@section('content')

<div class="container breadcrub">
    <div>
        <a class="homebtn left" href="{{ route('index') }}"></a>
        <div class="left">
            <ul class="bcrumbs">
                <li>/</li>
                <li class="active">Profile</li>
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

            <!-- LEFT MENU -->
            <div class="col-md-1 offset-0">
                <!-- Nav tabs -->
                <ul class="nav profile-tabs">
                    <li class="active">
                        <a href="#profile" data-toggle="tab">
                                <span class="profile-icon"></span> Your profile
                            </a>
                    </li>
                    <li>
                        <a href="#bookings" data-toggle="tab" onclick="mySelectUpdate()">
                                <span class="bookings-icon"></span> Bookings
                            </a>
                    </li>
                    <li>
                        <a href="#wishlist" data-toggle="tab" onclick="mySelectUpdate()">
                                <span class="wishlist-icon"></span> Wishlist
                            </a>
                    </li>
                    <li>
                        <a href="#settings" data-toggle="tab" onclick="mySelectUpdate()">
                                <span class="settings-icon"></span> Settings
                            </a>
                    </li>
                    <li>
                        <a href="#history" data-toggle="tab" onclick="mySelectUpdate()">
                                <span class="history-icon"></span> History
                            </a>
                    </li>
                    <li>
                        <a href="#password" data-toggle="tab" onclick="mySelectUpdate()">
                                <span class="password-icon"></span> Change password
                            </a>
                    </li>
                    <li>
                        <a href="#newsletter" data-toggle="tab" onclick="mySelectUpdate()">
                                <span class="newsletter-icon"></span> Newsletters
                            </a>
                    </li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <!-- LEFT MENU -->

            <!-- RIGHT CPNTENT -->
            <div class="col-md-11 offset-0">
                <!-- Tab panes from left menu -->
                <div class="tab-content5">

                    <!-- TAB 1 -->
                    <div class="tab-pane padding40 active" id="profile">

                        <!-- Admin top -->
                        <div class="col-md-4 offset-0">
                            <img src="{{ asset('images/user.png') }}" alt="" class="left margright20" />
                            <p class="size12 grey margtop10">
                                Good Morning <span class="lred">Administrator</span><br/>
                                <a href="#" class="lblue">Change picture</a>
                            </p>
                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-4">
                        </div>
                        <div class="col-md-4 offset-0">
                            <table class="table table-bordered  mt-10">
                                <tr class="grey opensans">
                                    <td class="center"><span class="size30 slim lh4">2</span><br/><span class="size12">Trips</span></td>
                                    <td class="center"><span class="size30 slim lh4">5</span><br/><span class="size12">Places</span></td>
                                    <td class="center"><span class="size30 slim lh4">14</span><br/><span class="size12">Days away</span></td>
                                    <td class="center"><span class="size30 slim lh4">3</span><br/><span class="size12">Countries</span></td>
                                </tr>
                            </table>
                        </div>
                        <!-- End of Admin top -->


                        <div class="clearfix"></div>

                        <div class="relative margtop10">
                            <ul class="nav nav-tabs myTab2pos" id="myTab2">
                                <li onclick="mySelectUpdate()" class="active"><a data-toggle="tab" href="#airtab3"><span class="flighttab3"></span><span class="hidetext">Air</span>&nbsp;</a></li>
                                <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#hoteltab3"><span class="hoteltab3"></span><span class="hidetext">Hotel</span>&nbsp;</a></li>
                                <li onclick="mySelectUpdate()" class=""><a data-toggle="tab" href="#cartab3"><span class="cartab3"></span><span class="hidetext">Car</span>&nbsp;</a></li>
                            </ul>

                            <div class="tab-content6">

                                <!-- Tab airtab3 -->
                                <div class="tab-pane  active" id="airtab3">

                                    <div class="col-md-4">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft">
                                                <span class="opensans size13"><b>Flying from</b></span>
                                                <input type="text" class="form-control" placeholder="City or airport">
                                            </div>
                                        </div>

                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>To</b></span>
                                                <input type="text" class="form-control" placeholder="City or airport">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft">
                                                <span class="opensans size13"><b>Departing</b></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker3" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>

                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>Returning</b></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker4" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="room1">
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>Adult</b></span>
                                                    <select class="form-control mySelectBoxClass">
													  <option>1</option>
													  <option selected>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <span class="opensans size13"><b>Child</b></span>
                                                    <select class="form-control mySelectBoxClass">
													  <option>0</option>
													  <option selected>1</option>
													  <option>2</option>
													  <option>3</option>
													  <option>4</option>
													  <option>5</option>
													</select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- End of Tab airtab3 -->

                                <!-- Tab hoteltab3 -->
                                <div class="tab-pane " id="hoteltab3">
                                    <div class="col-md-4 pt-6">
                                        <span class="opensans size18">Where do you want to go?</span>
                                        <input type="text" class="form-control" placeholder="Greece">
                                    </div>

                                    <div class="col-md-4">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft">
                                                <span class="opensans size13"><b>Check in date</b></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>

                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>Check in date</b></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker2" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="room1">
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>ROOM 1</b></span><br/>

                                                    <div class="addroom1 block"><a onclick="addroom2()" class="grey cpointer">+ Add room</a></div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>1</option>
															  <option selected>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>0</option>
															  <option selected>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="room2 none">
                                            <div class="clearfix"></div>
                                            <div class="line1"></div>
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>ROOM 2</b></span><br/>
                                                    <div class="addroom2 block grey"><a onclick="addroom3()" class="grey cpointer">+ Add room</a> |
                                                        <a onclick="removeroom2()" class="orange cpointer"><img src="{{ asset('images/delete.png') }}" alt="delete" /></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>1</option>
															  <option>2</option>
															  <option selected>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>0</option>
															  <option>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="room3 none">
                                            <div class="clearfix"></div>
                                            <div class="line1"></div>
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>ROOM 3</b></span><br/>
                                                    <div class="addroom3 block grey"><a onclick="addroom3()" class="grey cpointer">+ Add room</a> |
                                                        <a onclick="removeroom3()" class="orange cpointer"><img src="{{ asset('images/delete.png') }}" alt="delete" /></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>0</option>
															  <option>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Tab hoteltab3 -->

                                <!-- Tab cartab3 -->
                                <div class="tab-pane " id="cartab3">
                                    <div class="col-md-4">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft">
                                                <span class="opensans size13"><b>Picking up</b></span>
                                                <input type="text" class="form-control" placeholder="Airport, address">
                                            </div>
                                        </div>

                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>Dropping off</b></span>
                                                <input type="text" class="form-control" placeholder="Airport, address">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft">
                                                <span class="opensans size13"><b>Pick up date</b></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker5" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>

                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>Hour</b></span>
                                                <select class="form-control mySelectBoxClass">
												  <option>12:00 AM</option>
												  <option>12:30 AM</option>
												  <option>01:00 AM</option>
												  <option>01:30 AM</option>
												  <option>02:00 AM</option>
												  <option>02:30 AM</option>
												  <option>03:00 AM</option>
												  <option>03:30 AM</option>
												  <option>04:00 AM</option>
												  <option>04:30 AM</option>
												  <option>05:00 AM</option>
												  <option>05:30 AM</option>
												  <option>06:00 AM</option>
												  <option>06:30 AM</option>
												  <option>07:00 AM</option>
												  <option>07:30 AM</option>
												  <option>08:00 AM</option>
												  <option>08:30 AM</option>
												  <option>09:00 AM</option>
												  <option>09:30 AM</option>
												  <option>10:00 AM</option>
												  <option selected>10:30 AM</option>
												  <option>11:00 AM</option>
												  <option>11:30 AM</option>
												  <option>12:00 PM</option>
												  <option>12:30 PM</option>								  
												  <option>01:00 PM</option>
												  <option>01:30 PM</option>
												  <option>02:00 PM</option>
												  <option>02:30 PM</option>
												  <option>03:00 PM</option>
												  <option>03:30 PM</option>
												  <option>04:00 PM</option>
												  <option>04:30 PM</option>
												  <option>05:00 PM</option>
												  <option>05:30 PM</option>
												  <option>06:00 PM</option>
												  <option>06:30 PM</option>
												  <option>07:00 PM</option>
												  <option>07:30 PM</option>
												  <option>08:00 PM</option>
												  <option>08:30 PM</option>
												  <option>09:00 PM</option>
												  <option>09:30 PM</option>
												  <option>10:00 PM</option>
												  <option>10:30 PM</option>
												  <option>11:00 PM</option>
												  <option>11:30 PM</option>								  
												</select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft">
                                                <span class="opensans size13"><b>Drop off date</b></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker6" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>

                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>Hour</b></span>
                                                <select class="form-control mySelectBoxClass">
													  <option>12:00 AM</option>
													  <option>12:30 AM</option>
													  <option>01:00 AM</option>
													  <option>01:30 AM</option>
													  <option>02:00 AM</option>
													  <option>02:30 AM</option>
													  <option>03:00 AM</option>
													  <option>03:30 AM</option>
													  <option>04:00 AM</option>
													  <option>04:30 AM</option>
													  <option>05:00 AM</option>
													  <option>05:30 AM</option>
													  <option>06:00 AM</option>
													  <option>06:30 AM</option>
													  <option>07:00 AM</option>
													  <option>07:30 AM</option>
													  <option>08:00 AM</option>
													  <option>08:30 AM</option>
													  <option>09:00 AM</option>
													  <option>09:30 AM</option>
													  <option>10:00 AM</option>
													  <option selected>10:30 AM</option>
													  <option>11:00 AM</option>
													  <option>11:30 AM</option>
													  <option>12:00 PM</option>
													  <option>12:30 PM</option>								  
													  <option>01:00 PM</option>
													  <option>01:30 PM</option>
													  <option>02:00 PM</option>
													  <option>02:30 PM</option>
													  <option>03:00 PM</option>
													  <option>03:30 PM</option>
													  <option>04:00 PM</option>
													  <option>04:30 PM</option>
													  <option>05:00 PM</option>
													  <option>05:30 PM</option>
													  <option>06:00 PM</option>
													  <option>06:30 PM</option>
													  <option>07:00 PM</option>
													  <option>07:30 PM</option>
													  <option>08:00 PM</option>
													  <option>08:30 PM</option>
													  <option>09:00 PM</option>
													  <option>09:30 PM</option>
													  <option>10:00 PM</option>
													  <option>10:30 PM</option>
													  <option>11:00 PM</option>
													  <option>11:30 PM</option>		
													</select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Tab cartab3 -->

                                <!-- Tab vacationstab3 -->
                                <div class="tab-pane " id="vacationstab3">
                                    <div class="col-md-4">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft">
                                                <span class="opensans size13"><b>Flying from</b></span>
                                                <input type="text" class="form-control" placeholder="City or airport">
                                            </div>
                                        </div>

                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>To</b></span>
                                                <input type="text" class="form-control" placeholder="City or airport">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft">
                                                <span class="opensans size13"><b>Check in date</b></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker7" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>

                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>Check in date</b></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker8" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="room1">
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>ROOM 1</b></span><br/>

                                                    <div class="addroom1 block"><a onclick="addroom2()" class="grey cpointer">+ Add room</a></div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>1</option>
															  <option selected>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>0</option>
															  <option selected>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="room2 none">
                                            <div class="clearfix"></div>
                                            <div class="line1"></div>
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>ROOM 2</b></span><br/>
                                                    <div class="addroom2 block grey"><a onclick="addroom3()" class="grey cpointer">+ Add room</a> |
                                                        <a onclick="removeroom2()" class="orange cpointer"><img src="{{ asset('images/delete.png') }}" alt="delete" /></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>1</option>
															  <option>2</option>
															  <option selected>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>0</option>
															  <option>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="room3 none">
                                            <div class="clearfix"></div>
                                            <div class="line1"></div>
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>ROOM 3</b></span><br/>
                                                    <div class="addroom3 block grey"><a onclick="addroom3()" class="grey cpointer">+ Add room</a> |
                                                        <a onclick="removeroom3()" class="orange cpointer"><img src="{{ asset('images/delete.png') }}" alt="delete" /></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>0</option>
															  <option>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Tab vacations2 -->

                                <!-- Tab flighthoteltab3 -->
                                <div class="tab-pane " id="flighthoteltab3">
                                    <div class="col-md-4">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft">
                                                <span class="opensans size13"><b>Flying from</b></span>
                                                <input type="text" class="form-control" placeholder="City or airport">
                                            </div>
                                        </div>

                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>To</b></span>
                                                <input type="text" class="form-control" placeholder="City or airport">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft">
                                                <span class="opensans size13"><b>Departing</b></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker10" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>

                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>Returning</b></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker9" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="room1">
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>ROOM 1</b></span><br/>

                                                    <div class="addroom1 block"><a onclick="addroom2()" class="grey cpointer">+ Add room</a></div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right ">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>1</option>
															  <option selected>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right ">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>0</option>
															  <option selected>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="room2 none">
                                            <div class="clearfix"></div>
                                            <div class="line1"></div>
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>ROOM 2</b></span><br/>
                                                    <div class="addroom2 block grey"><a onclick="addroom3()" class="grey cpointer">+ Add room</a> |
                                                        <a onclick="removeroom2()" class="orange cpointer"><img src="{{ asset('images/delete.png') }}" alt="delete" /></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>1</option>
															  <option>2</option>
															  <option selected>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>0</option>
															  <option>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="room3 none">
                                            <div class="clearfix"></div>
                                            <div class="line1"></div>
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>ROOM 3</b></span><br/>
                                                    <div class="addroom3 block grey"><a onclick="addroom3()" class="grey cpointer">+ Add room</a> |
                                                        <a onclick="removeroom3()" class="orange cpointer"><img src="{{ asset('images/delete.png') }}" alt="delete" /></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent  textleft right">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>0</option>
															  <option>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Tab flighthoteltab3 -->

                                <!-- Tab cruisetab3 -->
                                <div class="tab-pane " id="cruisetab3">
                                    <div class="col-md-6">
                                        <span class="opensans size13"><b>Going to</b></span>
                                        <select class="form-control mySelectBoxClass">
										  <option selected>Show all</option>
										  <optgroup label="Most Popular">
											  <option>Caribbean</option>
											  <option>Bahamas</option>
											  <option>Mexico</option>
											  <option>Alaska</option>
											  <option>Europe</option>
											  <option>Bermuda</option>
											  <option>Hawaii</option>
										  </optgroup>
										  <optgroup label="Other Destinations">
											  <option>Africa</option>
											  <option>Arctic/Antartctic</option>
											  <option>Asia</option>
											  <option>Australia/New Zealand</option>
											  <option>Central America</option>
											  <option>Cruise to Nowhere</option>
											  <option>Galapagos</option>
											  <option>Greenland/Iceland</option>
											  <option>Middle East</option>
											  <option>Pacific Coastal</option>
											  <option>Panama Canal</option>
											  <option>South Africa</option>
											  <option>South Pacific</option>
											  <option>Tahiti</option>
											  <option>Transatlantic</option>
											  <option>World Cruises</option>
										  </optgroup>
										</select>

                                    </div>
                                    <div class="col-md-6">
                                        <span class="opensans size13"><b>Departure</b></span>
                                        <select class="form-control mySelectBoxClass">
										  <option selected>Show all</option>
										  <option>October 2013</option>
										  <option>November 2013</option>
										  <option>December 2013</option>
										  <option>January 2014</option>
										  <option>February 2014</option>
										  <option>March 2014</option>
										  <option>April 2014</option>
										  <option>May 2014</option>
										  <option>June 2014</option>
										  <option>July 2014</option>
										  <option>August 2014</option>
										  <option>September 2014</option>
										  <option>October 2014</option>
										  <option>November 2014</option>
										  <option>December 2014</option>
										</select>
                                    </div>
                                </div>
                                <!-- End of Tab cruisetab3 -->

                                <!-- Tab hotelcartab3 -->
                                <div class="tab-pane " id="hotelcartab3">
                                    <div class="col-md-4 pt-6">
                                        <span class="opensans size18">Where do you want to go?</span>
                                        <input type="text" class="form-control" placeholder="Greece">
                                    </div>

                                    <div class="col-md-4">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft">
                                                <span class="opensans size13"><b>Check in date</b></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker11" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>

                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>Check in date</b></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker12" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="room1">
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>ROOM 1</b></span><br/>

                                                    <div class="addroom1 block"><a onclick="addroom2()" class="grey cpointer">+ Add room</a></div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right ">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>1</option>
															  <option selected>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right ">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>0</option>
															  <option selected>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="room2 none">
                                            <div class="clearfix"></div>
                                            <div class="line1"></div>
                                            <div class="w50percent">
                                                <div class="wh90percent textelft">
                                                    <span class="opensans size13"><b>ROOM 2</b></span><br/>
                                                    <div class="addroom2 block grey"><a onclick="addroom3()" class="grey cpointer">+ Add room</a> |
                                                        <a onclick="removeroom2()" class="orange cpointer"><img src="{{ asset('images/delete.png') }}" alt="delete" /></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>1</option>
															  <option>2</option>
															  <option selected>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>0</option>
															  <option>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="room3 none">
                                            <div class="clearfix"></div>
                                            <div class="line1"></div>
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>ROOM 3</b></span><br/>
                                                    <div class="addroom3 block grey"><a onclick="addroom3()" class="grey cpointer">+ Add room</a> |
                                                        <a onclick="removeroom3()" class="orange cpointer"><img src="{{ asset('images/delete.png') }}" alt="delete" /></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>0</option>
															  <option>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="center size10 ca02 ">! An economy car will be added to your search. (You may change your car options later.)
                                    </div>
                                </div>
                                <!-- End of Tab hotelcartab3 -->

                                <!-- Tab flighthotelcartab3 -->
                                <div class="tab-pane " id="flighthotelcartab3">
                                    <div class="col-md-4">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft">
                                                <span class="opensans size13"><b>Flying from</b></span>
                                                <input type="text" class="form-control" placeholder="City or airport">
                                            </div>
                                        </div>

                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>To</b></span>
                                                <input type="text" class="form-control" placeholder="City or airport">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="w50percent">
                                            <div class="wh90percent textleft">
                                                <span class="opensans size13"><b>Departing</b></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker13" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>

                                        <div class="w50percentlast">
                                            <div class="wh90percent textleft right">
                                                <span class="opensans size13"><b>Returning</b></span>
                                                <input type="text" class="form-control mySelectCalendar" id="datepicker14" placeholder="mm/dd/yyyy" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="room1">
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>ROOM 1</b></span><br/>

                                                    <div class="addroom1 block"><a onclick="addroom2()" class="grey cpointer">+ Add room</a></div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right ">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>1</option>
															  <option selected>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right ">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>0</option>
															  <option selected>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="room2 none">
                                            <div class="clearfix"></div>
                                            <div class="line1"></div>
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>ROOM 2</b></span><br/>
                                                    <div class="addroom2 block grey"><a onclick="addroom3()" class="grey cpointer">+ Add room</a> |
                                                        <a onclick="removeroom2()" class="orange cpointer"><img src="{{ asset('images/delete.png') }}" alt="delete" /></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option>1</option>
															  <option>2</option>
															  <option selected>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>0</option>
															  <option>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="room3 none">
                                            <div class="clearfix"></div>
                                            <div class="line1"></div>
                                            <div class="w50percent">
                                                <div class="wh90percent textleft">
                                                    <span class="opensans size13"><b>ROOM 3</b></span><br/>
                                                    <div class="addroom3 block grey"><a onclick="addroom3()" class="grey cpointer">+ Add room</a> |
                                                        <a onclick="removeroom3()" class="orange cpointer"><img src="{{ asset('images/delete.png') }}" alt="delete" /></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="w50percentlast">
                                                <div class="wh90percent textleft right">
                                                    <div class="w50percent">
                                                        <div class="wh90percent textleft left">
                                                            <span class="opensans size13"><b>Adult</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                    <div class="w50percentlast">
                                                        <div class="wh90percent textleft right">
                                                            <span class="opensans size13"><b>Child</b></span>
                                                            <select class="form-control mySelectBoxClass">
															  <option selected>0</option>
															  <option>1</option>
															  <option>2</option>
															  <option>3</option>
															  <option>4</option>
															  <option>5</option>
															</select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="center size10 ca03">! An economy car will be added to your search. (You may change your car options later.)</div>
                                </div>
                                <!-- End of Tab flighthotelcartab3 -->

                                <div class="clearfix"></div><br/>

                                <div class="cstyle02">
                                    <button type="submit" class="btn-search4 margleft15">Search</button>
                                    <div class="right margtop10"><a href="#" class="grey">Advanced search</a></div>
                                </div>




                            </div>
                        </div>


                        <span class="size16 bold">Personal details</span>
                        <div class="line2"></div>


                        <!-- COL 1 -->
                        <div class="col-md-12 offset-0">
                            <table>
                                <tr>
                                    <td>
                                        <div class="radio left">
                                            <label>
											<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
											Ms. 
										  </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="radio">
                                            <label>
											<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
											Mr. 
										  </label>
                                        </div>
                                    </td>
                                </tr>
                            </table>


                            <br/> Name*:
                            <input type="text" class="form-control" placeholder="John Doe" rel="popover" id="name" data-content="This field is mandatory"
                                data-original-title="Here you can edit your name">
                            <br/> Username*:
                            <input type="text" class="form-control" placeholder="Jack" rel="popover" id="username" data-content="This field is mandatory"
                                data-original-title="Here you can edit your username">
                            <br/> E-mail*:
                            <input type="text" class="form-control" placeholder="office@email.com" id="email" data-content="This field is mandatory"
                                data-original-title="Edit your email address">
                            <br/> Phone number:
                            <input type="text" class="form-control" placeholder="">

                            <br/> Birth date:<br/>
                            <div class="row">
                                <div class="col-md-4">
                                    <select class="form-control mySelectBoxClass">
									  <option>12:00 AM</option>
									</select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control mySelectBoxClass">
									  <option>12:00 AM</option>
									</select>
                                </div>
                                <div class="col-md-4">
                                    <select class="form-control mySelectBoxClass">
									  <option>12:00 AM</option>
									</select>
                                </div>
                            </div>




                            <br/>
                            <br/>
                            <span class="size16 bold">Your address</span>
                            <div class="line2"></div>

                            <br/> Company name:
                            <input type="text" class="form-control" placeholder="">

                            <br/> Address*:
                            <input type="text" class="form-control" placeholder="">

                            <br/> Zip Code*:
                            <input type="text" class="form-control" placeholder="">

                            <br/> Country*:
                            <select class="form-control mySelectBoxClass">
						  <option value="">Country...</option>
							<option value="AF">Afghanistan</option>
							<option value="AL">Albania</option>
							<option value="DZ">Algeria</option>
							<option value="AS">American Samoa</option>
							<option value="AD">Andorra</option>
							<option value="AG">Angola</option>
							<option value="AI">Anguilla</option>
							<option value="AG">Antigua &amp; Barbuda</option>
							<option value="AR">Argentina</option>
							<option value="AA">Armenia</option>
							<option value="AW">Aruba</option>
							<option value="AU">Australia</option>
							<option value="AT">Austria</option>
							<option value="AZ">Azerbaijan</option>
							<option value="BS">Bahamas</option>
							<option value="BH">Bahrain</option>
							<option value="BD">Bangladesh</option>
							<option value="BB">Barbados</option>
							<option value="BY">Belarus</option>
							<option value="BE">Belgium</option>
							<option value="BZ">Belize</option>
							<option value="BJ">Benin</option>
							<option value="BM">Bermuda</option>
							<option value="BT">Bhutan</option>
							<option value="BO">Bolivia</option>
							<option value="BL">Bonaire</option>
							<option value="BA">Bosnia &amp; Herzegovina</option>
							<option value="BW">Botswana</option>
							<option value="BR">Brazil</option>
							<option value="BC">British Indian Ocean Ter</option>
							<option value="BN">Brunei</option>
							<option value="BG">Bulgaria</option>
							<option value="BF">Burkina Faso</option>
							<option value="BI">Burundi</option>
							<option value="KH">Cambodia</option>
							<option value="CM">Cameroon</option>
							<option value="CA">Canada</option>
							<option value="IC">Canary Islands</option>
							<option value="CV">Cape Verde</option>
							<option value="KY">Cayman Islands</option>
							<option value="CF">Central African Republic</option>
							<option value="TD">Chad</option>
							<option value="CD">Channel Islands</option>
							<option value="CL">Chile</option>
							<option value="CN">China</option>
							<option value="CI">Christmas Island</option>
							<option value="CS">Cocos Island</option>
							<option value="CO">Colombia</option>
							<option value="CC">Comoros</option>
							<option value="CG">Congo</option>
							<option value="CK">Cook Islands</option>
							<option value="CR">Costa Rica</option>
							<option value="CT">Cote D'Ivoire</option>
							<option value="HR">Croatia</option>
							<option value="CU">Cuba</option>
							<option value="CB">Curacao</option>
							<option value="CY">Cyprus</option>
							<option value="CZ">Czech Republic</option>
							<option value="DK">Denmark</option>
							<option value="DJ">Djibouti</option>
							<option value="DM">Dominica</option>
							<option value="DO">Dominican Republic</option>
							<option value="TM">East Timor</option>
							<option value="EC">Ecuador</option>
							<option value="EG">Egypt</option>
							<option value="SV">El Salvador</option>
							<option value="GQ">Equatorial Guinea</option>
							<option value="ER">Eritrea</option>
							<option value="EE">Estonia</option>
							<option value="ET">Ethiopia</option>
							<option value="FA">Falkland Islands</option>
							<option value="FO">Faroe Islands</option>
							<option value="FJ">Fiji</option>
							<option value="FI">Finland</option>
							<option value="FR">France</option>
							<option value="GF">French Guiana</option>
							<option value="PF">French Polynesia</option>
							<option value="FS">French Southern Ter</option>
							<option value="GA">Gabon</option>
							<option value="GM">Gambia</option>
							<option value="GE">Georgia</option>
							<option value="DE">Germany</option>
							<option value="GH">Ghana</option>
							<option value="GI">Gibraltar</option>
							<option value="GB">Great Britain</option>
							<option value="GR">Greece</option>
							<option value="GL">Greenland</option>
							<option value="GD">Grenada</option>
							<option value="GP">Guadeloupe</option>
							<option value="GU">Guam</option>
							<option value="GT">Guatemala</option>
							<option value="GN">Guinea</option>
							<option value="GY">Guyana</option>
							<option value="HT">Haiti</option>
							<option value="HW">Hawaii</option>
							<option value="HN">Honduras</option>
							<option value="HK">Hong Kong</option>
							<option value="HU">Hungary</option>
							<option value="IS">Iceland</option>
							<option value="IN">India</option>
							<option value="ID">Indonesia</option>
							<option value="IA">Iran</option>
							<option value="IQ">Iraq</option>
							<option value="IR">Ireland</option>
							<option value="IM">Isle of Man</option>
							<option value="IL">Israel</option>
							<option value="IT">Italy</option>
							<option value="JM">Jamaica</option>
							<option value="JP">Japan</option>
							<option value="JO">Jordan</option>
							<option value="KZ">Kazakhstan</option>
							<option value="KE">Kenya</option>
							<option value="KI">Kiribati</option>
							<option value="NK">Korea North</option>
							<option value="KS">Korea South</option>
							<option value="KW">Kuwait</option>
							<option value="KG">Kyrgyzstan</option>
							<option value="LA">Laos</option>
							<option value="LV">Latvia</option>
							<option value="LB">Lebanon</option>
							<option value="LS">Lesotho</option>
							<option value="LR">Liberia</option>
							<option value="LY">Libya</option>
							<option value="LI">Liechtenstein</option>
							<option value="LT">Lithuania</option>
							<option value="LU">Luxembourg</option>
							<option value="MO">Macau</option>
							<option value="MK">Macedonia</option>
							<option value="MG">Madagascar</option>
							<option value="MY">Malaysia</option>
							<option value="MW">Malawi</option>
							<option value="MV">Maldives</option>
							<option value="ML">Mali</option>
							<option value="MT">Malta</option>
							<option value="MH">Marshall Islands</option>
							<option value="MQ">Martinique</option>
							<option value="MR">Mauritania</option>
							<option value="MU">Mauritius</option>
							<option value="ME">Mayotte</option>
							<option value="MX">Mexico</option>
							<option value="MI">Midway Islands</option>
							<option value="MD">Moldova</option>
							<option value="MC">Monaco</option>
							<option value="MN">Mongolia</option>
							<option value="MS">Montserrat</option>
							<option value="MA">Morocco</option>
							<option value="MZ">Mozambique</option>
							<option value="MM">Myanmar</option>
							<option value="NA">Nambia</option>
							<option value="NU">Nauru</option>
							<option value="NP">Nepal</option>
							<option value="AN">Netherland Antilles</option>
							<option value="NL">Netherlands (Holland, Europe)</option>
							<option value="NV">Nevis</option>
							<option value="NC">New Caledonia</option>
							<option value="NZ">New Zealand</option>
							<option value="NI">Nicaragua</option>
							<option value="NE">Niger</option>
							<option value="NG">Nigeria</option>
							<option value="NW">Niue</option>
							<option value="NF">Norfolk Island</option>
							<option value="NO">Norway</option>
							<option value="OM">Oman</option>
							<option value="PK">Pakistan</option>
							<option value="PW">Palau Island</option>
							<option value="PS">Palestine</option>
							<option value="PA">Panama</option>
							<option value="PG">Papua New Guinea</option>
							<option value="PY">Paraguay</option>
							<option value="PE">Peru</option>
							<option value="PH">Philippines</option>
							<option value="PO">Pitcairn Island</option>
							<option value="PL">Poland</option>
							<option value="PT">Portugal</option>
							<option value="PR">Puerto Rico</option>
							<option value="QA">Qatar</option>
							<option value="ME">Republic of Montenegro</option>
							<option value="RS">Republic of Serbia</option>
							<option value="RE">Reunion</option>
							<option value="RO">Romania</option>
							<option value="RU">Russia</option>
							<option value="RW">Rwanda</option>
							<option value="NT">St Barthelemy</option>
							<option value="EU">St Eustatius</option>
							<option value="HE">St Helena</option>
							<option value="KN">St Kitts-Nevis</option>
							<option value="LC">St Lucia</option>
							<option value="MB">St Maarten</option>
							<option value="PM">St Pierre &amp; Miquelon</option>
							<option value="VC">St Vincent &amp; Grenadines</option>
							<option value="SP">Saipan</option>
							<option value="SO">Samoa</option>
							<option value="AS">Samoa American</option>
							<option value="SM">San Marino</option>
							<option value="ST">Sao Tome &amp; Principe</option>
							<option value="SA">Saudi Arabia</option>
							<option value="SN">Senegal</option>
							<option value="RS">Serbia</option>
							<option value="SC">Seychelles</option>
							<option value="SL">Sierra Leone</option>
							<option value="SG">Singapore</option>
							<option value="SK">Slovakia</option>
							<option value="SI">Slovenia</option>
							<option value="SB">Solomon Islands</option>
							<option value="OI">Somalia</option>
							<option value="ZA">South Africa</option>
							<option value="ES">Spain</option>
							<option value="LK">Sri Lanka</option>
							<option value="SD">Sudan</option>
							<option value="SR">Suriname</option>
							<option value="SZ">Swaziland</option>
							<option value="SE">Sweden</option>
							<option value="CH">Switzerland</option>
							<option value="SY">Syria</option>
							<option value="TA">Tahiti</option>
							<option value="TW">Taiwan</option>
							<option value="TJ">Tajikistan</option>
							<option value="TZ">Tanzania</option>
							<option value="TH">Thailand</option>
							<option value="TG">Togo</option>
							<option value="TK">Tokelau</option>
							<option value="TO">Tonga</option>
							<option value="TT">Trinidad &amp; Tobago</option>
							<option value="TN">Tunisia</option>
							<option value="TR">Turkey</option>
							<option value="TU">Turkmenistan</option>
							<option value="TC">Turks &amp; Caicos Is</option>
							<option value="TV">Tuvalu</option>
							<option value="UG">Uganda</option>
							<option value="UA">Ukraine</option>
							<option value="AE">United Arab Emirates</option>
							<option value="GB">United Kingdom</option>
							<option value="US">United States of America</option>
							<option value="UY">Uruguay</option>
							<option value="UZ">Uzbekistan</option>
							<option value="VU">Vanuatu</option>
							<option value="VS">Vatican City State</option>
							<option value="VE">Venezuela</option>
							<option value="VN">Vietnam</option>
							<option value="VB">Virgin Islands (Brit)</option>
							<option value="VA">Virgin Islands (USA)</option>
							<option value="WK">Wake Island</option>
							<option value="WF">Wallis &amp; Futana Is</option>
							<option value="YE">Yemen</option>
							<option value="ZR">Zaire</option>
							<option value="ZM">Zambia</option>
							<option value="ZW">Zimbabwe</option>
						</select>

                            <br/><br/> City*:
                            <input type="text" class="form-control" placeholder="ex: London">

                            <br/> Region/State*:
                            <input type="text" class="form-control" placeholder="">

                            <button type="submit" class="bluebtn margtop20">Update</button>
                        </div>
                        <!-- END OF COL 1 -->

                        <div class="clearfix"></div><br/><br/><br/>


                        <div class="row">
                            <div class="col-md-4 grey">
                                <span class="size16 bold dark">Personal details</span>
                                <div class="line2"></div>
                                <a href="#" class="clblue">New York Marriott Marquis</a> from <span class="bold green">$150</span><br/>
                                <a href="#" class="clblue">The Jade Hotel</a> from <span class="bold green">$49</span><br/>
                                <a href="#">See all</a>
                            </div>
                            <div class="col-md-4">
                                <span class="size16 bold dark">Wish lists</span>
                                <div class="line2"></div>
                                <a href="#" class="clblue">Incredible places</a> (1)<br/>
                                <a href="#" class="clblue">My next places</a> (0)<br/>
                                <a href="#">+ Add new category</a>
                            </div>
                            <div class="col-md-4">
                                <span class="size16 bold dark">Your past bookings</span>
                                <div class="line2"></div>
                                <a href="#" class="clblue">Solita Soho Hotel</a> from <span class="bold green">$150</span><br/>
                                <a href="#" class="clblue">Helmsley Park Lane Hotel</a> from <span class="bold green">$49</span><br/>
                                <a href="#">See all</a>
                            </div>
                        </div>





                    </div>
                    <!-- END OF TAB 1 -->



                    <!-- TAB 2 -->
                    <div class="tab-pane" id="bookings">
                        <div class="padding40">

                            <div class="col-md-4 offset-0">
                                <span class="dark size18">Places</span>
                                <div class="line4"></div>
                                <ul class="blogcat">
                                    <li><a href="#">Rome</a> <span class="badge indent0">3</span></li>
                                    <li><a href="#">Malaga</a> <span class="badge indent0">1</span></li>
                                    <li><a href="#">Marbella</a> <span class="badge indent0">1</span></li>
                                    <li><a href="#">Gibraltar</a> <span class="badge indent0">1</span></li>
                                    <li><a href="#">Zakynthos</a> <span class="badge indent0">2</span></li>
                                    <li><a href="#">Thasos</a> <span class="badge indent0">1</span></li>
                                    <li><a href="#">Santorini</a> <span class="badge indent0">1</span></li>
                                    <li><a href="#">Golden Sands</a> <span class="badge indent0">1</span></li>
                                    <li><a href="#">Sunny Beach</a> <span class="badge indent0">1</span></li>
                                </ul>
                            </div>
                            <div class="col-md-4 offset-0">
                                <span class="dark size18">Trips</span>
                                <div class="line4"></div>
                                <ul class="blogcat">
                                    <li><a href="#">Italy</a> <span class="badge indent0">2</span></li>
                                    <li><a href="#">England</a> <span class="badge indent0">1</span></li>
                                    <li><a href="#">Greece</a> <span class="badge indent0">2</span></li>
                                    <li><a href="#">Spain</a> <span class="badge indent0">1</span></li>
                                    <li><a href="#">Bulgary</a> <span class="badge indent0">1</span></li>
                                </ul>
                            </div>
                            <div class="col-md-4 offset-0">
                                <span class="dark size18">Countries</span>
                                <div class="line4"></div>
                                <ul class="blogcat">
                                    <li><img src="{{ asset('images/flags/IT.png') }}" class="right" alt="" /><a href="#">Italy</a></li>
                                    <li><img src="{{ asset('images/flags/GB.png') }}" class="right" alt="" /><a href="#">England</a></li>
                                    <li><img src="{{ asset('images/flags/GR.png') }}" class="right" alt="" /><a href="#">Greece</a></li>
                                    <li><img src="{{ asset('images/flags/ES.png') }}" class="right" alt="" /><a href="#">Spain</a></li>
                                    <li><img src="{{ asset('images/flags/BG.png') }}" class="right" alt="" /><a href="#">Bulgary</a></li>
                                </ul>
                            </div>
                            <div class="clearfix"></div>
                            <br/>
                            <br/>
                            <br/>

                            <table class="table table-bordered  mt-10">
                                <tr class="grey opensans">
                                    <td class="center"><span class="size30 slim lh4 dark">10</span><br/><span class="size12">Trips</span></td>
                                    <td class="center"><span class="size30 slim lh4 dark">20</span><br/><span class="size12">Places</span></td>
                                    <td class="center"><span class="size30 slim lh4 dark">14</span><br/><span class="size12">Days away</span></td>
                                    <td class="center"><span class="size30 slim lh4 dark">5</span><br/><span class="size12">Countries</span></td>
                                </tr>
                            </table>

                            <br/>
                            <br/>

                            <span class="dark size18">Your latest bookings</span>
                            <div class="right mt-5">
                                <select class="form-control mySelectBoxClass hasCustomSelect cpwidth">
								  <option value="">All time</option>
								  <option value="">Countries</option>
								  <option value="">Date</option>
								</select>
                            </div>
                            <div class="right mr20 mt-5">
                                <select class="form-control mySelectBoxClass hasCustomSelect cpwidth2">
								  <option value="">5/page</option>
								  <option value="">15/page</option>
								  <option value="">20/page</option>
								</select>
                            </div>
                            <div class="line4"></div>
                            <br/>

                            <div class="col-md-4 offset-0">
                                <a href="#"><img alt="" class="left mr20" src="{{ asset('images/smallthumb-1.jpg') }}"></a>
                                <a class="dark" href="#"><b>Hotel Dany</b></a> /
                                <span class="dark size12">Greece - Zakynthos</span><br>
                                <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                <img alt="" src="{{ asset('images/filter-rating-5.png') }}"><br/>
                            </div>
                            <div class="col-md-7">
                                <span class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus, quam vel interdum lacinia, lacus justo rutrum lorem, in fermentum ligula est a diam. Nam aliquet arcu est, a malesuada odio laoreet non.</span>
                            </div>
                            <div class="col-md-1 offset-0">
                                <button onclick="errorMessage()" type="submit" class="btn-search5 right">More</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="line4"></div>

                            <div class="col-md-4 offset-0">
                                <a href="#"><img alt="" class="left mr20" src="{{ asset('images/smallthumb-2.jpg') }}"></a>
                                <a class="dark" href="#"><b>Hotel Dany</b></a> /
                                <span class="dark size12">Greece - Zakynthos</span><br>
                                <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                <img alt="" src="{{ asset('images/filter-rating-5.png') }}"><br/>
                            </div>
                            <div class="col-md-7">
                                <span class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus, quam vel interdum lacinia, lacus justo rutrum lorem, in fermentum ligula est a diam. Nam aliquet arcu est, a malesuada odio laoreet non.</span>
                            </div>
                            <div class="col-md-1 offset-0">
                                <button onclick="errorMessage()" type="submit" class="btn-search5 right">More</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="line4"></div>

                            <div class="col-md-4 offset-0">
                                <a href="#"><img alt="" class="left mr20" src="{{ asset('images/smallthumb-3.jpg') }}"></a>
                                <a class="dark" href="#"><b>Hotel Dany</b></a> /
                                <span class="dark size12">Greece - Zakynthos</span><br>
                                <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                <img alt="" src="{{ asset('images/filter-rating-5.png') }}"><br/>
                            </div>
                            <div class="col-md-7">
                                <span class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus, quam vel interdum lacinia, lacus justo rutrum lorem, in fermentum ligula est a diam. Nam aliquet arcu est, a malesuada odio laoreet non.</span>
                            </div>
                            <div class="col-md-1 offset-0">
                                <button onclick="errorMessage()" type="submit" class="btn-search5 right">More</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="line4"></div>

                            <div class="col-md-4 offset-0">
                                <a href="#"><img alt="" class="left mr20" src="{{ asset('images/smallthumb-1.jpg') }}"></a>
                                <a class="dark" href="#"><b>Hotel Dany</b></a> /
                                <span class="dark size12">Greece - Zakynthos</span><br>
                                <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                <img alt="" src="{{ asset('images/filter-rating-5.png') }}"><br/>
                            </div>
                            <div class="col-md-7">
                                <span class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus, quam vel interdum lacinia, lacus justo rutrum lorem, in fermentum ligula est a diam. Nam aliquet arcu est, a malesuada odio laoreet non.</span>
                            </div>
                            <div class="col-md-1 offset-0">
                                <button onclick="errorMessage()" type="submit" class="btn-search5 right">More</button>
                            </div>
                            <div class="clearfix"></div>
                            <div class="line4"></div>

                            <div class="col-md-4 offset-0">
                                <a href="#"><img alt="" class="left mr20" src="{{ asset('images/smallthumb-2.jpg') }}"></a>
                                <a class="dark" href="#"><b>Hotel Dany</b></a> /
                                <span class="dark size12">Greece - Zakynthos</span><br>
                                <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                <img alt="" src="{{ asset('images/filter-rating-5.png') }}"><br/>
                            </div>
                            <div class="col-md-7">
                                <span class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus, quam vel interdum lacinia, lacus justo rutrum lorem, in fermentum ligula est a diam. Nam aliquet arcu est, a malesuada odio laoreet non.</span>
                            </div>
                            <div class="col-md-1 offset-0">
                                <button onclick="errorMessage()" type="submit" class="btn-search5 right">More</button>
                            </div>
                            <div class="clearfix"></div>

                            <div class="line4"></div>
                            <ul class="pagination right paddingbtm20">
                                <li class="disabled"><a href="#">«</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">»</a></li>
                            </ul>



                        </div>
                    </div>
                    <!-- END OF TAB 2 -->

                    <!-- TAB 3 -->
                    <div class="tab-pane" id="wishlist">
                        <div class="padding40">


                            <input type="text" placeholder="Make new category" class="form-control wh80percent left">
                            <button type="submit" class="btn-search5 right"><span class="glyphicon glyphicon-plus"></span>Add new</button>

                            <div class="clearfix"></div>
                            <br/>

                            <ul class="blogcat">
                                <li><a href="#">Incredible places</a> <span class="badge indent0">3</span></li>
                                <li><a href="#">My next places</a> <span class="badge indent0">1</span></li>
                                <li><a href="#">Europe</a> <span class="badge indent0">1</span></li>
                            </ul>

                            <br/>
                            <br/>

                            <span class="dark size18">Favourites list</span>
                            <div class="right mt-5">
                                <select class="form-control mySelectBoxClass hasCustomSelect cpwidth2">
								  <option value="">5/page</option>
								  <option value="">15/page</option>
								  <option value="">20/page</option>
								</select>
                            </div>
                            <div class="line4"></div>
                            <br/>

                            <div>
                                <div class="col-md-4 offset-0">
                                    <a href="#"><img alt="" class="left mr20" src="{{ asset('images/smallthumb-1.jpg') }}"></a>
                                    <a class="dark" href="#"><b>Hotel Dany</b></a> /
                                    <span class="dark size12">Greece - Zakynthos</span><br>
                                    <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                    <img alt="" src="{{ asset('images/filter-rating-5.png') }}"><br/>
                                </div>
                                <div class="col-md-7">
                                    <span class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus, quam vel interdum lacinia, lacus justo rutrum lorem, in fermentum ligula est a diam. Nam aliquet arcu est, a malesuada odio laoreet non.</span>
                                </div>
                                <div class="col-md-1 offset-0">
                                    <button onclick="errorMessage()" type="submit" class="btn-search5 right"><span class="glyphicon glyphicon-heart dark"></span></button>
                                </div>
                                <button aria-hidden="true" data-dismiss="alert" class="close mr20 mt10" type="button">×</button>
                                <div class="clearfix"></div>
                                <div class="line6"></div>
                            </div>

                            <div>
                                <div class="col-md-4 offset-0">
                                    <a href="#"><img alt="" class="left mr20" src="{{ asset('images/smallthumb-2.jpg') }}"></a>
                                    <a class="dark" href="#"><b>Hotel Dany</b></a> /
                                    <span class="dark size12">Greece - Zakynthos</span><br>
                                    <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                    <img alt="" src="{{ asset('images/filter-rating-5.png') }}"><br/>
                                </div>
                                <div class="col-md-7">
                                    <span class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus, quam vel interdum lacinia, lacus justo rutrum lorem, in fermentum ligula est a diam. Nam aliquet arcu est, a malesuada odio laoreet non.</span>
                                </div>
                                <div class="col-md-1 offset-0">
                                    <button onclick="errorMessage()" type="submit" class="btn-search5 right"><span class="glyphicon glyphicon-heart dark"></span></button>
                                </div>
                                <button aria-hidden="true" data-dismiss="alert" class="close mr20 mt10" type="button">×</button>
                                <div class="clearfix"></div>
                                <div class="line6"></div>
                            </div>

                            <div>
                                <div class="col-md-4 offset-0">
                                    <a href="#"><img alt="" class="left mr20" src="{{ asset('images/smallthumb-3.jpg') }}"></a>
                                    <a class="dark" href="#"><b>Hotel Dany</b></a> /
                                    <span class="dark size12">Greece - Zakynthos</span><br>
                                    <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                    <img alt="" src="{{ asset('images/filter-rating-5.png') }}"><br/>
                                </div>
                                <div class="col-md-7">
                                    <span class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus, quam vel interdum lacinia, lacus justo rutrum lorem, in fermentum ligula est a diam. Nam aliquet arcu est, a malesuada odio laoreet non.</span>
                                </div>
                                <div class="col-md-1 offset-0">
                                    <button onclick="errorMessage()" type="submit" class="btn-search5 right"><span class="glyphicon glyphicon-heart"></span></button>
                                </div>
                                <button aria-hidden="true" data-dismiss="alert" class="close mr20 mt10" type="button">×</button>
                                <div class="clearfix"></div>
                                <div class="line6"></div>
                            </div>

                            <div>
                                <div class="col-md-4 offset-0">
                                    <a href="#"><img alt="" class="left mr20" src="{{ asset('images/smallthumb-1.jpg') }}"></a>
                                    <a class="dark" href="#"><b>Hotel Dany</b></a> /
                                    <span class="dark size12">Greece - Zakynthos</span><br>
                                    <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                    <img alt="" src="{{ asset('images/filter-rating-5.png') }}"><br/>
                                </div>
                                <div class="col-md-7">
                                    <span class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus, quam vel interdum lacinia, lacus justo rutrum lorem, in fermentum ligula est a diam. Nam aliquet arcu est, a malesuada odio laoreet non.</span>
                                </div>
                                <div class="col-md-1 offset-0">
                                    <button onclick="errorMessage()" type="submit" class="btn-search5 right"><span class="glyphicon glyphicon-heart dark"></span></button>
                                </div>
                                <button aria-hidden="true" data-dismiss="alert" class="close mr20 mt10" type="button">×</button>
                                <div class="clearfix"></div>
                                <div class="line6"></div>
                            </div>

                            <div>
                                <div class="col-md-4 offset-0">
                                    <a href="#"><img alt="" class="left mr20" src="{{ asset('images/smallthumb-2.jpg') }}"></a>
                                    <a class="dark" href="#"><b>Hotel Dany</b></a> /
                                    <span class="dark size12">Greece - Zakynthos</span><br>
                                    <span class="opensans green bold size14">$36-$160</span> <span class="grey">avg/night</span><br>
                                    <img alt="" src="{{ asset('images/filter-rating-5.png') }}"><br/>
                                </div>
                                <div class="col-md-7">
                                    <span class="grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam faucibus, quam vel interdum lacinia, lacus justo rutrum lorem, in fermentum ligula est a diam. Nam aliquet arcu est, a malesuada odio laoreet non.</span>
                                </div>
                                <div class="col-md-1 offset-0">
                                    <button onclick="errorMessage()" type="submit" class="btn-search5 right"><span class="glyphicon glyphicon-heart"></span></button>
                                </div>
                                <button aria-hidden="true" data-dismiss="alert" class="close mr20 mt10" type="button">×</button>
                                <div class="clearfix"></div>
                            </div>

                            <div class="line4"></div>
                            <ul class="pagination right paddingbtm20">
                                <li class="disabled"><a href="#">«</a></li>
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">»</a></li>
                            </ul>






                        </div>
                    </div>
                    <!-- END OF TAB 3 -->

                    <!-- TAB 4 -->
                    <div class="tab-pane" id="settings">
                        <div class="padding40 dark">


                            <span class="dark size18">Settings</span>
                            <div class="line4"></div>

                            <span class="dark size14 bold">Notifications</span><br/> Change the way you recieve notifications.

                            <div class="checkbox dark">
                                <label>
								<input type="checkbox" checked> Make my profile private
							  </label>
                            </div>
                            <div class="checkbox dark">
                                <label>
								<input type="checkbox"> Send an email when someone replyes to one of your comments.
							  </label>
                            </div>

                            <br/>
                            <br/>

                            <span class="dark size14 bold">Who can contact me?</span><br/>
                            <select class="form-control mySelectBoxClass hasCustomSelect cpwidth">
							  <option value="">Everyone</option>
							  <option value="">No one</option>
							  <option value="">Friends</option>
							</select>

                            <br/>
                            <br/>
                            <br/>

                            <span class="dark size14 bold">Payments</span><br/>
                            <div class="checkbox dark">
                                <label>
								<input type="checkbox" checked> Auto Payment
							  </label>
                            </div>

                            <br/>
                            <br/>

                            <span class="dark size14 bold">Credit Card Details</span>
                            <div class="line4"></div>
                            <br/> Card Type<br/>
                            <select class="form-control mySelectBoxClass hasCustomSelect cpwidth">
							  <option value="">Visa</option>
							  <option value="">MasterCard</option>
							  <option value="">Discover</option>
							  <option value="">American Express</option>
							</select>
                            <br/>
                            <br/> Card Number<br/>
                            <input type="text" class="form-control" placeholder="XXXX-XXXX-XXXX-XXX">
                            <br/> Expiry date<br/>
                            <select class="form-control mySelectBoxClass hasCustomSelect cpwidth2">
							  <option value="">01</option>
							  <option value="">02</option>
							  <option value="">03</option>
							  <option value="">04</option>
							  <option value="">05</option>
							  <option value="">06</option>
							  <option value="">07</option>
							  <option value="">08</option>
							  <option value="">09</option>
							  <option value="">10</option>
							  <option value="">11</option>
							  <option value="">12</option>
							</select> /
                            <select class="form-control mySelectBoxClass hasCustomSelect cpwidth2">
							  <option value="">2013</option>
							  <option value="">2014</option>
							  <option value="">2015</option>
							  <option value="">2016</option>
							  <option value="">2017</option>
							  <option value="">2018</option>

							</select>

                            <br/> CVV
                            <br/>
                            <input type="text" class="form-control cpwidth2" placeholder="">
                            <br/>
                            <br/>

                            <button type="submit" class="btn-search5">Save changes</button>




                        </div>
                    </div>
                    <!-- END OF TAB 4 -->

                    <!-- TAB 5 -->
                    <div class="tab-pane" id="history">
                        <div class="padding40">

                            <span class="dark size18">History</span>
                            <div class="line4"></div>

                            <br/>

                            <div class="col-md-3 bold">Date</div>
                            <div class="col-md-3 bold">Destination</div>
                            <div class="col-md-3 bold">Service</div>
                            <div class="col-md-3 bold textright">Action</div>
                            <div class="clearfix"></div>
                            <div class="line4"></div>

                            <div class="col-md-3">01.05.09</div>
                            <div class="col-md-3">Grece - Zakynthos</div>
                            <div class="col-md-3">Hotel</div>
                            <div class="col-md-3 textright"><button type="submit" class="btn-search5"><span class="glyphicon glyphicon-plus"></span></button></div>
                            <div class="clearfix"></div>

                            <div class="line4"></div>
                            <div class="col-md-3">17.07.10</div>
                            <div class="col-md-3">Spain - Malaga</div>
                            <div class="col-md-3">Flight Tickets</div>
                            <div class="col-md-3 textright"><button type="submit" class="btn-search5"><span class="glyphicon glyphicon-plus"></span></button></div>
                            <div class="clearfix"></div>

                            <div class="line4"></div>
                            <div class="col-md-3">01.05.09</div>
                            <div class="col-md-3">Bulgary - Sunny Beach</div>
                            <div class="col-md-3">Flight Tickets</div>
                            <div class="col-md-3 textright"><button type="submit" class="btn-search5"><span class="glyphicon glyphicon-plus"></span></button></div>
                            <div class="clearfix"></div>

                            <div class="line4"></div>
                            <div class="col-md-3">01.05.09</div>
                            <div class="col-md-3">France - Paris</div>
                            <div class="col-md-3">Rent a car</div>
                            <div class="col-md-3 textright"><button type="submit" class="btn-search5"><span class="glyphicon glyphicon-plus"></span></button></div>
                            <div class="clearfix"></div>

                            <div class="line4"></div>
                            <div class="col-md-3">15.03.11</div>
                            <div class="col-md-3">U.A.E. - Dubai</div>
                            <div class="col-md-3">Car + Hotel + Flight</div>
                            <div class="col-md-3 textright"><button type="submit" class="btn-search5"><span class="glyphicon glyphicon-plus"></span></button></div>
                            <div class="clearfix"></div>

                            <div class="line4"></div>
                            <div class="col-md-3">15.06.12</div>
                            <div class="col-md-3">Grand Britain - London</div>
                            <div class="col-md-3">Car + Hotel + Flight</div>
                            <div class="col-md-3 textright"><button type="submit" class="btn-search5"><span class="glyphicon glyphicon-plus"></span></button></div>
                            <div class="clearfix"></div>

                        </div>
                    </div>
                    <!-- END OF TAB 5 -->

                    <!-- TAB 6 -->
                    <div class="tab-pane" id="password">
                        <div class="padding40">

                            <span class="dark size18">Change password</span>
                            <div class="line4"></div>

                            Username<br/>
                            <input type="text" class="form-control " placeholder="">
                            <br/> Old Password<br/>
                            <input type="text" class="form-control " placeholder="">
                            <br/> New Password<br/>
                            <input type="text" class="form-control " placeholder="">
                            <br/>
                            <button type="submit" class="btn-search5">Save changes</button>

                            <br/>
                            <br/>
                            <br/>
                            <span class="dark size18">Security</span>
                            <div class="line4"></div>

                            What is your father's middle name?
                            <input type="password" class="form-control " placeholder="●●●●●●●●●">

                            <br/> Please choose a security question<br/>
                            <select class="form-control mySelectBoxClass hasCustomSelect cpwidth3">
							  <option value="">What is your father's middle name?</option>
							  <option value="">What was the name of your first pet</option>
							  <option value="">What was your first telephone number</option>
							</select>

                            <br/>
                            <br/> Please enter an answer<br/>
                            <input type="text" class="form-control " placeholder="">

                            <br/> Please confirm your answer<br/>
                            <input type="text" class="form-control " placeholder="">
                            <br/>
                            <button type="submit" class="btn-search5">Save changes</button>

                        </div>
                    </div>
                    <!-- END OF TAB 6 -->

                    <!-- TAB 7 -->
                    <div class="tab-pane" id="newsletter">
                        <div class="padding40">

                            <span class="dark size18">Newsletter</span>
                            <div class="line4"></div>

                            <div class="checkbox dark">
                                <label>
								<input type="checkbox" checked> Check this box to receive a monthly newsletter
							  </label>
                            </div>

                            <br/>
                            <button type="submit" class="btn-search5">Save changes</button>

                        </div>
                    </div>
                    <!-- END OF TAB 7 -->




                </div>
                <!-- End of Tab panes from left menu -->

            </div>
            <!-- END OF RIGHT CPNTENT -->

            <div class="clearfix"></div><br/><br/>
        </div>
        <!-- END CONTENT -->



    </div>


</div>
<!-- END OF CONTENT -->
@endsection
 
@section('scripts')
<!-- Javascript  -->
<script src="{{ asset('assets/js/js-profile.js') }}"></script>
@endsection