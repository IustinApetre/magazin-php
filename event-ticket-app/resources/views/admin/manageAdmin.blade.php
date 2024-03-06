<!DOCTYPE html>
<html>
<head>
    <title>Manage Admin</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Stilizare pentru tabel */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        /* Stilizare pentru butonul de submit */
        button[type="submit"] {
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            border-radius: 4px;
            color: #fff;
            background-color: #337ab7;
            border-color: #2e6da4;
        }
        button[type="submit"]:hover {
            background-color: #286090;
            border-color: #204d74;
        }
    </style>
</head>
<body>
<div class="container mt-4">
    <h1>Manage Admin</h1>
    @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th>Change Role</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($allUsers as $user)
        <tr>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->admini ? 'Admin' : 'Client' }}</td>
            <td>
                <form action="{{ route('changeRole') }}" method="POST">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                    <button type="submit" class="btn btn-primary">Schimbă rolul</button>
                </form>
            </td>


        </tr>
        @endforeach
        </tbody>
    </table><a href="{{ route('homeAdmin') }}" class="btn btn-secondary mb-3">Back</a>

</div>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
