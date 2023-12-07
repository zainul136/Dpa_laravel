@extends('agents.layouts.app')
@section('content')
    <div class="main-content">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Agents Properties</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-stripped table-hover" id="save-stage" style="width:100%;text-align: center;">
                                    <thead>
                                    <tr>
                                        <th>Serial No.</th>
                                        <th>#ID</th>
                                        <th>Property Title</th>
                                        <th>Location</th>
                                        <th>City</th>
                                        <th>Unit</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i=1; ?>
                                    @foreach($properties as $property)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$property->id}}</td>
                                            <td>{{$property->title ?? 'N/A'}}</td>
                                            <td>{{$property->location  ?? 'N/A'}}</td>
                                            <td>{{$property->city  ?? 'N/A'}}</td>
                                            <td>{{$property->unit  ?? 'N/A'}}</td>
                                            <td>{{$property->status  ?? 'N/A'}}</td>
                                            <td>
                                                <a href="{{route('edit-property-agents',$property->id)}}" class="btn btn-icon btn-primary btn-sm"><i class="far fa-edit"></i></a>
                                                <a href="{{route('details-property-agents',$property->id)}}"  class="btn btn-icon btn-success mb-2 btn-sm mt-2"><i class="fas fa-expand btn-sm"></i></a>
                                                <a href="{{route('delete-property-agents',$property->id)}}"  class="btn btn-icon btn-danger btn-sm"><i class="fas fa-trash"></i></a>

                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
