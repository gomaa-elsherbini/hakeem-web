@extends('layout')
@section('title', 'فيديوهات')


@section('content')
<section class="videos">
    <div class="main-container">
        <div class="title-start">
            <h2>الفيديوهات </h2>
            <span></span>
        </div>

        <div class="search-two">
            <div class="search-header">
{{--                <form action="">--}}
                    <input type="text" placeholder=" ابحث في الفيديوهات .." class="form-control" id="vSearch">
{{--                    <button><img src="images/search.png" alt=""></button>--}}
{{--                </form>--}}
            </div>
        </div>
        <div id="vSearch-result"></div>

        <div class="main-videos">
            <div class="main-container">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="{{url('video-details')}}">
                            <div class="sub-videos">
                                <div class="img-sub-videos">
                                    <img src="images/b10.png" alt="">
                                </div>
                                <div class="text-sub-videos">
                                    <h2>عنوان الفيديو</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('video-details')}}">
                            <div class="sub-videos">
                                <div class="img-sub-videos">
                                    <img src="images/b10.png" alt="">
                                </div>
                                <div class="text-sub-videos">
                                    <h2>عنوان الفيديو</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('video-details')}}">
                            <div class="sub-videos">
                                <div class="img-sub-videos">
                                    <img src="images/b10.png" alt="">
                                </div>
                                <div class="text-sub-videos">
                                    <h2>عنوان الفيديو</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('video-details')}}">
                            <div class="sub-videos">
                                <div class="img-sub-videos">
                                    <img src="images/b10.png" alt="">
                                </div>
                                <div class="text-sub-videos">
                                    <h2>عنوان الفيديو</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('video-details')}}">
                            <div class="sub-videos">
                                <div class="img-sub-videos">
                                    <img src="images/b10.png" alt="">
                                </div>
                                <div class="text-sub-videos">
                                    <h2>عنوان الفيديو</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('video-details')}}">
                            <div class="sub-videos">
                                <div class="img-sub-videos">
                                    <img src="images/b10.png" alt="">
                                </div>
                                <div class="text-sub-videos">
                                    <h2>عنوان الفيديو</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
