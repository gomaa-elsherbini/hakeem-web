@extends('layout')
@section('title', 'دخول')


@section('content')
    <section class="login-page">
        <div class="main-container">
            <div class="logo-login">
                <a href="{{url('home')}}">
                    <img src="{{asset('images/logo.png')}}" alt="">
                </a>
            </div>
            <h2> {{__('translate.login')}} </h2>

            <div class="form-login-page">

                <form action="{{route('user.check')}}" method="post" autocomplete="off">
                    <div class="form-input">
                        <input type="text" placeholder="البريد الإلكتروني" class="form-control" name="email" value="{{old('email')}}">
                        <i class="bi bi-envelope"></i>
                        {{$errors->first('email')}}
                    </div>
                    <div class="form-input">
                        <input type="password" placeholder="كلمة المرور" class="form-control" name="password" autocomplete="current-password">
                        <i class="bi bi-lock"></i>
                        {{$errors->first('password')}}
                    </div>

                    <div class="forget-password">
                        <a href="{{route('user.forgot.password.form')}}"> نسيت كلمة المرور ؟ </a>
                    </div>

                    <div class="btn-login">
                        <button type="submit">دخول</button>
                    </div>

                    <div class="or-se">
                        <hr> <span>او </span> <hr>
                    </div>
                    <div class="sinin-media">
                        <h3>الدخول عن طريق شبكات التواصل الاجتماعي</h3>
                        <ul>
                            <li><a href="{{url('/facebook/auth/redirect')}}"><img src="{{asset('images/1200px-Facebook_circle_pictogram.svg.png')}}" alt=""></a></li>
                            <li><a href="{{url('twitter/auth/redirect')}}"><img src="{{asset('images/twitter.png')}}" alt=""></a></li>
                            <li><a href="{{url('/google/auth/redirect')}}"><img src="{{asset('images/google.png')}}" alt=""></a></li>
                        </ul>
                    </div>

                    <div class="regiester-now">
                        <p>ليس لدي حساب  <a href="{{route('user.register')}}">إنشاء حساب جديد</a></p>
                    </div>
                    @csrf
                </form>
            </div>

        </div>
    </section>
@endsection
