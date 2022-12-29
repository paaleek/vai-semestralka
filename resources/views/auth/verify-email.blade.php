@extends('layouts.main')

@section('title', 'Ghydeout | Potvrdenie emailu')

@section('content')
    <main class="py-5">
        <div class="container">
            <h1 class="h5 mb-3">
                Ahoj
                <small class="text-muted">{{ auth()->user()->name }}</small>
            </h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body bg-dark">
                            @if (session('status') == 'verification-link-sent')
                                <div class="alert alert-success">Verifikačý email sme zaslali na tvoju email adresu.</div>
                            @endif
                            <p class="mb-0"><strong>Vďaka za regisráciu!</strong> Predtým ako začneš na našom portáli, potvrď verifikačný email, ktorý sme ti zaslali.</p>
                            <p class="mb-0">Ak si nedostal email skúsime to znova.</p>
                            <form action="{{ route('verification.send') }}" method="POST">
                                @csrf
                                <button class="btn btn-secondary mt-3">Resend email verification</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
