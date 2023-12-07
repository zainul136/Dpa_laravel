<style>
    .custom_color{
        color: white;
    } .stretch-card>.card {
          width: 100%;
          min-width: 100%
      }

    body {
        background-color: #f9f9fa
    }

    .flex {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto
    }

    @media (max-width:991.98px) {
        .padding {
            padding: 1.5rem
        }
    }

    @media (max-width:767.98px) {
        .padding {
            padding: 1rem
        }
    }

    .padding {
        padding: 3rem
    }

    .card {
        box-shadow: none;
        -webkit-box-shadow: none;
        -moz-box-shadow: none;
        -ms-box-shadow: none
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        /*border: 1px solid #3da5f;*/
        border-radius: 0
    }

    .card .card-body {
        padding: 1.25rem 1.75rem
    }

    .card .card-title {
        color: #000000;
        margin-bottom: 0.625rem;
        text-transform: capitalize;
        font-size: 0.875rem;
        font-weight: 500
    }

    .card .card-description {
        margin-bottom: .875rem;
        font-weight: 400;
        color: #76838f
    }
    .btn.btn-social-icon{
        width: 50px;
        height: 50px;
        padding: 0;
    }
    .template-demo > .btn{
        margin-right: 0.5rem !important;
    }

    .template-demo{
        margin-top: 0.5rem !important;
    }

    .btn.btn-rounded {
        border-radius: 50px;
    }


    .btn-outline-facebook {
        border: 1px solid #3b579d;
        color: #3b579d;
    }

    .btn-outline-facebook:hover {
        background: #3b579d;
        color: #ffffff;
    }

    .btn-outline-youtube {
        border: 1px solid #e52d27;
        color: #e52d27;
    }

    .btn-outline-twitter {
        border: 1px solid #2caae1;
        color: #2caae1;
    }

    .btn-outline-dribbble {
        border: 1px solid #ea4c89;
        color: #ea4c89;
    }

    .btn-outline-linkedin {
        border: 1px solid #0177b5;
        color: #0177b5;
    }

    .btn-outline-instagram {
        border: 1px solid #dc4a38;
        color: #dc4a38;
    }

    .btn-outline-twitter:hover {
        background: #2caae1;
        color: #ffffff;
    }

    .btn-outline-linkedin:hover {
        background: #0177b5;
        color: #ffffff;
    }

    .btn-outline-youtube:hover {
        background: #e52d27;
        color: #ffffff;
    }

    .btn-outline-instagram:hover{
        background: #e52d27;
        color: #ffffff;
    }


    /*Button cover*/

    .btn-facebook {
        background: #3b579d;
        color: #ffffff;
    }

    .btn-youtube {
        background: #e52d27;
        color: #ffffff;
    }

    .btn-twitter {
        background: #2caae1;
        color: #ffffff;
    }
    .btn-dribbble {
        background: #ea4c89;
        color: #ffffff;
    }
    .btn-linkedin {
        background: #0177b5;
        color: #ffffff;
    }
    .btn-instagram {
        background: #dc4a38;
        color: #ffffff;
    }

    .btn-facebook:hover, .btn-facebook:focus {
        background: #2d4278;
        color: #ffffff;
    }

    .btn-youtube:hover, .btn-youtube:focus {
        background: #c21d17;
        color: #ffffff;
    }
    .btn-twitter:hover, .btn-twitter:focus {
        background: #1b8dbf;
        color: #ffffff;
    }
    .btn-dribbble:hover, .btn-dribbble:focus {
        background: #e51e6b;
        color: #ffffff;
    }

    .btn-linkedin:hover, .btn-linkedin:focus {
        background: #015682;
        color: #ffffff;
    }

    .btn-instagram:hover, .btn-instagram:focus {
        background: #bf3322;
        color: #ffffff;
    }




</style>
<footer style="padding-top: 30px;" class="">

    <div id="cssmenu">
        <div class="container">
            <div class="row custom_color" style="padding-top: 30px;border-bottom: 1px solid white;padding-bottom: 15px;">
              <div class="col-md-3">
                  <ul>
                      <li class="active"><a href="#"><img src="{{url('users/assets/images/logo.png')}}"></a></li><br>

                      <li><a href="#" class=text-white">Address : CL - 2, A Block Abdalian Society Johar Town Lahore </a></li><br>
                      <li><a href="tel:+92 03187879879 ">Phone: +92 03007605006  </a> </li><br>
                      <li><a href="mailto:">Email: info@smartfunstudio.com  </a></li><br>
                  </ul>
              </div>
              <div class="col-md-3">
                  <ul>
                      <li class="active"><h5>Useful Links</h5></li><br>
                      <li><a href="{{route('about-us')}}">About Us </a></li><br>
                      <li><a href="{{route('meet-team')}}">Meet The Team </a></li><br>
                      <li><a href="{{route('contact')}}">Contact Us </a></li><br>
                  </ul>
              </div>
              <div class="col-md-3">
                  <ul>
                      <li class="active"><h5>Our Service</h5></li><br>
                      <li><a href="{{url('/')}}#latest " >Latest Property</a></li><br>
                      <li><a href="{{url('/')}}#sale">Sale Property</a></li><br>
                      <li><a href="{{url('/')}}#rent">Rent Property</a></li><br>
                      <li><a href="{{url('/')}}#buy">Buy Property</a></li><br>
                  </ul>
              </div>
              <div class="col-md-3">
                  <ul>
                      <li class="active"><h5>Our Social Networks</h5></li><br>
                      <li><p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p></li><br>
                      <div class="template-demo">
                           <style>
                            .btn-btn-social-icon
                            {
                              
                                font-size: 16px; 
                                color: white;
                                padding-top: 16px;}

                            
                           </style>
                           
                        
                            <a  href="https://www.facebook.com/smartfunstudios/" type="button" style="padding-top: 13px;"  class="btn btn-social-icon btn-outline-facebook"><i class="fa fa-facebook" ></i></a>
                            <a  href="https://twitter.com/smartfunstudios" type="button"  style="padding-top: 13px;" class="btn btn-social-icon btn-outline-twitter"><i class="fa fa-twitter"></i></a>
                            <a  href="https://www.youtube.com/your-youtube-channel" type="button"  style="padding-top: 13px;" class="btn btn-social-icon btn-outline-youtube"><i class="fa fa-youtube" ></i></a>
                            <a  href="https://www.linkedin.com/company/smartfunstudios/" type="button"  style="padding-top: 13px;" class="btn btn-social-icon btn-outline-linkedin"><i class="fa fa-linkedin"></i></a>
                          
                      </div>
                  </ul>
              </div>
            </div>

            <div class="footer-bottom-inner row" style="height: 60px;padding-top: 15px;">
                <div class="footer-bottom-left" style="color:white; margin-left:22px; margin-top:5px;">
                    © 2023 Powered By Smartfunstudios.
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<script src="{{asset('users/assets/js/jquery-2.2.1.min.js')}}"></script>
<script src="{{asset('users/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('users/assets/MDL/material.min.js')}}" type="text/javascript"></script>
<script src="{{asset('users/assets/js/javascriptcustom.js')}}" type="text/javascript"></script>
<script src="{{asset('users/assets/js/addproperty_handler.js')}}" type="text/javascript"></script>
<script src="{{asset('users/assets/js/validation_handler.js')}}" type="text/javascript"></script>

<script type="text/javascript">
    jQuery(document).scroll(function () {
        if(jQuery(this).scrollTop() > 35) {
            jQuery('#menu-secondary-wrap').css({
                'position': 'fixed',
                'top': '0',
                'z-index': '9999',
                'width': '100%',
            });
        } else {
            jQuery('#menu-secondary-wrap').css('position', 'static');
        }
    });
</script>
