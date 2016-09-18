@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                  <div class="row">
                    <div class="col-md-8">
                         <h2>Dashboard</h2>
                    </div>
                    <div class="col-md-4 text-right">
                      <a href="{{ url('/logout') }}" type="button" class="btn btn-default">Logout</a>
                    </div>
                  </div>
                  
                </div>
                <div class="panel-body">
                  <table class="table table-striped">
                    <thead><th>Name</th><th>Email</th><th>Entry Date</th></thead>
                      <tbody>
                        @foreach ($users as $user)
                          <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at }} </td> 
                          </tr>
                        @endforeach
                      </tbody>
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
