<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Dotenv\Result\Result;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    //using query builder


class post extends Controller
{
    function post_list()
    {
        $data['result'] = DB::table('posts')->orderBy('id', 'desc')->get();  //retriving data
        return view('front/index/index', $data);   //persing one valur or param to list
    }
    function details($id){
        $data['result'] = DB::table('posts')->where('id',$id)->orderBy('id', 'desc')->get();  //retriving data
        return view('front/content/post', $data);   //persing one valur or param to list
    }
    public static function page_list(){
        $result = DB::table('pages')->where('status','1')->get();  //retriving data
        
        return $result;
    }
    function page_content($slug){
        $data['result'] = DB::table('pages')->where('slug',$slug)->get();  //retriving data
        return view('front/content/page',$data);
    }
}
