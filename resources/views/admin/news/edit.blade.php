@extends('layouts.main')

@section('title', 'Admin | News Edit')

@section('content')
    <div class="container">

        <form name="storeForm" action="{{ route('admin.news.update', $new->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('admin.news._form')

        </form>
    </div>
@endsection
