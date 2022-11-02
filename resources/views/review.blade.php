@extends('layouts.main')

@section('content')

    <div class="container bg-dark mt-2 mb-2">
        <div class="row">
            <div class="col-12 pt-2 pb-1">
                <img src="{{ @asset('img/reviews') }}/{{ $review->big_img }}" class="card-img animated slideInDown" alt="{{ $review->header }}">
                <div class="row">
                    <div class="col-md-8">
                        <div class="nadpis_hra ml-5"><span class="main_color">{{ $review->header }}</span> ||<span class="h_size"> {{ $review->score }}</span>/10</div>
                    </div>
                    <div class="col-md-4 carousel_buttons mt-2">
                        <a href="{{ $review->trailer }}"><p class="btn btn-secondary animated slideInLeft"><span class="icon-film"></span> Recenzia</p></a>
                        <a class="" href="{{ $review->shop }}"><p class="btn btn-danger animated slideInRight"><span class="icon-cart"></span> Kúpiť hru</p></a>
                    </div>
                </div>

                <small class="text-muted">Publikované: {{ $review->created_at }}</small>
                <div class="animated slideInUp">{{ $review->main_content }}</div>
            </div>
        </div>
    </div>
@endsection
