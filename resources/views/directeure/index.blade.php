<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Liens Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">

</head>
<body>
    <br>
    <br>
    <div class="form-group">
        <button class="btn btn-primary" >Ajouter</button>
    </div>
    <br>
    <br>

    <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Marque</th>
                    <th>Modèle</th>
                    <th>Type</th>
                    <th>Prix journée</th>
                    <th>Disponibilité</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($cars as $car)
                    <tr>
                        <td>{{ $car->id }}</td>
                        <td>{{ $car->marque }}</td>
                        <td>{{ $car->model }}</td>
                        <td>{{ $car->type }}</td>
                        <td>{{ $car->prixJ }}</td>
                        <td>
                            @if($car->dispo)
                                <span class="badge bg-success">Disponible</span>
                            @else    
                                <span class="badge bg-danger">Réservé</span>
                            @endif
                        </td>
                        <td>
                            <img src="{{ $car->image }}" width="60" height="60" class="img-fluid">
                        </td>
                        <td></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Scripts Bootstrap JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>


    <div class="modal fade" id="addcar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Ajouter une voiture</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                 <form action="#" method="post">
                  <div class="form-group">
                    <label for="">Marque</label>
                    <input type="text" name="marque" placeholder="la marques" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Model</label>
                    <input type="text" name="model" placeholder="model" class="form-control">
                  </div>

                  <div class="form-group">
                    <label for="">Marque</label>
                    <input type="text" name="marque" placeholder="la marques" class="form-control">
                  </div>
                </form>
                </div>
           
          </div>
        </div>
    </div>
</body>
</html>
