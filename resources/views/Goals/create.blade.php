@extends('layouts.app')

@section('content')
    <h1>Create a Goal</h1>
    <form method="POST" action="/goals">
        <div class="form-group">
            <label for="goalName">Goal:</label>
            <input  class="form-control" type="text" name="goalName" id="goalName" />
        </div>
        <div class="form-group">
            <label for="goalDesc">Description:</label>
            <input  class="form-control" type="text" name="goalDesc" id="goalDesc" />
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
        <input type="submit" value="Save Goal" />
    </form>
@endsection