@extends('layouts.admin')

@section('title', 'Admin | Forum')
@section('content')
    <div class="container-fluid carousel-edit mt-2">
        @if($message = session('message'))
            <div class="alert alert-success">
                {{ $message }}
            </div>
        @endif


            <table class="table">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>header</th>
                    <th>popis</th>
                    <th>akcia</th>
                </tr>
                </thead>
                <tbody>
                @foreach($forums as $forum)

                <tr>
                    <td>{{ $forum->id }}</td>
                    <td>{{ $forum->header }}</td>
                    <td>{{ Str::limit($forum->description, $limit = 35, $end = '...') }}</td>
                    <td>
                        <a class="btn btn-warning" href="{{ route('admin.forum.show_replies', $forum->id) }}">Komentáre</a>
                        <a class="btn btn-success" href="{{ route('admin.forum.edit', $forum->id) }}">Edit</a>
                        <form class="d-lg-inline-flex" action="{{ route('admin.forum.destroy', $forum->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" title="Delete">DELETE</button>
                        </form>
                    </td>

                </tr>

                @endforeach


                </tbody>
            </table>
    </div>
@endsection
