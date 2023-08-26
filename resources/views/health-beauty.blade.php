@extends('layout')
@section('title', 'الصحة والجمال')

@section('content')
<section class="health-beauty">
    <div class="main-container">
        <div class="title-start">
            <h2>الصحة والجمال</h2>
            <span></span>
        </div>
        <div class="main-medicine-health">
            <div class="row">
                <div class="col-lg-4">
                    <a href="{{url('categories-health-beauty')}}">
                        <div class="sub-medicine-health">
                            <img src="images/b1.png" alt="">
                            <div class="text-medicine-health">
                                <h2>جودة الحياة </h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="{{url('categories-health-beauty')}}">
                        <div class="sub-medicine-health">
                            <img src="images/b2.png" alt="">
                            <div class="text-medicine-health">
                                <h2>الحياة الزوجية</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="{{url('categories-health-beauty')}}">
                        <div class="sub-medicine-health">
                            <img src="images/b3.png" alt="">
                            <div class="text-medicine-health">
                                <h2>التغذية السليمة</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">
                    <a href="{{url('categories-health-beauty')}}">
                        <div class="sub-medicine-health">
                            <img src="images/b4.png" alt="">
                            <div class="text-medicine-health">
                                <h2>تخفيف الوزن</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">

                    <a href="{{url('categories-health-beauty')}}">
                        <div class="sub-medicine-health">
                            <img src="images/b5.png" alt="">
                            <div class="text-medicine-health">
                                <h2>الإقلاع عن التدخين</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">

                    <a href="{{url('categories-health-beauty')}}">
                        <div class="sub-medicine-health">
                            <img src="images/b6.png" alt="">
                            <div class="text-medicine-health">
                                <h2>البشرة والجمال</h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4">

                    <a href="{{url('categories-health-beauty')}}">
                        <div class="sub-medicine-health">
                            <img src="images/b7.png" alt="">
                            <div class="text-medicine-health">
                                <h2>العناية بالشعر</h2>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4">

                    <a href="{{url('categories-health-beauty')}}">
                        <div class="sub-medicine-health">
                            <img src="images/b8.png" alt="">
                            <div class="text-medicine-health">
                                <h2>الرياضة والرشاقة</h2>
                            </div>
                        </div>
                    </a>
                </div>

            </div>
        </div>

    </div>
</section>
@endsection
