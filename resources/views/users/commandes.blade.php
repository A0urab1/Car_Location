<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h4>Mes commandes </h4>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th>Marque</th>
                    <th>Type</th>
                    <th>Prix de jours</th>
                    <th>Date Début</th>
                    <th>Date Fin</th>
                    <th>Prix TTC</th>
                </tr>
            </thead>
            <tbody>
                @if(auth()->user()->commands)
                    @foreach(auth()->user()->commands as $command)
                    <tr>
                        <td>{{ $command->marque }} </td>
                        <td>{{ $command->type }}</td>
                        <td>{{ $command->prixJ }}</td>
                        <td>{{ $command->dateL }}</td>
                        <td>{{ $command->dateR }}</td>
                        <td>{{ $command->prixTTC }}</td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
