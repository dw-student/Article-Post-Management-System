@extends('layout.dashboard')

@section('content')
<div class="container w-100 ">
    <a href="{{route('admin.create')}}" class="btn btn-primary mt-3">Add Articles</a>

    @if(session('article_created'))
    <div class="alert alert-success mt-3" id="success-alert">
        {{ session('article_created') }}
    </div>
    <script>
        setTimeout(function() {
            document.getElementById('success-alert').style.display = 'none';
        }, 5000);
    </script>
    @endif

    <table class="table table-bordered table-striped mt-3">
        <thead class="table-dark">
            <th>Title</th>
            <th>Description</th>
            <th>Image</th>
            <th>Show</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            @forelse ($admin as $item)
            <tr>
                <td>{{ $item->title }}</td>
                <td>{{ $item->description }}</td>
                <td><img src="{{asset('storage/' . $item->image)}}" style="width:60px;border-radius:8px"></td>
                <td><a href="{{route('admin.show',$item->id)}}" class="btn btn-primary">Show</a></td>
                <td><a href="{{route('admin.edit',$item->id)}}" class="btn btn-success">Edit</a></td>
                <td><a href="{{route('admin.destroy',$item->id)}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @empty
                <tr>
                    <td class="text-center" colspan="6">No Record Found</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection