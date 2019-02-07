@extends('layouts.adminapp')
@section('content')

    <div class="row top-margin">
        <div class="col-md-6 offset-md-4">
            <h4>Create Student</h4>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-md-2">
            <form method="post" action="/create/student">
                @csrf
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" name="name" class="form-control" id="name" >
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label> JSS 1</label>
                    </div>
                    @foreach($jssOnes as $jssOne)
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="jss-one-{{$jssOne->id}}" name="studentclass" class="custom-control-input" value="{{$jssOne->id}}">
                        <label class="custom-control-label" for="jss-one-{{$jssOne->id}}">{{$jssOne->name}}</label>
                    </div>
                        @endforeach
                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label> JSS 2</label>
                    </div>
                    @foreach($jssTwos as $jssTwo)
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="jss-one-{{$jssTwo->id}}" name="studentclass" class="custom-control-input" value="{{$jssTwo->id}}">
                            <label class="custom-control-label" for="jss-one-{{$jssTwo->id}}">{{$jssTwo->name}}</label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label> JSS 3</label>
                    </div>
                    @foreach($jssThrees as $jssThree)
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="jss-one-{{$jssThree->id}}" name="studentclass" class="custom-control-input" value="{{$jssThree->id}}">
                            <label class="custom-control-label" for="jss-one-{{$jssThree->id}}">{{$jssThree->name}}</label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label> SS 1</label>
                    </div>
                    @foreach($ssOnes as $ssOne)
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="jss-one-{{$ssOne->id}}" name="studentclass" class="custom-control-input" value="{{$ssOne->id}}">
                            <label class="custom-control-label" for="jss-one-{{$ssOne->id}}">{{$ssOne->name}}</label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label> SS 2</label>
                    </div>
                    @foreach($ssTwos as $ssTwo)
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="jss-one-{{$ssTwo->id}}" name="studentclass" class="custom-control-input" value="{{$ssTwo->id}}">
                            <label class="custom-control-label" for="jss-one-{{$ssTwo->id}}">{{$ssTwo->name}}</label>
                        </div>
                    @endforeach
                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label> SS 1</label>
                    </div>
                    @foreach($ssThrees as $ssThree)
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="jss-one-{{$ssThree->id}}" name="studentclass" class="custom-control-input" value="{{$ssThree->id}}">
                            <label class="custom-control-label" for="jss-one-{{$ssThree->id}}">{{$ssThree->name}}</label>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-md-3 offset-md-5">
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>



            </form>
        </div>
    </div>
@endsection