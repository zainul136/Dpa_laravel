<!doctype html>
<html lang="en">
@include('users.includes.header')
@include('users.includes.navbar')
<div class="container">
    <div class="row">

        <!--Left Section-->
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="row property-row-title">
                <div class="col-xs-12">
                    <div class="property-detail-left">
                        <div class="seller row">
                            <div class="seller-title col-xs-12"><h5>{{$property->title}}, {{$property->city}} <span
                                        style="color: #ff3300;float: right">For {{$property->status}}</span></h5></div>
                            <div class="seller-price col-xs-12 col-sm-8"><span>Price: {{$property->price}}</span></div>
                            <div class="seller-landarea col-xs-12 col-sm-4"><span>Land area: {{$property->lande_area}}&nbsp;{{$property->unit}}</span>
                            </div>
                        </div>
                    </div>
                    <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">
                        @forelse($images as $image)
                            <img src="{{url('assets/property-images',$image ?? '')}}" alt="" sizes="500" srcset="">
                            <div data-thumb="{{url('assets/property-images',$image ??'')}}"
                                 data-src=" {{url('assets/property-images',$image ??'')}}"
                                 style="max-height: 700px; min-height: 700px; max-width: 700px; min-width: 700px;">
                            </div>
                        @empty
                        @endforelse

                    </div><!-- #camera_wrap_3 -->
                </div>
                <!--//////////////////// details //////////////-->
                <div class="col-xs-12 font-Lato">
                    <div class="row property-row">
                        <div class="col-xs-12 line-10">
                            <h6>&nbsp;&nbsp;&nbsp;&nbsp;Description</h6>
                        </div>
                        <div class="col-xs-11 seller-description">

                            <p>
                                {{$property->description}}
                            </p>
                        </div>
                        @if( $property->type != 'plot')
                            <div class="col-xs-12">
                                <div class="line-10">
                                    <h6>&nbsp;&nbsp;&nbsp;Property Features</h6>
                                </div>

                                <div class="col-xs-12"
                                     style="margin-top: 10px; margin-bottom: 10px; border-bottom: 1px solid lightgray;">
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="col-xs-12 thumbnail thumbnail-custom">
                                            <label style="    font-family: Century Gothic, sans-serif;" class="left">Built
                                                in Year</label><label class="right">{{$property->built_status}}</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="col-xs-12 thumbnail thumbnail-custom">
                                            <label style="    font-family: Century Gothic, sans-serif;" class="left">No
                                                of Kitchens</label><label
                                                class="right">{{$property->no_kitchen}}</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="col-xs-12 thumbnail thumbnail-custom">
                                            <label style="    font-family: Century Gothic, sans-serif;" class="left">No
                                                of Bed Rooms</label><label class="right">{{$property->no_beds}}</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="col-xs-12 thumbnail thumbnail-custom">
                                            <label style="    font-family: Century Gothic, sans-serif;" class="left">No
                                                of Store Rooms</label><label
                                                class="right">{{$property->no_store_room}}</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="col-xs-12 thumbnail thumbnail-custom">
                                            <label style="    font-family: Century Gothic, sans-serif;" class="left">Floor
                                                Type</label><label class="right">{{$property->floor_type}}</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6">
                                        <div class="col-xs-12 thumbnail thumbnail-custom">
                                            <label style="    font-family: Century Gothic, sans-serif;" class="left">Electricity
                                                Backup</label><label class="right">underground</label>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endif
                    </div>
                    <div class="col-xs-12">
                        <div class="line-10">
                            <h6>&nbsp;&nbsp;&nbsp;Property Location</h6>
                        </div>
                        <div class="col-xs-12">
                            <div class="row">
                                <div class="address col-xs-12">
                                    <i class="fa fa-location-arrow" style="color: #36b;">&nbsp;&nbsp;</i>
                                    <span>Address:&nbsp;{{$property->address}}</span><span>{{$property->city}}</span>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 add-property">
                                    <div id="property_location_error_box"
                                         class="error_box col-xs-12 col-xs-12 col-sm-12 col-md-12" style="padding-left: 40px;">
                                        <span>Please enter you location or NearBy Location !</span>
                                    </div>
                                    <div class="add-input add-input-padding">
                                        <label class="mdl-radio mdl-js-ripple-effect"><span>Enter your Location</span></label>
                                        <input id="nearby_location"value="{{$property->location}} " type="text" placeholder="" name="entered-location"
                                               style="font-weight:bolder;"/>
                                    </div>
                                    <div id="property_location_error_box"
                                         class="error_box col-xs-12 col-xs-12 col-sm-12 col-md-12" style="padding-left: 40px;">
                                        <span>Please enter you location!</span>
                                    </div>
                                    <div id="nearby_map" class="col-xs-12 col-sm-12 col-md-12 map">
                                        <!--        map here-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Right Section-->
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <div class="property-detail-right">
                <div class="seller row">
                    <div class="seller-name col-xs-12">
                        <h5>Property Direct</h5>
                    </div>
                    <div class="seller-address col-xs-12">
                        <i class="fa fa-map-marker" aria-hidden="true"></i><span
                            class="font">&nbsp;&nbsp;{{$agents->name}}, {{$agents->address}}</span>
                    </div>
                    <div class="seller-trust col-xs-12">
                        <div class="row">
                            <div class="col-xs-4 seller-trust-img">
                                <img src="{{url('users/assets/images/no_image.jpg')}}" alt="">
                            </div>
                            <div class="col-xs-8"><i class="fa fa-check" aria-hidden="true"
                                                     style="font-weight: 600;">&nbsp;&nbsp;</i><span
                                    class="font" style="font-weight: 600; font-size: 12px;">Professional Agent</span>
                            </div>

                        </div>
                    </div>

                    <div class="seller-agent col-xs-12"><h6 class="font">Your
                            Agent: {{$agents->name}}</h6></div>

                    <div class="seller-btn col-xs-12">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal-showcontact"><i
                                class="fa fa-phone"></i><span class="font">&nbsp;&nbsp;Show Phone Number</span></button>
                    </div>
                    <div class="seller-btn col-xs-12">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#myModal-callback"><i
                                class="fa fa-comment-o"></i><span class="font">&nbsp;&nbsp;Request Call Back</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 best_agent">
                BEST AGENTS
            </div>
            <div class="col-xs-10 col-sm-12 col-xs-offset-1 col-sm-offset-0 customColor">
                <div class="row">
                    <div class="col-xs-12 agent_container zero_padding">
                        <div class="col-xs-2 col-sm-1 col-md-3  agent_picture">
                            <img src="{{url('profile/images',$agents->profile_photo_path)}}">
                        </div>
                        <div class="col-xs-8 col-sm-9 col-md-7 col-xs-offset-2 col-sm-offset-1  agentDetail">
                            <div class=" col-xs-12 agent_name">
                                <a href="{{route('agent-detail',$agents->id)}}"> {{$agents->name}}</a>
                            </div>
                            <div class=" col-xs-12 agent_email_number"><span class="glyphicon glyphicon-link"></span>&nbsp;&nbsp;{{$agents->email}}
                            </div>
                            <div class=" col-xs-12 agent_email_number"><span
                                    class="glyphicon glyphicon-earphone"></span>&nbsp;&nbsp;{{$agents->phone}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal-showcontact" role="dialog">
    <div class="modal-dialog custom-class" style="height: 600px;">
        <!-- Modal content-->
        <div class="modal-content" style="border-radius: 1px; margin-top: 100px;">
            <div class="modal-header" style="background-color:#1E88E5;color:#ffffff;">
                <button type="button" class="close" data-dismiss="modal" style="color:#1E88E5;">&times;</button>
                <h4 class="modal-title" style="text-align: center; font-size: 14px;">CALL YOUR AGENT</h4>
            </div>
            <div class="modal-body">
                <div style="text-align: center; margin-bottom: 10px;">
                    <i style="font-size: 80px; color: blue;" class="fa fa-phone-square" aria-hidden="true"></i></div>
                <div class="thumbnail">
                    <div class="seller row">
                        <div class="seller-name col-xs-12">
                            <h5>Property Direct
                                {{$agents->name}}
                            </h5>
                        </div>
                        <div class="seller-address col-xs-12"><i class="fa fa-map-marker" aria-hidden="true"><span
                                    class="font">&nbsp;&nbsp;{{$agents->address}}   </span></i>
                        </div>
                        <div class="seller-name col-xs-12"><h5>{{$agents->name}}</h5></div>
                        <div class="seller-phone col-xs-12"><i class="fa fa-phone" style="color:#2ECC40;"></i>
                            <span class="font">&nbsp;&nbsp;<a href="tel:+92{{$agents->phone}}">{{$agents->phone}}</span>
                        </div>
                    </div>
                </div>
            </div>
            <p style="min-height: 150px; text-align: center;margin-top: 150px">Please <a
                    href="{{route('rate-property')}}">Login</a> to view this page</p>
            <div class="modal-footer">
                <div class="seller-btn col-xs-12">
                    <button class="btn btn-warning" data-dismiss="modal"><span class="font">&nbsp;&nbsp;Close</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="myModal-callback" role="dialog">
    <div class="modal-dialog custom-class" style="height: 600px;">
        <!-- Modal content-->
        <div class="modal-content" style="border-radius: 1px; margin-top: 100px;">
            <div class="modal-header" style="background-color:#1E88E5;color:#ffffff;">
                <button type="button" class="close" data-dismiss="modal" style="color:#1E88E5;">&times;</button>
                <h4 class="modal-title" style="text-align: center; font-size: 14px;">NOTIFY BY SMS</h4>
            </div>
            <div class="modal-body">
                <div style="text-align: center; margin-bottom: 10px;">
                    <i style="font-size: 80px; color: blue;" class="fa fa-mobile" aria-hidden="true"></i>
                </div>
                <div class="thumbnail" style="background-color: #FAFAFA;">
                    <div class="seller row">
                        <form action="" method="post" onsubmit="return send_message()">
                            <div class="col-xs-12">
                                <div class="row">
                                    <div class="form-group col-xs-12">
                                        <label for="name">Name:</label>
                                        <input type="number" value="{{$property->id}}" name="pid" id="pid"
                                               hidden readonly/>
                                        <input type="text" value="" class="form-control"
                                               name="sender_name" id="sender_name">
                                        <input type="number" name="sender_id" value=""
                                               hidden readonly id="sender_id"/>
                                        <input type="text" value=""
                                               class="form-control" name="reciever_name" id="reciever_name" hidden
                                               readonly>
                                        <input type="number" name="reciever_id"
                                               value="" id="reciever_id" hidden
                                               readonly/>

                                    </div>
                                    <div class="form-group col-xs-12">
                                        <label for="number">Phone number:</label>
                                        <input type="number" maxlength="11" minlength="11" class="form-control"
                                               value="" name="number" id="number">
                                    </div>
                                    <textarea id="msg" name="message" hidden>hello i found your listnings on " Property Direct ".
                                                        Please Contact me for {{$agents->name}}. Thank You
                                            </textarea>
                                    <div id="msg_content" style="color: red; margin-left: 20px"></div>
                                    <div class="form-group col-xs-12 seller-btn">
                                        <input type="submit" class="btn btn-primary" value="SEND" id="submit"
                                               name="submit">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <p style="min-height: 150px; text-align: center;margin-top: 150px">Please
                <a href="{{route('rate-property')}}">Login</a> to view this page</p>
        </div>
    </div>
</div>

@include('users.includes.footer')

<script src="{{url('users/assets/js/jquery-2.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{url('users/assets/js/maps.js')}}" type="text/javascript"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGPZkNrsTRXA0Xn3oyRTg7M1SBvUJvd9E&libraries=places&callback=getProperties">
</script>
<script>

    $('#nearby_category_search').change(function () {
        if (document.getElementById('nearby_category_search').value !== "" && document.getElementById('nearby_purpose_search').value !== "" && document.getElementById('wantedfor').value !== "") {
            $('#nearby_search_location').show();
        } else {
            $('#nearby_search_location').hide();
        }
    });
    $('#nearby_purpose_search').change(function () {
        if (document.getElementById('nearby_category_search').value !== "" && (document.getElementById('nearby_purpose_search').value === "sale"
            || document.getElementById('nearby_purpose_search').value === "rent")) {
            $('#nearby_search_location').show();
        } else {
            $('#nearby_search_location').hide();
        }
    });
    $('#wantedfor').change(function () {
        if (document.getElementById('wantedfor').value !== ""
            && document.getElementById('nearby_category_search').value !== "" && document.getElementById('nearby_purpose_search').value === "wanted") {
            $('#nearby_search_location').show();
        } else {
            $('#nearby_search_location').hide();
        }
    });
</script>

<script src="{{url('users/assets/js/slider/camera.js')}}" type="text/javascript"></script>

<script src="{{url('users/assets/js/slider/camera.min.js')}}" type="text/javascript"></script>

<script src="{{url('users/assets/js/slider/jquery.easing.1.3.js')}}" type="text/javascript"></script>

<script src="{{url('users/assets/js/slider/jquery.mobile.customized.min.js')}}" type="text/javascript"></script>

<script>
    jQuery(function () {

        jQuery('#camera_wrap_4').camera({
            height: '500px',
            //	loader: 'bar',
            loop: true,
            pagination: false,
            thumbnails: true,
            hover: false,
            opacityOnGrid: false,
            imagePath: 'assets/images/'
        });

    });
</script>


</body>
</html>
