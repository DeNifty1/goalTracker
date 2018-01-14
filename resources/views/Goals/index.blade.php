@extends('layouts.app')

@section('content')
    <h1>Everyones Goals</h1>
    @if (count($goals) > 0)
    <ul>
        @foreach($goals as $goal)
            <li><a href="/goals/{{$goal->id}}">{{$goal->goalName}} ({{$goal->user->name}})</a></li>
        @endforeach
    </ul>
    {{-- $goals->links() Uncomment for pagination --}}
    @else
        <p>No Goals found!</p>
    @endif
    <a href="/goals/create" class="btn btn-primary" role="button">Add Goal</a>
    <a href="{{url('api/goals')}}" class="btn btn-primary" role="button">API</a>
@endsection