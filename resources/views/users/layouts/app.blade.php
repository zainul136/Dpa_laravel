<!DOCTYPE html>
<html>
@include('users.includes.header')
<body>
<div class="container-fluid">
    @include('users.includes.navbar')
    @yield('content')
    @include('users.includes.footer')

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBGPZkNrsTRXA0Xn3oyRTg7M1SBvUJvd9E&libraries=places&callback=initAutocomplete" async defer></script>
<script type="text/javascript" src="{{url('users/assets/js/autoCompleteSearch.js')}}" >
</script>
</body>
</html>
