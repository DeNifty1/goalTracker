@extends('layouts.app')

@section('content')
    <h1>{{$milestone->milestoneName}}</h1>
    <div class="handwritten">
        <p>Created: {{$milestone->created_at}}</p>
        <p>Modified: {{$milestone->updated_at}}</p>
        <a href="/milestones/{{$milestone->id}}/edit" class="btn btn-primary" role="button">Edit Milestone</a>
        <a href="{{url('api/milestones', [$milestone->id]) }}" class="btn btn-primary" role="button">API</a>

        <form method="POST" action="/milestones/{{$milestone->id}}" class="pull-right">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" class="btn btn-danger delete-user" value="Delete Milestone">
        </form>
    </div>
@endsection