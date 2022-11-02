@extends('layouts.main')

@section('title', 'Admin | Review New')

@section('content')
    <div class="container">

        <form action="{{ route('admin.reviews.store') }}" method="POST">
            @csrf
            @method('put')
            @include('admin.reviews._form')

        </form>
    </div>
@endsection
