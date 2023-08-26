@extends('layout')
@section('title', 'التسجيل')


@section('content')
    <section class="login-page">
        <div class="main-container">
            <div class="logo-login">
                <a href="index.html">
                    <img src="images/logo.png" alt="">
                </a>
            </div>
            <h2>تسجيل مستخدم جديد</h2>

            <div class="form-login-page  form-register-page">
                <form action="{{route('user.create')}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6">
                                <div class="form-input">
                                    <input type="text" placeholder="الاسم الأول" class="form-control" name="first_name" value="{{old('first_name')}}">
                                    <i class="bi bi-envelope"></i>
                                </div>
                            <span class="text-danger">@error('first_name'){{$message}}@enderror</span>
                            </div>
                            <div class="col-lg-6">

                                <div class="form-input">
                                    <input type="text" placeholder="اسم العائلة" class="form-control" name="last_name" value="{{old('first_name')}}">
                                    <i class="bi bi-envelope"></i>
                                </div>
                            <span class="text-danger">@error('last_name'){{$message}}@enderror</span>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input arrow-form">
                                    <select class="form-select form-control " name="country">
                                        <option value=""  >اختر الدولة </option>
                                        <option value="Egypt" {{old('country')=='Egypt'?'selected':''}} >مصر </option>
                                        <option value="Syria" {{old('country')=='Syria'?'selected':''}}> سوريا </option>
                                        <option value="KSA" {{old('country')=='KSA'?'selected':''}}> السعودية </option>
                                    </select>
                                    <i class="bi bi-envelope"></i>
                                </div>
                            <span class="text-danger">@error('country'){{$message}}@enderror</span>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input">
                                    <input type="text" placeholder="البريد الإلكتروني" class="form-control"
                                            name="email" value="{{old('email')}}" autocomplete="email" >
                                    <i class="bi bi-envelope"></i>
                                </div>
                            <span class="text-danger">@error('email'){{$message}}@enderror</span>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input">
                                    <input type="password" placeholder="كلمة المرور" class="form-control"
                                            name="password" autocomplete="new-password">
                                    <i class="bi bi-lock"></i>
                                </div>
                            <span class="text-danger">@error('password'){{$message}}@enderror</span>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input">
                                    <input type="password" placeholder="تأكيد كلمة المرور" class="form-control"
                                            name="password_confirmation" autocomplete="new-password">
                                    <i class="bi bi-lock"></i>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input">
                                    <input type="text"  placeholder="تاريخ الميلاد (  اختياري* ) yy-mm-dd" class="form-control"
                                            name="date_of_birth" value="{{old('date_of_birth')}}">
                                    <i class="bi bi-lock"></i>
                                </div>
                            <span class="text-danger">@error('date_of_birth'){{$message}}@enderror</span>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-input">
                                    <div class="form-input arrow-form">
                                        <select class="form-select form-control " name="gender">
                                            <option value="" > اختر الجنس ( اختياري* )</option>
                                            <option value="male"{{old('gender')=='male'?'selected':''}}>ذكر </option>
                                            <option value="female"{{old('gender')=='female'?'selected':''}}> انثي </option>
                                            <option value=333 {{old('gender')=='333'?'selected':''}}> 333 </option>
                                        </select>
                                        <i class="bi bi-envelope"></i>
                                    </div>
                                </div>
                            <span class="text-danger">@error('gender'){{$message}}@enderror</span>
                            </div>

                            <div class="col-lg-12">
                                <div class="cleck-terms">
                                    <input type="checkbox" id="accept-1" name="accept">
                                    <label for="accept-1">  أوافق على شروط الاستخدام .</label>
                                </div>
                            <span class="text-danger">@error('accept'){{$message}}@enderror</span>
                            </div>
                        </div>


                        <div class="btn-login">
                            <button type="submit">تسجيــــــــــــــــــــــل</button>
                        </div>
            </form>
        </div>

                    <a href="{{route('user.login')}}" class="reg-account">لدي حساب مسجل بالفعل</a>
    </div>
    </section>
@endsection
