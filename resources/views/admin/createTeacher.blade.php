@extends('layouts.adminapp')
@section('content')
    <div class="row top-margin">
        <div class="col-md-6 offset-md-4">
            <h4>Create Teacher</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form method="post" action="/create/teacher">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="email" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="password" >
                    </div>
                </div>

                <div class="form-group row">
                <label class="col-md-2">Assign Subjects:</label>
                <div class="col-md-8">
                    @foreach($subjects as $subject)
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input type="checkbox" class="custom-control-input" name="subject[]" value="{{$subject->id}}" id="subject{{$subject->id}}">
                        <label class="custom-control-label" for="subject{{$subject->id}}">{{$subject->name}}</label>
                    </div>
                        @endforeach

                </div>
                </div>
                <div class="row">
                    <div class="col-md-4 offset-md-4">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    @endsection