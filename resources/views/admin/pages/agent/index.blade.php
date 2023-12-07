@extends('admin.layouts.app')
@section('content')
    <div class="main-content">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>All Users </h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-stripped table-hover" id="save-stage"
                                       style="width:100%;text-align: center;">
                                    <thead>
                                    <tr>
                                        <th>Serial No.</th>
                                        <th>#ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>mode</th>
                                        <th>Address</th>
                                        <th>Status</th>
                                        <th>Change Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    @foreach($agents as $agent)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$agent->id}}</td>
                                            <td>{{$agent->name ?? 'Null'}}</td>
                                            <td>{{$agent->email  ?? 'Null'}}</td>
                                            <td>{{$agent->phone  ?? 'Null'}}</td>
                                            <td>{{$agent->mode  ?? 'Null'}}</td>
                                            <td>{{$agent->address  ?? 'Null'}}</td>
                                            <td>{{$agent->status  ?? 'Null'}}</td>
                                            <td>
                                                <a href="{{route('update_agents_status', $agent->id)}}">
                                                    <button type="button" class="@if($agent->status==1){{'btn-primary'}}@else{{'btn-danger'}}@endif btn btn-icon icon-left">
                                                        @if($agent->status==1)
                                                            {{'Active'}}
                                                        @else
                                                            {{'Block'}}
                                                        @endif
                                                    </button>
                                                </a>


                                            </td>
                                            <td>
                                                <a href="{{route('delete-agents',$agent->id)}}"
                                                   class="btn btn-icon btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i></a>
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
