@extends('admin/layout.layout')

@section('container')

<div class="container col-6 m-auto">
    <form action="{{url('/admin/page/update/'.$result[0]->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="title" class="form-control" id="exampleFormControlInput1" name="name" value="{{$result[0]->name}}" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc"  required>{{$result[0]->desc}}</textarea>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Slug</label>
        <input type="title" class="form-control" id="exampleFormControlInput1" name="slug" value="{{$result[0]->slug}}" required>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input class="form-control" type="file" id="formFile" name="img">
      </div>
      <button type="submit" name="btn" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection