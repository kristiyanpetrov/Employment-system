@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header"><h1>Position</h1></div>

                    <form method="post" action="{{ route('position.store')}}" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <label for="role">Position Name:</label>
                        <div class="input-group">
                            <input type="text" name="role" id="role" class="form-control">
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