@extends('layout')
@section('title', 'تفاصيل المقال')


@section('content')
<section class="article-details">
    <div class="main-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="sub-article-details">
                    <div class="img-article-details">
                        <img src="images/a01.png" alt="">
                    </div>


                    <div class="sections-human-organ-categories">
                        <h2> محتويات الصفحة :</h2>
                        <ul>
                            <li><a href="">هذا النص هو </a></li>
                            <li><a href="">هذا النص هو </a></li>
                            <li><a href="">هذا النص هو </a></li>
                            <li><a href="">هذا النص هو </a></li>

                        </ul>
                    </div>

                    <div class="text-article-details">
                        <h3 class="date-article"> الطب والصحة <span> مارس 14 , 2023 </span></h3>
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
                    </div>

                    <div class="share-article">
                        <h3><i class="bi bi-share"></i> مشاركة : </h3>
                        <ul>
                            <li><a href="https://www.facebook.com/sharer/sharer.php?u=http://127.0.0.1:8000/calorie-calculator"><img src="{{asset('images/facebook-logo.png')}}" alt=""></a></li>
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

                    <a href="{{url('article-details')}}">
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
                    <a href="{{url('article-details')}}">
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
                    <a href="{{url('article-details')}}">
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
                    <a href="{{url('article-details')}}">
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
                    <a href="{{url('article-details')}}">
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

                <div class="more-q-A-datails">
                    <div class="title-related-topics">
                        <h2>أسئلة وأجوبة</h2>
                    </div>
                    <ul>
                        <li><a href="{{url('q&a-details')}}"> <img src="images/arrow.png" alt=""> هذا النص هو مثال
                                لنص يمكن أن
                                يستبدل في نفس المساحة ؟</a></li>
                        <li><a href="{{url('q&a-details')}}"> <img src="images/arrow.png" alt=""> هذا النص هو مثال
                                لنص يمكن أن
                                يستبدل في نفس المساحة ؟</a></li>
                        <li><a href="{{url('q&a-details')}}"> <img src="images/arrow.png" alt=""> هذا النص هو مثال
                                لنص يمكن أن
                                يستبدل في نفس المساحة ؟</a></li>
                        <li><a href="{{url('q&a-details')}}"> <img src="images/arrow.png" alt=""> هذا النص هو مثال
                                لنص يمكن أن
                                يستبدل في نفس المساحة ؟</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
