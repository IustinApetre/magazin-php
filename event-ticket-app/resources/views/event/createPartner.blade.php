<!DOCTYPE html>
<html>
<head>
    <title>Formular Partener</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            padding: 20px;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
        }

        .mb-3 {
            margin-bottom: 1rem!important;
        }
        .back-button {
            background-color: #6c757d;
            color: #fff;
            border: none;
            border-radius: 4px;
            padding: 10px 20px;
            text-decoration: none;
        }

        .back-button:hover {
            background-color: #495057;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="container mt-4">


    <form method="POST" action="{{ route('storePartner') }}" >
        @csrf

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="logo">Logo:</label>
            <input type="file" class="form-control-file" id="logo" name="logo">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Add Partener</button>
        <a href="{{ route('homeAdmin') }}" class="back-button">Back</a>
    </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
