@extends('layout')
@section('title', 'الطب البديل')

@section('content')
<section class="categories-medicine-health">
    <div class="main-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="text-categories-medicine-health">
                    <div class="title-categories-medicine">
                        <h2> الطب البديل </h2>
                        <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من
                            مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من النصوص الأخرى
                            إضافة إلى زيادة عدد الحروف التى يولدها التطبيق. إذا كنت تحتاج إلى عدد أكبر من
                            الفقرات يتيح لك مولد النص العربى زيادة عدد الفقرات كما تريد، النص لن يبدو مقسما
                            ولا يحوي أخطاء لغوية، مولد النص العربى مفيد لمصممي المواقع على وجه الخصوص، حيث
                            يحتاج العميل فى كثير من الأحيان أن يطلع على صورة حقيقية لتصميم الموقع.
                            ومن هنا وجب على المصمم أن يضع نصوصا مؤقتة على التصميم ليظهر للعميل الشكل
                            كاملاً،دور مولد النص العربى أن يوفر على المصمم عناء البحث عن نص بديل لا علاقة له
                            بالموضوع الذى يتحدث عنه التصميم فيظهر بشكل لا يليق.هذا النص يمكن أن يتم تركيبه
                            على أي تصميم دون مشكلة فلن يبدو وكأنه نص منسوخ، غير منظم، غير منسق، أو حتى غير
                            مفهوم. لأنه مازال نصاً بديلاً ومؤقتاً.</p>
                    </div>

                    <div class="silder-categories-medicine">
                        <div class="owl-carousel owl-theme maincarousel" id="slider-categories">
                            <div class="item">
                                <a href="{{url('article-details')}}">
                                    <div class="sub-silder-categories">
                                        <div class="img-silder-categories">
                                            <img src="images/m1.png" alt="">
                                        </div>
                                        <div class="text-silder-categories">
                                            <h2>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                نفس المساحة </h2>
                                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                                توليد
                                                هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص
                                                أو
                                                العديد من
                                                النصوص الأخرى .. </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{url('article-details')}}">
                                    <div class="sub-silder-categories">
                                        <div class="img-silder-categories">
                                            <img src="images/m2.png" alt="">
                                        </div>
                                        <div class="text-silder-categories">
                                            <h2>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                نفس المساحة </h2>
                                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                                توليد
                                                هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص
                                                أو
                                                العديد من
                                                النصوص الأخرى .. </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="item">
                                <a href="{{url('article-details')}}">
                                    <div class="sub-silder-categories">
                                        <div class="img-silder-categories">
                                            <img src="images/m1.png" alt="">
                                        </div>
                                        <div class="text-silder-categories">
                                            <h2>هذا النص هو مثال لنص يمكن أن يستبدل في
                                                نفس المساحة </h2>
                                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم
                                                توليد
                                                هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص
                                                أو
                                                العديد من
                                                النصوص الأخرى .. </p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>



                    <div class="silder-advice">
                        <div class="title-silder-advice">
                            <h2> نصيحة حكيم ويب :</h2>
                        </div>
                        <div class="owl-carousel owl-theme maincarousel" id="slider-advice">
                            <div class="item">
                                <div class="sub-silder-advice">
                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                                        النص
                                        من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من
                                        النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق . </p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="sub-silder-advice">
                                    <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا
                                        النص
                                        من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص أو العديد من
                                        النصوص الأخرى إضافة إلى زيادة عدد الحروف التى يولدها التطبيق . </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-lg-4">

                <div class="more-questions">
                    <div class="title-related-topics">
                        <h2>أسئلة وأجوبة</h2>
                    </div>

                    <a href="{{url('q&a')}}">
                        <div class="sub-more-questions">
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة ؟ </p>
                        </div>
                        <div class="sub-more-questions">
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة ؟ </p>
                        </div>
                        <div class="sub-more-questions">
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة ؟ </p>
                        </div>
                    </a>
                </div>


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
