@extends('layouts.admin_panel')

@section('content')
    

    <div class="container">
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
           
                <tr>
                    <td> {{$user->id}} </td>
                    <td><i class="fa fa-user fa-lg"></i> - {{$user->firstname}} {{$user->lastname}} </td>
                    <td> {{$user->phone}} </td>
                    <td> {{$user->email}} </td>
                    <td> XXXX</td>

                </tr>
            @endforeach
             

            </tbody>
        </table>


    </div>

@endsection