@extends('layout')
@section('title', 'حساب الاحتياج اليومي من السعرات الحرارية')


@section('content')
<section class="calorie-calculator">
    <div class="main-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main-pregnancy-calculator">
                    <div class="img-article-details">
                        <img src="images/a01.png" alt="">
                    </div>

                    <div class="title-pregnancy-calculator">
                        <h2>حاسبة السعرات الحرارية</h2>
                        <p>استخدم حاسبة السعرات الحرارية لتقدير عدد السعرات الحرارية اليومية التي يحتاجها
                            جسمك
                            للحفاظ على وزنك الحالي. ! </p>
                    </div>

                    <div class="sub-pregnancy-calculator">
                        <h2>حاسبة السعرات الحرارية :</h2>
                        <form action="{{url('calorie-calculator')}}" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-calculator">
                                        <input type="text" placeholder="العمر ( السنة )"
                                            class="form-control" name="age" value="{{old('age')}}">
                                        {{$errors->first('age')}}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-calculator">
                                        <input type="text" placeholder=" الطول (سم)" class="form-control" name="tall" value="{{old('tall')}}">
                                        {{$errors->first('tall')}}
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="input-calculator">
                                        <input type="text" placeholder="الوزن (كغم)" class="form-control" name="weight" value="{{old('weight')}}">
                                        {{$errors->first('weight')}}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-calculator">
                                        <select name="gender" id="gender" class="form-control">
                                            <option value=""> الجنس :</option>
                                            <option value="male" {{old('gender')=='male'?'selected':''}}>ذكر </option>
                                            <option value="female" {{old('gender')=='female'?'selected':''}}>انثي </option>
                                        </select>
                                        {{$errors->first('gender')}}
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="btn-pregnancy-calculator">
                                        <button type="submit" class="ctm-btn"> احسب </button>
                                    </div>
                                </div>

                            </div>
                            @csrf
                        </form>
                    </div>

                    <div class="text-details">
                        <h2> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة لقد تم
                            توليد هذا النص من مولد النص العربى</h2>

                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                            مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                            إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر
                            من الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو
                            مقسما ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه
                            الخصوص، حيث يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم
                            الموقع.</p>
                        <p> ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل
                            كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا
                            علاقة له بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.هذا النص يمكن أن
                            يتم تركيبه على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير
                            منسق، أو حتى غير مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                        <h2> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة :</h2>
                        <ul>
                            <li><a href=""> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة .</a>
                            </li>
                            <li><a href=""> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة .</a>
                            </li>
                            <li><a href=""> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة .</a>
                            </li>
                            <li><a href=""> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة .</a>
                            </li>
                            <li><a href=""> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة .</a>
                            </li>
                        </ul>
                    </div>


                    <div class="share-article"  id="social-links">
                        <h3><i class="bi bi-share"></i> مشاركة : </h3>
                        <ul>
                            <li><a  href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/calorie-calculator"><img src="{{asset('images/facebook-logo.png')}}" alt=""></a></li>
                            <li><a href="https://twitter.com/intent/tweet?text=Default+share+text&url=http://127.0.0.1:8000/calorie-calculator"><img src="{{asset('images/twitter.png')}}" alt=""></a></li>
                            <li><a href="https://www.instagram.com/postsrc"><img src="{{asset('images/instagram.png')}}" alt=""></a></li>
                            <li><a href="" class="snapchat-share-button" data-share-url="https://kit.snapchat.com/"><img src="{{asset('images/Snapchat.png')}}" alt=""></a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">
                <div class="more-article-details">
                    <div class="title-related-topics">
                        <h2>مواضيع ذات صلة</h2>
                    </div>

                    <a href="">
                        <div class="sub-read-article-index">
                            <div class="img-read-article-index">
                                <img src="images/a4.png" alt="">
                            </div>
                            <div class="text-read-article-index">
                                <h3 class="date-article"> الصحة والجمال , <span> مارس 14 , 2023 </span></h3>
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                    نفس المساحة </p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="sub-read-article-index">
                            <div class="img-read-article-index">
                                <img src="images/a4.png" alt="">
                            </div>
                            <div class="text-read-article-index">
                                <h3 class="date-article"> الصحة والجمال , <span> مارس 14 , 2023 </span></h3>
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                    نفس المساحة </p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="sub-read-article-index">
                            <div class="img-read-article-index">
                                <img src="images/a4.png" alt="">
                            </div>
                            <div class="text-read-article-index">
                                <h3 class="date-article"> الصحة والجمال , <span> مارس 14 , 2023 </span></h3>
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                    نفس المساحة </p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="sub-read-article-index">
                            <div class="img-read-article-index">
                                <img src="images/a4.png" alt="">
                            </div>
                            <div class="text-read-article-index">
                                <h3 class="date-article"> الصحة والجمال , <span> مارس 14 , 2023 </span></h3>
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                    نفس المساحة </p>
                            </div>
                        </div>
                    </a>
                    <a href="">
                        <div class="sub-read-article-index">
                            <div class="img-read-article-index">
                                <img src="images/a4.png" alt="">
                            </div>
                            <div class="text-read-article-index">
                                <h3 class="date-article"> الصحة والجمال , <span> مارس 14 , 2023 </span></h3>
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في
                                    نفس المساحة </p>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

        </div>
    </div>
</section>
@endsection
