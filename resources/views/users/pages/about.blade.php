<!doctype html>
<html lang="en">
<style>
    .custom_class1 {
        margin-top: 20px;
    }

    .custom_class {
        margin-top: 20px;
    }

    .custom_margin {
        margin-top: 20px;
    }
</style>
<body>
@include('users.includes.header')
@include('users.includes.navbar')
<div class="container custom_class1">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <h6 class="heading_for_property">&nbsp;&nbsp;&nbsp;&nbsp;ABOUT US</h6>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
            </div>
        </div>
    </div>
</div>
<div class="container custom_class">
    <div class="row">
        <!--Left Section-->
        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
            <div class="col-xs-12">
                <div class="row property-row">
                    <!-- Property image -->
                    <div class="col-xs-12 col-sm-4 col-md-4 property-picture">
                        <img src="{{url('users/assets/images/background_1.png')}}"
                             style="max-height: 251px; min-height: 251px;"/>

                    </div>
                    <!-- Property Details -->
                    <div class="col-xs-12 col-sm-8 col-md-8 property-info">
                        <!-- Property Title -->
                        <!-- Property Location -->
                        <div class="property-location custom_margin ">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.</p>
                            <p> It was popularised in the 1960s with the release of Letraset sheets containing Lorem
                                Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                including versions of Lorem Ipsum</p>
                        </div>
                        <hr class="divider"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-2 col-sm-3 col-md-3"></div>
                <div class="col-xs-8 col-sm-6 col-md-6">
                    <ul class="pagination pagination-sm">

                    </ul>
                </div>
                <div class="col-xs-2 col-sm-3 col-md-3"></div>
            </div>
        </div>

    </div>
</div>
@include('users.includes.footer')
</body>
</html>


