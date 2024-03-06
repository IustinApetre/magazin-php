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
    <div class="card">
        <div class="card-body">
            @if($event)

            <p class="card-text">Session: {{ $event->session }}</p>
            <p class="card-text">Workshop: {{ $event->workshop }}</p>
            <p class="card-text">Activity: {{ $event->activity }}</p>
            <p class="card-text">Presentation: {{ $event->presentation }}</p>

            <!-- Alte detalii despre eveniment... -->
            @else
            <p>Event not found</p>
            @endif
        </div>
    </div>
</div>

<!-- Adaugă legătura către fișierele JS Bootstrap -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>

</html>

