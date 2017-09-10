<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse slimscrollsidebar">
        <ul class="nav" id="side-menu">
            <li>
                <a href="{{url('home/dashboard')}}" class="waves-effect" style="font-size: 20px;">
                    <i class="fa fa-dashboard zmdi zmdi-apps zmdi-hc-fw fa-fw" style=""></i>
                    <span class="hide-menu">Dashboard</span>
                </a>
            </li>

            <!-----------------------Package----------------->
            <li>
                <a href="{{url('package/show')}}" class="waves-effect">
                    <i class="fa-fw fa fa-shopping-bag" ></i>
                    <span class="hide-menu">Package
                        <span class="fa arrow"></span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ url('service/show') }}" class="waves-effect">
                    <i class="fa-fw fa fa-list" style=""></i>
                    <span class="hide-menu">Service
                        <span class="fa arrow"></span>
                    </span>
                </a>
            </li>
            <li>
                <a href="{{ url('treatment/show') }}" class="waves-effect">
                    <i class="fa-fw fa fa-fire" style=""></i>
                    <span class="hide-menu">Treatment
                    <span class="fa arrow"></span>
                    </span>
                </a>
            </li>
            <li>
                <a href="#" class="waves-effect">
                    <i class="fa-fw glyphicon glyphicon-fire"></i>
                    <span class="hide-menu">Resorts<span class="fa arrow"></span></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="{{ url('resort/resort_category') }}" class="waves-effect">
                            <i class="fa-fw fa fa-building" style=""></i>
                            <span class="hide-menu">Resort Category</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('resort/show') }}" class="waves-effect">
                            <i class="fa-fw fa fa-building" style=""></i>
                            <span class="hide-menu">Resort</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('vip_resort/show') }}" class="waves-effect">
                            <i class="fa-fw fa fa-building" style=""></i>
                            <span class="hide-menu">Vip Resort</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('other/show') }}" class="waves-effect">
                            <i class="fa-fw fa fa-building" style=""></i>
                            <span class="hide-menu">Other</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="{{ url('gallery/show') }}" class="waves-effect">
                    <i class="fa-fw fa fa-cart-plus" style=""></i>
                    <span class="hide-menu">Gallary</span>
                </a>
            </li>
            <li>
                <a href="{{ url('company/edit') }}" class="waves-effect">
                    <i class="fa-fw fa fa-anchor" style=""></i>
                    <span class="hide-menu">Company</span>
                </a>
            </li>
			 <li>
                <a href="{{ url('about_us/edit') }}" class="waves-effect">
                    <i class="fa-fw fa fa-adjust" style=""></i>
                    <span class="hide-menu">About Us</span>
                </a>
            </li>
            <li>
                <a href="{{ url('doctor/show') }}" class="waves-effect">
                    <i class="fa-fw fa fa-user" style=""></i>
                    <span class="hide-menu">Doctor</span>
                </a>
            </li>
			<li>
                <a href="{{ url('client/show') }}" class="waves-effect">
                    <i class="fa-fw fa fa-user" style=""></i>
                    <span class="hide-menu">Client</span>
                </a>
            </li>
			 <li>
                <a href="{{ url('message/list') }}" class="waves-effect">
                    <i class="fa-fw fa fa-envelope" style=""></i>
                    <span class="hide-menu">Message</span>
                </a>
            </li>
            <li>
                <a href="{{ url('team/show') }}" class="waves-effect">
                    <i class="fa-fw fa fa-users" style=""></i>
                    <span class="hide-menu">Team</span>
                </a>
            </li>
            <li>
                <a href="{{ url('testimonial/show') }}" class="waves-effect">
                    <i class="fa-fw fa fa-comment-o" style=""></i>
                    <span class="hide-menu">Testimonial</span>
                </a>
            </li>
            <li>
                <a href="{{ url('support/show') }}" class="waves-effect">
                    <i class="fa-fw fa fa-subway" style=""></i>
                    <span class="hide-menu">Support</span>
                </a>
            </li>
        </ul>
    </div>
</div>

