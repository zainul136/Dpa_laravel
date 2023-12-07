<!DOCTYPE html>
<html>
<body>
@include('users.includes.header')
@include('users.includes.navbar')
<div class="container">
    <div class="row">
        <!--Left Section-->
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9">
            <div class="property-row" style="min-height: 70px;">
                <div class="line-2">Advance Search Property
                    <button id="toggle_adv_search_down" class="btn btn-default"
                            style=" text-align: left; margin-right: 50px; margin-top: 0px; border: none; float: right;">
                        <i style="float: left;" class="fa fa-caret-down" aria-hidden="true"></i></button>
                    <button id="toggle_adv_search_up" class="btn btn-default"
                            style=" text-align: left; margin-right: 50px; margin-top: 0px; border: none; display: none; float: right;">
                        <i style="float: left;" class="fa fa-caret-up" aria-hidden="true"></i></button>
                </div>

                <div class="row search-form" id="adv_form" style="display:none;">
                    <hr class="divider"/>
                    <form action="{{route('p-search-advance')}}" method="post">
                        @csrf
                        <div class="col-xs-12 col-sm-6">
                            <!--FORM STARTS-->
                            <div class="form-group col-xs-12">
                                <select class="form-control-1" id="selectTypeForHome" name="type" required
                                        onchange="populateForType(this.id, 'moreType')">
                                    <option value="" selected disabled>Select type</option>
                                    <option value="home">Home</option>
                                    <option value="plot">Plot</option>
                                    <option value="commercial">Commercial</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6">
                            <div class="form-group add-input-1 col-xs-5">
                                <input type="number" id="adv_search_land_area" onkeydown="advance_Search_min_max()"
                                       name="land_area"  required placeholder="Land Area"/>
                            </div>
                            <div class="form-group col-xs-7">
                                <select class="form-control-1" id="selectTypeForHome" name="unit" required>
                                    <option disabled="">---Unit---</option>
                                    <option value="marla">Marla</option>
                                    <option value="kanal">kanal</option>
                                    <option value="sqrt-ft">Sqrt ft</option>
                                    <option value="sqrt-yard">Sqrt Yard</option>
                                    <option value="sqrt-meters">Sqrt Meters</option>
                                </select>
                            </div>
                            <div class="form-group add-input-1 col-xs-6">
                                <input type="text" id="adv_search_min_price" name="min_price"
                                       onkeydown="advance_Search_min_max()"  required placeholder="Min price"/>
                            </div>
                            <div class="form-group add-input-1 col-xs-6">
                                <input type="text" id="adv_search_max_price" name="max_price"
                                       onkeydown="advance_Search_min_max()"   required placeholder="Max price"/>
                            </div>
                            <input type="submit" name="advance_form" value="Search" class="btn btn-warning"
                                   style="float:right; margin-right: 10px; margin-bottom: 10px; background-color: #1E88E5; width: 20%; border-radius: 0px;">
                        </div>
                    </form>

                </div>

            </div>


        @foreach($plots as $key=>$plot)
                <div class="col-xs-12">
                    <div class="row property-row">
                        <!-- Property image -->
                        <div class="col-xs-12 col-sm-4 col-md-4 property-picture">

                            <a href="{{route('property-detail',$plot->id)}}">
                                <img src="{{url('assets/property-images',json_decode(trim($plot->images[0]->image_name,'[]'))??'')}}"
                                     style="max-height: 251px; min-height: 251px;"/>
                            </a>
                        </div>
                        <!-- Property Details -->
                        <div class="col-xs-12 col-sm-8 col-md-8 property-info">
                            <!-- Property Title -->
                            <div class="row">
                                <div class="col-xs-8 property-title">
                                    <a href="{{route('property-detail',$plot->id)}}">{{$plot->title}}</a>
                                </div>
                                <div class="col-xs-4 property-purpose">
                                    <span>For {{$plot->type}} </span>
                                </div>
                            </div>
                            <!-- Property Location -->
                            <div class="property-location">
                                {{$plot->location}}, {{$plot->city}}
                            </div>
                            <hr class="divider"/>
                            <div class="property-details" style="min-height:73px;">
                                <p> {{$plot->description}} </p>
                            </div>
                            <div class="row-fotter">
                                <div class="row-fotter-content"><i
                                        class="fa fa-arrows-alt">&nbsp;&nbsp;</i><span>{{$plot->land_area}}</span><span>{{$plot->unit}}</span>
                                </div>
                                <div class="row-fotter-content" style="border-right: none; float: right;"><i
                                        class="fa fa-money">&nbsp;&nbsp;</i><span>Rs: {{$plot->price}}</span></div>
                                <div class="row-fotter-content-last"></div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col-xs-2 col-sm-3 col-md-3"></div>
                <div class="col-xs-8 col-sm-6 col-md-6">
                    <ul class="pagination pagination-sm">

                    </ul>
                </div>
                <div class="col-xs-2 col-sm-3 col-md-3"></div>
            </div>
        </div>
        <!--Right Section-->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
            <div class="zero_padding" style="height: auto;">
                <div class="line-3"><h2>Enquire Now</h2></div>
                <div class="col-xs-12 col-sm-12 col-md-12 enquiry">
                    <form action="{{route('contact-form')}}" method="post">
                        @csrf
                        <div class="enq-input col-xs-12 col-sm-12 col-md-12">
                            <input type="text" name="sender_name" placeholder="Name"/>
                        </div>
                        <div class="enq-input col-xs-12 col-sm-12 col-md-12">
                            <input type="email" name="sender_email" placeholder="Email"/>
                        </div>
                        <div class="enq-input col-xs-12 col-sm-12 col-md-12">
                            <input type="number" name="contact_no" placeholder="Contact no"/>
                        </div>
                        <div class="enq-textarea col-xs-12 col-sm-12 col-md-12">
                            <textarea placeholder="Message" name="message"></textarea>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 enq-submit">
                            <input type="submit" id="note" value="POST MESSAGE" class="btn btn-danger"/>
                        </div>

                    </form>
                </div>
            </div>
            <div class="zero_padding" style="height: auto;">
                <div class="col-xs-12 best_agent">
                    BEST AGENTS
                </div>
                <div class="col-xs-10 col-sm-12 col-xs-offset-1 col-sm-offset-0 customColor">
                    <div class="row">
                        @foreach($agents as $agent)
                            <div class="col-xs-12 agent_container zero_padding">
                                <div class="col-xs-2 col-sm-1 col-md-3  agent_picture">
                                    <img src="{{url('profile/images',$agent->profile_photo_path)}}"/>
                                </div>
                                <div class="col-xs-8 col-sm-9 col-md-7 col-xs-offset-2 col-sm-offset-1  agentDetail">
                                    <div class=" col-xs-12 agent_name">
                                        {{$agent->name}}
                                    </div>
                                    <div class=" col-xs-12 agent_email_number"><span
                                            class="glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;{{$agent->email}}
                                    </div>
                                    <div class=" col-xs-12 agent_email_number"><span
                                            class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;{{$agent->phone}}
                                    </div>
                                    <div class="col-xs-10 col-sm-12 agent-div"></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('users.includes.footer')
</body>
</html>
