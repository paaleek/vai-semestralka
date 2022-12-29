@extends('layouts.main')

@section('title', 'Ghydeout | Osobne udaje')

@section('content')

    <div class="row no-gutters mt-2">
        <div class="col-3"></div>

        <div class="col-6 bg-dark">
            @if(session('status') === 'profile-information-updated')
               <div class="alert alert-success">
                    {{ session('status') }}
               </div>
            @endif
            <p class="log_in ml-4">Osobné udaje</p>
            <div class="login">

                <form class="px-4 py-3" action="{{ route('user-profile-information.update') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name" class="form-label">Užívateľské meno</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="the_rocky" value="{{ old('name', $user->name) }}">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror

                    </div>


                    <div class="form-group">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="jako@gmail.com" value="{{ old('email', $user->email) }}">
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="img" class="col-form-label">Profilova fotka</label>
                        <input type="file" name="profile-picture" class="form-control @error('img') is-invalid @enderror">

                        @error('profile-picture')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-outline-danger mt-1 mb-1">Zmeniť osobné údaje</button>



                </form>

            </div>
        </div>

        <div class="col-3"></div>

    </div>
@endsection
