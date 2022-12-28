@extends('layouts.main')

@section('content')

    <div class="container novinky mt-3">

        @foreach($news as $new)

        <div class="row">
            <div class="col-12 animated slideInUp">
                <div class="card mb-3 bg-dark" style="">
                    <div class="row no-gutters">
                        <div class="col-md-3 novinky_img">
                            <img src=" {{ @asset('img/news') }}/{{ $new->img }} " class="card-img hvr-hang" alt="{{ $new->img }}">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <a class="nadpis_novinka hvr-grow" href="{{ route('news.show', $new->id) }}">{{ $new->header }}</a>

                                <p class="card-text "><small class="text-muted hvr-grow">Publikované: {{ $new->created_at }}</small></p>
                                <div>{{ Str::limit($new->main_content, $limit = 200, $end = '...') }}</div>


                                <div><a class="read_more" href="{{ route('news.show', $new->id) }}">Read more</a></div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @endforeach

        {{ $news->links() }}
    </div>
@endsection
