
@extends('layouts.app')

@section('content')



<div class="row">
    <div class="col-4"></div>
    <h3>Enregistrer une Categorie</h3>
    <div class="col-4"></div>
</div>
<div class="row ml-4">
    
    <div class="col-3 ">
       
    </div>
    <div class="col-5">
    <form method="post" action="{{route('admin.categories.store')}}" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group ">
                <label for="0" >Nom</label>
                    <input id="nom" type="text"  class="form-control  {{ $errors->has('nom') ? ' is-invalid': ' ' }}" name="nom"  autofocus>
                    @if ($errors->has('nom'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nom') }}</strong>
                        </span>
                    @endif
                    </div>
                
<button type="submit" class="btn btn-primary">
    Enregistrer
</button>
</form>
    </div>
</div>
@endsection



