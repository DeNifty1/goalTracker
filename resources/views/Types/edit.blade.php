@extends('layouts.app')

@section('content')
    <h1>Edit a Type</h1>
        <form method="POST" action="/types/{{$type->id}}">
        <input type="text" name="typeName" id="typeName" value="{{$type->typeName}}" />
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="submit" value="Save Type" />
    </form>
@endsection