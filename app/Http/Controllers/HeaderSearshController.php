<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class HeaderSearshController extends Controller
{
    public function search(Request $request){
        if($request->ajax()) {
            $search = $request->search;
            $data = Category::where("title", "like", "%{$search}%")->orderby('id', 'ASC')->paginate(1);
            return view('header-search-result', ['data'=>$data]);
        }
    }
}
