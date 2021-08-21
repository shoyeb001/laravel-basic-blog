<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    //using query builder


class post extends Controller
{
    function listing()
    {
        $data['result'] = DB::table('posts')->orderBy('id', 'desc')->get();  //retriving data
        return view('admin/post/list', $data);   //persing one valur or param to list
    }
    function submit(Request $request)
    {
        //   $image = $request->file('img')->store('public/post');
        $image = $request->file('img');
        $ext = $image->extension();
        $file = time() . '.' . $ext;
        $image->storeAs('/public/post', $file);
        $data = array(
            'title' => $request->input('title'),
            'short_desc' => $request->input('short_desc'),
            'long_desc' => $request->input('long_desc'),
            'post_date' => date('y-m-d h:i:s'),
            'img' => $file,
            'title' => $request->input('title'),
            'status' => 1,
            'added_on' => date('y-m-d h:i:s')


        );

        DB::table('posts')->insert($data);
        return redirect('admin/post/list');
    }
    function delete(Request $request, $id)
    {
        DB::table('posts')->where('id', $id)->delete();
        $request->session()->flash('msg', 'Post deleted successfully');
        return redirect(url('admin/post/list'));
    }

    function edit($id)
    {
        $data['result'] = DB::table('posts')->where('id', $id)->orderBy('id', 'desc')->get();  //retriving data
        return view('admin/post/edit', $data);   //persing one valur or param to list

    }

    function update(Request $request, $id)
    {

        $data = array(
            'title' => $request->input('title'),
            'short_desc' => $request->input('short_desc'),
            'long_desc' => $request->input('long_desc'),
            'post_date' => date('y-m-d h:i:s'),
            'title' => $request->input('title'),
            'status' => 1,
            'added_on' => date('y-m-d h:i:s')


        );

        if ($request->hasFile('img')) {

            $image = $request->file('img');
            $ext = $image->extension();
            $file = time() . '.' . $ext;
            $image->storeAs('/public/post', $file);

            $data['img']=$file;
        }

        DB::table('posts')->where('id', $id)->update($data);
        return redirect('admin/post/list');
    }
}
