@extends('master')

@section('title')
    Welcome -- {{ Auth::user()->name }}
@stop

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="/stu/home"><button class="btn btn-info">Student Information</button></a>
                    </div>

                    <div class="panel-body">
                        <div class="personal-mes">
                            Student Number: {{ Auth::user()->id }}
                            <br />
                            Name: {{ Auth::user()->name }}
                            <br />
                            Gender: {{ Auth::user()->sex}}
                            <br />
                            Phone Number: {{ Auth::user()->phone}}
                            <br />
                            Grade: {{ Auth::user()->pro_class}}
                            <br />
                            Email: {{ Auth::user()->email}}
                            <hr />
                            <a href="/stu/edit"><button class="btn btn-primary">Edit</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
