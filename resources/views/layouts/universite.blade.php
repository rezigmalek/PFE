@include('partials.nav')
<div class="container mt-2">
<hr>
    <h2>Tous les Universités</h2>
<hr>
<table class="table">
    <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Wilaya</th>
    </tr>    
@foreach ($universites as $universite)
    <tr>
        <td>{{$universite->id}}</td>
        <td>{{$universite->nom}}</td>
        <td>{{$universite->wilaya}}</td>
    </tr> 
@endforeach
</table>
<a href="/universite/create" class="btn btn-primary">+ Nouveau Université</a> 
</div>