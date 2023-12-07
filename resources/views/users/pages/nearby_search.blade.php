<!DOCTYPE html>
<html lang="en">
@include('users.includes.header')
@include('users.includes.navbar')
<body>
<div class="container">
    <div class="row">
        <!--Left Section-->
        <div class="col-xs-12 col-sm-12 col-md-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1"
             style="min-height: 700px;">
            <div class="row property-row-title">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <!--////////// part 4 //////////-->
                    <div class="col-xs-12 col-sm-12 col-md-12" id="addproperty_part_4">
                        <div class="line-5 col-xs-12"><h4>Nearby Property Search</h4></div>
                        <div class="col-xs-12 col-sm-12 col-md-12" style="text-align: center">
                            <span id="errormsg" style="color: red; font-size: 1.2em"></span>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 add-property">
                            <div id="property_location_error_box"
                                 class="error_box col-xs-12 col-xs-12 col-sm-12 col-md-12" style="padding-left: 40px;">
                                <span>Please enter you location or NearBy Location !</span>
                            </div>

                            <div class="add-input add-input-padding" id="nearby_search_location">
                                <label class="mdl-radio mdl-js-ripple-effect"><span>Enter your Location</span></label>
                                <input id="nearby_location" type="text" placeholder="" name="entered-location"
                                       style="font-weight:bolder;"/>
                            </div>
                            <div id="property_location_error_box"
                                 class="error_box col-xs-12 col-xs-12 col-sm-12 col-md-12" style="padding-left: 40px;">
                                <span>Please enter you location!</span>
                            </div>
                            <div id="nearby_map" class="col-xs-12 col-sm-12 col-md-12 map">
                                <!--        map here-->
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Right Section-->
    </div>
</div>

@include('users.includes.footer')


<script src="{{url('users/assets/js/jquery-2.2.1.min.js')}}" type="text/javascript"></script>
<script src="{{url('users/assets/js/maps.js')}}" type="text/javascript"></script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGPZkNrsTRXA0Xn3oyRTg7M1SBvUJvd9E&libraries=places&callback=getProperties">
</script>
<script>

     $('#nearby_category_search').change(function () {
         if (document.getElementById('nearby_category_search').value !== "" && document.getElementById('nearby_purpose_search').value !== "" && document.getElementById('wantedfor').value !== "") {
             $('#nearby_search_location').show();
         } else {
             $('#nearby_search_location').hide();
         }
     });
     $('#nearby_purpose_search').change(function () {
         if (document.getElementById('nearby_category_search').value !== "" && (document.getElementById('nearby_purpose_search').value === "sale"
             || document.getElementById('nearby_purpose_search').value === "rent")) {
             $('#nearby_search_location').show();
         } else {
             $('#nearby_search_location').hide();
         }
     });
    $('#wantedfor').change(function () {
        if (document.getElementById('wantedfor').value !== ""
            && document.getElementById('nearby_category_search').value !== "" && document.getElementById('nearby_purpose_search').value === "wanted") {
            $('#nearby_search_location').show();
        } else {
            $('#nearby_search_location').hide();
        }
    });
</script>
</body>
</html>
