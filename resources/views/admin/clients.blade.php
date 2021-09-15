@extends('layouts.admin_panel')

@section('content')
    

    <div class="container bg-white p-5">
        <h2 class="mb-3">Clients </h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Client ID</th>
                    <th>Name</th>
                    <th> Phone</th>
                    <th> Email</th>
                    <th> Orders</th>
              </tr>
            </thead>
            <tbody>
         @foreach ($users as $user)
            @if ($user->is_admin !== 1)      
                <tr>
                    <td> {{$user->id}} </td>
                    <td><i class="fa fa-user fa-lg"></i> - {{$user->firstname}} {{$user->lastname}} </td>
                    <td> <i class="fas fa-phone"></i>  {{$user->phone}}   </td>
                    <td> {{$user->email}} </td>
                    <td> {{$user->orders->count()}}  <i class="fas fa-list-alt"></i></td>
                </tr>
             @endif
         @endforeach
             

            </tbody>
        </table>


    </div>

@endsection