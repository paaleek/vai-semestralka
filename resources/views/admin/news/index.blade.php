@extends('layouts.main')

@section('title', 'Admin | Reviews')

@section('content')
    <div class="container-fluid  mt-2">
        @if($message = session('message'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif
        <a  class="btn btn-primary m-2" href="{{ route('admin.news.create') }}">Nový</a>
        <table class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>header</th>
                <th>content</th>
                <th>mala_img</th>
                <th>main_img</th>
                <th>akcia</th>
            </tr>
            </thead>
            <tbody>
            @foreach($news as $new)

            <tr>
                <td>{{ $new->id }}</td>
                <td>{{ $new->header }}</td>
                <td>{{ Str::limit($new->main_content, $limit = 35, $end = '...') }}</td>


                <td><img class="n_mala_img" src="{{ @asset('img/news') }}/{{ $new->img }}" alt=""></td>
                <td><img class="n_main_img" src="{{ @asset('img/news') }}/{{ $new->main_img }}" alt=""></td>
                <td>
                    <a class="btn btn-success" href="{{ route('admin.news.edit', $new->id) }}">Edit</a>
                    <form action="{{ route('admin.news.destroy', $new->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
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
