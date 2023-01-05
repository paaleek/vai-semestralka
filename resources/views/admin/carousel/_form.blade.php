<div class="container">

    <input type="hidden" name="id" value="{{ old('id', $carousel->id) }}"><br>

    <div class="form-group row">
        <label for="header" class="col-form-label">Nadpis*</label>
        <input id="header" type="text" class="form-control @error('header') is-invalid @enderror" name="header" value="{{ old('header', $carousel->header) }}">

        @error('header')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="content" class="col-form-label">Obsah*</label>
        <textarea class="form-control @error('content') is-invalid @enderror" name="content" id="editor1" cols="20" rows="15">{{ old('content', $carousel->content) }}</textarea>

        @error('content')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="shop" class="col-form-label">Obchod</label>
        <input type="text" class="form-control @error('shop') is-invalid @enderror" name="shop" value="{{ old('shop', $carousel->shop) }}">

        @error('shop')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="trailer" class="col-form-label">Trailer</label>
        <input type="text" class="form-control @error('trailer') is-invalid @enderror" name="trailer" value="{{ old('trailer', $carousel->trailer) }}">

        @error('trailer')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>


    <div class="form-group row">
        <label for="img_name" class="col-form-label">Mala fotka - hlavná sránka (510*700)</label>
        <input type="file" name="img_name" class="form-control @error('img_name') is-invalid @enderror">

        @error('img_name')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>


    <input class="btn btn-danger mt-2" type="submit" value="Poslať">
</div>
