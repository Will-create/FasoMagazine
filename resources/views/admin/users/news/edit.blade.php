@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4"></div>
    <h3>Details Categories</h3>
    <div class="col-4"></div>
</div>
<div class="row ml-4">
    
    <div class="col-3 ">
       
    </div>
    <div class="col-5">
    <form method="post" action="{{route('admin.categories.update',['category'=>$cat->id])}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group ">
                <label for="0" >Nom</label>
                    <input id="nom" type="text" value="{{$cat->id? $cat->nom: 'Vous devez preciser le Id'}}" class="form-control  {{ $errors->has('nom') ? ' is-invalid': ' ' }}" name="nom"  autofocus>
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
