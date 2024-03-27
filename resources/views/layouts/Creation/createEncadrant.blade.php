@include('partials.nav')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<div class="container mt-2">
    <hr>
    <h2>Ajouter Encadrant</h2>
    <hr>
  <form action="{{ route('encadrant.store') }}" method="POST">
    @csrf 
    <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control" name="nom" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Prenom</label>
        <input type="text" class="form-control" name="prenom" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Matricule</label>
        <input type="text" class="form-control" name="matricule" autocomplete="off">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" class="form-control" name="email" autocomplete="off">
    </div>
    <div class="form-group">
        <label>ID Département</label>
        <input type="text" class="form-control" name="structure_affectation_id" autocomplete="off">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-success my-2" value="Ajouter" name="ajouter">
    </div>
</form>
</div>
</body>
</html>