@extends('layout')
@section('title', 'كل الحاسبات')


@section('content')
<section class="all-calculators">
    <div class="main-container">
        <div class="title-start">
            <h2>جميع الحاسبات </h2>
            <span></span>
        </div>

        <div class="search-two">
            <div class="search-header">
                <form action="{{url('search-calculator')}}" method="post">
                    <input type="text" placeholder=" ابحث في الحاسبات الطبية .."  class="form-control" name="calculator_name">
                    @csrf
                    <button type="submit"><img src="images/search.png" alt=""></button>
                </form>
                <span class="text-danger">@error('calculator_name'){{$message}}@enderror</span>
            </div>
        </div>


        <div class="main-calculators">
            <div class="main-container">
                <div class="row">
                    @foreach($calculators as $calculator)
                        <div class="col-lg-4" data-aos="fade-up"  data-aos-easing="linear"
                        data-aos-duration="700">
                            <a href="{{url($calculator->uri)}}">
                                <div class="sub-calculators">
                                    <div class="img-sub-calculators">
                                        <img src="images/b10.png" alt="">
                                    </div>
                                    <div class="text-sub-calculators">
                                        <h2>{{$calculator->calculator_name}}</h2>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
