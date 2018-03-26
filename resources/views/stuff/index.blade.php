@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card card-default">
                    <div class="col-lg-offset-6">
                        <div class="card-header"><h1>Stuff</h1></div>
                    </div>

                    <table class="table">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>City</th>
                            <th>Email</th>
                            <th>Position</th>
                            <th>Created on</th>
                            <th>Manage</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach ($stuffs as $stuff)
                            <tr>
                                <td> {{ $stuff->id }} </td>
                                <td> {{ $stuff->first_name }}</td>
                                <td> {{ $stuff->last_name }} </td>
                                <td> {{ $stuff->city }} </td>
                                <td> {{ $stuff->email }} </td>
                                <td> {{ $stuff->role}}</td>
                                <td> {{ $stuff->created_at }} </td>
                                <td>
                                    <a href="{{action('StuffsController@edit',$stuff->id)}}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{action('StuffsController@destroy', $stuff->id)}}" method="post">
                                        {{csrf_field()}}
                                        <input name="_method" type="hidden" value="DELETE">
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection