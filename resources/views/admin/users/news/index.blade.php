@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-3"></div>
<div class="col-6"><h2><strong> LISTE DES NOUVELLES </strong> </strong></h2></div>
<div class="col-3"></div>
</div>
 
 <div class="row">
 <div class="col-3"></div>
  <div class="col-6">

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="entete">
        <th>N�</th>
        <th>Titre</th>
        <th>Contenu</th>
        <th>Image</th>
        <th>User</th>
        <th>categorie</th>
        <th>Region</th>
        <th>Province</th>
        <th>Details</th>
        <th>Modifier</th>
        <th>Supprimer</th>
        </thead>
        <tbody>
        <?php $i=0; ?>
        @foreach($news as $new)
        <?php $i++; ?>
        <tr>
        <td>{{$i}}</td>
        <td>{{$new->topic}}</td>
        <td>{{$new->body}}</td>
        <td>{{$new->image}}</td>
        <td>{{$new->user->name}}</td>
        <td>{{$new->categorie->nom}}</td>
        <td>{{$new->region->nom}}({{$new->province->chefLieu}})</td>
        <td>{{$new->province->nom}}({{$new->province->chefLieu}})</td>
    
        <td><a href="{{route('admin.news.show',['news'=>$new->id])}}" class="btn btn-success">Details</a></td>
        <td><a href="{{route('admin.news.edit',['news'=>$new->id])}}" class="btn btn-warning">Modifier</a></td>
        <td>
            <form onsubmit="return confirm('Voulez-vous vraiment supprimer?')" action="{{route('admin.news.destroy',['news'=>$new->id])}}" method="post">
            @csrf
            {{method_field('DELETE')}}
        
                <input class="btn btn-danger"  type="submit" value="Supprimer">
            </form>
        </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    
    <a class="btn btn-primary" href="{{ route('admin.news.create') }}">Ajouter une nouvelle</a>
  </div>
  <div class="col-3"></div>
  </div>

    @endsection
