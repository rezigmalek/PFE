@include('partials.nav')
<div class="container mt-2">
<hr>
    <h2>Tous les écoles</h2>
<hr>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Nom</th>
    </tr>    
@foreach ($ecoles as $ecole)
    <tr>
        <td>{{$ecole->id}}</td>
        <td>{{$ecole->nom}}</td>
    </tr> 
@endforeach
</table>
<a href="/ecole/create" class="btn btn-primary">+ Nouveau école</a> 
</div>