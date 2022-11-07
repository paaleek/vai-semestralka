<div class="container">

    <input type="hidden" name="id" value="{{ old('id', $review->id) }}"><br>

    <div class="form-group row">
        <label for="header" class="col-form-label">Nadpis</label>
        <input type="text" class="form-control @error('header') is-invalid @enderror" name="header" value="{{ old('header', $review->header) }}">

        @error('header')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="main_content" class="col-form-label">Obsah</label>
        <textarea class="form-control @error('main_content') is-invalid @enderror" name="main_content" id="editor1" cols="20" rows="15">{{ old('main_content', $review->main_content) }}</textarea>

        @error('main_content')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="score" class="col-form-label">Hodnotenie</label>
        <input type="text" class="form-control @error('score') is-invalid @enderror" name="score" value="{{ old('score', $review->score) }}">

        @error('score')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="shop" class="col-form-label">Obchod</label>
        <input type="text" class="form-control @error('shop') is-invalid @enderror" name="shop" value="{{ old('shop', $review->shop) }}">

        @error('shop')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="trailer" class="col-form-label">Trailer</label>
        <input type="text" class="form-control @error('trailer') is-invalid @enderror" name="trailer" value="{{ old('trailer', $review->trailer) }}">

        @error('trailer')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="small_img" class="col-form-label">Mala fotka - viacero recenzií (620*390)</label>
        <input type="file" name="small_img" class="form-control @error('small_img') is-invalid @enderror">

        @error('small_img')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="big_img" class="col-form-label">Veľká fotka - hlavná recenzia (1920*650)</label>
        <input type="file" name="big_img" class="form-control @error('big_img') is-invalid @enderror">

        @error('big_img')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

        <input class="btn btn-danger mt-2" type="submit" value="Poslať">
</div>
