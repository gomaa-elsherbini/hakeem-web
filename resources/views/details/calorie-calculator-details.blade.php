@extends('layout')
@section('title')


@section('content')
<section class="calorie-calculator-details">
    <div class="main-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main-calorie-calculator-details">

                <div class="sub-calorie-calculator-details">
                    <div class="title-calorie-calculator-details">
                        <h2>حاسبة السعرات الحرارية</h2>
                    </div>

                    <div class="need-calorie">
                        <h3> احتياجاتك اليومية من السعرات الحرارية (تم تقريب النتائج لأقرب 50 سعرة) هي :</h3>
                        <span>{{$daily_calorie}}  سعر حراري </span>
                    </div>

                    <div class="number-calorie">
                        <h2> تتغير احتياجاتك من السعرات الحرارية اليومية مع تغيّر مستوى نشاطك البدني : </h2>
                        <ul>
                           <li > {{$daily_calorie_for_inactive_person}} خامل</li>
                           <li> {{$daily_calorie_for_low_active_person}} نشيط من حين لآخر</li>
                           <li class="active"> {{$daily_calorie_for_active_person}}  نشط</li>
                           <li>{{$daily_calorie_for_very_active_person}} نشط للغاية </li>
                        </ul>
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
