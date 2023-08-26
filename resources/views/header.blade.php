<header class="header active">
    <div class="sub-header" style="background-image: {{asset('images/bg1.png')}}">
        <div class="main-container">
            <div class="top-par">
                <div class="logo">
                    <a href="{{url('index')}}">
                        <img src="{{asset('images/logo.png')}}" alt="">
                    </a>
                </div>

                <div class="sub-top-par">
                    <a href="{{route('user.login')}}" class="login"> {{__('translate.login')}} </a>
                    <a href="{{route('user.register')}}" class="signin">  {{__('translate.register')}} </a>
                    <a href="{{route('lang','ar')}}"><i class="bi bi-globe"></i> عربي </a>
                    <a href="{{route('lang','en')}}"><i class="bi bi-globe"></i> English </a>

                    <div class="menu-div">
                        <div class="content" id="times-ican">
                            <a href="#" title="Navigation menu" class="navicon" aria-label="Navigation">
                                <span class="navicon__item"></span>
                                <span class="navicon__item"></span>
                                <span class="navicon__item"></span>
                                <span class="navicon__item"></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="title-page">
                @if(Session::get('success'))
                    <div class="alert alert-success">
                        {{Session::get('success')}}
                    </div>
                @endif
                @if(Session::get('info'))
                    <div class="alert alert-info">
                        {{Session::get('info')}}
                    </div>
                @endif
                @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{Session::get('fail')}}
                    </div>
                @endif
                <h2> {{__('translate.welcome')}} <br>
                    {{__('translate.information')}}</h2>
            </div>
            <div class="search-header">
                <div >
                    <input type="text" placeholder="  {{__('translate.search')}} .." class="form-control" id="search">
{{--                    <button type="submit"><img src="images/search.png" alt=""></button>--}}
                </div>
            </div>
            <div id="search-result"></div>
        </div>
        <div class="container py-5">

            @if(session()->has('message'))
                <div class="alert-success p-4">
                   <h4 style="text-align: center"> {{session()->get('message')}}</h4>
                </div>
            @endif
        </div>
    </div>

    <div class="element mr-section">
        <div class="main-container">
            <div class="row">
                <div class="col-lg-2" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('medicine-health')}}">
                        <div class="sub-element">
                            <div class="img-element">
                                <img src="{{asset('images/e1.png')}}" alt="">
                            </div>
                            <h2> {{__('translate.medicineAndHealth')}} </h2>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('health-beauty')}}">
                        <div class="sub-element">
                            <div class="img-element">
                                <img src="{{asset('images/e2.png')}}" alt="">
                            </div>
                            <h2>{{__('translate.healthAndBeauty')}}</h2>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('pregnancy-childbirth')}}">
                        <div class="sub-element">
                            <div class="img-element">
                                <img src="{{asset('images/e3.png')}}" alt="">
                            </div>
                            <h2> {{__('translate.pregnancyAndChildbirth')}} </h2>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('diseases')}}">
                        <div class="sub-element">
                            <div class="img-element">
                                <img src="{{asset('images/e4.png')}}" alt="">
                            </div>
                            <h2>{{__('translate.diseases')}}</h2>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="{{url('calories')}}">
                        <div class="sub-element">
                            <div class="img-element">
                                <img src="{{asset('images/e5.png')}}" alt="">
                            </div>
                            <h2> {{__('translate.calories')}}</h2>
                        </div>
                    </a>
                </div>
                <div class="col-lg-2" data-aos="fade-up"  data-aos-easing="linear"
                     data-aos-duration="700">
                    <a href="" id="menu-e">
                        <div class="sub-element">
                            <div class="img-element">
                                <img src="{{asset('images/e6.png')}}" alt="">
                            </div>
                            <h2> {{__('translate.allCategories')}}</h2>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
