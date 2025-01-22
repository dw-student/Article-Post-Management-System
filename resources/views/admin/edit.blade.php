@extends('layout.dashboard')

@section('content')
<div class="container w-100 ">
   <div class="container" style="border: 2px solid black;border-radius:8px;width:500px;margin-top:15px;">
    <form action="{{route('admin.update', $edit->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1 class="mt-3" style="margin-left: 40px"><i>Edit Articles Here!</i></h1>

        @if(session('article_edited'))
        <div class="alert alert-success mt-3" id="success-alert">
            {{ session('article_edited') }}
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('success-alert').style.display = 'none';
            }, 5000);
        </script>
        @endif

        <div class="mt-3" style="margin-left:50px">
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{ $edit->title }}" id="title" class="form-control w-75">
        </div>
        <div class="mt-3" style="margin-left:50px">
            <label for="description">Description:</label>
            <textarea name="description" id="description"class="form-control w-75" cols="10" rows="2">{{ $edit->title }}</textarea>
        </div>
        <div class="mt-3" style="margin-left:50px">
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" class="form-control w-75">
            <img src="{{asset('storage/' . $edit->image)}}" style="width: 70px;border-radius:8px;margin-top:10px">
        </div>
        <button type="submit" class="btn btn-success mt-3 mb-3" style="margin-left:50px">Edit</button>
    </form>
   </div>
</div>
@endsection