@extends('layouts.main')
@section('title', 'Ghydeout | Novinka')
@section('content')
    <div class="container pt-2">
        <div class="row">
            <div class="col-12 ">
                <img  src=" {{ @asset('img/news') }}/{{ $new->main_img }} " class="card-img hvr-forward" alt="{{ $new->img }}">
                <h4 class="mt-1">{{ $new->header }}</h4>
                <small class="text-muted hvr-grow">Publikované: {{ $new->created_at }}</small>
                <div class="animated slideInRight">{{ $new->main_content }}</div>
            </div>
        </div>
    </div>
@endsection
