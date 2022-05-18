@extends("fontend.layouts.fontend")
@section('single-video')
@endsection
@section('active-channel')
color-active
@endsection
@section("wrapper")
<!-- goto -->
<div class="container-fluid">
    <div class="row">
        <div class="navbar-container2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-sm-2 hidden-xs">
                        <div class="goto">
                            Go to:
                        </div>
                    </div>
                    <div class="col-lg-3  col-sm-10 col-xs-12">
                        <div class="h-icons">
                            <a href="#"><i class="cv cvicon-cv-liked" data-toggle="tooltip" data-placement="top" title="Liked Videos"></i></a>
                            <a href="#"><i class="cv cvicon-cv-watch-later" data-toggle="tooltip" data-placement="top" title="Watch Later"></i></a>
                            <a href="#"><i class="cv cvicon-cv-play-circle" data-toggle="tooltip" data-placement="top" title="Saved Playlist"></i></a>
                            <a href="#"><i class="cv cvicon-cv-purchased" data-toggle="tooltip" data-placement="top" title="Purchased Videos"></i></a>
                            <a href="#"><i class="cv cvicon-cv-history" data-toggle="tooltip" data-placement="top" title="History"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-7 col-sm-10 hidden-xs">
                        <div class="h-resume">
                            <div class="play-icon">
                                <a href="#"><i class="cv cvicon-cv-play"></i></a>
                            </div>
                            Resume:  <span class="color-default">Daredevil Season 2 : Episode 6 </span>
                        </div>
                    </div>
                    <div class="col-lg-1 col-sm-2 hidden-xs">
                        <div class="h-grid">
                            <a href="#"><i class="cv cvicon-cv-grid-view"></i></a>
                            <a href="#"><i class="cv cvicon-cv-list-view"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /goto -->

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 channels">

                <!-- Popular Channels -->
                <div class="content-block">
                    <div class="cb-header mb-0">
                        <div class="row">
                            <div class="col-lg-8 col-sm-8 col-xs-10">
                                <ul class="list-inline">
                                    <li><a href="#" class="color-active">Browse All Channels</a></li>
                                    <li class="hidden-xs"><a href="#">Most Popular</a></li>
                                    <li><a href="#">Trending</a></li>
                                    <li class="hidden-xs"><a href="#">Most Recent</a></li>
                                    <li class="hidden-xs"><a href="#">A - Z</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-4 col-sm-4 col-xs-2">
                                <div class="cb-search channels-search">
                                    <form action="#">
                                        <label>
                                            <input type="search" placeholder="Search Channels ..." />
                                            <i class="fa fa-search"></i>
                                        </label>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="channels-content">
                        <div class="hidden-xs">
                            <h4>Most Popular</h4>
                            <a href="#" class="btn-view-more">View more</a>
                        </div>
                        <div class="clearfix"></div>
                        <div class="theme-section">
                            <div class="row">
                                @foreach($channels as $channel)
                                @php
                                $videoCount = App\Models\ChannelVideo::where('channel_id',$channel->id)->count();
                                @endphp
                                <div class="col-md-3 col-sm-4">
                                    <div class="cns-block">
                                        <a href="{{route('home.channel.details',[$channel->id,$channel->slug])}}" class="cns-image">
                                            <img src="{{asset($channel->image)}}" alt="image">
                                        </a>
                                        <div class="cns-img-small">
                                            <div class="cns-small-wrapp">
                                                <img src="{{asset($channel->user->profile_photo_path)}}" alt="small">
                                            </div>
                                        </div>
                                        <div class="cns-info">
                                            <h5>{{$channel->name}}<I class="arrow"></I></h5>
                                            <span>27,548 Subscribers</span>
                                            <span>{{$videoCount}} Videos</span>
                                            <span>10 Million Views</span>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                
                            </div>
                        </div>
                        <h4>Trending</h4>
                        <a href="#" class="btn-view-more">View more</a>
                        <div class="clearfix"></div>
                        <div class="theme-section">
                            <div class="row">
                                @foreach($channels as $channel)
                                @php
                                $videoCount = App\Models\ChannelVideo::where('channel_id',$channel->id)->count();
                                @endphp
                                <div class="col-md-3 col-sm-4">
                                    <div class="cns-block">
                                        <a href="{{route('home.channel.details',[$channel->id,$channel->slug])}}" class="cns-image">
                                            <img src="{{asset($channel->image)}}" alt="image">
                                            
                                        </a>
                                        <div class="cns-img-small">
                                            <div class="cns-small-wrapp">
                                                <img src="{{asset($channel->user->profile_photo_path)}}" alt="small">
                                            </div>
                                        </div>
                                        <div class="cns-info">
                                            <h5>{{$channel->name}}</h5>
                                            <span>109,127 Subscribers</span>
                                            <span>{{$videoCount}} Videos</span>
                                            <span>43 Million Views</span>
                                            
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <h4>New Channels</h4>
                        <a href="#" class="btn-view-more">View more</a>
                        <div class="clearfix"></div>
                        <div class="theme-section">
                            <div class="row">
                                @foreach($channels as $channel)
                                @php
                                $videoCount = App\Models\ChannelVideo::where('channel_id',$channel->id)->count();
                                @endphp
                                <div class="col-md-3 col-sm-4">
                                    <div class="cns-block">
                                        <a href="{{route('home.channel.details',[$channel->id,$channel->slug])}}" class="cns-image">
                                            <img src="{{asset($channel->image)}}" alt="image">
                                        </a>
                                        <div class="cns-img-small">
                                            <div class="cns-small-wrapp">
                                                <img src="{{asset($channel->user->profile_photo_path)}}" alt="small">
                                            </div>
                                        </div>
                                        <div class="cns-info">
                                            <h5>Woozy</h5>
                                            <span>109,127 Subscribers</span>
                                            <span>117 Videos</span>
                                            <span>43 Million Views</span>
                                            <span class="cv-percent">
                                                <span class="cv-circle"></span> 
                                            86%</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="content-block head-div head-arrow">
                        <div class="head-arrow-icon">
                            <i class="cv cvicon-cv-next"></i>
                        </div>
                    </div>
                </div>
                <!-- /Popular Channels -->

            </div>
        </div>
    </div>
</div>

@endsection