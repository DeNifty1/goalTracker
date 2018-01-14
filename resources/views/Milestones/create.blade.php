@extends('layouts.app')

@section('content')
    <h1>Create Milestone</h1>
    <form method="POST" action="/milestones">
        <input type="text" name="milestoneName" id="milestoneName" />
        {{ csrf_field() }}
        <input type="submit" value="Save Milestone" />
    </form>
@endsection