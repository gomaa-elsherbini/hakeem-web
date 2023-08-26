@extends('layout')
@section('title', 'الحمل و الولادة')

@section('content')
<section class="pregnancy-childbirth">
    <div class="main-container">
        <div class="title-start">
            <h2> الحمل والولادة </h2>
            <span></span>
        </div>

        <div class="main-medicine-health" >
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('categories-pregnancy-childbirth')}}">
                        <div class="sub-medicine-health">
                            <img src="images/pc1.png" alt="">
                            <div class="text-medicine-health">
                                <h2>تخطيط الحمل</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('categories-pregnancy-childbirth')}}">
                        <div class="sub-medicine-health">
                            <img src="images/pc2.png" alt="">
                            <div class="text-medicine-health">
                                <h2>الحمل</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('categories-pregnancy-childbirth')}}">
                        <div class="sub-medicine-health">
                            <img src="images/pc3.png" alt="">
                            <div class="text-medicine-health">
                                <h2>الولادة</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('categories-pregnancy-childbirth')}}">
                        <div class="sub-medicine-health">
                            <img src="images/pc4.png" alt="">
                            <div class="text-medicine-health">
                                <h2>الأطفال الرضع</h2>
                            </div>
                        </div>
                    </a>
                </div>




            </div>
        </div>


        <div class="stages-pregnancy mr-section">
            <div class="title-start">
                <h2>مراحل الحمل </h2>
                <span></span>
            </div>

            <div class="main-stages-pregnancy">
                <div class="row">
                    <div class="col-lg-4">
                        <a href="{{url('article-details')}}">
                            <div class="sub-stages-pregnancy">
                                <img src="images/st1.png" alt="">
                                <h2>الحمل في الثلث <br>
                                    الأول </h2>
                            </div>
                        </a>

                        <div class="month-stages-pregnancy">
                            <ul>
                                <li> <a href="{{url('article-details')}}"> الشهر الأول </a> </li>
                                <li> <a href="{{url('article-details')}}"> الشهر الثاني</a> </li>
                                <li> <a href="{{url('article-details')}}"> الشهر الثالث</a> </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('article-details')}}">
                            <div class="sub-stages-pregnancy">
                                <img src="images/st2.png" alt="">
                                <h2>الحمل في الثلث <br>
                                    الثاني </h2>
                            </div>
                        </a>
                        <div class="month-stages-pregnancy">
                            <ul>
                                <li><a href="{{url('article-details')}}"> الشهر الرابع </a> </li>
                                <li><a href="{{url('article-details')}}"> الشهر الخامس</a> </li>
                                <li><a href="{{url('article-details')}}"> الشهر السادس</a> </li>
                            </ul>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <a href="{{url('article-details')}}">
                            <div class="sub-stages-pregnancy">
                                <img src="images/st3.png" alt="">
                                <h2>الحمل في الثلث <br>
                                    الثالث </h2>
                            </div>
                        </a>

                        <div class="month-stages-pregnancy">
                            <ul>
                                <li><a href="{{url('article-details')}}"> الشهر السابع </a></li>
                                <li><a href="{{url('article-details')}}"> الشهر الثامن</a></li>
                                <li><a href="{{url('article-details')}}"> الشهر التاسع</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{url('pregnancy-calculator')}}">تحديد الموعد المتوقع للولادة</a>

        </div>
    </div>
</section>
@endsection
