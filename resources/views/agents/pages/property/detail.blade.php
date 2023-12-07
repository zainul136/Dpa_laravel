@extends('agents.layouts.app')
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
                                        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner ">
                                                @foreach($property->images as $images)
                                                    <div class="carousel-item @if($loop->first) active @endif">
                                                        <div class="slider-image text-center">
                                                            <img src="{{  url('/assets/property-images',$images->image_name) }}"
                                                                 style="max-width: 680px; min-width: 680px; max-height: 450px; min-height: 450px;  "
                                                                 class="d-inline-block border text-center rounded" alt="{{ $images->image_name }}">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
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
