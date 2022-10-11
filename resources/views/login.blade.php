@extends('layouts.main')

@section('content')
    <div class="row mt-2">
        <div class="col-3"></div>

        <div class="col-6 bg-dark">
            <div class="log_in">Prihlásenie</div>
            <div class="login">
                <form class="px-4 py-3" action="" method="post">
                    <div class="form-group">
                        <label for="exampleDropdownFormEmail1">NICK</label>
                        <input type="text" name="meno" class="form-control" id="exampleDropdownFormEmail1" placeholder="the_rocky">
                    </div>
                    <div class="form-group">
                        <label for="exampleDropdownFormPassword1">PASSWORD</label>
                        <input type="password" name="heslo" class="form-control" id="exampleDropdownFormPassword1" placeholder="********">

                    </div>

                    <input type="submit" class="btn btn-outline-danger mt-1 mb-1" value="Prihlásiť sa">
                    <a class="btn btn-outline-warning bt-1" href="">Registrácia</a>
                </form>
            </div>
        </div>

        <div class="col-3"></div>

    </div>
@endsection
