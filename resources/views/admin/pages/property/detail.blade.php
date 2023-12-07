@extends('admin.layouts.app')
@section('content')

    <!-- Main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-4">
                        <div class="card">
                            <div class="card-header">
                                <h4>Property Details</h4>
                            </div>
                            <div class="card-body">
                                <div class="py-4">
                                    <p class="clearfix">
                                        <span class="float-start"><b>Property Title</b></span>
                                        <span class="float-right text-muted">{{$property->title}}</span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-start"><b>User ID</b></span>
                                        <span class="float-right text-muted">{{$property->user_id}}</span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-start"><b>Location</b></span>
                                        <span class="float-right text-muted">{{$property->location}}</span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-start"><b>City</b></span>
                                        <span class="float-right text-muted">{{$property->city}}</span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-start"><b>Latitude</b></span>
                                        <span class="float-right text-muted">{{$property->latitude}}</span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-start"><b>Longitude</b></span>
                                        <span class="float-right text-muted">{{$property->longitude}}</span>
                                    </p>
                                    <p class="clearfix">
                                        <span class="float-start"><b>Price</b></span>
                                        <span class="float-right text-muted">{{$property->price}}</span>
                                    </p>


                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="card">
                            <div class="card-header">
                                <h4>Property Details</h4>
                            </div>
                            <div class="padding-20">
                                <div class="row">

                                    <div class="col-md-12 col-6 b-r">
                                        <strong>Property Description</strong>
                                        <br>
                                        <p class="text-muted">{{$property->description}}</p>
                                    </div>
                                    <div class="col-md-12 col-6 b-r">
                                        <strong>Property status</strong>
                                        <br>
                                        <p class="text-muted">{{$property->built_status}}</p>
                                    </div>
                                    <div class="col-md-12 col-6 b-r">
                                        <strong>Property Commercial Area</strong>
                                        <br>
                                        <p class="text-muted">{{$property->commercial_area}}</p>
                                    </div>
                                    <div class="col-md-12 col-6 b-r">
                                        <strong>Property Area</strong>
                                        <br>
                                        <p class="text-muted">{{$property->land_area}}</p>
                                    </div>
                                    <div class="col-md-12 col-6 b-r">
                                        <strong>Property Unit</strong>
                                        <br>
                                        <p class="text-muted">{{$property->unit}}</p>
                                    </div>
                                    <div class="col-md-12 col-6 b-r">
                                        <strong>Property Corner Place</strong>
                                        <br>
                                        <p class="text-muted">{{$property->corner_place}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
{{--                            Property Images--}}
                        <div class="card">
                            <div class="card-header">
                                <h4>Property Images</h4>
                            </div>
                            <div class="padding-20">
                                <div class="row">
                                    <div class="col-md-12 col-6 b-r">

                                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators">
                                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                                </ol>

                                                <!-- Wrapper for slides -->
                                                <div class="carousel-inner">
                                                    @foreach($images as $key=>$image)
                                                    <div class="carousel-item @if($loop->first) active @endif">
                                                        <img src="{{url('assets/property-images',$image)}}" alt="Los Angeles" style="max-width: 680px; min-width: 680px; max-height: 450px; min-height: 450px; ">
                                                    </div>
                                                    @endforeach

                                                </div>

                                                <!-- Left and right controls -->
                                                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                    </div>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
