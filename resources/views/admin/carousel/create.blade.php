@extends('layouts.admin')

@section('title', 'Admin | Carousel Add')

@section('content')
    <div class="container">

        <form name="storeForm" action="{{ route('admin.carousel.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('admin.carousel._form')

        </form>
    </div>

@endsection
