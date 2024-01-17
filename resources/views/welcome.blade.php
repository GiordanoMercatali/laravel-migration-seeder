@extends('layouts.app')

@section('content')
    <h1>Trains</h1>
    <ul>
        @foreach ($trains as $train)
            <li>
                <span>The train from {{$train->start_station}} heading to {{$train->arrival_station}} is now arriving </span>
                @if ($train->is_on_time)
                    <span>on time</span>
                @else
                    <span>with a delay</span>
                @endif
                <span> at the platform.</span>
            </li>
        @endforeach
    </ul>
@endsection