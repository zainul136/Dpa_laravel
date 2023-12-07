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
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Contact No.</th>
                                        <th>Message</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $i = 1; ?>
                                    @foreach($messages as $message)
                                        <tr>
                                            <td>{{$i++}}</td>
                                            <td>{{$message->sender_name ?? 'Null'}}</td>
                                            <td>{{$message->email  ?? 'Null'}}</td>
                                            <td>{{$message->contact_no  ?? 'Null'}}</td>
                                            <td>{{$message->message  ?? 'Null'}}</td>
                                            <td>
                                                <a href="{{route('delete-message',$message->id)}}"
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
