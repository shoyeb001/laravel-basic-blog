@extends('admin/layout.layout') 

@section('container')

<a class="btn btn-success col-2 mb-3 mt-3" href="/admin/post/add">Add Post</a>
<div class="card-header">
    <i class="fas fa-table me-1"></i>
    Post List
</div>
<div class="card-body">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Sl No</th>
            <th scope="col">Title</th>
            <th scope="col">Short Desc</th>
            <th scope="col">Date</th>
            <th scope="col">Image</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($result as $list)
             
          <tr>
            <th scope="row">{{$list->id}}</th>
            <td>{{$list->title}}</td>
            <td>{{$list->short_desc}}</td>
            <td>{{$list->post_date}}</td>
            <td><img src="{{asset('storage/post/'.$list->img)}}" style="width: 150px"></td>
            <td>{{$list->status}}</td>
            <td><a href="{{url('admin/post/delete/'.$list->id)}}" class="btn btn-danger">Delete</a><a href="{{url('admin/post/edit/'.$list->id)}}" class="btn btn-success" style="margin-left: 10px ">Edit</a></td>
            
          </tr>
         @endforeach
        </tbody>
      </table>
</div>
@endsection