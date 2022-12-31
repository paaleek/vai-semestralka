@extends('layouts.main')
@section('title', 'Ghydeout | Fora')

@section('content')

    <div class="container bg-dark mt-2 pt-2">
        <div class="row">
            <div class="col-md-5 mb-2">
                @if(Auth::check())
                    <a href="{{ @route('forums.create') }}" class="btn btn-outline-danger">Pridať TOPIC</a>
                @else
                <div>Pre pridávanie článku sa <a class="log_in" href="{{ @route('login') }}">prihlás</a></div>
                @endif

            </div>
        </div>

        @foreach($forums as $forum)
        <div class="row ml-1">

            <a class="topic animated slideInRight" href="{{ route('forums.show', $forum->id) }}"><span style="color: #b23939;">|</span>
                {{ $forum->header }}</a>

        </div>
        @endforeach

    </div>
@endsection
