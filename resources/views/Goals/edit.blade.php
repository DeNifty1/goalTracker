@extends('layouts.app')

@section('content')
    <h1>Edit a Goal</h1>
        <form method="POST" action="/goals/{{$goal->id}}">
        <input type="text" name="goalName" id="goalName" value="{{$goal->goalName}}" />
        <select class="form-control" name="type_id">
        @foreach($types as $key => $value)
            <option value="{{$key}}">{{$value}}</option>
        @endforeach
        </select>
        {{ csrf_field() }}
        {{ method_field('PUT') }}
        <input type="submit" value="Save Goal" />
    </form>
@endsection