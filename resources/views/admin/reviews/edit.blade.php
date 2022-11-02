@extends('layouts.main')

@section('title', 'Admin | Review Edit')

@section('content')
    <div class="container">

        <form action="{{ route('admin.reviews.update', $review->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('admin.reviews._form')

        </form>
    </div>
@endsection