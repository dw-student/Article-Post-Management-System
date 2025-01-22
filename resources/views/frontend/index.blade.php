@extends('layout.dashboard')
@section('content')
    <div class="container mt-4">
        <h1 class="text-center"><i>Articles</i></h1>

        @if(session('error'))
        <div class="alert alert-danger mt-3" id="danger-alert">
            {{ session('error') }}
        </div>
        <script>
            setTimeout(function() {
                document.getElementById('danger-alert').style.display = 'none';
            }, 5000);
        </script>
        @endif

        <div class="d-flex  flex-column w-100 mt-5 mb-5" style="display: flex;gap:20px;">
                @foreach ($frontend as $item)
                        <div style="display:flex;justify-content:space-between;:1000px; border: 2px solid black;border-radius:6px;padding:15px">
                            <div>
                                <h3><i>{{ $item->title }}</i></h3>
                                <p>{{ $item->description }}</p>
                                </div>
                                <div>
                                <span><img src="{{asset('storage/' . $item->image)}}" style="width:260px;border-radius:8px;"></span>
                                </div> 
                        </div>
                    @endforeach
            
        </div>
    </div>
@endsection
