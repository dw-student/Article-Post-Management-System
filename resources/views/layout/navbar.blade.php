<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NavBar</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">DW</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="btn btn-sm btn-warning" style="margin-left: 10px;margin-top:10px;" href="{{route('index')}}">Home</a>
              </li>

              @if(Auth::check())
              <li class="nav-item">
                <a class="btn btn-sm btn-success" style="margin-left: 10px;margin-top:10px;" href="{{route('admin.index')}}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-sm btn-danger" style="margin-left: 10px;margin-top:10px;" href="{{route('logout')}}">Logout</a>
              </li>

              @else
              <li class="nav-item">
                <a class="btn btn-sm btn-primary" style="margin-left: 10px;margin-top:10px;" href="{{route('register')}}">Register</a>
              </li>
              <li class="nav-item">
                <a class="btn btn-sm btn-success" style="margin-left: 10px;margin-top:10px;" href="{{route('login')}}">Login</a>
              </li>
              @endif 
             
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
          @csrf
          </div>
        </div>
      </nav>
</body>
</html>