<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Liens CSS Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <br>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Réservé</h5>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card-body">
                                        <img src="{{ $car->image }}" alt="Photo de la voiture" class="img-fluid mt-4">
                                        <br><br>
                                        <div class="mb-3">
                                            <label for="nom_voiture" class="form-label">Marque :</label>
                                            <input type="text" id="nom_voiture" class="form-control" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="marque_voiture" class="form-label">Model :</label>
                                            <input type="text" id="marque_voiture" class="form-control" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="type_voiture" class="form-label">Type :</label>
                                            <input type="text" id="type_voiture" class="form-control" disabled>
                                        </div>
                                        <div class="mb-3">
                                            <label for="prix_voiture" class="form-label">Prix :</label>
                                            <input type="text" id="prix_voiture" class="form-control" disabled>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <form action="{{ route('command.store') }}" method="post">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="dateL" class="form-label">Date Debut</label>
                                            <input type="date" name="dateL" id="dateL" class="form-control" placeholder="Date Location"
                                                aria-describedby="dateLHelp">
                                        </div>
                                        <div class="mb-3">
                                            <label for="dateR" class="form-label">Date Fin</label>
                                            <input type="date" name="dateR" id="dateR" class="form-control" placeholder="Date Retour"
                                                aria-describedby="dateRHelp">
                                            <input type="hidden" name="car_id" value="{{ $car->id }}">    
                                        </div>
                                        <button type="submit" class="btn btn-primary">Valider</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                        <script>
                            // JavaScript pour remplir les informations de la voiture
                            document.getElementById("nom_voiture").value = "{{ $car->marque }}";
                            document.getElementById("marque_voiture").value = "{{ $car->model }}";
                            document.getElementById("type_voiture").value = "{{ $car->type }}";
                            document.getElementById("prix_voiture").value = "{{ $car->prixJ }}";
                        </script>
                        
                        

    <!-- Scripts Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
