@extends('layouts.app')

@section('content')
    <h1>Progresses</h1>
    @if (count($progresses) > 0)
    <ul>
        @foreach($progresses as $progress)
            <li><a href="/progresses/{{$progress->id}}">{{$progress->progressName}}</a></li>
        @endforeach
    </ul>
    {{-- $progresses->links() Uncomment for pagination --}}
    @else
        <p>No progresses found!</p>
    @endif
    <a href="/progresses/create" class="btn btn-primary" role="button">Add Progress</a>
    <a href="{{url('api/progresses')}}" class="btn btn-primary" role="button">API</a>
@endsection