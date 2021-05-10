@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="panel-heading">Dashboard <span class="pull-right"><a href="/listings/create" class="btn btn-success btn-xs">Add New Listing</a></span> </div>

            <div class="panel-body">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <h3>Your Listings</h3>
                @if (count($listings))
                    <table class="table table-striped">
                        <tr>
                            <th>Company</th>
                            <th></th>
                            <th></th>
                        </tr>
                        @foreach ($listings as $listing )
                            <tr>
                                <td>{{$listing->name}}</td>
                                <td><a href="/listings/{{$listing->id}}/edit" class="pull-right btn btn-primary btn-xs">Edit</a></td>
                                <td>
                                {!! Form::open(['action' => ['ListingController@destroy', $listing->id], 'method'=>'POST', 'class'=>'pull-left', 'onsubmit'=>'return confirm("Are You sure?")']) !!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::bsSubmit('Delete',['class'=>'btn btn-danger btn-xs'] )}}
                                {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        @else
                        <p>No listing found for this user.</p>
                    </table>
                @endif
                
            </div>
        </div>
    </div>
</div>

@endsection
