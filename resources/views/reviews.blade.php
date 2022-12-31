@extends('layouts.main')

@section('title', 'Ghydeout | Recenzie')
@section('content')

    <div class="mt-3">

    </div>

    @foreach($reviews as $review)

        <div class="container reviews animated slideInLeft">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3 bg-dark" style="">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img onclick="return enlarge(this)" src=" {{ @asset('img/reviews') }}/{{ $review->small_img }} " class="card-img hvr-grow" alt="{{ $review->header }}">


                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <a class="nadpis_recenzia hvr-grow" href="{{ route('reviews.show', $review->id) }}">{{ $review->header }}</a>

                                    <p class="card-text ">Publikované: {{ $review->created_at }} ||<span class="h_size "> {{ $review->score }}</span>/10</p>
                                    <div>{{ Str::limit($review->main_content, $limit = 200, $end = '...') }}</div>

                                    <div><a style="font-family: 'hackedregular';" href="{{ route('reviews.show', $review->id) }}">Read more</a></div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endforeach

    {{ $reviews->links() }}


    <!-- Modal -->
    <div id="myModal" class="modal">

        <span class="close">&times;</span>

        <img class="modal-content" id="img01" alt="modal-img">

    </div>

@endsection
