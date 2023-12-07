<!doctype html>
<html lang="en">
<style>
    .custom_class1 {
        margin-top: 20px;
    }

    .custom_class {
        margin-top: 10px;
    }

</style>
<body>
@include('users.includes.header')
@include('users.includes.navbar')
<div class="container custom_class1">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <h6 class="heading_for_property">&nbsp;&nbsp;&nbsp;&nbsp;Meet Our Team</h6>
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
                        <img src="{{url('users/assets/images/team/team-1.jpg')}}"
                             style="max-height: 251px; min-height: 251px;"/>

                    </div>
                    <!-- Property Details -->
                    <div class="col-xs-12 col-sm-8 col-md-8 property-info">
                        <!-- Property Title -->
                        <!-- Property Location -->
                        <div class="property-location custom_margin ">
                            <h5>Name: Walter White</h5>
                            <h5>Designations: Chief Executive Officer</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.</p>
                        </div>
                        <hr class="divider"/>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
            <div class="col-xs-12">
                <div class="row property-row">
                    <!-- Property image -->
                    <div class="col-xs-12 col-sm-4 col-md-4 property-picture">
                        <img src="{{url('users/assets/images/team/team-2.jpg')}}"
                             style="max-height: 251px; min-height: 251px;"/>

                    </div>
                    <!-- Property Details -->
                    <div class="col-xs-12 col-sm-8 col-md-8 property-info">
                        <!-- Property Title -->
                        <!-- Property Location -->
                        <div class="property-location custom_margin ">
                            <h5>Name: Sarah Jhonson</h5>
                            <h5>Designations: Product Manager</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.</p>
                        </div>
                        <hr class="divider"/>
                    </div>
                </div>
            </div>

        </div>

        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
            <div class="col-xs-12">
                <div class="row property-row">
                    <!-- Property image -->
                    <div class="col-xs-12 col-sm-4 col-md-4 property-picture">
                        <img src="{{url('users/assets/images/team/team-3.jpg')}}"
                             style="max-height: 251px; min-height: 251px;"/>

                    </div>
                    <!-- Property Details -->
                    <div class="col-xs-12 col-sm-8 col-md-8 property-info">
                        <!-- Property Title -->
                        <!-- Property Location -->
                        <div class="property-location custom_margin ">
                            <h5>Name: William Anderson</h5>
                            <h5>Designations: CTO</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.</p>
                        </div>
                        <hr class="divider"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-11 col-lg-11">
            <div class="col-xs-12">
                <div class="row property-row">
                    <!-- Property image -->
                    <div class="col-xs-12 col-sm-4 col-md-4 property-picture">
                        <img src="{{url('users/assets/images/team/team-4.jpg')}}"
                             style="max-height: 251px; min-height: 251px;"/>

                    </div>
                    <!-- Property Details -->
                    <div class="col-xs-12 col-sm-8 col-md-8 property-info">
                        <!-- Property Title -->
                        <!-- Property Location -->
                        <div class="property-location custom_margin ">
                            <h5>Name Amanda Jepson</h5>
                            <h5>Designations Accountant</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of type and scrambled it to make a type specimen book. It has
                                survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged.</p>
                        </div>
                        <hr class="divider"/>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@include('users.includes.footer')
</body>
</html>


