@extends('layouts.app')

@section('content')
    <h1>Types</h1>
    @if (count($types) > 0)
    <ul>
        @foreach($types as $type)
            <li><a href="/types/{{$type->id}}">{{$type->typeName}}</a></li>
        @endforeach
    </ul>
    {{-- $types->links() Uncomment for pagination --}}
    @else
        <p>No types found!</p>
    @endif
    <a href="/types/create" class="btn btn-primary" role="button">Add Type</a>
    <a href="{{url('api/types')}}" class="btn btn-primary" role="button">API</a>
@endsection