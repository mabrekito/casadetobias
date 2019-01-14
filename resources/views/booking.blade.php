@extends('layouts.app')

@section('title')
    Gallery of Photos of Casa De Tobias Mountain Resort - Contact Us
@endsection

@section('content')
    <div class="container mt-4">
        @include('inc.messages')
        {!! Form::open(['url' => 'booking/summary']) !!}
        <div class="form-group">
            <div class="form-group">
                {{Form::label('email', 'E-Mail Address')}}
                {{Form::text('email', '',['class'=> 'form-control','placeholder' => 'Enter email'])}}

            </div><div class="form-group">
                {{Form::label('title', 'Title')}}
                {{Form::select('title', ['Mr' => 'Mr', 'Mrs' => 'Mrs'],'')}}
            </div>
            <div class="form-group">

                {{Form::label('firstName', 'First Name')}}
                {{Form::text('firstName','',['class'=> 'form-control','placeholder' => 'Enter first name'])}}
            </div>
            <div class="form-group">
                {{Form::label('lastName', 'Last Name')}}
                {{Form::text('lastName', '',['class'=> 'form-control','placeholder' => 'Enter last name'])}}
            </div>
            <div class="form-group">
                {{Form::label('phoneNumber', 'Phone Number')}}
                {{Form::number('phoneNumber', '',['class'=> 'form-control','placeholder' => 'Enter phone number'])}}
            </div>
            <div class="form-group">
                {{Form::label('address', 'Address')}}
                {{Form::textarea('address', '',['class'=> 'form-control','placeholder' => 'Enter address'])}}
            </div>
            <div class="form-group">
                {{Form::label('roomsQty', 'Number of Room(s)')}}
                {{Form::select('roomsQty', ['1','2','3','4','5'])}}
            </div>
            <div class="form-group">
                {{Form::label('guest', 'Guest(s)')}}
                {{Form::select('guest', ['1','2','3','4'])}}
            </div>
            <div class="form-group">
                {{Form::label('senior', 'Senior(s)')}}
                {{Form::select('senior', ['0','1','2','3','4'])}}
            </div>
        </div>
        <div class="form-group">
            {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
        </div>
            {!! Form::close() !!}
    </div>
@endsection