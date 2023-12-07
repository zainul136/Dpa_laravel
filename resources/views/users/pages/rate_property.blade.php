<!DOCTYPE html>
<html>
<head>
    <title>Login-Register</title>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   @include('users.includes.header')
   @include('users.includes.navbar')
</head>
<body>
    {{-- <script>
        var msg = '{{Session::get('alert')}}';
        var exist = '{{Session::has('alert')}}';
        if(exist){
          alert(msg);
        }
      </script> --}}

<div class="container">
    <div class="row">

        <!--Left Section-->
        <div class="col-xs-12 col-sm-12 col-md-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1" style="min-height: 600px;">
            <div class="row property-row-title">
                <div class="col-xs-12 col-sm-12 col-md-12">

                    <!-- FORM-->
                    <!--////////// part 6 //////////-->
                    <div class="col-xs-12 col-sm-12 col-md-9 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-2" id="addproperty_part_6">
                        <div class="line-5 col-xs-12"><h4 id="status_heading">Login</h4></div>
                        <div class="col-xs-12 col-sm-12 col-md-12 add-property">
                            <!--contact details-->
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="col-xs-12 col-sm-12 col-md-12 contact-toggle">

                                                     {{-- <div class="col-xs-12 col-sm-2"><h4>Status</h4></div> --}}
                                    <div class="col-xs-12 col-sm-1 radio-style"></div>

                                    <div class="col-xs-12 col-sm-4 col-md-4 radio-style">
                                        <label><input type="radio" id="option-1" value="existing_member" name="member" onclick="withLogin()"
                                                <?php

                                                if (session('email_error')) {

                                                } else {
                                                    echo "checked";
                                                }
                                                ?>
                                            />
                                            Existing Member</label>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 radio-style">

                                        <label><input type="radio" id="option-2" value="new_member" name="member"  onclick="withoutLogin()"
                                                <?php
                                                if (session('email_error')) {
                                                    echo "checked";
                                                } else {

                                                }
                                                ?>
                                            />New Member</label>
                                    </div>
                                </div>
                            </div>

                            <!--////////////////////-->
                            <div class="col-xs-12 col-sm-12 col-md-12"><hr class="divider"/></div>
                            <div class="col-xs-12 col-sm-12 col-md-12">

                                <!--    //////////////-->
                                <div class="col-xs-12 col-sm-12 col-md-12 contact-toggle" id="signup" style="
                                         display:<?php
                                         if (session('email_error')) {
                                             echo "inline";
                                         } else {
                                             echo 'none';
                                         }
                                         ?>;">
                                    <form action="{{route('user-register')}}" method="post" enctype="multipart/form-data" onsubmit="return validate_Form()">
                                                @csrf
                                        <div class="col-xs-12 col-sm-1 radio-style"></div>
                                        <div class="col-xs-12 col-sm-4 radio-style">
                                            <label><input type="radio" id="option-private-user" name="user_type" value="users" checked/>
                                                Private User</label>
                                        </div>

                                        <div class="col-xs-12 col-sm-4 radio-style">
                                            <label><input type="radio" id="option-agent" name="user_type" value="agents" />
                                                Professional Agent</label>
                                        </div>
                                        <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 contact-toggle">
                                            <div class="add-input col-xs-12">
                                                <label class="mdl-radio mdl-js-ripple-effect"><span>Full Name</span></label>
                                                <input type="text" name="name" id="newName"/>
                                                <div id="property_newName_error_box" class="error_box col-xs-12 col-xs-12 col-sm-12 col-md-12">
                                                    <span>Please enter your name !</span>
                                                </div>

                                            </div>
                                            <div class="add-input col-xs-12">
                                                <label class="mdl-radio mdl-js-ripple-effect"><span>Email</span></label>
                                                <input type="email" name="email" id="newEmail"/>
                                                <div id="newEmail_error_box" class="error_box col-xs-12 col-xs-12 col-sm-12 col-md-12" style="padding-left: 15px;display: inline">
                                                        <span id="newEmail_error"> <?php
                                                                                   if (session('email_error')) {
                                                                                       echo session('email_error');
                                                                                       // $this->session->unset_userdata('email_error');
                                                                                   }
                                                                                   ?></span>
                                                </div>
                                            </div>
                                            <div class="add-input col-xs-12">
                                                <label class="mdl-radio mdl-js-ripple-effect"><span>Contact number</span></label>
                                                <input type="number" placeholder="enter 11 digit Contact No (0300 1234567)" name="phone" id="phone" maxlength="11" minlength="11"/>
                                                <div id="property_phone_error_box" class="error_box col-xs-12 col-xs-12 col-sm-12 col-md-12" style="padding-left: 15px;display: inline">
                                                    <span id="property_phone_error"></span>
                                                </div>
                                            </div>
                                            <div class="add-input col-xs-12">
                                                <label class="mdl-radio mdl-js-ripple-effect"><span>Address</span></label>
                                                <input type="text" placeholder="enter address" name="address" id="address" />
                                                <div id="property_address_error_box" class="error_box col-xs-12 col-xs-12 col-sm-12 col-md-12" style="padding-left: 15px;display: inline">
                                                    <span id="property_address_error"></span>
                                                </div>
                                            </div>
                                            <div class="add-input col-xs-12">
                                                <label class="mdl-radio mdl-js-ripple-effect"><span>Password</span></label>
                                                <input type="password" name="password" id="password"/>
                                                <div id="property_newPassword_1_error_box" class="error_box col-xs-12 col-xs-12 col-sm-12 col-md-12" style="padding-left: 15px;">
                                                    <span>enter your password !</span>
                                                </div>
                                            </div>

                                            <div class="add-input col-xs-12">
                                                <label class="mdl-radio mdl-js-ripple-effect"><span>Confirm Password</span></label>
                                                <input type="Password" id="confirm_password" name="password"/>
                                                <div id="newConfirmPassword_1_error_box" class="error_box col-xs-12 col-xs-12 col-sm-12 col-md-12" style="padding-left: 15px;display: inline">
                                                    <span id="newConfirmPassword_error_box"></span>
                                                </div>
                                            </div>
                                            <!--                                                    ////////// new agent /////////////-->
                                            <div style="margin-top: 10px; display: none;" id="agency-area">
                                                <div class="add-member-title-2">Agent Information</div>

                                                <div class="add-input col-xs-12 col-sm-6">
                                                    <label class="mdl-radio mdl-js-ripple-effect"><span>Agency Name</span></label>
                                                    <input type="text" name="agency_name" id="agency-name"/>
                                                    <div id="property_newEmail_error_box" class="error_box col-xs-12 col-xs-12 col-sm-6 col-md-6" style="padding-left: 15px;">
                                                        <span>Agency Name</span>
                                                    </div>
                                                </div>
                                                <div class="add-input col-xs-12 col-sm-6">
                                                    <label class="mdl-radio mdl-js-ripple-effect"><span>Agency Website</span></label>
                                                    <input type="text" name="agency_website" id="agency-website"/>
                                                    <div id="property_newEmail_error_box" class="error_box col-xs-12 col-xs-12 col-sm-6 col-md-6" style="padding-left: 15px;">
                                                        <span>Agency Website</span>
                                                    </div>
                                                </div>
                                                <div class="add-input col-xs-12">
                                                    <label class="mdl-radio mdl-js-ripple-effect"><span>Agency Address</span></label>
                                                    <input type="text" name="agency_address" id="agency-address"/>
                                                    <div id="property_newEmail_error_box" class="error_box col-xs-12 col-xs-12 col-sm-6 col-md-6" style="padding-left: 15px;">
                                                        <span>Agency Address</span>
                                                    </div>
                                                </div>
                                                <div class="add-input col-xs-12">
                                                    <label class="mdl-radio mdl-js-ripple-effect"><span>Agency Location</span></label>
                                                    <input type="text" name="agency_location" id="agency-location"/>
                                                    <div id="property_newEmail_error_box" class="error_box col-xs-12 col-xs-12 col-sm-6 col-md-6" style="padding-left: 15px;">
                                                        <span>Agency Location</span>
                                                    </div>
                                                </div>
                                                <div class="add-input col-xs-12">
                                                    <label class="mdl-radio mdl-js-ripple-effect"><span>Agency City</span></label>
                                                    <input type="text" name="agency_city" id="agency-city"/>
                                                    <div id="property_newEmail_error_box" class="error_box col-xs-12 col-xs-12 col-sm-6 col-md-6" style="padding-left: 15px;">
                                                        <span>Agency City</span>
                                                    </div>
                                                </div>
                                                <div class="add-property-textarea col-xs-12 col-sm-12 col-md-12">
                                                    <label class="mdl-radio mdl-js-ripple-effect"><span>Discription of your Agency</span></label>
                                                    <textarea id="agency-description" name="agency_description"></textarea>
                                                </div>
                                                <div class="col-xs-12 agent-pic-upload add-input">
                                                    <label class="mdl-radio mdl-js-ripple-effect"><span>Agency Logo</span></label>
                                                    <input type="file" id="agency_logo" name="agency_logo"/>
                                                </div>

                                            </div>
                                            <div class="col-xs-12" style="margin-top:20px;">
                                                <label>
                                                    <input type="checkbox" id="terms_conditions">
                                                    <span style="font-size:12px;">I accept the <a href="" style="text-decoration: none;">Terms and Conditions</a> of your website.</span>
                                                </label>
                                            </div>
                                            <div class="col-xs-8 col-sm-4 col-md-4" style="float: right; margin-top: 20px;">
                                                <input type="submit" value="Register" id="submit_button_2" name="register" class="btn btn-success" style="border-radius: 0px; float: right;" disabled/>
                                            </div>
                                        </div>
                                        <!--                                        ///-->

                                    </form>
                                </div>
                                <!--/////////////-->
                                <div class="col-xs-12 col-sm-12 col-md-10 col-md-offset-1 contact-toggle" id="login" style="
                                         display:<?php
                                                         if (session('email_error')) {
                                             session('email_error');
                                             echo "none";
                                         } else {
                                             echo 'inline';
                                         }
                                         ?>;">
                                    <form action="{{route('login')}}" method="post">
                                        @csrf
                                        @if($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        @if($error === 'These credentials do not match our records.')
                                                            <li>Your email does not exist. Please <a href="#">register</a> first.</li>
                                                        @else
                                                            <li>{{ $error }}</li>
                                                        @endif
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        <div class="add-input col-xs-12">
                                            <label class="mdl-radio mdl-js-ripple-effect"><span>Email</span></label>
                                            <input type="email" id="oldEmail" name="email"/>
                                            <div id="property_oldEmail_error_box" class="error_box col-xs-12 col-xs-12 col-sm-12 col-md-12" style="padding-left: 15px;">
                                                <span>enter your email !</span>
                                            </div>
                                        </div>
                                        <div class="add-input col-xs-12">
                                            <label class="mdl-radio mdl-js-ripple-effect"><span>Password</span></label>
                                            <input type="password" name="password" id="oldPassword"/>
                                            <div class="error_box col-xs-12 col-xs-12 col-sm-12 col-md-12" style="display: inline-block;padding-left: 15px;">
                                                    <span id="login_error_box"><?php
                                                                               if (session('login_failed')) {
                                                                                echo "<script>alert('Your message');</script>";

                                                                                   echo session('login_failed');
                                                                                   session('login_failed');
                                                                               }
                                                                               ?>
                                                    </span>
                                            </div>
                                        </div>
                                        <div class="col-xs-8 col-sm-4 col-md-5" style="float: left; margin-top: 20px">
                                            <i class="fa fa-unlock-alt">&nbsp;&nbsp;</i><a href="{{url('forgot-password')}}">Forgot password</a>
                                        </div>
                                        <div class="col-xs-8 col-sm-4 col-md-4" style="float: right; margin-top: 20px">
                                            <input type="submit" value="Login" name="login"  id="submit_button_1" class="btn btn-success" style="border-radius: 0px; float: right;" disabled/>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!--                               ////////////////////-->

                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!--Right Section-->

    </div>
</div>


@include('users.includes.footer')

</body>
</html>
