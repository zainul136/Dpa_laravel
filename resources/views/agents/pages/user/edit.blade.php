@extends('agents.layouts.app')
@section('content')
    <div class="main-content">
        <form action="{{route('user-status',$users->id)}}" method="post" >
            @csrf
            <section class="section">
                <div class="row">
                    <div class="col-12 col-md-8 col-lg-8 offset-1">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add Property </h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" value="{{$users->status}}" name="address" placeholder="Enter your address" class="form-control">
                                </div>
                                <div class="col-auto">
                                    <button  type="submit" class="btn btn-primary mb-1">Submit</button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection
