@extends('agents.layouts.app')
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
                                <table class="table table-stripped table-hover" id="save-stage" style="width:100%;text-align: center;">
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
                                    <?php $i=1; ?>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name ?? 'Null'}}</td>
                                            <td>{{$user->email  ?? 'Null'}}</td>
                                            <td>{{$user->phone  ?? 'Null'}}</td>
                                            <td>{{$user->mode  ?? 'Null'}}</td>
                                            <td>{{$user->address  ?? 'Null'}}</td>
                                            <td>{{$user->status  ?? 'Null'}}</td>
                                            <td>
                                                <a href="{{route('user.update-status', $user->id)}}">
                                                    <button type="button" class="@if($user->status==1){{'btn-primary'}}@else{{'btn-danger'}}@endif btn btn-icon icon-left">
                                                        @if($user->status==1){{'Active'}}@else{{'Block'}}@endif
                                                    </button></a>


                                            </td>
                                            <td>
                                                <a href="{{route('delete-users',$user->id)}}"  class="btn btn-icon btn-danger btn-sm">
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
