@extends('layouts.app')

@section('content')
    <h1>Goals</h1>
    @if (count($goals) > 0)
    <ul>
        @foreach($goals as $goal)
            <li><a href="/goals/{{$goal->goalId}}">{{$goal->goalName}}</a></li>
        @endforeach
    </ul>
    {{$goals->links()}}
    @else
        <p>No Goals found!</p>
    @endif
@endsection