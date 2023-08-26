<?php

namespace App\Http\Controllers;

use App\Models\Diseases;
use Illuminate\Http\Request;

class DiseasesController extends Controller
{
    public function index(){
        $diseases= Diseases::all();
        return view('diseases', compact('diseases'));
    }

    public function diseases_search(Request $request){
            if($request->ajax()) {
                $search = $request->search;
                $data = Diseases::where("name", "like", "%{$search}%")->orderby('id', 'ASC')->paginate(1);
                return view('details.diseases-search-result', ['data'=>$data]);
            }
        }
}
