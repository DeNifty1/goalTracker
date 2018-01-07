@extends('layouts.app')

@section('content')
    <h1>Create a Goal</h1>
        <form method="POST" action="/goals">
        <input type="text" name="goalName" id="goalName" />
        {{ csrf_field() }}
        <input type="submit" value="Save Goal" />
    </form>
@endsection