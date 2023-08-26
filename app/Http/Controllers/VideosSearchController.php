<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;

class VideosSearchController extends Controller
{
    public function videos_search(Request $request){
        if($request->ajax()) {
            alert('yes ajax');
            $search = $request->search;
            $data = Video::where("name", "like", "%{$search}%")->orderby('id', 'ASC')->paginate(1);
            return view('details.videos-search-result', ['data'=>$data]);
        }
    }
}
