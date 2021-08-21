@extends('admin/layout.layout')

@section('container')

<div class="container col-6 m-auto">
    <form action="{{url('/admin/page/submit')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">name</label>
        <input type="name" class="form-control" id="exampleFormControlInput1" name="name" required>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Desc</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="desc" required></textarea>
        <div class="mb-3">
          <label for="exampleFormControlInput1" class="form-label">Slug</label>
          <input type="name" class="form-control" id="exampleFormControlInput1" name="slug" required>
        </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input class="form-control" type="file" id="formFile" name="img" required>
      </div>
      <button type="submit" name="btn" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection