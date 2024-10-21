<body>
    <div class="loader1 d-none" id="loader">
        <img src="{{ asset('assets/images/loader/200w.gif') }}" alt="" srcset="">
        <span>Please Wait .....</span>
     </div>
    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
     <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="{{ route('admin.dashboard') }}">
                    <b class="logo-abbr"><img src="{{ asset('frontend-assets/img/logo.png') }}" alt=""> </b>
                    <span class="logo-compact"><img src="{{ asset('frontend-assets/img/logo.png') }}" alt=""></span>
                    <span class="brand-title">
                        <img src="{{ asset('frontend-assets/img/logo.png') }}" alt="" style="width:100%">
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
               
                <div class="header-right">
                    <ul class="clearfix">
                       
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative"   data-toggle="dropdown">
                                <span class="activity active"></span>
                                 @if(auth()->user()->image !=null)
                                  <img src="{{ url('storage\uploads\profile_image/' .auth()->user()->image) }}" alt="" srcset="" height="40" width="40">
                                    <input type="hidden" name="old_image" value="{{auth()->user()->image ?? ''}}">
                                    @else
                                    <img src="{{ asset('owner-assets/img/profile.png') }}" alt="My Profile" class="w-25">
                                @endif
                            </div>
                             
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        {{-- <li>
                                            <a href="{{route('admin.edit.profile')}}"><i class="icon-user"></i> <span>Profile</span></a>
                                        </li> --}}
                                        <hr class="my-2">
                                       
                                        <li><a href="{{ route('admin.logout') }}"><i class="icon-key"></i> <span>Logout</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->