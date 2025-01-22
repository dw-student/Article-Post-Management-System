@extends('layout.dashboard')

@section('content')
<div class="container w-100 ">
   <div class="container" style="border: 2px solid black;border-radius:8px;width:500px;margin-top:15px;">
    <form action="{{route('admin.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="mt-3" style="margin-left: 40px"><i>Create Articles Here!</i></h1>
        <div class="mt-3" style="margin-left:50px">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control w-75 @error('title') is-invalid @enderror">
            <span class="text-danger"> @error('title') {{ $message }} @enderror </span>
        </div>
        <div class="mt-3" style="margin-left:50px">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control w-75 @error('description') is-invalid @enderror">{{old('description')}}</textarea>
            <span class="text-danger"> @error('description') {{ $message }} @enderror </span>
        </div>
        <div class="mt-3" style="margin-left:50px">
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" class="form-control w-75 @error('image') is-invalid @enderror">
            <span class="text-danger"> @error('image') {{ $message }} @enderror </span>
        </div>
        <button type="submit" class="btn btn-success mt-3 mb-3" style="margin-left:50px">Save</button>
    </form>
   </div>
</div>
@endsection