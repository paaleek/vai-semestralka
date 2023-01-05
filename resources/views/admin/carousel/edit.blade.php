@extends('layouts.admin')

@section('title', 'Admin | Carousel Edit')

@section('content')
    <div class="container">

        <form name="storeForm" action="{{ route('admin.carousel.update', $carousel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('admin.carousel._form')

        </form>
    </div>
@endsection
