<div class="row bg-dark top_menu p-0 m-0">
    <div class="col-sm-7 logo_padding animated bounceInDown delay-1s">
        <a href="{{ @route('welcome') }}">
            <h1 class="logo_text"><span class="g-menu main_color">G</span><span style="color: white;">hyde</span><span class="main_color">out</span>
            </h1>
        </a>
    </div>

    <div class="col-2 user animated bounceInRight">
        @if(Auth::check())
            <img class="user_img text_odhlasit" src="{{ @asset('img/users') }}/{{ Auth::user()->profile_picture }}" alt="">
            <a href="{{ route('user-profile-information.edit') }}">{{ Auth::user()->name  }}</a>
        @else
            <a class="log_in" href="{{ @route('login') }}">
                <span class="icon-user"></span>
                Prihlásiť sa
            </a>
        @endif
    </div>
    <div class="col-3 log_out animated bounceInRight">
        @if(Auth::check())
            <form action="{{ @route('logout') }}" method="post" style="display: inline">
                @csrf
                <button class="btn btn-link"><span class="icon-switch"></span>  <span class="text_odhlasit">odhlásiť</span></button>
            </form>
        @endif
    </div>

</div>
