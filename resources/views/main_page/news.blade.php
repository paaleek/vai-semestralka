<div class="container overflow-hidden carts animated slideInUp delay-1s">
    <div class="row">
        @foreach($news as $new)
        <div class="col-md-3 box">
            <div class="row">
                <img src="{{ @asset('img/news') }}/{{ $new->img }}" class="card-img-top hvr-shrink" alt="img">
            </div>
            <div class="row spodok">
                <h5 class="card-title m-2 hvr-grow">{{ $new->header }}</h5>
                <p class="card-text">{{ Str::limit($new->main_content, $limit = 114, $end = '...') }}</p>
                <a href="{{ route('news.show', $new->id) }}" class="btn btn-outline-danger">Chcem vedieť viac</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
