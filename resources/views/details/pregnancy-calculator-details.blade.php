@extends('layout')
@section('title')


    @section('content')
<section class="pregnancy-calculator-details">
    <div class="main-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main-pregnancy-calculator-details">

                    <div class="sub-pregnancy-calculator-details">
                        <div class="img-calculator-details">
                            <h2>
                                موعد الولادة <br>
                                المتوقع
                                <span>{{$birth_day_in_arabic}}</span>
                                <p>{{$birth_date}}</p>
                            </h2>

                        </div>

                        <div class="text-calculator-details">
                            <div class="sub-text-calculator-details">
                                <h2>الثلث الأول من
                                    الحمل</h2>
                                <div class="date-pregnancy">
                                    <p>من {{$start_pregnancy_date}} <br>
                                        إلى {{$pregnancy_intervals[0]}}
                                    </p>
                                </div>
                            </div>
                            <div class="sub-text-calculator-details">
                                <h2>الثلث الثاني من
                                    الحمل</h2>
                                <div class="date-pregnancy">
                                    <p>من {{$pregnancy_intervals[0]}}  <br>
                                        إلى {{$pregnancy_intervals[1]}}
                                    </p>
                                </div>
                            </div>
                            <div class="sub-text-calculator-details">
                                <h2>الثلث الثالث من
                                    الحمل</h2>
                                <div class="date-pregnancy">
                                    <p>من {{$pregnancy_intervals[1]}}  <br>
                                        إلى {{$pregnancy_intervals[2]}}
                                    </p>
                                </div>
                            </div>
                        </div>
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
