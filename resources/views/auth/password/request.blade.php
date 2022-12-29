@extends('layouts.main')

@section('title', 'Ghydeout | Reset pasword')

@section('content')

    <div class="row no-gutters mt-2">
        <div class="col-3"></div>

        <div class="col-6 bg-dark">
            @if($message = session('status'))
                <div class="alert alert-success">
                    {{ $message }}
                </div>
            @endif
            <p class="log_in ml-4">Zadajte emailovú adresu</p>
            <div class="login">

                <form class="px-4 py-3" action="{{ route('password.email') }}" method="post">
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

                    <div class="mb-3">
                        <button type="submit" class="btn btn-block btn-primary">Zaslať link na resetovanie hesla</button>
                    </div>

                </form>

            </div>
        </div>

        <div class="col-3"></div>

    </div>
@endsection
