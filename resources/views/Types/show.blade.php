@extends('layouts.app')

@section('content')
    <h1>{{$type->typeName}}</h1>
    <div class="handwritten">
        <p>Created: {{$type->created_at}}</p>
        <p>Modified: {{$type->updated_at}}</p>
        <a href="/types/{{$type->id}}/edit" class="btn btn-primary" role="button">Edit Type</a>
        <a href="{{url('api/types', [$type->id]) }}" class="btn btn-primary" role="button">API</a>

        <form method="POST" action="/types/{{$type->id}}" class="pull-right">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" class="btn btn-danger delete-user" value="Delete Type">
        </form>
    </div>
@endsection