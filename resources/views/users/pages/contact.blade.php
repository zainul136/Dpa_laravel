<!doctype html>
<html lang="en">
<style>
    .custom_class1 {
        margin-top: 20px;
    }

    .custom_class {
        margin-top: 10px;
    }

    .custom_margin {
        margin-top: 20px;
    }

    .custom_contact {
        margin-top: 70px;
        margin-left: 20px;
    }
</style>
<body>
@include('users.includes.header')
@include('users.includes.navbar')
<div class="container custom_class1">
    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <h6 class="heading_for_property">&nbsp;&nbsp;&nbsp;&nbsp;Contact US</h6>
                <div>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took a galley of type and scrambled it to make a type specimen book. It has survived not only five
                        centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was
                        popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and
                        more recently with desktop publishing software like Aldus PageMaker including versions of Lorem
                        Ipsum</p>
                </div>
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
                        <div class="custom_contact">
                            <p><strong>Our Address:</strong> Joher Town Lahore Pakistan</p>
                            <p><strong>Email Us :</strong> contact@gmail.com</p>
                            <p><strong>Call Us : </strong> +9233209000832</p>
                        </div>


                    </div>
                    <!-- Property Details -->
                    <div class="col-xs-12 col-sm-8 col-md-8 property-info">
                        <!-- Property Title -->
                        <!-- Property Location -->
                        <div class="col-xs-12 col-sm-12 col-md-12 enquiry">
                            <form action="{{route('contact-form')}}" method="post">
                                @csrf
                                <div class="enq-input col-xs-12 col-sm-12 col-md-12">
                                    <input type="text" name="sender_name" placeholder="Name"/>
                                </div>
                                <div class="enq-input col-xs-12 col-sm-12 col-md-12">
                                    <input type="email" name="sender_email" placeholder="Email"/>
                                </div>
                                <div class="enq-input col-xs-12 col-sm-12 col-md-12">
                                    <input type="number" name="contact_no" placeholder="Contact no"/>
                                </div>
                                <div class="enq-textarea col-xs-12 col-sm-12 col-md-12">
                                    <textarea placeholder="Message" name="message"></textarea>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-12 enq-submit">
                                    <input type="submit" id="note" value="POST MESSAGE" class="btn btn-danger"/>
                                </div>

                            </form>
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


