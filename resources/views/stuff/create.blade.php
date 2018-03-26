@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header"><h1>Stuff Register</h1></div>

                    <form method="post" action="{{ route('stuff.store')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <label for="first_name">First Name:</label>
                        <div class="input-group">
                            <input type="text" name="first_name" id="first_name" class="form-control">
                        </div>

                        <label for="last_name">Last Name:</label>
                        <div class="input-group">
                            <input type="text" name="last_name" id="last_name" class="form-control">
                        </div>

                        <label for="email">Email:</label>
                        <div class="input-group">
                            <input type="text" name="email" id="email" class="form-control">
                        </div>

                        <label for="city">City:</label>
                        <div class="input-group">
                            <input type="text" name="city" id="city" class="form-control">
                        </div>

                        <label for="role">Position:</label>
                        <div class="input-group">
                            <select name="role" class="form-control">
                                @foreach ($positions as $position)
                                    <option value="{{$position->id}}">
                                        {{$position->role}}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <br>
                        <div class="input-group">
                            <input class="btn btn-primary" type="submit" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection