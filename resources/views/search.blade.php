<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .photo-container {
            position: relative;
            width: 400px;
            height: 300px;
            overflow: hidden;
        }
        
        .photo-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .photo-container:hover img {
            transform: scale(1.1);
        }
        
        .photo-container::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.3);
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .photo-container:hover::before {
            opacity: 1;
        }
        
        .photo-title {
            position: absolute;
            bottom: 10px;
            left: 10px;
            color: #fff;
            font-size: 18px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.8);
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Les voitures de "{{ $recherch }}" :</h2>
        @if ($cars->isEmpty())
            <p>Aucune voiture trouvée.</p>
        @else
            <div class="card mt-4">
                @foreach ($cars as $car)
                    <div class="photo-container">
                        <img src="{{ $car->image }}" alt="Photo de la voiture">
                        
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="marque_voiture">Marque :</label>
                            <input type="text" id="marque_voiture" class="form-control" disabled value="{{ $car->marque }}">
                        </div>
                        <div class="form-group">
                            <label for="model_voiture">Modèle :</label>
                            <input type="text" id="model_voiture" class="form-control" disabled value="{{ $car->model }}">
                        </div>
                        <div class="form-group">
                            <label for="type_voiture">Type :</label>
                            <input type="text" id="type_voiture" class="form-control" disabled value="{{ $car->type }}">
                        </div>
                        <div class="form-group">
                            <label for="prix_voiture">Prix :</label>
                            <input type="text" id="prix_voiture" class="form-control" disabled value="{{ $car->prixJ }}">
                        </div>
                    </div>
                    @if($car->dispo)
                    @auth
                      <p>
                         <a href="{{ route('commands.create',$car->id) }}" class="btn btn-primary m-4">Réservé</a>
                      </p>
                    @else
                    <p>
                     <a href="{{ route('users.login') }}" class="btn btn-primary m-4">Réservé</a>
                     </p>
                    @endauth
                 @else
                 <span class="badge badge-warning">
                     Résérvé
                 </span>
                 @endif
                @endforeach
            </div>
        @endif
    </div>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
