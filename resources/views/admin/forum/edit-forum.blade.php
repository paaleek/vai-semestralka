@extends('layouts.admin')

@section('title', 'Admin | Forum Edit')

@section('content')
    <div class="container mt-2 mb-2">

        <form name="storeForme" action="{{ route('admin.forum.update', $forum->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group row">
                <label for="header" class="col-form-label">Nadpis*</label>
                <input id="header" type="text" class="form-control @error('header') is-invalid @enderror" name="header" value="{{ old('header', $forum->header) }}">

                @error('header')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <div class="form-group row">
                <label for="description" class="col-form-label">Popis problému*</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="editor1" cols="20" rows="15">{{ old('description', $forum->description) }}</textarea>

                @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <input class="btn btn-danger mt-2" type="submit" value="Poslať">

        </form>
    </div>
@endsection
