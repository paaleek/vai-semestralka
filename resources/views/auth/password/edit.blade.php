@extends('layouts.main')

@section('title', 'Ghydeout | Reset hesla')

@section('content')

    <div class="row no-gutters mt-2">
        <div class="col-3"></div>

        <div class="col-6 bg-dark">
            <p class="log_in ml-4">Reset hesla</p>
            <div class="login">

                <form class="px-4 py-3" action="{{ route('password.update') }}" method="post">
                    @csrf

                    <div class="form-group">
                        <input type="hidden" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="jako@gmail.com" value="{{ request()->email }}">
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


                    <div class="form-group">
                        <input type="hidden" name="token" value="{{ request()->route('token') }}">
                        <label for="password" class="form-label">Potvrdenie hesla </label>
                        <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="*******">
                        @error('password_confirmation')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <button type="submit" class="btn btn-block btn-primary">Resetuj Heslo</button>
                    </div>

                </form>

            </div>
        </div>

        <div class="col-3"></div>

    </div>
@endsection
