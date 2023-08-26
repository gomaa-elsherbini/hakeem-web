@extends('layout')
@section('title','تفاصيل السعرات')

@section('content')
<section class="calories-details">
    <div class="main-container">
        <div class="title-start">
            <h2>البيض المجفف</h2>
            <span></span>
        </div>


        <div class="page-contents">
            <h2> محتويات الصفحة : </h2>
            <ul>
                <li><a href="">هذا النص هو مثال لنص</a></li>
                <li><a href="">هذا النص هو مثال لنص</a></li>
                <li><a href="">هذا النص هو مثال لنص</a></li>
                <li><a href="">هذا النص هو مثال لنص</a></li>
                <li><a href="">هذا النص هو مثال لنص</a></li>
                <li><a href="">هذا النص هو مثال لنص</a></li>
                <li><a href="">هذا النص هو مثال لنص</a></li>
                <li><a href="">هذا النص هو مثال لنص</a></li>
                <li><a href="">هذا النص هو مثال لنص</a></li>
                <li><a href="">هذا النص هو مثال لنص</a></li>
                <li><a href="">هذا النص هو مثال لنص</a></li>
                <li><a href="">هذا النص هو مثال لنص</a></li>
            </ul>
        </div>


        <div class="text-calories-details">
            <h2>القيمة الغذائية : </h2>
            <table class="fix-width">
                <tbody>
                    <tr>
                        <th>المغذيات</th>
                        <th>الكمية</th>
                    </tr>
                    <tr>
                        <td>
                            طاقة </td>
                        <td>387 kcal</td>
                    </tr>
                    <tr>
                        <td>
                            بروتين </td>
                        <td>31.8 g</td>
                    </tr>
                    <tr>
                        <td>
                            دهون </td>
                        <td>26.94 g</td>
                    </tr>
                    <tr>
                        <td>
                            الكربوهيدرات </td>
                        <td>3.63 g</td>
                    </tr>
                    <tr>
                        <td>
                            Ca
                        </td>
                        <td>1064 mg</td>
                    </tr>
                    <tr>
                        <td>
                            >الحديد، Fe
                        </td>
                        <td>0.77 mg</td>
                    </tr>
                    <tr>
                        <td>
                            الصوديوم، Na
                        </td>
                        <td>1200 mg</td>
                    </tr>
                    <tr>
                        <td>
                            فيتامين ج، نهائي حمض الاسكوربيك
                        </td>
                        <td>0 mg</td>
                    </tr>
                    <tr>
                        <td> فيتامين أ، Iu</td>
                        <td>415 IU</td>
                    </tr>
                    <tr>
                        <td>
                            كولسترول </td>
                        <td>104 mg</td>
                    </tr>
                </tbody>
            </table>
            <h2>القيمة الغذائية : </h2>
            <table class="fix-width">
                <tbody>
                    <tr>
                        <th>المغذيات</th>
                        <th>الكمية</th>
                    </tr>
                    <tr>
                        <td>
                            طاقة </td>
                        <td>387 kcal</td>
                    </tr>
                    <tr>
                        <td>
                            بروتين </td>
                        <td>31.8 g</td>
                    </tr>
                    <tr>
                        <td>
                            دهون </td>
                        <td>26.94 g</td>
                    </tr>
                    <tr>
                        <td>
                            الكربوهيدرات </td>
                        <td>3.63 g</td>
                    </tr>
                    <tr>
                        <td>
                            Ca
                        </td>
                        <td>1064 mg</td>
                    </tr>
                    <tr>
                        <td>
                            >الحديد، Fe
                        </td>
                        <td>0.77 mg</td>
                    </tr>
                    <tr>
                        <td>
                            الصوديوم، Na
                        </td>
                        <td>1200 mg</td>
                    </tr>
                    <tr>
                        <td>
                            فيتامين ج، نهائي حمض الاسكوربيك
                        </td>
                        <td>0 mg</td>
                    </tr>
                    <tr>
                        <td> فيتامين أ، Iu</td>
                        <td>415 IU</td>
                    </tr>
                    <tr>
                        <td>
                            كولسترول </td>
                        <td>104 mg</td>
                    </tr>
                </tbody>
            </table>

            <div class="container alert-info p-2 text-md-center">
                <h4><a href="{{url('calorie-calculator')}}">احسب احتياجك اليومي من السعرات الحرارية</a></h4>
            </div>
        </div>

    </div>
</section>
@endsection
