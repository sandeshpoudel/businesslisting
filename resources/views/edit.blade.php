@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Listing <span class="pull-right"><a href="/dashboard" class="btn btn-danger btn-xs">Go Back</a></span> </div>

                <div class="panel-body">
                    {!! Form::open(['action' => ['ListingController@update', $listing->id], 'method'=>'POST']) !!}
                    {{Form::bsText('name', $listing->name , ['placeholder'=>'Company name'])}}
                    {{Form::bsText('email', $listing->email, ['placeholder'=>'contact email'])}}
                    {{Form::bsText('phone', $listing->phone, ['placeholder'=>'enter phone'])}}
                    {{Form::bsText('website',$listing->website,['placeholder'=>'enter website'])}}
                    {{Form::bsText('address', $listing->address, ['placeholder'=>'business address'])}}
                    {{Form::bsTextArea('bio',$listing->bio,['placeholder'=>'About business'])}}
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::bsSubmit('Update')}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection