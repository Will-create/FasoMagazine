@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-3"></div>
<div class="col-6"><h2><strong> LISTE DES CATEGORIES </strong> </strong></h2></div>
<div class="col-3"></div>
</div>
 
 <div class="row">
 <div class="col-3"></div>
  <div class="col-6">

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="entete">
        <th>N°</th>
        <th>NOM</th>
        <th>Details</th>
        <th>Modifier</th>
        <th>Supprimer</th>
        </thead>
        <tbody>
        <?php $i=0; ?>
        @foreach($categories as $categorie)
        <?php $i++; ?>
        <tr>
        <td>{{$i}}</td>
        <td>{{$categorie->nom}}</td>
        <td><a href="{{route('admin.categories.show',['category'=>$categorie->id])}}" class="btn btn-success">Details</a></td>
        <td><a href="{{route('admin.categories.edit',['category'=>$categorie->id])}}" class="btn btn-warning">Modifier</a></td>
        <td>
            <form onsubmit="return confirm('Voulez-vous vraiment supprimer?')" action="{{route('admin.categories.destroy',['category'=>$categorie->id])}}" method="post">
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
    
    <a class="btn btn-primary" href="{{ route('admin.categories.create') }}">Ajouter une Categorie</a>
  </div>
  <div class="col-3"></div>
  </div>
    
    @endsection
    