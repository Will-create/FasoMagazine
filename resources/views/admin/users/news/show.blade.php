@extends('layouts.app')

@section('content')

<section id="main-content">

        <div class="section-title"  style="max-width: 540px;">
 
          <h3><strong>{{$new->topic}} </strong></strong></h3>
          <h3><strong>{{$new->body}}</strong></strong></h3>
        </div>
        
        <div class="card md-12" style="max-width: 960px;">
        <div class="col-lg-3 align-items-center" data-aos="fade-left">
            
        <img src="{{asset('storage').'/'.$new->image}}" style="width:200px;height:200px;" class="bf5 "> 
                        
          </div>
          <div class="col-lg-6 col-md-6 pt-6 pt-lg-6" data-aos="fade-right">
              <h6><p class="card-text"><strong>user    : </strong>{{$new->user->name}}</p></h6>
              <h6><p class="card-text"><strong>categorie        : </strong>{{$new->categorie->nom}}</p></h6>
              <h6><p class="card-text"><strong>region         : </strong>{{$new->region->nom}}</p></h6>
              <h6><p class="card-text"><strong>province       : </strong>{{$new->province->nom}}</p></h6>
             
            </div>                    
        </div>
  
        <a href="{{route('admin.news.edit',['news'=>$new->id])}}" class="btn btn-warning">Editer</a>
    </div>
</section>
@endsection







