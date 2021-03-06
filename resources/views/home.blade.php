@extends('layouts.app')

@section('content')
    <h1>{{$user->name}}'s Goals</h1>
    @if (count($user->goals) > 0)
    <ul>
        @foreach($user->goals as $goal)
            <li><a href="/goals/{{$goal->id}}">{{$goal->goalName}}</a></li>
        @endforeach
    </ul>
    {{-- $goals->links() Uncomment for pagination --}}
    @else
        <p>No Goals found!</p>
    @endif
    <a href="/goals/create" class="btn btn-primary" role="button">Add Goal</a>
    <a href="{{url('api/goals')}}" class="btn btn-primary" role="button">API</a>
@endsection