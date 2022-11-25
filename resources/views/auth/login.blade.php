@extends('layouts.main')

@section('title', 'Ghydeout | Login')

@section('content')

    <div class="row no-gutters mt-2">
        <div class="col-3"></div>

        <div class="col-6 bg-dark">
            <p class="log_in ml-4">Login</p>
            <div class="login">

                <form class="px-4 py-3" action="{{ route('login') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="jako@gmail.com" value="{{ old('email') }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div class="form-group">
                        <label for="password" class="form-label">Heslo</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="*******">
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-outline-danger mt-1 mb-1">Login</button>

                    <div class="text-center py-4 text-muted">
                        Nemáte účet?
                        <a class="bt-1" href="{{ route('register') }}">Register</a>
                    </div>

                </form>

            </div>
        </div>

        <div class="col-3"></div>

    </div>
@endsection
