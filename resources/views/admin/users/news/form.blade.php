
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
                            <label for="contact" >Catégorie</label>
                            <select name="categorie_id" class="form-control {{ $errors->has('categorie_id') ? ' is-invalid': ' ' }}">
                            <option  >chosir une catégorie de Nouvelles</option>
                            <?php $i=0; ?>
                           @foreach($categories as $categorie)
                           <?php $i++; ?>
                            <option  value="{{$categorie->id}}">{{$i}}. {{$categorie->nom}}</option>
                            @endforeach
                            </select>
                                @if ($errors->has('categorie_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('categorie_id') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                        <div class="form-group ">
                            <label for="contact" >Provinces</label>
                            <select name="province_id" class="form-control {{ $errors->has('province_id') ? ' is-invalid': ' ' }}">
                            <option  >chosir une province</option>
                            <?php $i=0; ?>
                           @foreach($provinces as $province)
                           <?php $i++; ?>
                            <option  value="{{$province->id}}">{{$i}}. {{$province->nom}}--------->({{$province->chefLieu}})</option>
                            @endforeach
                            </select>
                                @if ($errors->has('province_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('province_id') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        <div class="form-group ">
                            <label for="contact" >Regions</label>
                            <select name="region_id" class="form-control {{ $errors->has('region_id') ? ' is-invalid': ' ' }}">
                            <option  >chosir une Region</option>
                            <?php $i=0; ?>
                           @foreach($regions as $region)
                           <?php $i++; ?>
                            <option  value="{{$region->id}}">{{$i}}. {{$region->nom}}--------->({{$region->chefLieu}})</option>
                            @endforeach
                            </select>
                                @if ($errors->has('region_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('region_id') }}</strong>
                                    </span>
                                @endif
                            
                        </div>
                        
                <div class="form-group ">
                <label for="0" >Titre</label>
                    <input id="topic" type="text"  class="form-control  {{ $errors->has('topic') ? ' is-invalid': ' ' }}" name="topic"  autofocus>
                    @if ($errors->has('topic'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('topic') }}</strong>
                        </span>
                    @endif
                    </div>
                    <div class="form-group ">
                            <label for="contact" >Auteur</label>
                            <select name="auteur_id" class="form-control {{ $errors->has('auteur_id') ? ' is-invalid': ' ' }}">
                            <option >chosir un auteur de Nouvelles</option>
                            <?php $i=0; ?>
                           @foreach($auteurs as $auteur)
                           <?php $i++; ?>
                            <option  value="{{$auteur->id}}">{{$i}}. {{$auteur->name}}</option>
                            @endforeach
                            </select>
                                @if ($errors->has('auteur_id'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('auteur_id') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

                    
                    <div class="custom-file">
                            <input type="file" name="image"  class="custom-file-input {{ $errors->has('image') ? ' is-invalid': ' ' }}" id="validatedCustomFile">
                            <label class="custom-file-label" for="validatedCustomFile">Choisir une image...</label>
                            @if ($errors->has('image'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('image') }}</strong>
                                </span>
                            @endif
                        </div><br><br>
                        <div class="form-group">
                        <label for="body">Votre Texte ici</label>
                        
                        <textarea name="body" id="body" cols="30" rows="10" class="form-control {{ $errors->has('body') ? ' is-invalid': ' ' }}"></textarea>
                        @if ($errors->has('body'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('body') }}</strong>
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




