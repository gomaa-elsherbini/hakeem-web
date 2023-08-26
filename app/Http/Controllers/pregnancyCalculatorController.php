<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pregnancyCalculatorController extends Controller
{
    public function create()
    {
        return view('calculators.pregnancy-calculator');
    }

    public function calculate(Request $request)
    {
        $data=$request->all();

        $request->validate([
            'day'=>'required|numeric',
            'month'=>'required|numeric',
            'year'=>'required|numeric',
        ]);

        $pregnancy_intervals=array();

        $start_pregnancy_date= date_create(  $data['year'] . '/' . $data['month']. '/' . $data['day']);
        $start_pregnancy_date=date_format($start_pregnancy_date, 'Y/m/d');

        for ($month=3; $month<=9; $month +=3){
            $start_pregnancy_date_object= date_create(  $data['year'] . '/' . $data['month']. '/' . $data['day']);
            $date_after_3months= date_add($start_pregnancy_date_object, date_interval_create_from_date_string($month .' months'));
            $date_after_3months= date_format($date_after_3months, 'Y/m/d');
            array_push($pregnancy_intervals, $date_after_3months);
        }

        $birth_day_object= date_create($pregnancy_intervals[2]);
        date_add($birth_day_object, date_interval_create_from_date_string('1 day'));
        $birth_date= date_format($birth_day_object,'Y/m/d' );
        $birth_day= date_format($birth_day_object,'l' );

        $arabic_days=[
            'Saturday'=>'السبت',
            'Sunday'=>'الأحد',
            'Monday'=>'الإثنين',
            'Tuesday'=>'الثلاثاء',
            'Wednesday'=>'الأربعاء',
            'Thursday'=>'الخميس',
            'Friday'=>'الجمعة',
        ];

        $birth_day_in_arabic= $arabic_days[$birth_day];

        return view('details.pregnancy-calculator-details',
            compact(
                'start_pregnancy_date',
                'birth_day',
                'birth_date',
                'birth_day_in_arabic',
                'pregnancy_intervals'
            )
        );
    }
}
