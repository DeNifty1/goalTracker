@extends('layouts.app')

@section('content')
    <h1>Milestones</h1>
    @if (count($milestones) > 0)
    <ul>
        @foreach($milestones as $milestone)
            <li><a href="/milestones/{{$milestone->id}}">{{$milestone->milestoneName}}</a></li>
        @endforeach
    </ul>
    {{-- $milestones->links() Uncomment for pagination --}}
    @else
        <p>No Milestones found!</p>
    @endif
    <a href="/milestones/create" class="btn btn-primary" role="button">Add Milestone</a>
    <a href="{{url('api/milestones')}}" class="btn btn-primary" role="button">API</a>
@endsection