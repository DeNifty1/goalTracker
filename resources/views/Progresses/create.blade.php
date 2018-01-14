@extends('layouts.app')

@section('content')
    <h1>Create Progress</h1>
    <form method="POST" action="/progresses">
        <input type="text" name="progressName" id="progressName" />
        {{ csrf_field() }}
        <input type="submit" value="Save Progress" />
    </form>
@endsection