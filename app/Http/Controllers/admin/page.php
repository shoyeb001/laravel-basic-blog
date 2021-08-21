<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;    //using query builder


class page extends Controller
{
    function listing()
    {
        $data['result'] = DB::table('pages')->orderBy('id', 'desc')->get();  //retriving data
        return view('admin/page/list', $data);   //persing one valur or param to list
    }
    function submit(Request $request)
    {
        //   $image = $request->file('img')->store('public/post');
        $image = $request->file('img');
        $ext = $image->extension();
        $file = time() . '.' . $ext;
        $image->storeAs('/public/page', $file);
        $data = array(
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
            'slug' => $request->input('slug'),
            'img' => $file,
            'status' => 1,
            'added_on' => date('y-m-d h:i:s')


        );

        DB::table('pages')->insert($data);
        return redirect('admin/page/list');
    }
    function delete(Request $request, $id)
    {
        DB::table('pages')->where('id', $id)->delete();
        $request->session()->flash('msg', 'Page deleted successfully');
        return redirect(url('admin/page/list'));
    }

    function edit($id)
    {
        $data['result'] = DB::table('pages')->where('id', $id)->orderBy('id', 'desc')->get();  //retriving data
        return view('admin/page/edit', $data);   //persing one valur or param to list

    }

    function update(Request $request, $id)
    {

        $data = array(
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
            'slug' => $request->input('slug'),
            'status' => 1,
            'added_on' => date('y-m-d h:i:s')

        );

        if ($request->hasFile('img')) {

            $image = $request->file('img');
            $ext = $image->extension();
            $file = time() . '.' . $ext;
            $image->storeAs('/public/page', $file);

            $data['img']=$file;
        }

        DB::table('pages')->where('id', $id)->update($data);
        return redirect('admin/page/list');
    }
}
