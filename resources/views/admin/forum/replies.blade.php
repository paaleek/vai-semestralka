@extends('layouts.admin')

@section('title', 'Admin | Odpovede')
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
                    <th>komentar</th>
                    <th>akcia</th>
                </tr>
                </thead>
                <tbody>
                @foreach($replies as $reply)

                <tr>
                    <td>{{ $reply->id }}</td>
                    <td>{{ Str::limit($reply->answer, $limit = 60, $end = '...') }}</td>
                    <td><form class="d-lg-inline-flex" action="{{ route('admin.forum.destroy_reply', $reply->id) }}" method="POST" onsubmit="return confirm('Are you sure?')">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger" title="Delete">DELETE</button>
                        </form>
                    </td>


                @endforeach


                </tbody>
            </table>


    </div>
@endsection
