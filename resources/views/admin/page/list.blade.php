@extends('admin/layout.layout') 

@section('container')

<a class="btn btn-success col-2 mb-3 mt-3" href="/admin/page/add">Add Page</a>
<div class="card-header">
    <i class="fas fa-table me-1"></i>
    Page List
</div>
<div class="card-body">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Sl No</th>
            <th scope="col">Name</th>
            <th scope="col">Desc</th>
            <th scope="col">Date</th>
            <th scope="col">Image</th>
            <th scope="col">Slug</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
         @foreach ($result as $list)
             
          <tr>
            <th scope="row">{{$list->id}}</th>
            <td>{{$list->name}}</td>
            <td>{{$list->desc}}</td>
            <td>{{$list->added_on}}</td>
            <td><img src="{{asset('storage/page/'.$list->img)}}" style="width: 150px"></td>
            <td>{{$list->slug}}</td>
            <td><a href="{{url('admin/page/delete/'.$list->id)}}" class="btn btn-danger">Delete</a><a href="{{url('admin/page/edit/'.$list->id)}}" class="btn btn-success" style="margin-left: 10px ">Edit</a></td>
            
          </tr>
         @endforeach
        </tbody>
      </table>
</div>
@endsection