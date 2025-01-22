@extends('layout.dashboard')

@section('content')
<div class="container w-100 ">
    <h2 class="text-center mt-3"><i>Show</i></h2>
    {{-- <div class="d-flex  mt-5 mb-5" style="display: flex;gap:20px;">
        
        <div style="width:1000px;border: 2px solid black;border-radius:6px;padding:15px">
            <img src="" alt="">img
        </div>
        <div  style="border: 2px solid black;border-radius:6px;padding:15px">
            <h2 class="mb-0">Title:</h2>
            <h4><i>{{ $show->title }}</i></h4>
            <hr>
            <h2 class="mb-0">Description:</h2>
            <p>{{ $show->description }}</p>
        </div>
    </div> --}}


    <div class="d-flex w-75 mt-5 mb-5" style="display: flex;gap:20px;border:2px solid black;border-radius:8px;padding:15px">
        <div class="d-flex flex-column">
        <h2><i>{{ $show->title }}</i></h2>
        <p>{{ $show->description }}</p>

        </div>
        <div class="d-flex flex-column">                                                                        
       
        </div>
        
        <td><img src="{{asset('storage/' . $show->image)}}" style="width:360px;border-radius:8px"></td>
    </div>
              

</div>
@endsection