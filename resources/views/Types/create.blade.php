@extends('layouts.app')

@section('content')
    <h1>Create a Type</h1>
    <form method="POST" action="/types">
        <input type="text" name="typeName" id="typeName" />
        {{ csrf_field() }}
        <input type="submit" value="Save Type" />
    </form>
@endsection