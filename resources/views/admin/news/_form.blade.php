<div class="container">

    <input type="hidden" name="id" value="{{ old('id', $new->id) }}"><br>

    <div class="form-group row">
        <label for="header" class="col-form-label">Nadpis*</label>
        <input id="header" type="text" class="form-control @error('header') is-invalid @enderror" name="header" value="{{ old('header', $new->header) }}">

        @error('header')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="main_content" class="col-form-label">Obsah*</label>
        <textarea class="form-control @error('main_content') is-invalid @enderror" name="main_content" id="editor1" cols="20" rows="15">{{ old('main_content', $new->main_content) }}</textarea>

        @error('main_content')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>


    <div class="form-group row">
        <label for="img" class="col-form-label">Mala fotka - hlavná sránka (510*700)</label>
        <input type="file" name="img" class="form-control @error('img') is-invalid @enderror">

        @error('img')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <div class="form-group row">
        <label for="main_img" class="col-form-label">Veľká fotka (1920*650)</label>
        <input type="file" name="main_img" class="form-control @error('main_img') is-invalid @enderror">

        @error('main_img')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
    </div>

    <input class="btn btn-danger mt-2" type="submit" value="Poslať">
</div>
