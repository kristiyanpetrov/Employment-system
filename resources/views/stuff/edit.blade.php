@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header"><h1>Edit Page</h1></div>

                    <form method="post" action="{{ route('stuff.update', ['stuffs' => $stuffs->id])}}"
                          enctype="multipart/form-data">
                        {{ csrf_field() }}
                        {{ method_field('PATCH') }}

                        <label for="first_name">First Name:</label>
                        <div class="input-group">
                            <input type="text" name="first_name" id="first_name" class="form-control"
                                   value="{{ $stuffs->first_name }}">
                        </div>

                        <label for="last_name">Last Name:</label>
                        <div class="input-group">
                            <input type="text" name="last_name" id="last_name" class="form-control"
                                   value="{{ $stuffs->last_name }}">
                        </div>

                        <label for="email">Email:</label>
                        <div class="input-group">
                            <input type="text" name="email" id="email" class="form-control"
                                   value="{{ $stuffs->email }}">
                        </div>

                        <label for="city">City:</label>
                        <div class="input-group">
                            <input type="text" name="city" id="city" class="form-control" value="{{ $stuffs->city }}">
                        </div>

                        <label for="role">Position</label>
                        <div class="form-group">
                            <select name="role" class="form-control">
                                @foreach($positions as $position)
                                    <option value="{{ $position->id }}">
                                        {{ $position->role }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group">
                            <input class="btn btn-primary" type="submit" value="Confirm">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection