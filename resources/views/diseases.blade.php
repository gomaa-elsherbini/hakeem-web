@extends('layout')
@section('title', 'الأمراض')

@section('content')
    <section class="diseases">
        <div class="main-container">
            <div class="title-start">
                <h2>الأمراض</h2>
                <span></span>
            </div>

            <div class="search-two">
                <div class="search-header">
{{--                    <form action="">--}}
                        <input type="text" placeholder="ابحث عن مرض .. " class="form-control" id="dSearch">
{{--                        <button><img src="images/search.png" alt=""></button>--}}
{{--                    </form>--}}
                </div>
                <div id="dSearch-result"></div>

                <p>اكبر موسوعة للامراض في اللغة العربية ! اكتشفوا الموسوعة الشاملة للامراض من الالف الى الياء.
                    تعريف الامراض, اعراضها, تشخيصها وطرق علاجها, في ويب طب. مرشد الامراض الوحيد للمعلومات الطبية
                    الموثوق منها. هنا يمكنكم البحث عن المرض باللغتين العربية والانجليزية, أو البحث حسب الامراض
                    الشائعة, أو حسب الفئة.
                    ادخلوا اسم المرض في حقل التفتيش.</p>
            </div>



            <div class="main-diseases">
                <div class="row">
                    @foreach($diseases as $disease)
                    <div class="col-lg-4"  data-aos="fade-up"  data-aos-easing="linear"
                         data-aos-duration="700">
                        <a href="{{url('article-details')}}">
                            <div class="sub-health-beaut">
                                <div class="img-health-beaut">
                                    <img src="{{asset('images/c8.png')}}" alt="">
                                </div>
                                <div class="text-health-beaut">
                                    <h2>{{$disease->name}}</h2>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

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
