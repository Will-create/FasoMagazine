@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-4"></div>
    <h3>Modifier une nouvelle</h3>
    <div class="col-4"></div>
</div>
<div class="row ml-4">
    
    <div class="col-3 ">
       
    </div>
    <div class="col-5">
    <form method="post" action="{{route('admin.news.update',['news'=>$new->id])}}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group ">
                <label for="0" >Titre</label>
                    <input id="topic" type="text" value="{{$new->topic}}" class="form-control  {{ $errors->has('topic') ? ' is-invalid': ' ' }}" name="topic"  autofocus>
                    @if ($errors->has('topic'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('topic') }}</strong>
                        </span>
                    @endif
                    </div>
                    <div class="form-group ">
                            <label for="0" >contenu</label>
                             
                            <textarea name="body"  cols="30" rows="10" value="{{$new->body}}" class="form-control  {{ $errors->has('body') ? ' is-invalid': ' ' }}" autofocus></textarea>
                                @if ($errors->has('body'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('body') }}</strong>
                                    </span>
                                @endif
                        </div>

                        
         
                  <div class="custom-file row">
                        <label class="custom-file-label" for="validatedCustomFile">Choisir une photo...</label>
                        <div class="col">
                        <input type="file" name="image" value="{{$new->image}}"  class="custom-file-input {{ $errors->has('image') ? ' is-invalid': ' ' }}" id="validatedCustomFile" >
                        @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                        @endif
                      </div>
                      </div>
                      <br>

                        <div class="form-group ">
                      <label for="contact" >user</label>
                      <select name="user_id" class="form-control">
                      <option value="0" >chosir un user</option>
                      <?php $i=0; ?>
                     @foreach($users as $user)
                     <?php $i++; ?>
                      <option  value="{{$user->id}}"{{$new->user_id == $user->id ? 'selected':''}}>{{$i}}. {{$user->name}}</option>
                      @endforeach
                      </select>
                          @if ($errors->has('user_id'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('user_id') }}</strong>
                              </span>
                          @endif
                      
                  </div>

                  <div class="form-group ">
                      <label for="contact" >Categorie</label>
                      <select name="categorie_id" class="form-control">
                      <option value="0" >chosir une categorie</option>
                      <?php $i=0; ?>
                     @foreach($categories as $categorie)
                     <?php $i++; ?>
                      <option  value="{{$categorie->id}}"{{$new->categorie_id == $categorie->id ? 'selected':''}}>{{$i}}. {{$categorie->nom}}</option>
                      @endforeach
                      </select>
                          @if ($errors->has('categorie_id'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('categorie_id') }}</strong>
                              </span>
                          @endif
                      
                  </div>

                  <div class="form-group ">
                      <label for="contact" >Region</label>
                      <select name="region_id" class="form-control">
                      <option value="0" >chosir une region</option>
                      <?php $i=0; ?>
                     @foreach($regions as $region)
                     <?php $i++; ?>
                      <option  value="{{$region->id}}" {{$new->region_id == $region->id ? 'selected':''}}>{{$i}}. {{$region->nom}}</option>
                      @endforeach
                      </select>
                          @if ($errors->has('region_id'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('region_id') }}</strong>
                              </span>
                          @endif
                      
                  </div>


                    <div class="form-group ">
                      <label for="contact" >Province</label>
                      <select name="province_id" class="form-control">
                      <option value="0" >chosir une province</option>
                      <?php $i=0; ?>
                     @foreach($provinces as $province)
                     <?php $i++; ?>
                      <option  value="{{$province->id}}" {{$new->province_id == $province->id ? 'selected':''}}>{{$i}}. {{$province->nom}}</option>
                      @endforeach
                      </select>
                          @if ($errors->has('province_id'))
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $errors->first('province_id') }}</strong>
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
