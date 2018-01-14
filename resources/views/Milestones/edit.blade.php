@extends('layouts.app')

@section('content')
    <h1>Edit Milestone</h1>
        <form method="POST" action="/milestones/{{$milestone->id}}">
        <input type="text" name="milestoneName" id="milestoneName" value="{{$milestone->milestoneName}}" />
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="submit" value="Save Milestone" />
    </form>
@endsection