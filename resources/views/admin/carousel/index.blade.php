@extends('layouts.admin')

@section('title', 'Admin | Carousels')
@section('content')
<div class="container-fluid carousel-edit mt-2">
    @if($message = session('message'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif
    <a  class="btn btn-primary m-2" href="{{ route('admin.carousel.create') }}">Nový</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>header</th>
            <th>content</th>
            <th>img</th>
            <th>dobchod</th>
            <th>trailer</th>
            <th>Akcia</th>
        </tr>
        </thead>
        <tbody>
        @foreach($carousels as $carousel)

        <tr>
            <td>{{ $carousel->id }}</td>
            <td>{{ $carousel->header }}</td>
            <td>{{ Str::limit($carousel->content, $limit = 35, $end = '...') }}</td>
            <td><img class="" src="{{ @asset('img/carousel') }}/{{ $carousel->img_name }}" alt="{{ $carousel->header }}"></td>
            <td>{{ Str::limit($carousel->shop, $limit = 35, $end = '...') }}</td>
            <td>{{ Str::limit($carousel->trailer, $limit = 35, $end = '...') }}</td>
            <td>
                <a class="btn btn-success" href="{{ route('admin.carousel.edit', $carousel->id) }}">Edit</a>
                <form action="{{ route('admin.carousel.destroy', $carousel->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-sm btn-circle btn-danger" title="Delete">DELETE</button>
                </form>
            </td>

        </tr>
        @endforeach


        </tbody>
    </table>
</div>
@endsection
