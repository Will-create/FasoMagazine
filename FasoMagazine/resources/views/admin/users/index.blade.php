@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des Utilisateurs</div>

                <div class="card-body">
                    <div class="list-group">
                        @foreach($users as $user)
                         <li class="list-item">{{$user->name}}-{{$user->email}}</li>
                        
                        @endforeach
                
                
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
