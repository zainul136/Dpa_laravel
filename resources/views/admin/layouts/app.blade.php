<!DOCTYPE html>
<html lang="en">
<!-- app.blade.php  28 Dec 2022 10:44:50 GMT -->
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Direct Property - Admin Dashboard</title>
    <link href="{{url('user/assets/img/logo.png')}}" rel="icon"
          style="min-height: 10px; max-height: 10px; max-width:10px; ">
    <!-- General CSS Files -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{url('assets/css/app.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{url('assets//bundles/datatables/datatables.min.css')}}">
    <link rel="stylesheet"
          href="{{url('assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css')}}">
    <!-- Template CSS -->
    <!--Railway Admin Pannel  CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/components.css')}}">
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{url('assets/css/custom.css')}}">
    {{--    <link rel='shortcut icon' type='image/x-icon' href="{{url('assets/img/favicon.ico')}}"/>--}}
    <link rel="stylesheet" href="{{url('assets/bundles/izitoast/css/iziToast.min.css')}}">
    <link href="{{url('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css')}}" rel="stylesheet"/>

    <link rel="stylesheet" href="{{url('assets/bundles/summernote/summernote-bs4.css')}}">
    {{--    <link rel="stylesheet" href="{{url('assets/bundles/jquery-selectric/selectric.css')}}">--}}
    <link rel="stylesheet" href="{{url('assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js')}}">
</head>

<body>
<div class="loader"></div>
<div id="app">
    <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg"></div>
        @include('admin.include.nav')
        @include('admin.include.sidebar')
        <!-- Main Content -->
        @yield('content')
        <!-- End Main Content -->
        <footer class="main-footer">
            <div class="footer-right">
                <a href="{{url('/dashboard')}}">Direct Peroperty</a></a>
            </div>
            <div class="footer-right">
            </div>
        </footer>
    </div>
</div>
<!-- General JS Scripts -->
<script src="{{url('assets/js/app.min.js')}}"></script>
<!-- JS Libraries -->
<script src="{{url('assets/bundles/jquery-steps/jquery.steps.min.js')}}"></script>
<script src="{{url('assets/bundles/summernote/summernote-bs4.js')}}"></script>
<script src="{{url('assets/bundles/datatables/datatables.min.js')}}"></script>
<script src="{{url('assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('assets/bundles/jquery-ui/jquery-ui.min.js')}}"></script>
<script src="{{url('assets/bundles/apexcharts/apexcharts.min.js')}}"></script>
<!-- Page Specific JS File -->
<script src="{{url('assets/js/page/datatables.js')}}"></script>
<script src="{{url('assets/js/page/index.js')}}"></script>
<script src="{{url('assets/js/page/form-wizard.js')}}"></script>
<!-- Admin JS File -->
<script src="{{url('assets/bundles/izitoast/js/iziToast.min.js')}}"></script>
<script src="{{url('assets/bundles/jquery-validation/dist/jquery.validate.min.js')}}"></script>
<script src="{{url('assets/js/page/toastr.js')}}"></script>
<script src="{{url('assets/js/scripts.js')}}"></script>
<!-- Custom JS File -->
<script src="{{url('assets/js/custom.js')}}"></script>
<script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js')}}"></script>

</body>
@if(Session::has('success'))
    <script>
        iziToast.success({
            title: 'success',
            message: '<?php echo \Illuminate\Support\Facades\Session::get('success'); ?>',
            position: 'topRight'
        });
    </script>
@endif
@if(Session::has('error'))
    <script>
        iziToast.error({
            title: 'error',
            message: '<?php echo \Illuminate\Support\Facades\Session::get('error'); ?>',
            position: 'topRight'
        });
    </script>
@endif
<!-- app.blade.php  28 Dec 2022 10:44:50 GMT -->
</html>
