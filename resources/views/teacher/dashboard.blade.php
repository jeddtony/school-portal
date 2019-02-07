@extends('layouts.teacherapp')
@section('content')

    {{--{{dd('the date should have shown')}}--}}
    <div class="row">
        @foreach($subjects as $subject)
            <div class="col-md-12">
              <h4>  Enter Results for {{$subject->name}}</h4>
            </div>
        @if($subject->category == 'junior')
        <div class="col-md-3 offset-md-1">
            <div class="card">
                <h5 class="card-header">JSS 1</h5>
                <div class="card-body">
                    <div class="btn-group btn-lg " role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-light" :disabled="createRecord" @click="toggleView">New Record</button>
                        <button type="button" class="btn btn-light" :disabled="editRecord" @click="toggleView">Edit Record</button>
                    </div>
                    @foreach($jssOnes as $jssOne)
                    <a href="/subject/{{$subject->id}}/{{Config::get('myVariables.term')}}/class/{{$jssOne->id}}" class="btn btn-primary">{{$jssOne->name}}</a>
                        <br> <br>
                        @endforeach
                </div>
            </div>
        </div>
                        {{--DISPLAY CARD FOR JSS TWO--}}
            <div class="col-md-3 offset-md-1">
                <div class="card">
                    <h5 class="card-header">JSS 2</h5>
                    <div class="card-body">
                        <div class="btn-group btn-lg " role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-light" :disabled="createRecord" @click="toggleView">New Record</button>
                            <button type="button" class="btn btn-light" :disabled="editRecord" @click="toggleView">Edit Record</button>
                        </div>
                        @foreach($jssTwos as $jssTwo)
                            <a href="/subject/{{$subject->id}}/{{Config::get('myVariables.term')}}/class/{{$jssTwo->id}}" class="btn btn-primary">
                                {{$jssTwo->name}}
                            </a>
                            <br> <br>
                            @endforeach
                    </div>
                </div>
            </div>
                    {{--DISPLAY FOR JSS THREE--}}
                <div class="col-md-3 offset-md-1">
                <div class="card">
                   <h5 class="card-header">JSS 3</h5>
                    <div class="card-body">
                        <div class="btn-group btn-lg " role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-light" :disabled="createRecord" @click="toggleView">New Record</button>
                            <button type="button" class="btn btn-light" :disabled="editRecord" @click="toggleView">Edit Record</button>
                        </div>
                @foreach($jssThrees as $jssThree)
                    <a href="/subject/{{$subject->id}}/{{Config::get('myVariables.term')}}/class/{{$jssThree->id}}" class="btn btn-primary">
                        {{$jssThree->name}}
                    </a>
                    <br> <br>
                        @endforeach
                        </div>
                </div>

                    </div>

            @else
            @if($subject->science)

            <div class="col-md-3 offset-md-1">
                <div class="card">
                    <h5 class="card-header">Science</h5>
                    <div class="card-body">
                        <div class="btn-group btn-lg " role="group" aria-label="Basic example">
                            <button type="button" class="btn btn-light" :disabled="createRecord" @click="toggleView">New Record</button>
                            <button type="button" class="btn btn-light" :disabled="editRecord" @click="toggleView">Edit Record</button>
                        </div>
                        @foreach($sciences as $science)
                            <a href="/subject/{{$subject->id}}/{{Config::get('myVariables.term')}}/class/{{$science->id}}" class="btn btn-primary">
                               SS {{$science->level}}
                            </a>
                            <br> <br>
                        @endforeach
                    </div>
                </div>

            </div>

                @endif

                @if($subject->commercial)

                    <div class="col-md-3 offset-md-1">
                        <div class="card">
                            <h5 class="card-header">Commercial</h5>
                            <div class="card-body">
                                <div class="btn-group btn-lg " role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-light" :disabled="createRecord" @click="toggleView">New Record</button>
                                    <button type="button" class="btn btn-light" :disabled="editRecord" @click="toggleView">Edit Record</button>
                                </div>
                                @foreach($commercials as $commercial)
                                    <a href="/subject/{{$subject->id}}/{{Config::get('myVariables.term')}}/class/{{$commercial->id}}" class="btn btn-primary">
                                        {{$commercial->level}}
                                    </a>
                                    <br> <br>
                                @endforeach
                            </div>
                        </div>

                    </div>

                @endif

                @if($subject->arts)

                    <div class="col-md-3 offset-md-1">
                        <div class="card">
                            <h5 class="card-header">Arts</h5>
                            <div class="card-body">
                                <div class="btn-group btn-lg " role="group" aria-label="Basic example">
                                    <button type="button" class="btn btn-light" :disabled="createRecord" @click="toggleView">New Record</button>
                                    <button type="button" class="btn btn-light" :disabled="editRecord" @click="toggleView">Edit Record</button>
                                </div>
                                @foreach($arts as $art)
                                       <a href="/subject/{{$subject->id}}/{{Config::get('myVariables.term')}}/class/{{$art->id}}" class="btn btn-primary">
                                           {{$art->level}}
                                       </a>
                                    <br> <br>
                                @endforeach
                            </div>
                        </div>

                    </div>

                @endif
            @endif
            @endforeach
            </div>

    @endsection