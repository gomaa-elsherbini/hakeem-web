@extends('layout')
@section('title', 'أسئلة و أجوبة')


@section('content')
<section class="q-A-datails">
    <div class="main-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="sub-q-A-datails">
                    <div class="question">
                        <h2> السؤال : </h2>
                        <h3>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة ؟</h3>
                    </div>
                    <div class="answer">
                        <h2> الجواب : </h2>
                        <h3>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                            مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                            إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من
                            الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما
                            ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                            يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.</h3>
                    </div>
                </div>


                <div class="share-article">
                    <h3><i class="bi bi-share"></i> مشاركة : </h3>
                    <ul>
                        <li><a href=""><img src="images/facebook-logo.png" alt=""></a></li>
                        <li><a href=""><img src="images/twitter.png" alt=""></a></li>
                        <li><a href=""><img src="images/instagram.png" alt=""></a></li>
                        <li><a href=""><img src="images/Snapchat.png" alt=""></a></li>
                    </ul>
                </div>



                <div class="more-q-A-datails">
                    <div class="title-start">
                        <h2>أسئلة وأجوبة</h2>
                        <span></span>
                    </div>
                    <ul>
                        <li><a href="{{url('q&a-details')}}"> <img src="images/arrow.png" alt=""> هذا النص هو مثال لنص يمكن أن
                                يستبدل في نفس المساحة ؟</a></li>
                        <li><a href="{{url('q&a-details')}}"> <img src="images/arrow.png" alt=""> هذا النص هو مثال لنص يمكن أن
                                يستبدل في نفس المساحة ؟</a></li>
                        <li><a href="{{url('q&a-details')}}"> <img src="images/arrow.png" alt=""> هذا النص هو مثال لنص يمكن أن
                                يستبدل في نفس المساحة ؟</a></li>
                        <li><a href="{{url('q&a-details')}}"> <img src="images/arrow.png" alt=""> هذا النص هو مثال لنص يمكن أن
                                يستبدل في نفس المساحة ؟</a></li>
                    </ul>
                    <div class="btn-more-q-A-datails">
                        <a href="" class="ctm-link"> قراءة المزيد <i class="bi bi-arrow-left"></i></a>
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

                <div class="img-ads">
                    <a href="">
                        <img src="images/Ads.png" alt="">
                    </a>
                </div>

                <div class="more-article-details">
                    <div class="title-related-topics">
                        <h2>آخر الأخبار المتعلقة</h2>
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
