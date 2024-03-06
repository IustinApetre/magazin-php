<!DOCTYPE html>
<html>
<head>
    <title>Pagina ta</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 50px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>
<body>
<div class="container">
    <a href="{{ route('homeAdmin') }}" class="btn btn-secondary mb-3">Back to Admin Dashboard</a>
    <form method="POST" action="{{ route('storeEvent') }}">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="4"></textarea>
        </div>

        <div class="form-group">
            <label for="selectPartners">Select Partners:</label>
            <select class="form-control" id="selectPartners" name="partners[]" multiple>
                @foreach($partners as $partner)
                <option value="{{ $partner->id }}">{{ $partner->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="selectSponsors">Select Sponsors:</label>
            <select class="form-control" id="selectSponsors" name="sponsors[]" multiple>
                @foreach($sponsors as $sponsor)
                <option value="{{ $sponsor->id }}">{{ $sponsor->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="location">Location:</label>
            <input type="text" class="form-control" id="location" name="location">
        </div>

        <div class="form-group">
            <label for="time">Ora:</label>
            <input type="time" class="form-control" id="time" name="time">
        </div>
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="session">Session:</label>
            <textarea class="form-control" id="session" name="session" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="workshop">Workshop:</label>
            <textarea class="form-control" id="session" name="workshop" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="activity">Activity:</label>
            <textarea class="form-control" id="activity" name="activity" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="presentation">Presentation:</label>
            <textarea class="form-control" id="presentation" name="presentation" rows="4"></textarea>
        </div>
        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="number" class="form-control" id="phone" name="phone">
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price">
        </div>
        <button type="submit" class="btn btn-primary">Add Event</button>
    </form>
</div>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
