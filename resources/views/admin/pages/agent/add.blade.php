@extends('admin.layouts.app')
@section('content')
    <div class="main-content">
        <form action="{{route('agents-store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <section class="section">
                <div class="row">
                    <div class="col-12 col-md-10 col-lg-10 offset-1">
                        <div class="card">
                            <div class="card-header">
                                <h4> Add Agent </h4>
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="row">
                                        <div class="form-group col-6">
                                            <label for="frist_name"> Name</label>
                                            <input id="name" type="text" class="form-control"
                                                   name="name" autofocus placeholder="Enter Agent Name">
                                        </div>
                                        <div class="form-group col-6">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control"
                                                   name="email" placeholder="Enter Agent Email">
                                        </div>
                                    </div>
                                 <div class="row">
                                      <div class="form-group col-6">
                                         <label for="last_name">Phone No</label>
                                         <input  type="number" class="form-control"
                                                 name="phone" placeholder="Enter Agent Phone">
                                         </div>

                                    <div class="form-group col-6">
                                        <label for="last_name">Address</label>
                                        <input  type="text" class="form-control"
                                                name="address" placeholder="Enter Agent Address">
                                    </div>
                                 </div>
                                    <div class="row">
                                        <div class="form-group  col-6">
                                            <label for="website" class="d-block">WebSite</label>
                                            <input id="website" type="text"
                                                   class="form-control
                                                    "placeholder="Enter Agent WebSite"
                                                   name="website">
                                        </div>
                                    <div class="form-group col-6 ">
                                        <label for="description" class="d-block">Description</label>
                                        <input type="text" class="form-control"
                                                  name="description"  placeholder="Enter Agent Description">
                                                </input>
                                    </div>
                                  </div>
                                  <div class="row">
                                    <div class="form-group col-6">
                                        <label for="last_name">Upload Image</label>
                                        <input type="file" name="profile_photo_path" class="form-control" required>

                                    </div>
                                    <div class="form-group col-6">
                                        <label for="last_name">Password</label>
                                        <input type="password" name="password"
                                               placeholder="Enter Agent Passord" class="form-control" required>

                                    </div>
                                 </div>
                                    <div class="form-group col-3 offset-9" >
                                        <button id="description"
                                         type="submit" class="btn btn-primary btn-lg btn-block">
                                            Register
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </form>
    </div>
@endsection
