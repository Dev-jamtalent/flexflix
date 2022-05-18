@extends("fontend.layouts.fontend")
@section('single-video')
    channel
@endsection
@section("wrapper")
<!-- channel -->
<div class="container-fluid">
    <div class="row">
        <div class="img">
            <div class="img-image">
                <img src="{{ asset('fontend') }}/assets/images/channel-banner.png" alt="" class="c-banner">
            </div>
            <div class="c-avatar">
                <a href="#"><img src="{{ asset($user->profile_photo_path) }}" alt=""></a>
            </div>
            <a href="#" class="add"><i class="cv cvicon-cv-plus"></i></a>
            <div class="c-social hidden-xs">
                Social
                <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
                <a href="#" class="tw"><i class="fa fa-twitter"></i></a>
                <a href="#" class="gp"><i class="fa fa-google-plus"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- ///channel -->
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="channel-details">
                    <div class="row">
                        <div class="col-lg-12 col-lg-offset-2 col-xs-12">
                            <div class="c-details">
                                <div class="c-name">
                                    {{$user->name}}
                                    <div class="c-checkbox">
                                        <img src="{{ asset('fontend') }}/assets/images/verified-profile-icon.png" alt="">
                                    </div>
                                </div>
                                <div class="c-nav">
                                    <ul class="list-inline">
                                        <li><a href="#">Digitalstore</a></li>
                                        <li><a href="#">Library</a></li>
                                        <li class="hidden-xs"><a href="#">Channels</a></li>
                                        <li class="hidden-xs"><a href="#">Podcast</a></li>
                                        <li class="hidden-xs"><a href="#">Newsletter</a></li>
                                        <li class="hidden-xs"><a href="#">About</a></li>
                                        
                                    </ul>
                                    <div class="btn-group dropup pull-right">
                                        <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Discussion <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                            <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="c-sub pull-right hidden-xs">
                                    <div class="c-sub-wrap">
                                        <div class="c-f">
                                            Subscribe
                                        </div>
                                        
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Featured Videos -->
                <div class="content-block">
                    <div class="cb-header">
                        <div class="row">
                            <div class="col-lg-8 col-xs-6">
                                <div class="btn-group bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Uploads <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-lg-4 col-xs-6">
                                <div class="h-grid pull-right hidden-xs">
                                    <a href="#"><i class="cv cvicon-cv-grid-view"></i></a>
                                    <a href="#"><i class="cv cvicon-cv-list-view"></i></a>
                                </div>
                                <div class="btn-group pull-right bg-clean">
                                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Date Added ( Newest ) <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="#"><i class="cv cvicon-cv-relevant"></i> Relevant</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-calender"></i> Recent</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-view-stats"></i> Viewed</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-star"></i> Top Rated</a></li>
                                        <li><a href="#"><i class="cv cvicon-cv-watch-later"></i> Longest</a></li>
                                    </ul>
                                </div>

                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div class="cb-content videolist">
                        <div class="row">
                            @foreach($user->channels as $channel)
                            <div class=" col-lg-3 col-sm-6 videoitem">
                                <div class="b-video">
                                    <div class="v-img">
                                        <a href="{{route('home.channel.details',[$channel->id,$channel->slug])}}"><img src="{{ asset($channel->image) }}" alt=""></a>
                                        
                                    </div>
                                    <div class="v-desc">
                                        <a href="{{route('home.channel.details',[$channel->id,$channel->slug])}}">{{$channel->name}}</a>
                                    </div>
                                    <div class="v-views">
                                        27,548 views. <span class="v-percent"><span class="v-circle"></span> 78%</span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- /Featured Videos -->


            </div>
        </div>
    </div>
</div>
@endsection