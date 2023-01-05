<div class="container-fluid obrazok w-100 animated zoomIn delay-2s"
     style="background-image: url({{@asset('img/carousel')}}/{{ $carousel->img_name }});  background-size: cover;background-position: center center;">
    <div class="row">
        <div class="col-12 carousel_nadpis ">
            <span>{{ $carousel->header }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-4">

        </div>
        <div class="col-8 carousel_content">
            <span>{{ $carousel->content }}</span>
        </div>
    </div>
    <div class="row">
        <div class="col-12 carousel_buttons">
            <a href="{{ $carousel->trailer }}"><button type="button"  class="btn btn-dark carousel_button"><span class="icon-film"></span> Trailer</button></a>
            <a href="{{ $carousel->shop }}"><button type="button"  class="btn btn-danger carousel_button"><span class="icon-cart"></span> Kúpiť hru</button></a>
        </div>
    </div>
</div>
