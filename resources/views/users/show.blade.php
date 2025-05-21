<!-- users/edit.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Profil</h1>
        <br>
        <br>
        <form action="{{ route('users.update', ['id' => $users->id]) }}" method="POST">
            @method('PUT')
            @csrf
            <p>Nom & prénom : <input type="text" name="name" class="form-control" value="{{ $users->name }}"></p>
            <p>tel : <input type="text" name="tel" class="form-control" value="{{ $users->tel }}"></p>
            <p>Ville : <input type="text" name="ville" class="form-control" value="{{ $users->ville }}"></p>
            <p>Email : <input type="text" name="email" class="form-control" value="{{ $users->email }}"></p>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
      

    </div>
</body>
</html>
