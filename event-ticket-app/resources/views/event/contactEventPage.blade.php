<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numele Paginii</title>
    <!-- Adaugă legătura către fișierele CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Basic styles for the contact page */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        #contact-form {
            background: #f9f9f9;
            padding: 30px;
            margin-top: 50px;
            border-radius: 5px;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 8px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }
        input[type="submit"] {
            background: #333;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background: #555;
        }
    </style>
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
    <h2>Contact Us</h2>
    <h5>Phone number: {{$event->phone}}</h5>
    <p>If you have any questions, feel free to <a href="mailto:apetre.i@yahoo.com">contact us</a>.</p>
</div>

<!-- Adaugă legătura către fișierele JS Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
