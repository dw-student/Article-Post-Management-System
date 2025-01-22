<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authtication</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container w-50 mt-5">
        <div class="card-body border border-2 p-5 w-50 mx-auto shadow rounded bg-light text-dark text-center ">
            <form action="{{ route('register.store') }}" method="POST">
                @csrf
                <h2 class="mb-3"><i>Register Yourself!</i></h2>
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
                    <input type="text" name="email" placeholder="Email" value="{{ old('email') }}"
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
                {{-- <div class="mt-3">
                    <input type="text" name="age" placeholder="Age" value="{{old('age')}}" class="form-control @error('age') is-invalid @enderror">
                    <span class="text-danger">@error('age') {{ $message }} @enderror</span>

                </div>
                <div class="mt-3 mb-3">
                    <input type="text" name="city" placeholder="City" value="{{old('city')}}" class="form-control @error('city') is-invalid @enderror">
                    <span class="text-danger">@error('city') {{ $message }} @enderror</span>

                </div> --}}
                <div class="mt-3">
                    <button type="submit" class="btn btn-sm btn-success">Register</button>
                    <a href="{{ route('login') }}" class="btn btn-sm btn-primary">Login</a>
                </div>

            </form>
        </div>
    </div>

</body>

</html>
