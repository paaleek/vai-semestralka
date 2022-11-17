@extends('layouts.main')

@section('title', 'Admin | Reviews')

@section('content')
    <div class="container-fluid  mt-2">
        @if($message = session('message'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <a  class="btn btn-primary m-2" href="{{ route('admin.reviews.create') }}">Nový</a>
        <table class="table p-0">
            <thead>
            <tr>
                <th>ID</th>
                <th>header</th>
                <th>content</th>
                <th>small_img</th>
                <th>big_img</th>
                <th>score</th>
                <th>shop</th>
                <th>trailer</th>
                <th>action</th>
            </tr>
            </thead>
            <tbody>

            @foreach($reviews as $review)

            <tr>
                <td>{{ $review->id }}</td>
                <td>{{ $review->header }}</td>
                <td>{{ Str::limit($review->main_content, $limit = 35, $end = '...') }}</td>

                <td><img class="n_mala_img" src="{{ @asset('img/reviews') }}/{{ $review->small_img }}" alt=""></td>
                <td><img class="n_main_img" src="{{ @asset('img/reviews') }}/{{ $review->big_img }}" alt=""></td>
                <td>{{ $review->score }}</td>
                <td>{{ Str::limit($review->shop, $limit = 35, $end = '...') }}</td>
                <td>{{ Str::limit($review->trailer, $limit = 35, $end = '...') }}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('admin.reviews.edit', $review->id) }}">Edit</a>
                    <form action="{{ route('admin.reviews.destroy', $review->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
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
