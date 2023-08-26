<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dailyCalorieCalculatorContoller extends Controller
{
    public function create()
    {
        $shareButtons=\Share::page(
            url('calorie-calculator'),'calculate your need of calorie per day'
        )
            ->facebook()
            ->twitter();
        return view('calculators.calorie-calculator', ['shareButtons'=>$shareButtons]);
    }
    public function calculate(Request $request)
    {
       $request->validate([
           'age'=>'required|numeric',
            'tall'=>'required|numeric',
            'weight'=>'required|numeric',
            'gender'=>'required|string',
       ]);

       $data= $request->all();

       $BMR= ($data['weight']*10)+($data['tall']*6.25)+($data['age']*5);

       if ($data['gender']=='male'){
           $BMR= $BMR + 5;
       }
       elseif ($data['gender']=='female'){
           $BMR= $BMR - 161;
       }

        $daily_calorie= $this->estimationToCloser50(round($BMR));
        $daily_calorie_for_inactive_person=$this->estimationToCloser50(round($BMR * 1.2,));
        $daily_calorie_for_low_active_person=$this->estimationToCloser50(ceil($BMR * 1.375));
        $daily_calorie_for_active_person=$this->estimationToCloser50(ceil($BMR * 1.55));
        $daily_calorie_for_very_active_person=$this->estimationToCloser50(ceil($BMR * 1.725));

       return view('details.calorie-calculator-details', compact('daily_calorie','daily_calorie_for_inactive_person', 'daily_calorie_for_low_active_person','daily_calorie_for_active_person', 'daily_calorie_for_very_active_person'));
    }
    public function estimationToCloser50($value){
        //convert the int value to an array;1980
        $array  = array_map('intval', str_split($value));
        if($array[2]>=5&&$array[1]==9){
            $array[3] =0;
            $array[2] =0;
            $array[1]= 0;
            $array[0] +=1;
        }elseif($array[2]>=5){
            $array[3]= 0;
            $array[2]= 0 ;
            $array[1] +=1;
        }elseif($array[2]<5){
            $array[3]= 0;
            $array[2] += 5-$array[2];
        }
        //convert the converted array back to an integer value again
        $int_value=(int) implode("", $array);
      return $int_value;
    }
}
