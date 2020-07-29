
@extends('layouts.app')

@section('content')


<div class="row">
<div class="col-3"></div>
<div class="col-6"><h2><strong> ENREGISTRER UNE CATEGORIE </strong> </strong></h2></div>
<div class="col-3"></div>
</div>
 <br>
<div class="row">
<div class="col-3"></div>
   
<div class="col-6">
<form method="post" action="/categories" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                <label for="0" >Nom</label>
                    <input id="nom" type="text" class="form-control  {{ $errors->has('nom') ? ' is-invalid': ' ' }}" name="nom"  autofocus>
                    @if ($errors->has('nom'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nom')}}</strong>
                        </span>
                    @endif
                    </div>
                
<button type="submit" class="btn btn-primary">
    Enregistrer
</button>
</form>

</div>

<div class="col-3"></div>
</div>
@endsection
