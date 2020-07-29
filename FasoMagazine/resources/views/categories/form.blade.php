
@include('include.head')

<br>
<br>
<br>
<section id="main-content">
 <h2><strong> Enregistrer une categorie</strong> </strong></h2>
 <br>
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                <div class="card-body">
                <form method="post" action="/categories" enctype="multipart/form-data">
                @csrf
                <div class="form-group ">
                <label for="0" >Nom</label>
                    <input id="nom" type="text" class="form-control  {{ $errors->has('nom') ? ' is-invalid': ' ' }}" name="nom"  autofocus>
                    @if ($errors->has('nom'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('nom') }}</strong>
                        </span>
                    @endif
                    </div>
                    </div>
<button type="submit" class="btn btn-primary">
    Enregistrer
</button>
</form>
</div>
</div>
</div>
</div>
@include('include.foot')
