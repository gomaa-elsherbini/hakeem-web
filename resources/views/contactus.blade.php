@extends('layout')
@section('title', 'اتصل بنا')


@section('content')
<section class="contactus">
    <div class="main-container">
        <div class="title-start">
            <h2>تواصل معنا</h2>
            <span></span>
        </div>

        <p>هذه الاستمارة معدة فقط للتوجه والاتصال بادارة موقع وشركة حكيم ويب في مواضيع ادارية وتجارية فقط.
            رجاءا عدم طرح اسئلة أو استشارات طبية هنا</p>


        <div class="main-contactus">
            <h2> أرسل لنا جميع استفساراتك ومقترحاتك : </h2>

            <div class="row">
                <div class="col-lg-8">
                    <form action="{{url('contactus')}}" method="post">
                        <div class="input-form">
                            <input type="text" placeholder="الاسم بالكامل" class="form-control" name="name" value="{{old('name')}}">
                            {{$errors->first('name')}}
                        </div>
                        <div class="input-form">
                            <input type="text" placeholder="المدينة" class="form-control" name="city" value="{{old('city')}}">
                            {{$errors->first('city')}}

                        </div>
                        <div class="input-form">
                            <input type="email" placeholder="البريد الإلكتروني" class="form-control"
                                name="email" value="{{old('email')}}">
                            {{$errors->first('email')}}

                        </div>
                        <div class="input-form">
                            <input type="tel" placeholder="رقم الجوال" class="form-control" name="phone" value="{{old('phone')}}">
                            {{$errors->first('phone')}}

                        </div>
                        <div class="input-form">
                            <input type="text" placeholder="الموضوع" class="form-control" name="topic" value="{{old('topic')}}">
                            {{$errors->first('topic')}}

                        </div>
                        <div class="input-form">
                            <textarea name="message" id="" cols="" rows="" placeholder="الرسالة"
                                class="form-control" value="{{old('message')}}"></textarea>
                            {{$errors->first('message')}}

                        </div>
                        <div class="btn-main-contactus">
                             <button type="submit" class="ctm-btn"> إرسال</button>
                        </div>
                        @csrf
                    </form>
                </div>

                <div class="col-lg-4">
                    <div class="info-contactus">
                        <div class="sub-info-contactus">
                            <a href="tel::096234467899">
                                <div class="img-info-contactus">
                                    <i class="bi bi-phone"></i>
                                </div>
                                <div class="text-info-contactus">
                                    <h2> الجوال :</h2>
                                    <p> +096234467899 </p>
                                </div>
                            </a>
                        </div>
                        <div class="sub-info-contactus">
                            <a href="mailto::hakemweb@gmail.com">
                                <div class="img-info-contactus">
                                    <i class="bi bi-phone"></i>
                                </div>
                                <div class="text-info-contactus">
                                    <h2> البريد الإلكتروني :</h2>
                                    <p> hakemweb@gmail.com </p>
                                </div>
                            </a>
                        </div>
                        <div class="sub-info-contactus" >
                            <a href="" >
                                <div class="img-info-contactus" id="map">
                                    <i class="bi bi-phone"></i>
                                </div>
                                <div class="text-info-contactus" >
                                    <h2> الموقع الحالي :</h2>
                                    <p>الرياض , المملكة العربية السعودية </p>
                                    <div ></div>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
