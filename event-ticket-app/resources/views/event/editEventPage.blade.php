<!DOCTYPE html>
<html>
<head>
    <title>Update Event</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<form action="{{ route('updateEvent', ['id' => $event->id]) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title">Titlu:</label>
                    <input type="text" id="title" name="title" value="{{ $event->title }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">Image:</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <div class="form-group">
                    <label for="description">Descriere:</label>
                    <textarea id="description" name="description" class="form-control" rows="5">{{ $event->description }}</textarea>
                </div> <div class="form-group">
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
                    <input type="text" class="form-control" id="location" name="location" value="{{ $event->location }}">
                </div>

                <div class="form-group">
                    <label for="time">Ora:</label>
                    <input type="time" class="form-control" id="time" name="time" value="{{ $event->time }}">
                </div>
                <div class="form-group">
                    <label for="date">Date:</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{ $event->date }}">
                </div>
                <div class="form-group">
                    <label for="session">Session:</label>
                    <input class="form-control" id="session" name="session"  value="{{ $event->session }}">
                </div>
                <div class="form-group">
                    <label for="workshop">Workshop:</label>
                    <input class="form-control" id="session" name="workshop"  value="{{ $event->workshop }}">
                </div>
                <div class="form-group">
                    <label for="activity">Activity:</label>
                    <input class="form-control" id="activity" name="activity"  value="{{ $event->activity }}">
                </div>
                <div class="form-group">
                    <label for="presentation">Presentation:</label>
                    <input class="form-control" id="presentation" name="presentation"  value="{{ $event->presentation }}">
                </div>
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="number" class="form-control" id="phone" name="phone" value="{{ $event->phone }}">
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="number" class="form-control" id="price" name="price" value="{{ $event->price }}">
                </div>


                <!-- Alte câmpuri pentru alte detalii ale evenimentului -->

                <button type="submit" class="btn btn-primary">Edit</button>
                <a href="{{ route('homeAdmin') }}" class="btn btn-secondary">Back</a>
            </div>
        </div>
    </div>
</form>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
