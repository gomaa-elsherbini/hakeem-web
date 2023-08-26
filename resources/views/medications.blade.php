@extends('layout')
@section('title', 'أدوية')



@section('content')
<section class="medications">
    <div class="main-container">
        <div class="title-start">
            <h2>الأدوية</h2>
            <span></span>
        </div>

        </div>
        <div class="search-two">
            <div class="search-header">
                {{--                    <form action="">--}}
                <input type="text" placeholder="ابحث عن مرض .. " class="form-control" id="dSearch">
                {{--                        <button><img src="images/search.png" alt=""></button>--}}
                {{--                    </form>--}}
            </div>
            <div id="dSearch-result"></div>
            <p>دليل الأدوية يحتوي على معلومات مفصلة وواسعة عن الأدوية المتوفرة في المجال الطبي
                المعلومات الواردة عن الدواء مبنية على النشرات الطبية للدواء، مع هذا فإنها لا تشكل بديلا عن استشارة الطبيب</p>
        </div>

        <div class="main-medications">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('article-details')}}">
                        <div class="sub-health-beaut">
                            <div class="img-health-beaut">
                                <img src="images/c8.png" alt="">
                            </div>
                            <div class="text-health-beaut">
                                <h2>هذا النص هو مثال لنص</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('article-details')}}">
                        <div class="sub-health-beaut">
                            <div class="img-health-beaut">
                                <img src="images/c8.png" alt="">
                            </div>
                            <div class="text-health-beaut">
                                <h2>هذا النص هو مثال لنص</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('article-details')}}">
                        <div class="sub-health-beaut">
                            <div class="img-health-beaut">
                                <img src="images/c8.png" alt="">
                            </div>
                            <div class="text-health-beaut">
                                <h2>هذا النص هو مثال لنص</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('article-details')}}">
                        <div class="sub-health-beaut">
                            <div class="img-health-beaut">
                                <img src="images/c8.png" alt="">
                            </div>
                            <div class="text-health-beaut">
                                <h2>هذا النص هو مثال لنص</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('article-details')}}">
                        <div class="sub-health-beaut">
                            <div class="img-health-beaut">
                                <img src="images/c8.png" alt="">
                            </div>
                            <div class="text-health-beaut">
                                <h2>هذا النص هو مثال لنص</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('article-details')}}">
                        <div class="sub-health-beaut">
                            <div class="img-health-beaut">
                                <img src="images/c8.png" alt="">
                            </div>
                            <div class="text-health-beaut">
                                <h2>هذا النص هو مثال لنص</h2>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-12">
                    <div class="btn-health-beauty">
                        <a href="" class="ctm-link">  المزيد  <i class="bi-arrow-left"></i></a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
