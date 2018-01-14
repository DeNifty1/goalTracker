@extends('layouts.app')

@section('content')
    <h1>{{$progress->progressName}}</h1>
    <div class="handwritten">
        <p>Created: {{$progress->created_at}}</p>
        <p>Modified: {{$progress->updated_at}}</p>
        <a href="/progresses/{{$progress->id}}/edit" class="btn btn-primary" role="button">Edit Progress</a>
        <a href="{{url('api/progresses', [$progress->id]) }}" class="btn btn-primary" role="button">API</a>

        <form method="POST" action="/progresses/{{$progress->id}}" class="pull-right">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <input type="submit" class="btn btn-danger delete-user" value="Delete Progress">
        </form>
    </div>
@endsection