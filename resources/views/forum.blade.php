@extends('layouts.main')
@section('title', 'Ghydeout | Forum')

@section('content')

    <div class="container bg-dark mt-2 pt-2">


        <div class="row">
            <div class="col-12">
                <div class="topic"><span style="color: #b23939;">|</span> {{ $forum->header }}
                    <span class="user_meno">{{ $author->name }}</span>
                    <img class="user_img hvr-grow" src="{{ @asset('img/users') }}/{{ $author->profile_picture }}" alt="{{ $author->name }}">
                </div>
                <div class="time">{{ $forum->created_at }}</div>

            </div>
        </div>
        <div class="row">
            <div class="col-12 ml-1 mb-2">
                <div>{{ $forum->description }}</div>
            </div>
        </div>
        <div class="row pridaj_comment">

            <div class="col-12">

                @if(Auth::check())
                <div class="mb-1">Moja odpoveď:</div>
                <form class="mb-2" action="{{ route('forums.store_reply', $forum->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <textarea class="form-control" name="answer" id="editor1" cols="30" rows="10" >{{ old('answer') }}</textarea>
                    <input class="btn btn-danger mt-2 hvr-buzz" type="submit" value="Poslať">
                </form>
                @else
                <div>Pre odpoveď sa <a class="log_in" href="{{ @route('login') }}">prihlás</a></div>
                @endif
            </div>
        </div>


            <!-- komentare -->
        @foreach($replies as $reply)
        <div class="row ml-1 jeden_reply negramot">
            <div class="col-md-1 mt-1">
                <img class="user_img hvr-grow" src="{{ @asset('img/users') }}/{{ $reply->profile_picture }}" alt="">

            </div>
            <div class="col-11 mt-1">
                <div class="user_meno hvr-grow"> {{ $reply->name }}</div>
                <br>
                <div class=" hvr-skew time">{{ $reply->created_at }}</div>
            </div>

            <div class="answer"> {{ $reply->answer }}</div>
        </div>
        @endforeach

    </div>
@endsection
