@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4"><button class="btn btn-light"><a href="{{route('admin.categories.index')}}">Liste des categories</a></button></div>
    <h3>Details Categories</h3>
    <div class="col-4"></div>
</div>
<div class="row ml-4">
    
    <div class="col-3 ">
        <h4>Liste des Categories</h4>
        <ul class="list-group">
           @foreach($categories as $categorie)

           <a class="btn btn-light" href="{{route('admin.categories.show',['category'=>$categorie->id])}}">
                <li class="list-group-item {{$categorie->id == $cat->id ? 'active': ''}}">{{$categorie->nom}}</li>
            </a>
           @endforeach
        </ul>
    </div>
    <div class="col-6">
    <h4>Liste des Nouvelles de la categorie : {{$cat->nom}}</h4><br>
    <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="entete">
        <th>N°</th>
        <th>Titre</th>
        <th>Province</th>
        <th>Region</th>
        <th>Image</th>
        <th>Contenu</th>
        </thead>
        <tbody>
        <?php $i=0; ?>
        @foreach($categories as $categorie)
        <?php $i++; ?>
        <tr>
        <td>{{$i}}</td>
        
        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    
</div>
@endsection
