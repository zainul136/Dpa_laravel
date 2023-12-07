<!DOCTYPE html>
<html>
<body>
@include('users.includes.header')
@include('users.includes.navbar')
<div class="container">
    <div class="row" style="">
        <div class="col-xs-10 col-xs-offset-1"
             style="margin-top: 30px; height: auto; background-color: white; border:1px solid darkgrey; font-family: Century Gothic, sans-serif;">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-3" style="margin-top: 26px; align-content: center;">
                    <img src="{{url('profile/images',$agents->profile_photo_path)}}"
                         style="height: auto; width: 170px;"/>
                </div>
                <div class="col-xs-9" style="padding-bottom: 60px;">
                    <div class="row">
                        <div class="col-xs-12" style="margin-top: 30px;">
                            <span style="font-family: Century Gothic, sans-serif;  font-size: 18px;"><i
                                    class="fa fa-university" aria-hidden="true">&nbsp;&nbsp;</i>
                                    Property Direct
                            {{$agents->name}}</span></div>
                        <div class="col-xs-12" style="margin-top: 10px;"><span> <i class="fa fa-user"
                              aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;</i>Agent: {{$agents->name}}</span>
                        </div>
                        <div class="col-xs-12"><i class="fa fa-location-arrow" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;</i>Address:
                            <span>{{$agents->address}}</span></div>
                        <div class="col-xs-12"><i class="fa fa-phone-square"
                                                  aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;</i>Contact:
                            <span>{{$agents->phone}}</span></div>
                        <div class="col-xs-12"><i class="fa fa-link" aria-hidden="true">&nbsp;&nbsp;&nbsp;&nbsp;</i>Email:
                            <span>{{$agents->email}}</span></div>
                        <div class="col-xs-12" style="margin-top: 20px;"><span
                                style="font-family: Century Gothic, sans-serif;  font-size: 16px;"><i
                                    class="fa fa-asterisk" aria-hidden="true">&nbsp;&nbsp;</i>Discription</span></div>
                        <div class="col-xs-12"><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$agents->description}}</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Left Section-->
    <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9" style="margin-top: 15px;">
        @foreach($properties as $key=>$property)
            <div class="col-xs-12 ">
                <div class="row property-row">
                    <!-- Property image -->
                    <div class="col-xs-12 col-sm-4 col-md-4 property-picture">
                        <div class="card-purpose"><span>{{$property->status}}</span></div>
                        <a href="{{route('property-detail',$property->id)}}">
                            <img src="{{url('assets/property-images',$images[$key]??'')}}"
                                 style="max-height: 170px; min-height: 170px;"/>
                        </a>
                    </div>
                    <!-- Property Details -->
                    <div class="col-xs-12 col-sm-8 col-md-8 property-info">
                        <!-- Property Title -->
                        <div class="row">
                            <div class="col-xs-8 property-title">
                                <a href="{{route('property-detail',$property->id)}}">{{$property->title}}</a>
                            </div>
                            <div class="col-xs-4 property-purpose">
                                <span>For {{$property->type}}</span>
                            </div>
                        </div>
                        <!-- Property Location -->
                        <div class="property-location">
                            {{$property->location}}, {{$property->city}}
                        </div>
                        <hr class="divider"/>
                        <div class="property-details" style="min-height:73px; min-width: 30px;">
                            <span>{{$property->description}}</span>
                        </div>
                        <div class="row-fotter">
                            <div class="row-fotter-content"><i
                                    class="fa fa-arrows-alt">&nbsp;&nbsp;</i><span>{{$property->lande_area}}</span><span>{{$property->unit}}</span>
                            </div>
                            <div class="row-fotter-content" style="border-right: none; float: right;"><i
                                    class="fa fa-money">&nbsp;&nbsp;</i><span>Rs: {{$property->price}}</span></div>
                            <div class="row-fotter-content-last"></div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!--Right Section-->
    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3">
        <div class="zero_padding" style="dheight: auto;">
            <div class="line-3"><h2>Enquire Now</h2></div>
            <div class="col-xs-12 col-sm-12 col-md-12 enquiry">
                <form action="{{route('contact-form')}}" method="post">
                    @csrf
                    <div class="enq-input col-xs-12 col-sm-12 col-md-12">
                        <input type="text" name="sender_name" placeholder="Name"/>
                    </div>
                    <div class="enq-input col-xs-12 col-sm-12 col-md-12">
                        <input type="email" name="email" placeholder="Email"/>
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
    </div>
</div>
@include('users.includes.footer')

</body>
</html>
