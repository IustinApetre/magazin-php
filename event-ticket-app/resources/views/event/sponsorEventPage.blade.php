<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numele Paginii</title>
    <!-- Adaugă legătura către fișierele CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">{{ $event->title }}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mainEventPage', ['id' => $event->id]) }}">Main
                        Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sponsorEventPage', ['id' => $event->id]) }}">Sponsors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('partnerEventPage', ['id' => $event->id]) }}">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('agendaEventPage', ['id' => $event->id]) }}">Agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contactEventPage', ['id' => $event->id]) }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('viewClientInterface')}}">Back to Events</a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="container mt-4">
    @if($event)
    @if($event->sponsors->count() > 0)
    <div class="row">
        @foreach($event->sponsors as $sponsor)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('/images/sponsorsLogo/' . $sponsor->logo) }}" class="card-img-top" alt="{{ $sponsor->name }} Logo">
                <div class="card-body">
                    <h5 class="card-title">{{ $sponsor->name }}</h5>
                    <p class="card-text">{{ $sponsor->description }}</p>
                    <!-- Add other details about the sponsor -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p>Niciun sponsor găsit pentru acest eveniment.</p>
    @endif
    @else
    <p>Evenimentul nu a fost găsit</p>
    @endif
</div>


<!-- Adaugă legătura către fișierele JS Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>
