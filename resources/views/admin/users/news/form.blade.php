
@extends('layouts.app')

@section('content')



<div class="row">
    <div class="col-4"></div>
    <h3>Enregistrer une Nouvelle</h3>
    <div class="col-4"></div>
</div>
<div class="row ml-4">
    
    <div class="col-3 ">
       
    </div>
    <div class="col-5">
    <form method="post" action="{{route('admin.news.store')}}" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group ">
                <label for="0" >Titre</label>
                    <input id="topic" type="text"  class="form-control  {{ $errors->has('topic') ? ' is-invalid': ' ' }}" name="topic"  autofocus>
                    @if ($errors->has('topic'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('topic') }}</strong>
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



