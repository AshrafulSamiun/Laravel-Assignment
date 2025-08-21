@extends('baseLayout')


@section('content')
    <div class="bg-grey-100 text-white-300 my-2 flex item-start justify-between">
        <p>his is dashboard view where users can see their recent activities and manage their profile.</p>
        <h2>{{ auth()->user()->name }}</h2>
        <h4> {{ auth()->user()->email }}</h4>
    </div>

@endsection