@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Liste des Utilisateurs</div>

                <div class="card-body">
                <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead class="entete">
        <th>Numero</th>
        <th>NOM</th>
        <th>EMAil</th>
        <th>Roles</th>
        </thead>
        <tbody>
        <?php $i=0; ?>
        @foreach($users as $user)
        <?php $i++; ?>
        <tr>
        <td>{{$i}}</td>
        <td>{{$user->name}}</td>
        <td>{{$user->email}}</td>
        <td>@foreach($user->roles as $user->role) <li>{{$user->role->name}}</li>@endforeach </td>

        </tr>
        @endforeach
        </tbody>
    </table>
    </div>
    
    
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
