@extends('admin/layout.layout')

@section('container')

<div class="container col-6 m-auto">
    <form action="{{url('/admin/post/update/'.$result[0]->id)}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Title</label>
        <input type="title" class="form-control" id="exampleFormControlInput1" name="title" value="{{$result[0]->title}}" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Short Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="short_desc"  required>{{$result[0]->short_desc}}</textarea>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Long Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" name="long_desc" required>{{$result[0]->long_desc}}</textarea>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input class="form-control" type="file" id="formFile" name="img">
      </div>
      <button type="submit" name="btn" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection