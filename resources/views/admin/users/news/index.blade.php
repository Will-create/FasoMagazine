@extends('layouts.app')

@section('content')

<div class="row">
<div class="col-3"></div>
<div class="col-6"><h2><strong> LISTE DES Nouvelles </strong> </strong></h2></div>
<div class="col-3"></div>
</div>
 
 <div class="row">
 <div class="col-2"></div>
  <div class="col-8">

  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="entete">
        <th>N°</th>
        <th>Titre</th>
        <th>Province</th>
        <th>Region</th>
        <th>Image</th>
        <th>Contenu</th>
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
        <td>{{$new->province->nom}}({{$new->province->chefLieu}})</td>
        <td>{{$new->region->nom}}({{$new->province->chefLieu}})</td>
        <td><img style="height:50px;width:50px;" src="{{asset('storage').'/'.$new->image}}" class="mt-4 rounded-circle"></td>
        <td>{{$new->body}}</td>
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
    
    <a class="btn btn-primary" href="{{ route('admin.news.create') }}">Ajouter une Categorie</a>
  </div>
  <div class="col-2"></div>
  </div>

    @endsection
