<header>
    <div class="breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 hidden-xs">
                    <ol class="breadcrumb ">
                        <li></li>
                    </ol>
                </div>
                <div style="float:right;">

                    <button class="btn btn-success " style="border-radius:3px;margin-top: 2px; margin-right: 10px; margin-bottom: 2px;">
                        <a style="color: white;text-decoration: none" href="{{route('rate-property')}}">+ Add Property</a>
                    </button>
                    @if(\Illuminate\Support\Facades\Auth::id())
                    <a href="{{route('user-logout')}}"  id="login-register">

                        <i class="fa fa-sign-out">&nbsp;&nbsp;</i>Logout
                    </a>
                    @else
                    <a href="{{route('rate-property')}}" id="login-register">
                        <i class="fa fa-user">&nbsp;&nbsp;</i>Login&nbsp;/&nbsp;Register
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-custom" id="menu-secondary-wrap">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" style="margin-top:  20px;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{url('/')}}">
                    <img src="{{url('users/assets/images/logo.png')}}" class="navbar-brand-logo hvr-bounce-out"/></a>
                <a class="navbar-brand nav-brand hidden-xs hidden-sm" href="{{url('/')}}">PROPERTY DIRECT</a>
                <a class="navbar-brand nav-brand hidden-lg hidden-md" href="" style="font-size: 1.2em"></a>
            </div>
            <div class="collapse navbar-collapse bs-navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav" id="nav-menu">
                    <div class="dropdown">
                        <button class="dropbtn">Property Direct</button>
                        <div class="dropdown-content">
                            <a href="{{route('user-home')}}">Homes</a>
                            <a href="{{route('user-plot')}}">Plots</a>
                        </div>
                    </div>
                    <li class="active"><a href="{{url('/')}}">Home</a></li>
                    <li><a href="{{route('rate-property')}}">Rate Property</a></li>
                    <li><a href="{{route('search-property')}}">Nearby Search</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
