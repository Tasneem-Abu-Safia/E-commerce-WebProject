
<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)">
                <i class="ti-menu ti-close"></i>
            </a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="{{url('home')}}">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="dark-logo"/>
                    <!-- Light Logo icon -->
                    <img src="{{asset('assets/images/logo-icon.png')}}" alt="homepage" class="light-logo"/>
                </b>
                <!--End Logo icon -->
                <!-- Logo text -->
                <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{asset('assets/images/logo-text.png')}}" alt="homepage" class="dark-logo"/>
                    <!-- Light Logo text -->
                            <img src="{{asset('assets/images/logo-light-text.png')}}" class="light-logo"
                                 alt="homepage"/>
                        </span>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)"
               data-toggle="collapse" data-target="#navbarSupportedContent"
               aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="ti-more"></i>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto">
                <li class="nav-item d-none d-md-block">
                    <a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                       data-sidebartype="mini-sidebar">
                        <i class="sl-icon-menu font-20"></i>
                    </a>
                </li>

            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->

                @if(count(config('app.languages')) > 1)
                    <li class="nav-item dropdown d-md-down-none">
                        <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                           aria-expanded="false">
                            {{ strtoupper(app()->getLocale()) }}
                        </a>
                        <div class="dropdown-menu dropdown-menu-right  animated bounceInDown"
                             aria-labelledby="navbarDropdown2">
                            <form action="{{URL('lang')}}" method="post">
                                @csrf
                                @foreach(config('app.languages') as $langLocale => $langName)
                                    <button class="dropdown-item new-button" type="submit" value="{{$langLocale}}"
                                            name="lang">{{ strtoupper($langLocale) }} ({{ $langName }})
                                    </button>
                                @endforeach
                            </form>
                        </div>
                    </li>
            @endif

            <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href=""
                       data-toggle="dropdown" aria-haspopup="true"
                       aria-expanded="false">
                        <img src="{{asset('assets/images/1.jpg')}}" alt="user" class="rounded-circle" width="31">
                    </a>
                    <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow">
                                    <span class="bg-primary"></span>
                                </span>
                        <div class="d-flex no-block align-items-center p-15 bg-primary text-white m-b-10">
                            <div class="">
                                <img src="{{asset('assets/images/1.jpg')}}" alt="user" class="img-circle"
                                     width="60">
                            </div>
                            <div class="m-l-10">
                                <h4 class="m-b-0">{{Auth::user()->name}}</h4>
                                <p class=" m-b-0">{{Auth::user()->email}}</p>
                            </div>
                        </div>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="ti-user m-r-5 m-l-5"></i> {{__('dashboard.myProfile')}}</a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="ti-wallet m-r-5 m-l-5"></i> {{__('dashboard.myBalance')}}</a>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="ti-email m-r-5 m-l-5"></i> {{__('dashboard.inbox')}}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">
                            <i class="ti-settings m-r-5 m-l-5"></i>{{__('dashboard.accountSetting')}}</a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off m-r-5 m-l-5"></i>
                            {{__('dashboard.logout')}}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>


                        <div class="dropdown-divider"></div>
                        <div class="p-l-30 p-10">
                            <a href="javascript:void(0)"
                               class="btn btn-sm btn-success btn-rounded">{{__('dashboard.viewProfile')}}</a>
                        </div>
                    </div>
                </li>
                <!-- ============================================================== -->
                <!-- User profile and search -->
                <!-- ============================================================== -->
            </ul>
        </div>
    </nav>
</header>
