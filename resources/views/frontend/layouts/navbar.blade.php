    <!--====== HEADER START ======-->
    <header class="header-absolute header-two sticky-header">
        <div class="container container-custom-one">
            <div class="nav-container d-flex align-items-center justify-content-between">
                <!-- Main Menu -->
                <div class="nav-menu d-lg-flex align-items-center">
                    <!-- Mneu Items -->
                    <div class="menu-items">
                        <ul>
                            <li><a href="{{route('frontend.index')}}">Home</a></li>
                            <li><a href="{{route('frontend.property.listing')}}">Our Properties</a></li>
                            </li>
                            <li><a href="{{route('frontend.activities.attractions')}}">Activities & Attractions</a></li>
                            <li><a href="{{route('frontend.contact.us')}}">Contact</a></li>
                        </ul>
                    </div>

                    <!-- from pushed-item -->
                    <div class="nav-pushed-item"></div>
                </div>

                <!-- Site Logo -->
                <div class="site-logo">

                    <a  class="main-logo"><img src="{{asset('frontend-assets/img/logo-white.png')}}" alt="Logo"></a>
                    <a href="#" class="sticky-logo"><img src="{{asset('frontend-assets/img/logo.png')}}" alt="Logo"></a>
                </div>

                <!-- Header Info Pussed To Menu Wrap -->
                <div class="nav-push-item">
                    <!-- Header Info -->
                    <div class="header-info d-lg-flex align-items-center">
                        <div class="item">
                            <i class="fal fa-phone"></i>
                            <span>Phone Number</span>
                            <a href="tel:+6477783383">
                                <h5 class="title">{{$ContactUs->contact_phone}}</h5>
                            </a>
                        </div>
                        <div class="item">
                            <i class="fal fa-envelope"></i>
                            <span>Email Address</span>
                            <a href="mailto:alokpaliwal@yahoo.com">
                                <h5 class="title">{{$ContactUs->contact_email}}</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Navbar Toggler -->
                <div class="navbar-toggler">
                    <span></span><span></span><span></span>
                </div>
            </div>
        </div>
    </header>
    <!--====== HEADER END ======-->
