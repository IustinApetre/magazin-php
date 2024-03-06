<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        .back-to-events {
            display: block;
            margin-bottom: 20px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 20px;
        }

        .card-title {
            font-size: 1.2em;
            margin-bottom: 5px;
        }

        .card-text {
            color: #888;
        }

        .btn-primary {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-primary:hover {
            background-color: #2980b9;
        }

        p.total {
            font-size: 1.2em;
            font-weight: bold;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
<a href="/viewClientInterface" class="back-to-events">Back to Events</a>
<h1>Shopping Cart</h1>


<div class="container mt-4">
    @php
    @endphp

    @foreach($shoppingCartItems as $shoppingCartItem)
    <div class="card mb-4">
        <div class="card-body">


            @if($shoppingCartItem->event)
            <h5 class="card-title">{{ $shoppingCartItem->event->title }}</h5>
            <p class="card-text">Price: {{ $shoppingCartItem->event->price }}</p>
            <p class-"card-text">Quantity:{{$shoppingCartItem->quantity}}</p>
            <!-- Restul codului pentru afișarea detaliilor evenimentului -->
            @endif

            <!-- Restul codului pentru butoane și acțiuni -->
        </div>
    </div>
    @endforeach

    <div>
        <p>Total: {{ $total }}</p>
        <form action="{{ route('checkOut') }}" method="POST">

            @csrf
            @method('DELETE')
            <input type="hidden" name="total" value="{{ $total }}">
            <button type="submit" class="btn btn-primary">Buy Now</button>
        </form>
    </div>


</body>
</html>
