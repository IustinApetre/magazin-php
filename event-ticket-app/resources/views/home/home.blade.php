<!DOCTYPE html>
<html>
<head>
    <title>Home Page</title>
    <!-- Stilizare CSS pentru navbar -->
    <style>
        /* Stiluri pentru meniul de navigare */
        nav {
            background-color: #333;
            color: #fff;
            padding: 10px;
        }
        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
        }
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<!-- Meniul de navigare -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <span class="navbar-brand">Hello, {{ Auth::user()->name }}</span>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                @if( Auth::user()->admini)
                <li class="nav-item">
                    <a href="{{ route('homeAdmin') }}" class="btn btn-primary">Back to Admin page</a>
                </li>
                @endif
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link text-white">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Restul conținutului paginii -->
<div class="container mt-4">

    <h1>Our Events</h1>



    <div class="row">
        @foreach($events as $event)
        <div class="col-lg-4 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('/images/' . $event->image) }}" class="card-img-top" alt="Imagine eveniment">

                <div class="card-body">
                    <h5 class="card-title">{{ $event->title }}</h5>
                    <p class="card-text">{{ $event->description }}</p>
                    <p class="card-text">Date: {{ $event->date }}</p>
                    <p class="card-text">Time: {{ $event->time }}</p>
                    <p class="card-text">Price: {{ $event->price }} RON</p>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('mainEventPage', ['id' => $event->id]) }}" class="btn btn-primary">Details</a>
                        </div>
                        <div class="col-md-6">
                            <form action="{{ route('addToCart', ['id' => $event->id]) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-success">Add to cart</button>
                            </form>
                        </div>
                    </div>
                    @if( Auth::user()->admini)
                    <form action="{{ route('deleteEvent', ['id' => $event->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a href="{{ route('editPageEvent', ['id' => $event->id]) }}" class="btn btn-warning">Edit</a>
                    @endif

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
