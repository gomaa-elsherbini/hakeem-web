<div class="bg_menu">
</div>
<div class="menu_responsive" id="menu-div">

    <div class="element_menu_responsive">
        <ul>
            <li><a href="{{url('medicine-health')}}"> <img src="{{asset('images/e1.png')}}" alt=""> الطب والصحة  </a></li>
            <li><a href="{{url('health-beauty')}}"><img src="{{asset('images/e2.png')}}" alt=""> الصحة والجمال</a></li>
            <li><a href="{{url('pregnancy-childbirth')}}"> <img src="{{asset('images/e3.png')}}" alt="">الحمل والولادة</a></li>
            <li><a href="{{url('diseases')}}"><img src="{{asset('images/e4.png')}}" alt=""> الأمراض </a></li>
            <li><a href="{{url('calories')}}"><img src="{{asset('images/e5.png')}}" alt=""> السعرات الحرارية </a></li>
            <li><a href="{{url('medications')}}"><img src="{{asset('images/e5.png')}}" alt=""> الأدوية </a></li>
            <li><a href="{{url('user/register')}}"><img src="{{asset('images/e6.png')}}" alt=""> تسجيل </a></li>
            <li><a href="{{url('user/login')}}"><img src="{{asset('images/e6.png')}}" alt=""> دخول  </a></li>
            <li>
                <a class="click-element-mune" href=""> <img src="{{asset('images/e6.png')}}" alt=""> جميع الأقسام </a>
                <div class="dropdowm-element-mune">
                    <ul>
                        <li>
                            <a href="{{url('index')}}">الرئيسية</a>
                        </li>
                        <li>
                            <a href="{{url('diseases')}}">الأمراض</a>
                        </li>
                        <li>
                            <a href="{{url('medications')}}">الأدوية</a>
                        </li>
                        <li>
                            <a href="{{url('index')}}">تطعيمات</a>
                        </li>

                        <li>
                            <a href="{{url('q&a')}}">أسئلة وأجوبة</a>
                        </li>
                        <li>
                            <a href="{{url('index')}}">فحوصات</a>
                        </li>
                    </ul>
                </div>

            </li>


            <li>
                <a class="click-dropdown-mune" href=""><img src="{{asset('images/e7.png')}}" alt=""> اللغة</a>
                <div class="dropdowm-language-mune">
                    <ul>
                        <li><a href="{{route('lang','ar')}}">عربي</a> </li>
                        <li><a href="{{route('lang','en')}}"> English</a> </li>
                    </ul>
                </div>

            </li>
        </ul>
    </div>


    <div class="remove-mune">
        <span></span>
    </div>

</div>
