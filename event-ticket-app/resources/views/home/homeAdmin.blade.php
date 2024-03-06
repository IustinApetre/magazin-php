<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Admin</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        h1 {
            text-align: center;
            color: #333;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
            text-align: center;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
            display: block;
            padding: 8px 0;
        }

        a:hover {
            background-color: #eee;
        }
    </style>
</head>
<body>
<h1>Dashboard Admin</h1>

<ul>
    <li><a href="{{ route('viewClientInterface') }}">View Client Interface</a></li>
    <li><a href="{{ route('createSponsor') }}">Create Sponsor</a></li>
    <li><a href="{{ route('createPartner') }}">Create Partener</a></li>
    <li><a href="{{ route('createEvent') }}">Create Event</a></li>
    <li><a href="{{ route('manageAdmin') }}">Create Admin</a></li>
    <!-- Alte elemente de meniu sau acțiuni -->
</ul>
</body>
</html>
