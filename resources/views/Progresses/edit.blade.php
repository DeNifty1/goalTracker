@extends('layouts.app')

@section('content')
    <h1>Edit Progress</h1>
        <form method="POST" action="/progresses/{{$progress->id}}">
        <input type="text" name="progressName" id="progressName" value="{{$progress->progressName}}" />
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="submit" value="Save Progress" />
    </form>
@endsection