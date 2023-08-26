<?php

namespace App\Http\Controllers;

use App\Models\Calculator;
use Illuminate\Http\Request;

class AllCalculatorController extends Controller
{
    public function index(){
        $calculators= Calculator::all();
//        dd($calculators);
        return view('calculators.all-calculators',compact('calculators'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'calculator_name'=>'required|exists:calculators'
        ],[
            'calculator_name.exists'=>'This calculator is not exists in calculators table'
        ]);

        $calculator= Calculator::where('calculator_name', $request->calculator_name)->first();

        $name=$calculator->calculator_name;
        $uri=$calculator->uri;

        return view('calculators.'.$uri);
    }
}
