@extends('agents.layouts.app')
@section('content')
    <div class="main-content">
        <form action="{{route('update-property-agents',$property->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            <section class="section">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-10 offset-1">
                        <div class="card">
                            <div class="card-header">
                                <h4>Update Property </h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-2">
                                            <label><b>Title</b></label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" value="{{$property->title}}" name="title"
                                                   placeholder="Enter Your Title"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>Location</b></label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" value="{{$property->location}}" name="location"
                                                   placeholder="Enter your location"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>City</b></label>

                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" value="{{$property->city}}" name="city"
                                                   placeholder="Enter your city"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>Longitude</b></label>

                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="number" value="{{$property->longitude}}" name="longitude"
                                                   placeholder="Enter your longitude"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>Latitude</b></label>

                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="number" value="{{$property->latitude}}" name="latitude"
                                                   placeholder="Enter your latitude"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>Price</b></label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="number" value="{{$property->price}}" name="price"
                                                   placeholder="Enter your description"
                                                   class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>Land Area</b></label>

                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" value="{{$property->land_area}}" name="land_area"
                                                   placeholder="Enter your land_area"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>Unit</b></label>

                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <select  class="form-control"  name="unit">
                                                <option value="{{$property->unit}}">{{$property->unit}}</option>
                                                <option value="marla">Marla</option>
                                                <option value="kanal">kanal</option>
                                                <option value="sqrt-ft">Sqrt ft</option>
                                                <option value="sqrt-yard">Sqrt Yard</option>
                                                <option value="sqrt-meters">Sqrt Meters</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>Corner Place</b></label>

                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" value="{{$property->corner_place}}" name="corner_place"
                                                   placeholder="Enter your place"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>Commercial Area</b></label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="commercial_area"
                                                   value="{{$property->commercial_area}}"
                                                   placeholder="Enter your Commercial Area"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>Built Status</b></label>

                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" value="{{$property->built_status}}" name="built_status"
                                                   placeholder="Enter your Built Area"
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>Status</b></label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <select class="form-control" name="status" required>
                                                <option value="{{$property->status}}">{{$property->status}}</option>
                                                <option value="sale">For Sales</option>
                                                <option value="rent">For Rent</option>
                                                <option value="wanted">For wanted</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>Select Property Type</b></label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            @foreach($property->types as $property_type)
                                                <select class="form-control" name="property_type">
                                                    <option value="{{$property_type->type}}">{{$property_type->type}}</option>
                                                    <option  disabled="">---Homes---</option>
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
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>Select Type</b></label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <select class="form-control" name="type">
                                                <option class="p-5" value="{{$property->type}}">{{$property->type}}</option>
                                                <option value="home">Home</option>
                                                <option value="plot">Plot</option>
                                                <option value="commercial">Commercial</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>No of Beds</b></label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="number" value="{{$property->no_beds}}" name="no_beds" placeholder="Enter No Of Beds"
                                                   class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>No of Baths</b></label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="number" value="{{$property->no_baths}}" name="no_baths" placeholder="Enter No Of Baths"
                                                   class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>No kitchen</b></label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="number" value="{{$property->no_kitchen}}" name="no_kitchen" placeholder="Enter No Of Kitchen"
                                                   class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>No Store Room</b></label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="number" value="{{$property->no_store_room}}" name="no_store" placeholder="Enter No Of Store"
                                                   class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>Floor Type</b></label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text"  value="{{$property->floor_type}}" name="floor_type" placeholder="Enter Floor Type"
                                                   class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2">
                                        <label><b>Description</b></label>
                                    </div>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <textarea class="form-control" name="description"
                                                      placeholder="property Description">{{$property->description}}</textarea>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto p-2 ml-2">
                                    <button type="submit" class="btn btn-primary mb-1">Update Property</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection
