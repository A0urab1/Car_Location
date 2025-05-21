@extends('layout.message')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row my-4">
        <div class="col-md-8 mx-auto">
            <div class="card border border-primary shadow-sm">
                <h3 class="card-header">Connexion</h3>
                <div class="card-body">
                    <form action="{{ route('users.auth') }}" method="get">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" name="email" id="" class="form-control" placeholder="Email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Mot de passe</label>
                            <input type="password" name="password" id="" class="form-control" placeholder="Mot de passe">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary"> se connecter</button>
                            <button type="submit" class="nav-link btn btn-secondary py-2 ml-1"> <a href="{{ route('users.register') }}"> Register</a></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>

</html>
