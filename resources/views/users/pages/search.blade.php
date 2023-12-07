<!DOCTYPE html>
<html>
@include('users.includes.header')
@include('users.includes.navbar')
<div class="container-fluid" style="margin: 0px;padding: 0px">

    <div class="ved">
        <div class="hidden-xs">
            <video autoplay muted loop class="full-width" id="myVideo" style="position: absolute" ;>
                <source src="{{url('users/assets/images/sure.mp4')}}" type="video/mp4">
            </video>
        </div>
        <div class="hidden-sm hidden-md hidden-lg">
            <img src="{{url('users/assets/images/background_12.png')}}" alt=""/>
        </div>
        <div class="search_box_container">

            <div id="exTab1" class="container">
                <div class="row">
                    <div class="hidden-xs hidden-sm col-md-12 customText">
                        We Will Hold Your Hand Through the process
                    </div>
                </div>
                <ul class="nav nav-pills red hidden-xs hidden-sm" style="margin-left: 50px;">

                    @if(!empty($status))
                        <li class="change_active @if($status === 'sale' || ($status !=='rent' && $status !== 'wanted')) active @endif"
                            id="sale"><a href="#sell" data-toggle="tab">Sell</a>
                        </li>
                        <li id="rent" class="change_active @if($status === 'rent') active @endif"><a href="#rent"data-toggle="tab">Rent</a>
                        </li>
                        <li id="wanted" class="change_active @if($status === 'wanted') active @endif"><a href="#wanted" data-toggle="tab">Wanted</a>
                        </li>
                    @else
                        <li class="change_active active" id="sale"><a href="#sell" data-toggle="tab">Sell</a>
                        </li>
                        <li class="change_active" id="rent"><a href="#rent" data-toggle="tab">Rent</a>
                        </li>
                        <li class="change_active" id="wanted"><a href="#wanted" data-toggle="tab">Wanted</a>
                        </li>
                    @endif
                </ul>

                <div class="tab-content clearfix">
                    <div class="tab-pane active" id="sell">

                        <div class="row fieldStyle">
                            <form action="{{route('p-search')}}" method="post">
                                @csrf
                                <input type="hidden" name="status" value="sale" id="rent-sale-status">
                                <div class="form-group col-xs-12 col-sm-12 hidden-md hidden-lg">

                                    <label for="purpose" class="remove_padding control-label">Purpose</label>
                                    <select class="form-control" name="purpose">
                                        <option value="sale" selected>Sell</option>
                                        <option value="rent">Rent</option>
                                        <option value="wanted">Wanted</option>

                                    </select>

                                </div>

                                <div class="hidden-lg hidden-md hidden-sm hidden-xs">
                                    <label for="element" class="remove_padding control-label">City</label>
                                    <input type="text" id="city" name="city" readonly hidden/>
                                </div>
                                <div class="hidden-lg hidden-md hidden-sm hidden-xs">
                                    <label for="element" class="remove_padding control-label">City</label>
                                    <input type="text" id="sellLocationValue" name="location" readonly hidden/>
                                </div>

                                <div class="form-group col-xs-12 col-sm-12 col-md-4 col-md-offset-0">
                                    <label for="element" class="remove_padding control-label ">Location</label>
                                    <input type="text" class="form-control" id="location"
                                           placeholder="Enter Location"/>
                                </div>

                                <div class="form-group col-xs-12 col-sm-12 col-md-2">
                                    <label for="property_type" class="remove_padding control-label">Property
                                        Type</label>
                                    <select class="form-control" name="category">
                                        <option value="">Any Type</option>
                                        <option selected="" disabled="">---Homes---</option>
                                        <option value="house">Houses</option>
                                        <option value="flat">Flats</option>
                                        <option value="upper_portion">Upper Portions</option>
                                        <option value="lower_portion">Lower Portions</option>
                                        <option disabled="">---Plots---</option>
                                        <option value="residential_plot">Residental Plots</option>
                                        <option value="commercial_plot">Commercial Plots</option>
                                        <option value="agricultural_land">Agricultural Land</option>
                                        <option value="plot_file">Plot File</option>
                                        <option value="plot_form">Plot Form</option>
                                        <option disabled="">---Commercial---</option>
                                        <option value="office">Offices</option>
                                        <option value="shop">Shops</option>
                                        <option value="warehouse">WareHouses</option>
                                        <option value="factory">Factories</option>
                                        <option value="building">Buildings</option>
                                    </select>

                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-2 col-md-offset-0">
                                    <label for="minPrice" class="remove_padding control-label ">Min Price</label>
                                    <input type="number" onkeydown="min_max()" class="form-control min_price_simple"
                                           name="min_price" id="min_price_sell" min="0" placeholder="Min Price"/>
                                    <label class="error_box_price" id="sell_price_error_max"><span>greater then max price</span></label>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-2 col-md-offset-0">
                                    <label for="maxPrice" class="remove_padding control-label ">Max Price</label>
                                    <input type="number" onkeydown="min_max()" class="form-control" name="max_price"
                                           id="max_price_sell" min="0" placeholder="Max Price"/>
                                    <label class="error_box_price"
                                           id="sell_price_error_min"><span>lesser then min price</span></label>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-2 col-md-offset-0">
                                    <label for="maxPrice" class="remove_padding control-label ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>

                                    <input id="sell_btn" type="submit" name="sell" value="Find Property"
                                           class="form-control"/>
                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="tab-pane" id="rent">
                        <div class="row fieldStyle">
                            <form action="" method="post">
                                <div class="form-group col-xs-12 col-sm-12 hidden-md hidden-lg">

                                    <label for="purpose" class="remove_padding control-label">Purpose</label>
                                    <select class="form-control" name="purpose">
                                        <option value="sale">Sell</option>
                                        <option value="rent" selected>Rent</option>
                                        <option value="wanted">Wanted</option>

                                    </select>

                                </div>


                                <div class="hidden-lg hidden-md hidden-sm hidden-xs">
                                    <label for="element" class="remove_padding control-label">City</label>
                                    <input type="text" id="city2" name="city" readonly hidden/>
                                </div>
                                <div class="hidden-lg hidden-md hidden-sm hidden-xs">
                                    <label for="element" class="remove_padding control-label">City</label>
                                    <input type="text" id="sellLocationValue2" name="location" readonly hidden/>
                                </div>

                                <div class="form-group col-xs-12 col-sm-12 col-md-4 col-md-offset-0">
                                    <label for="element" class="remove_padding control-label ">Location</label>
                                    <input type="text" class="form-control" id="location2"
                                           placeholder="Enter Location"/>
                                </div>


                                <div class="form-group col-xs-12 col-sm-12 col-md-2">
                                    <label for="property_type" class="remove_padding control-label">Property
                                        Type</label>
                                    <select class="form-control" name="category">
                                        <option>Any Type</option>
                                        <option selected disabled>---Homes---</option>
                                        <option value="house">Houses</option>
                                        <option value="flat">Flats</option>
                                        <option value="upper_portion">Upper Portions</option>
                                        <option value="lower_portion">Lower Portions</option>
                                        <option disabled>---Plots---</option>
                                        <option value="residential_plot">Residental Plots</option>
                                        <option value="commercial_plot">Commercial Plots</option>
                                        <option value="agricultural_land">Agricultural Land</option>
                                        <option value="plot_file">Plot File</option>
                                        <option value="plot_form">Plot Form</option>
                                        <option disabled>---Commercial---</option>
                                        <option value="office">Offices</option>
                                        <option value="shop">Shops</option>
                                        <option value="warehouse">WareHouses</option>
                                        <option value="factory">Factories</option>
                                        <option value="building">Buildings</option>
                                    </select>

                                </div>

                                <div class="form-group col-xs-12 col-sm-12 col-md-2 col-md-offset-0">
                                    <label for="minPrice" class="remove_padding control-label ">Min Price</label>
                                    <input type="number" onkeydown="min_max()" class="form-control" name="min_price"
                                           id="min_price_rent" min="0" placeholder="Min Price"/>
                                    <label class="error_box_price" id="rent_price_error_max"><span>greater then max price</span></label>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-2 col-md-offset-0">
                                    <label for="maxPrice" class="remove_padding control-label ">Max Price</label>
                                    <input type="number" onkeydown="min_max()" class="form-control" name="max_price"
                                           id="max_price_rent" min="0" placeholder="Max Price"/>
                                    <label class="error_box_price"
                                           id="rent_price_error_min"><span>lesser then min price</span></label>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-2 col-md-offset-0">
                                    <label for="maxPrice" class="remove_padding control-label ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>

                                    <input id="rent_btn" type="submit" name="rent" value="Find Property"
                                           class="form-control"/>
                                </div>

                            </form>

                        </div>
                    </div>
                    <div class="tab-pane" id="wanted">
                        <div class="row fieldStyle">
                            <form action="" method="post">
                                <div class="form-group col-xs-12 col-sm-12 hidden-md hidden-lg">

                                    <label for="purpose" class="remove_padding control-label">Purpose</label>
                                    <select class="form-control" name="purpose">
                                        <option value="sale">Sell</option>
                                        <option value="rent">Rent</option>
                                        <option value="wanted" selected>Wanted</option>

                                    </select>

                                </div>

                                <div class="form-group col-xs-12 col-sm-12 col-md-2">
                                    <label for="wanted_type" class="remove_padding control-label">Wanted
                                        Type</label>
                                    <select class="form-control" name="wanted_type">
                                        <option value="buy">buy</option>
                                        <option value="rent">rent</option>
                                    </select>
                                </div>


                                <div class="hidden-lg hidden-md hidden-sm hidden-xs">
                                    <label for="element" class="remove_padding control-label">City</label>
                                    <input type="text" id="city3" name="city" readonly hidden/>
                                </div>
                                <div class="hidden-lg hidden-md hidden-sm hidden-xs">
                                    <label for="element" class="remove_padding control-label">City</label>
                                    <input type="text" id="sellLocationValue3" name="location" readonly hidden/>
                                </div>

                                <div class="form-group col-xs-12 col-sm-12 col-md-4 col-md-offset-0">
                                    <label for="element" class="remove_padding control-label ">Location</label>
                                    <input type="text" class="form-control" id="location3"
                                           placeholder="Enter Location"/>
                                </div>

                                <div class="form-group col-xs-12 col-sm-12 col-md-2">
                                    <label for="property_type" class="remove_padding control-label">Property
                                        Type</label>
                                    <select class="form-control" name="category">
                                        <option>Any Type</option>
                                        <option selected disabled>---Homes---</option>
                                        <option value="house">Houses</option>
                                        <option value="flat">Flats</option>
                                        <option value="upper_portion">Upper Portions</option>
                                        <option value="lower_portion">Lower Portions</option>
                                        <option disabled>---Plots---</option>
                                        <option value="residential_plot">Residental Plots</option>
                                        <option value="commercial_plot">Commercial Plots</option>
                                        <option value="agricultural_land">Agricultural Land</option>
                                        <option value="plot_file">Plot File</option>
                                        <option value="plot_form">Plot Form</option>
                                        <option disabled>---Commercial---</option>
                                        <option value="office">Offices</option>
                                        <option value="shop">Shops</option>
                                        <option value="warehouse">WareHouses</option>
                                        <option value="factory">Factories</option>
                                        <option value="building">Buildings</option>
                                    </select>

                                </div>


                                <div class="form-group col-xs-12 col-sm-12 col-md-2 col-md-offset-0">
                                    <label for="maxPrice" class="remove_padding control-label ">Max Price</label>
                                    <input type="number" onkeydown="min_max()" class="form-control" name="max_price"
                                           min="0" placeholder="Max Price"/>
                                    <label class="error_box_price"
                                           id="price_error_min"><span>lesser then min price</span></label>
                                </div>
                                <div class="form-group col-xs-12 col-sm-12 col-md-2 col-md-offset-0">
                                    <label for="maxPrice" class="remove_padding control-label ">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
                                    <input type="submit" name="wanted" value="Find Property" class="form-control"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container topMargin" style="height: auto;">
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-9" style="height: auto">

            <div class="col-xs-12 heading_for_property" id="latest">
                LATEST PROPERTY DIRECT PROPERTIES
            </div>

            @foreach($properties as $key=>$property)
                <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 10px; margin-bottom: 10px;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-md-11 card">
                            <div class="row">
                                <div class="col-xs-12 card-pic">
                                    <div class="card-purpose"><span>For {{$property->status}}</span></div>
                                    <img src="{{url('assets/property-images',$images[$key]??'')}}" style="max-height: 200px; min-height: 200px;"/>
                                </div>
                                <div class="col-xs-12 card-title"><span>{{$property->title}}</span></div>
                                <div class="col-xs-12 card-address"><span>{{$property->location}}</span></div>
                                <div class="col-xs-12 card-city"><span>{{$property->city}}</span></div>
                                <div class="col-xs-12 card-price"><span>Price:&nbsp;{{$property->price}}</span></div>
                                <div class="col-xs-12 card-view_details">
                                    <a href="{{route('property-detail',$property->id )}}">
                                        <i class="fa fa-external-link" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>VIEW
                                        DETAILS</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <!--START TOP PROPERTIES FOR LATEST -->
            <!--START LOGO SECTION -->
            <div class="col-xs-12 heading_for_property topMargin" id="rents">
                We have Everything You Need to Buy or Sell quickly
            </div>
            <div class="row">
                <div class="container custom_class">
                    <div class="row">
                        <!--Left Section-->
                        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
                            <div class="col-xs-12">
                                <div class="row property-row">
                                    <!-- Property image -->
                                    <div class="col-xs-12 col-sm-4 col-md-4 property-picture">
                                        <img src="{{url('users/assets/images/background_1.png')}}"
                                             style="max-height: 251px; min-height: 251px;"/>

                                    </div>
                                    <!-- Property Details -->
                                    <div class="col-xs-12 col-sm-6 col-md-6 property-info">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="property-location custom_margin ">
                                                    <img src="{{url('users/assets/images/property-images1.jpg')}}"
                                                         style="max-height: 100px; min-height: 100px;"/>
                                                    <h5>Buy Properties</h5>
                                                    <p>Search for the area You want to buy properties in advanced Search
                                                        and get desired results!</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="property-location custom_margin ">
                                                    <img src="{{url('users/assets/images/property-img9.png')}}"
                                                         style="max-height: 100px; min-height: 100px;"/>
                                                    <h5>Sell Properties</h5>
                                                    <p>Post an add of your property here at and start getting right
                                                        customers easily</p>
                                                </div>

                                            </div>
                                        </div>
                                        <hr class="divider"/>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-2 col-sm-3 col-md-3"></div>
                                <div class="col-xs-8 col-sm-6 col-md-6">
                                    <ul class="pagination pagination-sm">

                                    </ul>
                                </div>
                                <div class="col-xs-2 col-sm-3 col-md-3"></div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--END LOGO SECTION -->
            <!--START TOP PROPERTIES FOR SALES -->
            @if(empty($sales))
                <div class="col-xs-12 heading_for_property" id="sales">
                    TOP PROPERTIES FOR SALES
                </div>

                @foreach($sales as $key=>$property)
                    <div class="col-xs-12 col-sm-6 col-md-4" style="margin-top: 10px; margin-bottom: 10px;">
                        <div class="row">
                            <div class="col-xs-12 col-sm-10 col-md-11 card">
                                <div class="row">
                                    <div class="col-xs-12 card-pic">
                                        <div class="card-purpose"><span>For {{$property->status}}</span></div>
                                        <img src="{{url('assets/property-images',$images1[$key] ??'')}}"
                                             style="max-height: 200px; min-height: 200px;"/>
                                    </div>
                                    <div class="col-xs-12 card-title"><span>{{$property->title}}</span></div>
                                    <div class="col-xs-12 card-address"><span>{{$property->location}}</span></div>
                                    <div class="col-xs-12 card-city"><span>{{$property->city}}</span></div>
                                    <div class="col-xs-12 card-price"><span>Price:&nbsp;{{$property->price}}</span>
                                    </div>
                                    <div class="col-xs-12 card-view_details"><a
                                            href="{{route('property-detail',$property->id )}}">
                                            <i class="fa fa-external-link" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>VIEW
                                            DETAILS</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            @endif
            <!-- -->
            <!--END TOP PROPERTIES FOR SALES -->
        </div>
        <!--START TOP PROPERTIES FOR WANTED -->
        <div class="col-xs-12 col-sm-12 col-md-3 zero_padding" style="height: auto;" id="buy">
            <div class="col-xs-12 best_agent">
                WANTED FOR BUY
            </div>
            <div class="col-xs-10 col-sm-12 col-xs-offset-1 col-sm-offset-0 customColor-1">
                @if(!empty($wanted))
                    @foreach($wanted as $want)
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12 line-12">
                                        <h4><i class="fa fa-map-marker">&nbsp;&nbsp;</i>{{$want->location}} </h4></div>
                                    <div class="col-xs-12 line-12"><h4><i class="fa fa-bookmark" aria-hidden="true">&nbsp;&nbsp;</i>{{$want->land_area}}
                                            &nbsp;{{$want->unit}}&nbsp;For&{{$want->status}}</h4></div>
                                    <div class="col-xs-12 line-19"><h4>&nbsp;<i class="fa fa-map-marker">&nbsp;&nbsp;&nbsp;&nbsp;</i>{{$want->location}}
                                            ,&nbsp;{{$want->city}}</h4></div>
                                    <div class="col-xs-12 line-17"><a href="{{route('property-detail',$want->id)}}"><i
                                                class="fa fa-external-link">&nbsp;&nbsp;&nbsp;</i>VIEW DETAILS</a></div>
                                    <div class="col-xs-10 col-xs-offset-1"
                                         style="border-bottom: 1px solid rgba(0, 0, 0, 0.12);"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>

        </div>
        @if(empty($rents))
            <div class="col-xs-12 col-sm-12 col-md-3 zero_padding" style="height: auto;">
                <div class="col-xs-12 best_agent">
                    WANTED FOR RENT
                </div>
                <div class="col-xs-10 col-sm-12 col-xs-offset-1 col-sm-offset-0 customColor-1">


                    @foreach($rents as $rent)
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="col-xs-12 line-12"><h4><i
                                                class="fa fa-map-marker">&nbsp;&nbsp;</i>{{$rent->location}} </h4></div>
                                    {{--                            <div class="col-xs-12 line-10"><label><i class="fa fa-money">&nbsp;&nbsp;</i>{{$rent->price}}</label></div>--}}
                                    <div class="col-xs-12 line-12"><h4><i class="fa fa-bookmark" aria-hidden="true">&nbsp;&nbsp;</i>{{$rent->land_area}}
                                            &nbsp;{{$rent->unit}}&nbsp;For&{{$rent->status}}</h4></div>
                                    <div class="col-xs-12 line-19"><h4>&nbsp;<i class="fa fa-map-marker">&nbsp;&nbsp;&nbsp;&nbsp;</i>{{$rent->location}}
                                            ,&nbsp;{{$rent->city}}</h4></div>
                                    <div class="col-xs-12 line-17"><a href="{{route('property-detail',$rent->id)}}"><i
                                                class="fa fa-external-link">&nbsp;&nbsp;&nbsp;</i>VIEW DETAILS</a></div>
                                    <div class="col-xs-10 col-xs-offset-1"
                                         style="border-bottom: 1px solid rgba(0, 0, 0, 0.12);"></div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        @endif
        <!--END TOP PROPERTIES FOR WANTED -->
        <!--START TOP PROPERTIES FOR RENT -->
        @if(empty($rents))
            <div class="col-xs-12 heading_for_property topMargin" id="rents">
                TOP PROPERTIES FOR RENT
            </div>
            @foreach($rents as $key=>$property)
                <div class="col-xs-12 col-sm-6 col-md-3" style="margin-top: 10px; margin-bottom: 10px;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-10 col-md-11 card">
                            <div class="row">
                                <div class="col-xs-12 card-pic">
                                    <div class="card-purpose"><span>For {{$property->status}}</span></div>
                                    <img src="{{url('assets/property-images',$images2[$key] ??'')}}"
                                         style="max-height: 200px; min-height: 200px;"/>
                                </div>
                                <div class="col-xs-12 card-title"><span>{{$property->title}}</span></div>
                                <div class="col-xs-12 card-address"><span>{{$property->location}}</span></div>
                                <div class="col-xs-12 card-city"><span>{{$property->city}}</span></div>
                                <div class="col-xs-12 card-price"><span>Price:&nbsp;{{$property->price}}</span></div>
                                <div class="col-xs-12 card-view_details"><a
                                        href="{{route('property-detail',$property->id )}}">
                                        <i class="fa fa-external-link" aria-hidden="true">&nbsp;&nbsp;&nbsp;</i>VIEW
                                        DETAILS</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif

        <!--END TOP PROPERTIES FOR RENT -->

        <!--START TOP PROPERTIES FOR RENT -->
        @if((!$rents))
            <div class="col-xs-12 heading_for_property topMargin" id="rents">
                Explore More
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12" style="margin-top: 10px; margin-bottom: 10px;">
                <div class="row topMargin">
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{url("users/assets/images/explore/image5.jpg")}}"
                                     style="width: 70px;height: 70px;">
                            </div>
                            <div class="col-md-8">
                                <h5>New Projects</h5>
                                <p>The best investment opportunities</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{url("users/assets/images/explore/image4.jpg")}}"
                                     style="width: 70px;height: 70px;">
                            </div>
                            <div class="col-md-8">
                                <h5>Pot Finder</h5>
                                <p>Find Plots in any Housing Societies</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{url("users/assets/images/explore/image4.jpg")}}"
                                     style="width: 70px;height: 70px;">
                            </div>
                            <div class="col-md-8">
                                <h5>Construction Cost Calculator</h5>
                                <p>Get Construction Cost Estimate</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{url("users/assets/images/explore/image7.jpg")}}"
                                     style="width: 70px;height: 70px;">
                            </div>
                            <div class="col-md-8">
                                <h5>Property Index</h5>
                                <p>Track Changes in Real Estate Price</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{url("users/assets/images/explore/image10.jpg")}}"
                                     style="width: 70px;height: 70px;">
                            </div>
                            <div class="col-md-8">
                                <h5>Home Loan Calculator</h5>
                                <p>Find Affordable Loan Package</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{url("users/assets/images/explore/image9.jpg")}}"
                                     style="width: 70px;height: 70px;">
                            </div>
                            <div class="col-md-8">
                                <h5>Area Unit Converter</h5>
                                <p>Convert any Area Unit Instantly</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{url("users/assets/images/explore/image2 (1).jpg")}}"
                                     style="width: 70px;height: 70px;">
                            </div>
                            <div class="col-md-8">
                                <h5>Area Guides</h5>
                                <p>Explore Housing Societies in Pakistan</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{url("users/assets/images/explore/image6.jpg")}}"
                                     style="width: 70px;height: 70px;">
                            </div>
                            <div class="col-md-8">
                                <h5>Property Trends</h5>
                                <p>Find Popular Areas to Buy Property</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <!--END TOP PROPERTIES FOR RENT -->
    </div>
</div>
@include('users.includes.footer')
<script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGPZkNrsTRXA0Xn3oyRTg7M1SBvUJvd9E&libraries=places&callback=initAutocomplete"
    async defer></script>
<script type="text/javascript" src="{{url('users/assets/js/autoCompleteSearch.js')}}"></script>

<script defer async>
    console.log('ok')
    $(document).on('click', '.change_active', function (e) {
        $(this).parents('.change_active').find('.active').removeClass('active');
        $(this).addClass('active');
        let status = $(this).attr('id');
        $('#rent-sale-status').val(status);
    })
</script>

</html>


