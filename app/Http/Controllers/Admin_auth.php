<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    //using query builder

class Admin_auth extends Controller
{
    function login(Request $request){
        $email = $request->input('email');
        $password = $request->input('password');
        

        $result = DB::table('users')
                  ->where('user_name',$email)
                  ->where('password',$password)
                  ->get();

       if (isset($result[0]->id)) {
           if ($result[0]->status==1) {
              $request->session()->put('BLOG_USER_ID',$result[0]->id);
              return redirect('admin/post/list');
           }else{
            $request->session()->flash('msg','Account is deactivated');
            return redirect('admin/login');
           }
           
       }else{
           $request->session()->flash('msg','Please enter valid login details');
           return redirect('admin/login');
       }


    }
}


