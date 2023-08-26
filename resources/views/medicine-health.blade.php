@extends('layout')
@section('title', 'الطب والصحة')


@section('content')
<section class="medicine-health">
    <div class="main-container">
        <div class="title-start">
            <h2>الطب والصحة</h2>
            <span></span>
        </div>
        <div class="main-medicine-health">
            <div class="row">
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('categories-medicine-health')}}">
                        <div class="sub-medicine-health">
                            <img src="images/c1.png" alt="">
                            <div class="text-medicine-health">
                                <h2> الطب البديل </h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('categories-medicine-health')}}">
                        <div class="sub-medicine-health">
                            <img src="images/c2.png" alt="">
                            <div class="text-medicine-health">
                                <h2>صحة الأسنان</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('categories-medicine-health')}}">
                        <div class="sub-medicine-health">
                            <img src="images/c3.png" alt="">
                            <div class="text-medicine-health">
                                <h2>الصحة النفسية</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('categories-medicine-health')}}">
                        <div class="sub-medicine-health">
                            <img src="images/c4.png" alt="">
                            <div class="text-medicine-health">
                                <h2>صحة المرأة</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">

                    <a href="{{url('categories-medicine-health')}}">
                        <div class="sub-medicine-health">
                            <img src="images/c5.png" alt="">
                            <div class="text-medicine-health">
                                <h2>السكري</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">

                    <a href="{{url('categories-medicine-health')}}">
                        <div class="sub-medicine-health">
                            <img src="images/c6.png" alt="">
                            <div class="text-medicine-health">
                                <h2>أنف أذن حنجرة</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">

                    <a href="{{url('categories-medicine-health')}}">
                        <div class="sub-medicine-health">
                            <img src="images/c7.png" alt="">
                            <div class="text-medicine-health">
                                <h2>الصحة العامة</h2>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">

                    <a href="{{url('categories-medicine-health')}}">
                        <div class="sub-medicine-health">
                            <img src="images/c8.png" alt="">
                            <div class="text-medicine-health">
                                <h2>الأمراض الجلدية</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">

                    <a href="{{url('categories-medicine-health')}}">
                        <div class="sub-medicine-health">
                            <img src="images/c9.png" alt="">
                            <div class="text-medicine-health">
                                <h2>صحة الرجل</h2>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <div class="human-body mr-section">
            <div class="title-start">
                <h2>أجهزة جسم الإنسان</h2>
                <span></span>
            </div>
            <div class="main-human-body">
                <div class="sub-human-body">
                    <ul>
                        <li>
                            <a href="{{url('human-organ-categories')}}">
                                <div class="img-sub-human-body">
                                    <img src="images/h1.png" alt="">
                                </div>
                                <h3> الجهاز العصبي </h3>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('human-organ-categories')}}">
                                <div class="img-sub-human-body">
                                    <img src="images/h2.png" alt="">
                                </div>
                                <h3>الجهاز المناعي</h3>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('human-organ-categories')}}">
                                <div class="img-sub-human-body">
                                    <img src="images/h3.png" alt="">
                                </div>
                                <h3>الجهاز الهضمي</h3>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('human-organ-categories')}}">
                                <div class="img-sub-human-body">
                                    <img src="images/h4.png" alt="">
                                </div>
                                <h3>الجهاز اللمفاوي</h3>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('human-organ-categories')}}">
                                <div class="img-sub-human-body">
                                    <img src="images/h5.png" alt="">
                                </div>
                                <h3>الغدد الصماء</h3>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('human-organ-categories')}}">
                                <div class="img-sub-human-body">
                                    <img src="images/h6.png" alt="">
                                </div>
                                <h3>الجهاز اللحافي</h3>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="img-humen-body">
                    <img src="images/body.png" alt="">
                </div>
                <div class="sub-human-body humun2">
                    <ul>
                        <li>
                            <a href="{{url('human-organ-categories')}}">
                                <div class="img-sub-human-body">
                                    <img src="images/h1.png" alt="">
                                </div>
                                <h3> الجهاز العصبي </h3>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('human-organ-categories')}}">
                                <div class="img-sub-human-body">
                                    <img src="images/h2.png" alt="">
                                </div>
                                <h3>الجهاز المناعي</h3>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('human-organ-categories')}}">
                                <div class="img-sub-human-body">
                                    <img src="images/h3.png" alt="">
                                </div>
                                <h3>الجهاز الهضمي</h3>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('human-organ-categories')}}">
                                <div class="img-sub-human-body">
                                    <img src="images/h4.png" alt="">
                                </div>
                                <h3>الجهاز اللمفاوي</h3>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('human-organ-categories')}}">
                                <div class="img-sub-human-body">
                                    <img src="images/h5.png" alt="">
                                </div>
                                <h3>الغدد الصماء</h3>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('human-organ-categories')}}">
                                <div class="img-sub-human-body">
                                    <img src="images/h6.png" alt="">
                                </div>
                                <h3>الجهاز اللحافي</h3>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>

    </div>
</section>
@endsection
