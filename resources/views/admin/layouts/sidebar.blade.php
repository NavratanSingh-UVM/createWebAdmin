<!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                        </a>
                    </li>
                     <li @if(in_array(request()->route()->getName(),['admin.about_us.create'])) class="mega-menu mega-menu-sm active" @endif>
                        <a href="{{ route('admin.about_us.create') }}" aria-expanded="false" @if(in_array(request()->route()->getName(),['admin.about_us.create'])) class="active" @endif>
                            <i class="icon-grid menu-icon"></i><span class="nav-text">About Us</span>
                        </a>
                    </li>
                    <li @if(in_array(request()->route()->getName(),['admin.property.list'])) class="mega-menu mega-menu-sm active" @endif>
                        <a href="{{ route('admin.property.list') }}" aria-expanded="false" @if(in_array(request()->route()->getName(),['admin.property.list'])) class="active" @endif>
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Properties Listing</span>
                        </a>
                    </li>
                    <li @if(in_array(request()->route()->getName(),['admin.attraction.list'])) class="mega-menu mega-menu-sm active" @endif>
                        <a href="{{ route('admin.attraction.list') }}" aria-expanded="false" @if(in_array(request()->route()->getName(),['admin.attraction.list'])) class="active" @endif>
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Area Attractions</span>
                        </a>
                    </li>
                    <li @if(in_array(request()->route()->getName(),['admin.review.list'])) class="mega-menu mega-menu-sm active" @endif>
                        <a href="{{ route('admin.review.list') }}" aria-expanded="false" @if(in_array(request()->route()->getName(),['admin.review.list'])) class="active" @endif>
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Reviews</span>
                        </a>
                    </li>
                    <li @if(in_array(request()->route()->getName(),['admin.contact_us.list'])) class="mega-menu mega-menu-sm active" @endif>
                        <a href="{{ route('admin.contact_us.list') }}" aria-expanded="false" @if(in_array(request()->route()->getName(),['admin.contact_us.list'])) class="active" @endif>
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Contact Us</span>
                        </a>
                    </li>
                    <li @if(in_array(request()->route()->getName(),['admin.social_link.list'])) class="mega-menu mega-menu-sm active" @endif>
                        <a href="{{ route('admin.social_link.list') }}" aria-expanded="false" @if(in_array(request()->route()->getName(),['admin.social_link.list'])) class="active" @endif>
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Social links</span>
                        </a>
                    </li>
                     <li @if(in_array(request()->route()->getName(),['admin.additional_features.list'])) class="mega-menu mega-menu-sm active" @endif>
                        <a href="{{ route('admin.additional_features.list') }}" aria-expanded="false" @if(in_array(request()->route()->getName(),['admin.additional_features.list'])) class="active" @endif>
                            <i class="icon-grid menu-icon"></i><span class="nav-text">Additional Features</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->