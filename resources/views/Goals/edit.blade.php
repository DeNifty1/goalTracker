@extends('layouts.app')

@section('content')
    <h1>Edit a Goal</h1>
    <form method="POST" action="/goals/{{$goal->id}}">
        <div class="form-group">
            <label for="goalName">Goal:</label>
            <input  class="form-control" type="text" name="goalName" id="goalName" value="{{$goal->goalName}}" />
        </div>
        <div class="form-group">
            <label for="goalDesc">Description:</label>
            <input  class="form-control" type="text" name="goalDesc" id="goalDesc" value="{{$goal->goalDesc}}" />
        </div>
        <div class="form-group">
            <label for="type_id">Type:</label>
            <select class="form-control" name="type_id">
            @foreach($types as $key => $value)
                <option value="{{$key}}">{{$value}}</option>
            @endforeach
            </select>
        </div>
        {{ csrf_field() }}
            {{ method_field('PUT') }}
            <input type="submit" value="Save Goal" />
    </form>
@endsection