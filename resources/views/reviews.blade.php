@extends('layouts.main')

@section('title', 'Ghydeout | Recenzie')
@section('content')

    <div class="container mt-2 mb-0 pb-0">
        <input type="text" name="search" id="search" placeholder="Vyhľadávanie" class="form-control" value="{{ request()->get('search') }}" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
        @csrf
    </div>

    <div class="mt-3">

    </div>

    <div class="all-data">
        @include('reviews-pagination')
        {{ $reviews->links() }}
    </div>



    <div id="pagination_data" class="searchedData"></div>

    <!-- Modal -->
    <div id="myModal" class="modal">

        <span class="close">&times;</span>

        <img class="modal-content" id="img01" alt="modal-img">

    </div>

    <script type="text/javascript">
        $('#search').on('keyup', function () {
            $value=$(this).val();

             //alert($value);

            if($value) {
                $('.all-data').hide();
                $('.searchedData').show();
            } else {
                $('.all-data').show();
                $('.searchedData').hide();
            }

            $.ajax({
                type:"GET",
                url:'search',
                data:{'search':$value},

                success:function(data) {
                    $('#pagination_data').html(data);
                    console.log(data);
                }
            }).done(function () {
                console.log('ok');
            });
        });
    </script>

@endsection
