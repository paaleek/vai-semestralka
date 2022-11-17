@extends('layouts.main')

@section('title', 'Admin | Review New')

@section('content')
    <div class="container">

        <form name="storeForm" onsubmit="return validation()" action="{{ route('admin.reviews.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('admin.reviews._form')

        </form>
    </div>

@endsection
