<div class="container-fluid">
    <div class="row">
        <div class="btn-color-toggle">
            <!-- <a href="{{route('home')}}"><img src="{{ asset('backend') }}/assets/img/flexflix.jpeg" width="100px" alt=""></a> -->
            
        </div>
        <div class="navbar-container">
            <div class="container">
                <div class="row">
                    <div class="col-xs-3 visible-xs">
                        <a href="{{route('home')}}" class="btn-menu-toggle"><i class="cv cvicon-cv-menu">Nowhow</i></a>
                    </div>
                    <div class="col-lg-1 col-md-12">
                        <a class="navbar-brand" href="{{route('home')}}">
                            <img src="{{ asset('backend') }}/assets/img/flexflix.jpeg" alt="Project name" class="logo">
                            <span>Nowhow</span>
                        </a>
                    </div>
                    <div class="col-lg-5 col-md-12 hidden-xs">
                        <ul class="list-inline menu">
                            <li class="@yield('active-channel')">
                                <a href="{{route('home.channels.details')}}">Channel</a>
                            </li>
                            <li class="@yield('active-library')"><a href="{{route('home.libraries.details')}}">Library</a></li>
                            <li class="@yield('active-podcast')"><a href="{{route('home.podcasts.details')}}">Podcast</a></li>
                            <li class="@yield('active-digital')"><a href="{{route('home.digitalstores.details')}}">Digitalstore</a></li>
                            <li><a href="">News</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4
                     col-sm-8 col-xs-3">
                        <form action="search.html" method="post">
                            <div class="topsearch">
                                <i class="cv cvicon-cv-cancel topsearch-close"></i>
                                <div class="input-group">
                                    <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon2">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="cv cvicon-cv-video-file"></i>&nbsp;&nbsp;&nbsp;<span class="caret"></span></button>/
                                        <ul class="dropdown-menu">
                                            <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-2 col-sm-4 hidden-xs">
                        <div class="d-flex">
                            @if( Route::has('login'))
                                @auth
                            <div class="avatar pull-left">
                                <img src="{{asset(Auth::user()->profile_photo_path)}}" style="border-radius: 50%; width: 50px; height: 44px;"   alt="{{Auth::user()->name}}" />
                                <!-- <span class="status"></span> -->
                            </div>
                            
                            @else
                            <!-- <div class="avatar pull-left">
                                <img src="" style="border-radius: 50%; width: 50px; height: 44px;"   alt="" />
                                <span class="status"></span>
                            </div> -->
                            <div class="selectuser pull-left">
                                <div class="btn-group pull-right dropdown">
                                    <a class="btn btn-default " href="{{route('user.login')}}">
                                        Login
                                        <span class="caret"></span>
                                    </a>
                                    <a class="btn btn-default " href="{{route('user.register')}}">
                                        Register
                                        <span class="caret"></span>
                                    </a>
                                    
                                </div>
                            </div>
                            @endif
                            @endif
                            @if( Route::has('login'))
                                @auth

                            <div class="selectuser pull-left">
                                <div class="btn-group pull-right dropdown">
                                    @if(Auth::user()->user_role_id === 2)
                                    <a class="btn btn-default " href="{{route('user.dashboard')}}">
                                        {{Auth::user()->name}}
                                        <span class="caret"></span>
                                    </a>
                                    
                                    @else
                                    <a class="btn btn-default " href="{{route('admin.dashboard')}}">
                                        {{Auth::user()->name}}
                                        <span class="caret"></span>
                                    </a>
                                    
                                    @endif
                                   
                                </div>
                            </div>
                                @endif
                            @endif
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
    </div>
</div>
<!-- /logo -->

<div class="mobile-menu">
    <div class="mobile-menu-head">
        <a href="#" class="mobile-menu-close"></a>
        <a class="navbar-brand" href="index.html">
            <img src="images/logo.svg" alt="Project name" class="logo" />
            <span>Circle</span>
        </a>
        <div class="mobile-menu-btn-color">
            <img src="images/icon_bulb_light.png" alt="">
        </div>
    </div>
    <div class="mobile-menu-content">
        <div class="mobile-menu-user">
            <div class="mobile-menu-user-img">
                <img src="images/ava11.png" alt="">
            </div>
            <p>Bailey Fry </p>
            <span class="caret"></span>
        </div>
        <a href="#" class="btn mobile-menu-upload">
            <i class="cv cvicon-cv-upload-video"></i>
            <span>Upload Video</span>
        </a>
        <div class="mobile-menu-list">
            <ul>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-play-circle"></i>
                        <p>Popular Videos</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-playlist"></i>
                        <p>Browse Categories</p>
                        <span class="caret"></span>
                    </a>
                    <ul class="mobile-menu-categories">
                        <li class="color-active">
                            <a href="#">Pages <span class="caret"></span></a>
                            <ul>
                                <li><a href="index.html">Home Page</a></li>
                                <li><a href="single-video.html">Single Video Page</a></li>
                                <li><a href="single-video-youtube.html">Single Video Youtube Embedded Page</a></li>
                                <li><a href="single-video-vimeo.html">Single Video Vimeo Embedded Page</a></li>
                                <li><a href="upload.html">Upload Video Page</a></li>
                                <li><a href="upload-edit.html">Upload Video Edit Page</a></li>
                                <li><a href="search.html">Searched Videos Page</a></li>
                                <li><a href="channel.html">Single Channel Page</a></li>
                                <li><a href="channels.html">Channels Page</a></li>
                                <li><a href="single-video-tabs.html">Single Videos Page With Tabs</a></li>
                                <li><a href="single-video-playlist.html">Single Videos Page With Playlist</a></li>
                                <li><a href="history.html">History Page</a></li>
                                <li><a href="categories.html">Browse Categories Page</a></li>
                                <li><a href="categories_side_menu.html">Browse Categories Side Menu Page</a></li>
                                <li><a href="subscription.html">Subscription Page</a></li>
                                <li><a href="login.html">Login Page</a></li>
                                <li><a href="signup.html">Signup Page</a></li>
                            </ul>
                        </li>
                        <li><a href="categories.html">Categories</a></li>
                        <li><a href="channel.html">Channels</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-liked"></i>
                        <p>Liked Videos</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-history"></i>
                        <p>History</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="cv cvicon-cv-purchased"></i>
                        <p>Purchased Videos</p>
                    </a>
                </li>
            </ul>
        </div>
        <a href="#" class="btn mobile-menu-logout">Log out</a>
    </div>
</div>