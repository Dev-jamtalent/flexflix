
@extends("fontend.layouts.fontend")
@section('single-video')
    single-video
@endsection
@section("wrapper")
<div class="container-fluid hidden-xs">
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
        <div class="row p-3">
            <div class="col-8">
                <h4 class="mb-4">Description</h2>        
                <p>A leading Television Channel in Bengal. We are the change catalyst. Inspiring millions in Bengal by telling progressive stories and creating iconic characters.</p>
                <hr class="my-5">
                <h4 class="mb-4">Details</h2>
                <p class="text-muted">Location:<span class="mx-5">India</span></p>
                <hr class="my-5">
                <h4 class="mb-4">Links</h2>
                <div class="row">
                    <div class="col-6 mb-4">
                        <a href="#">Hotstar</a>
                    </div>
                    <div class="col-6 mb-4">
                        <a href="#">Facebook</a>
                    </div>
                    <div class="col-6 mb-4">
                        <a href="#">Twitter</a>
                    </div>
                    <div class="col-6 mb-4">
                        <a href="#">Instagram</a>
                    </div>
                </div>
                <hr class="my-5">
            </div>
            <div class="col-4">
                <h4>Stats</h2>
                <hr>
                <p>Joined Sep 9, 2011</p>
                <hr>
                <p>4,277,626,,818 views</p>
                <hr>
                <i></i>
            </div>
        </div>
    </div>
</div>

@endsection





