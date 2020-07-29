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
        </thead>
        <tbody>
        <?php $i=0; ?>
        @foreach($categories as $categorie)
        <?php $i++; ?>
        <tr>
        <td>{{$i}}</td>
        <td>{{$categorie->nom}}</td>

        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    
    <a class="btn btn-primary" href="{{ route('categories.create') }}">Ajouter une filiere</a>
  </div>
  <div class="col-3"></div>
  </div>
    
    @endsection
