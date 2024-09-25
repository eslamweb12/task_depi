<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        form{
            max-width: 600px;
            margin: auto;
        }
        .sidebar {
            height: 100vh;
            position: fixed;

            top: 70;
            left: 0;
            z-index: 100;
            padding: 28px 0;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }
        .content {
            margin-left: 250px;
            padding: 20px;
        }
        .navbar-nav .nav-link {
            position: relative;
            left: 400px;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('createCategory')}}">create category</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('addQuestion')}}">creat questation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('createProduct')}}">ask for product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('login')}}">login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('notification')}}">notification</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('ticket')}}">create ticket</a>
                </li>
            </ul>
            <form class="d-flex" role="search" style="position: relative;left: 60px">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav> @yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>
