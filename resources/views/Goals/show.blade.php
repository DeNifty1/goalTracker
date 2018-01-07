@extends('layouts.app')

@section('content')
    <h1>{{$goal->goalName}}</h1>
    <div class="handwritten">
        <p>Created: {{$goal->created_at}}</p>
        <p>Modified: {{$goal->updated_at}}</p>
        <a href="/goals/create" class="btn btn-primary" role="button">Edit Goal</a>

        <form method="POST" action="/goals/{{$goal->id}}" class="pull-right">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" class="btn btn-danger delete-user" value="Delete Goal">
        </form>
    </div>
@endsection