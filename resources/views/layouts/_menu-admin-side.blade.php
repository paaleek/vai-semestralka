<!-- menu -->

<div class="container-fluid p-0">
    <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center menu" id="navbarNav">
            <ul class="navbar-nav ">
                <li class="nav-item hvr-overline-from-center">
                    <a class="nav-link" href="{{ @route('admin.carousel.index') }}">carousel</a>
                </li>

                <li class="nav-item hvr-overline-from-center">
                    <a class="nav-link" href="{{ @route('admin.news.index') }}">novinky</a>
                </li>

                <li class="nav-item hvr-overline-from-center">
                    <a class="nav-link" href="{{ @route('admin.reviews.index') }}">recenzie</a>
                </li>

                <li class="nav-item hvr-overline-from-center">
                    <a class="nav-link" href="{{ @route('admin.forum.index') }}">forum</a>
                </li>
            </ul>
        </div>
    </nav>

</div>
