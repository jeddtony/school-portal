@extends('layouts.adminapp')
@section('content')
    <div class="row big-top-margin">
        <div class="col-md-4 offset-md-4"><h4>Create New Subject </h4></div>
    </div>

    <div id="app">
    <div class="row">

        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <form method="post" action="/create/subject">
                        @csrf
                    <div class="form-group row">
                        <label for="subjectName" class="col-sm-2 col-form-label">Subject</label>
                        <div class="col-sm-10">
                            <input type="text" name="subjectName" class="form-control" id="subjectName" >
                        </div>
                    </div>
                        <div class="form-group row">
                            <label class="col-md-3">Category:</label>
                            <div class="col-md-8">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input  @click="hideView()" type="radio" id="junior-category" name="category" value="junior" class="custom-control-input">
                                <label class="custom-control-label" for="junior-category">Junior </label>
                            </div>
                            <div  @click="showView()" class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="senior-category" name="category" value="senior" class="custom-control-input">
                                <label class="custom-control-label" for="senior-category">Senior</label>
                            </div>
                            </div>
                        </div>
                        <div v-if="showSenior">
                        <div class="row">
                            <div class="col-md-7 offset-md-5">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="speciality[]" value="science" id="science">
                                        <label class="custom-control-label" for="science">Science</label>
                                    </div>
                                </div>

                            <div class="col-md-7 offset-md-5">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="speciality[]" value="commercial" id="commercial">
                                    <label class="custom-control-label" for="commercial">Commercial</label>
                                </div>
                            </div>
                             <div class="col-md-7 offset-md-5">
                                  <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" name="speciality[]" value="arts" id="arts">
                                <label class="custom-control-label" for="arts">Arts</label>
                            </div>
                      </div>
                        </div>
            </div>
                        <div class="col-md-4 offset-md-3">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                        </div>
            </div>

                </div>
            </div>

        <div class="col-md-3"></div>


    @endsection