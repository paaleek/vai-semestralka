<div class="container-fluid cele_new_release mt-2">
    <div class="row">
        <div class="col-12">
            <h3 class="ml-5">Najnovšie fóra</h3>
        </div>
    </div>
</div>
<div class="container">

    <div class="row">
        @foreach($forums as $forum)

        <div class="col-md-4 mb-4">
            <h5 class="hvr-grow"><a style="color:#1a1b1e;" class="topic" href="{{ route('forums.show', $forum->id) }}"><span style="color: #b23939;">|</span> {{ $forum->header }}</a></h5>
            <br>
            <div class="hvr-shrink">{{ Str::limit($forum->description, $limit = 200, $end = '...') }}</div>
        </div>
        @endforeach
    </div>
</div>
