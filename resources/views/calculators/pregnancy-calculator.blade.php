@extends('layout')
@section('title')


@section('content')
<section class="pregnancy-calculator">
    <div class="main-container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main-pregnancy-calculator">
                    <div class="img-article-details">
                        <img src="images/a01.png" alt="">
                    </div>

                    <div class="title-pregnancy-calculator">
                        <h2>متى سوف تلدين؟</h2>
                        <p> احسبي موعد الولادة المرتقب لحملك وشاهدي كيف يتطور جنينك الان !</p>
                    </div>


                    <div class="sub-pregnancy-calculator">
                        <h2> اليوم الأول من موعد الحيض الأخير :</h2>
                        <form action="{{url('pregnancy-calculator')}}" method="post">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-calculator">
                                        <select name="day" id="day" class="form-control">
                                            <option value=""> اليوم :</option>
                                            <option value="1"{{old('day')=='1<'?'selested':''}}>1</option>
                                            <option value="2"{{old('day')=='2<'?'selested':''}}>2</option>
                                            <option value="3"{{old('day')=='3<'?'selested':''}}>3</option>
                                            <option value="4"{{old('day')=='4<'?'selested':''}}>4</option>
                                            <option value="5"{{old('day')=='5<'?'selested':''}}>5</option>
                                            <option value="6"{{old('day')=='6<'?'selested':''}}>6</option>
                                            <option value="7"{{old('day')=='7<'?'selested':''}}>7</option>
                                            <option value="8"{{old('day')=='8<'?'selested':''}}>8</option>
                                            <option value="9"{{old('day')=='9<'?'selested':''}}>9</option>
                                            <option value="10"{{old('day')=='10'?'selested':''}}>10</option>
                                            <option value="11"{{old('day')=='11'?'selested':''}}>11</option>
                                            <option value="12"{{old('day')=='12'?'selested':''}}>12</option>
                                            <option value="13"{{old('day')=='13'?'selested':''}}>13</option>
                                            <option value="14"{{old('day')=='14'?'selested':''}}>14</option>
                                            <option value="15"{{old('day')=='15'?'selested':''}}>15</option>
                                            <option value="16"{{old('day')=='16'?'selested':''}}>16</option>
                                            <option value="17"{{old('day')=='17'?'selested':''}}>17</option>
                                            <option value="18"{{old('day')=='18'?'selested':''}}>18</option>
                                            <option value="19"{{old('day')=='19'?'selested':''}}>19</option>
                                            <option value="20"{{old('day')=='20'?'selested':''}}>20</option>
                                            <option value="21"{{old('day')=='21'?'selested':''}}>21</option>
                                            <option value="22"{{old('day')=='22'?'selested':''}}>22</option>
                                            <option value="23"{{old('day')=='23'?'selested':''}}>23</option>
                                            <option value="24"{{old('day')=='24'?'selested':''}}>24</option>
                                            <option value="25"{{old('day')=='25'?'selested':''}}>25</option>
                                            <option value="26"{{old('day')=='26'?'selested':''}}>26</option>
                                            <option value="27"{{old('day')=='27'?'selested':''}}>27</option>
                                            <option value="28"{{old('day')=='28'?'selested':''}}>28</option>
                                            <option value="29"{{old('day')=='29'?'selested':''}}>29</option>
                                            <option value="30"{{old('day')=='30'?'selested':''}}>30</option>
                                            <option value="31"{{old('day')=='31'?'selested':''}}>31</option>
                                        </select>
                                        {{$errors->first('day')}}
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="input-calculator">
                                        <select name="month" id="" class="form-control">
                                            <option value=""> الشهر :</option>
                                            <option value="1" {{old('month'=='1'?'selected':'')}}>1</option>
                                            <option value="2" {{old('month'=='2'?'selected':'')}}>2</option>
                                            <option value="3" {{old('month'=='3'?'selected':'')}}>3</option>
                                            <option value="4" {{old('month'=='4'?'selected':'')}}>4</option>
                                            <option value="5" {{old('month'=='5'?'selected':'')}}>5</option>
                                            <option value="6" {{old('month'=='6'?'selected':'')}}>6</option>
                                            <option value="7" {{old('month'=='7'?'selected':'')}}>7</option>
                                            <option value="8" {{old('month'=='8'?'selected':'')}}>8</option>
                                            <option value="9" {{old('month'=='9'?'selected':'')}}>9</option>
                                            <option value="10" {{old('month'=='10'?'selected':'')}}>10</option>
                                            <option value="11" {{old('month'=='11'?'selected':'')}}>11</option>
                                            <option value="12" {{old('month'=='12'?'selected':'')}}>12</option>

                                        </select>
                                        {{$errors->first('month')}}
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-calculator">
                                        <select name="year" id="year" class="form-control">
                                            <option value=""> السنة :</option>
                                            <option value="1990" {{old('year')=='1990'?'selected':''}}>1990</option>
                                            <option value="1992" {{old('year')=='1992'?'selected':''}}>1992</option>
                                            <option value="1993" {{old('year')=='1993'?'selected':''}}>1993</option>
                                            <option value="1994" {{old('year')=='1994'?'selected':''}}>1994</option>
                                            <option value="1995" {{old('year')=='1995'?'selected':''}}>1995</option>
                                            <option value="1996" {{old('year')=='1996'?'selected':''}}>1996</option>
                                            <option value="1997" {{old('year')=='1997'?'selected':''}}>1997</option>
                                            <option value="1998" {{old('year')=='1998'?'selected':''}}>1998</option>
                                            <option value="1993" {{old('year')=='1993'?'selected':''}}>1993</option>
                                            <option value="2000" {{old('year')=='2000'?'selected':''}}>2000</option>
                                            <option value="2001" {{old('year')=='2000'?'selected':''}}>2001</option>
                                            <option value="2002" {{old('year')=='2000'?'selected':''}}>2002</option>
                                            <option value="2003" {{old('year')=='2000'?'selected':''}}>2003</option>
                                            <option value="2004" {{old('year')=='2000'?'selected':''}}>2004</option>
                                            <option value="2005" {{old('year')=='2000'?'selected':''}}>2005</option>
                                            <option value="2006" {{old('year')=='2000'?'selected':''}}>2006</option>
                                            <option value="2007" {{old('year')=='2000'?'selected':''}}>2007</option>
                                            <option value="2008" {{old('year')=='2000'?'selected':''}}>2008</option>
                                            <option value="2009" {{old('year')=='2000'?'selected':''}}>2009</option>
                                            <option value="2010" {{old('year')=='2000'?'selected':''}}>2010</option>
                                            <option value="2011" {{old('year')=='2000'?'selected':''}}>2011</option>
                                            <option value="2012" {{old('year')=='2000'?'selected':''}}>2012</option>
                                            <option value="2013" {{old('year')=='2000'?'selected':''}}>2013</option>
                                            <option value="2014" {{old('year')=='2000'?'selected':''}}>2014</option>
                                            <option value="2015" {{old('year')=='2000'?'selected':''}}>2015</option>
                                            <option value="2016" {{old('year')=='2000'?'selected':''}}>2016</option>
                                            <option value="2017" {{old('year')=='2000'?'selected':''}}>2017</option>
                                            <option value="2018" {{old('year')=='2000'?'selected':''}}>2018</option>
                                            <option value="2019" {{old('year')=='2000'?'selected':''}}>2019</option>
                                            <option value="2020" {{old('year')=='2000'?'selected':''}}>2020</option>
                                            <option value="2021" {{old('year')=='2000'?'selected':''}}>2021</option>
                                            <option value="2022" {{old('year')=='2000'?'selected':''}}>2022</option>
                                            <option value="2023" {{old('year')=='2000'?'selected':''}}>2023</option>
                                            <option value="2024" {{old('year')=='2000'?'selected':''}}>2024</option>
                                            <option value="2025" {{old('year')=='2000'?'selected':''}}>2025</option>
                                            <option value="2026" {{old('year')=='2000'?'selected':''}}>2026</option>
                                            <option value="2027" {{old('year')=='2000'?'selected':''}}>2027</option>
                                            <option value="2028" {{old('year')=='2000'?'selected':''}}>2028</option>
                                            <option value="2029" {{old('year')=='2000'?'selected':''}}>2029</option>
                                            <option value="2030" {{old('year')=='2000'?'selected':''}}>2030</option>
                                            <option value="2031" {{old('year')=='2000'?'selected':''}}>2031</option>34
                                        </select>
                                        {{$errors->first('year')}}
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="btn-pregnancy-calculator" >
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
