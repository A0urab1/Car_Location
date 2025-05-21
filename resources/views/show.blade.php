
<!DOCTYPE html>
<html>
<head>
    <title>Détails de la voiture</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        .container {
            margin-top: 30px;
        }

        .form-control[disabled] {
            background-color: #f8f9fa;
        }

        h1 {
            color: #337ab7;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
            margin-top: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        p {
            margin-bottom: 10px;
        }

        span {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Détails de la voiture</h1>

        <img src="{{ $car->image }}" alt="Photo de la voiture" class="img-fluid mt-4">

       <br>
       <br>
        <p>Marque : <input type="text" id="nom_voiture" class="form-control" disabled></p>

       
        <p>Model : <input type="text" id="marque_voiture" class="form-control" disabled></p>

      
        <p>Type : <input type="text" id="type_voiture" class="form-control" disabled></p>

      
        <p>Prix : <input type="text" id="prix_voiture" class="form-control" disabled></p>
    </div>

    <script>
        // JavaScript pour remplir les informations de la voiture
        document.getElementById("nom_voiture").value = "{{ $car->marque }}";
        document.getElementById("marque_voiture").value = "{{ $car->model }}";
        document.getElementById("type_voiture").value = "{{ $car->type }}";
        document.getElementById("prix_voiture").value = "{{ $car->prixJ }}";
    </script>
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
</body>
</html>

