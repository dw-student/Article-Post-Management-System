<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentication</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container w-50 mt-5">
        <div class="card-body border border-2 p-5 w-50 mx-auto shadow rounded bg-light text-dark text-center ">
            <form action="{{route('login.store')}}" method="POST">
                @csrf
                
                {{-- Success Message --}}
                @if(session('success'))
                <div class="alert alert-success mt-3" id="success-alert">
                    {{ session('success') }}
                </div>
                <script>
                    setTimeout(function() {
                        document.getElementById('success-alert').style.display = 'none';
                    }, 5000);
                </script>
                @endif

                    {{-- Error Message --}}
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

                <h2 class="mb-3"><i>Login</i></h2>
                <div>
                    <input type="text" name="name" placeholder="Name" value="{{ old('name') }}"
                        class="form-control @error('name') is-invalid @enderror">
                    <span class="text-danger">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mt-3">
                    <input type="email" name="email" placeholder="Email" value="{{ old('email') }}"
                        class="form-control @error('email') is-invalid @enderror">
                    <span class="text-danger">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="mt-3">
                    <input type="password" name="password" placeholder="Password" value="{{ old('password') }}"
                        class="form-control @error('password') is-invalid @enderror">
                    <span class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
           
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
