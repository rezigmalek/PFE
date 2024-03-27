@include('partials.nav')
<div class="container mt-2">
<hr>
    <h2>Tous les Encadrants</h2>
<hr>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Matricule</th>
        <th>Email</th>
        <th>ID département</th>
    </tr>    
@foreach ($encadrants as $encadrant)
    <tr>
        <td>{{$encadrant->id}}</td>
        <td>{{$encadrant->nom}}</td>
        <td>{{$encadrant->prenom}}</td>
        <td>{{$encadrant->matricule}}</td>
        <td>{{$encadrant->email}}</td>
        <td>{{$encadrant->structure_affectation_id}}</td>
    </tr> 
@endforeach
</table>
<a href="/encadrant/create" class="btn btn-primary">+ Nouveau Encadrant</a> 
</div>