@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create New Listing <span class="pull-right"><a href="/dashboard" class="btn btn-danger btn-xs">Go Back</a></span> </div>

                <div class="panel-body">
                    {!! Form::open(['action' => 'ListingController@store', 'method'=>'POST']) !!}
                    {{Form::bsText('name', '', ['placeholder'=>'Company name'])}}
                    {{Form::bsText('email', '', ['placeholder'=>'contact email'])}}
                    {{Form::bsText('phone', '', ['placeholder'=>'enter phone'])}}
                    {{Form::bsText('website','',['placeholder'=>'enter website'])}}
                    {{Form::bsText('address', '', ['placeholder'=>'business address'])}}
                    {{Form::bsTextArea('bio','',['placeholder'=>'About business'])}}
                    {{Form::bsSubmit('Submit')}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection