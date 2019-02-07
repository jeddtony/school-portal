@extends('layouts.teacherapp')
@section('content')
<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-9">
        <h4>Enter {{ $subject->name }} scores for SS {{$studentclass->level}} </h4>
    </div>
</div>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            @if($recordExist)
                <form method="post" action="/subject/{{$subject->id}}/{{Config::get('myVariables.term')}}/class/{{$studentclass->id}}">
                    @csrf
                    @method('PATCH')
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" colspan="2">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Mid Term</th>
                            <th scope="col">Exam</th>
                            <th scope="col">Total</th>
                            <th scope="col">Comments</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $counter = 0;

                        ?>
                        @foreach($records as $record)
                            <tr>
                                <th scope="row">{{++$counter}}</th>
                                <td colspan="2">
                                    <input name="studentid[]" value="{{$record->id}}" hidden>
                                    {{$record->student->name}}</td>
                                <td>Male</td>
                                <td>
                                    <input name="assessment[]" value="{{$record->assessment}}"> </td>
                                <td>
                                    <input name="exam[]" value="{{$record->exam}}"> </td>
                                <td>{{$record->total}}</td>
                                <td>{{$record->comment}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>
                @else
                <form method="post" action="/subject/{{$subject->id}}/{{Config::get('myVariables.term')}}/class/{{$studentclass->id}}">
                    @csrf
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col" colspan="2">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Assessment</th>
                            <th scope="col">Exam</th>
                            <th scope="col">Total</th>
                            <th scope="col">Comments</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $counter = 0;

                        ?>
                        @foreach($records as $record)
                            <tr>
                                <th scope="row">{{++$counter}}</th>
                                <td colspan="2">
                                    <input name="studentid[]" value="{{$record->id}}" hidden> {{$record->name}}</td>
                                <td>Male</td>
                                <td> <input name="assessment[]" value="{{$record->assessment}}"></td>
                                <td><input name="exam[]" value="{{$record->exam}}"> </td>
                                <td>{{$record->total}}</td>
                                <td>{{$record->comment}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">submit</button>
                </form>

            @endif
    </div>
</div>
</div>
    @endsection
