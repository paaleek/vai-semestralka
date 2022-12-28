@extends('layouts.main')

@section('title', 'Admin | News Add')

@section('content')
    <div class="container">

        <form name="storeForm" action="{{ route('admin.news.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            @include('admin.news._form')

        </form>
    </div>

@endsection
