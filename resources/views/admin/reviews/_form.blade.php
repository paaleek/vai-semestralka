<div class="container">

        <input type="hidden" name="id" value="{{ old('id', $review->id) }}"><br>

        <label>Nadpis</label>
        <input type="text" class="form-control" name="header" value="{{ old('header', $review->header) }}"><br>

        <label>Obsah</label>
        <textarea name="main_content" id="editor1" cols="20" rows="15">{{ old('main_content', $review->main_content) }}</textarea><br>

        <label>Hodnotenie</label>
        <input type="text" class="form-control" name="score" value="{{ old('score', $review->score) }}"><br>

        <label>Obchod</label>
        <input type="text" class="form-control" name="shop" value="{{ old('shop', $review->shop) }}"><br>

        <label>Recenzia</label>
        <input type="text" class="form-control" name="trailer" value="{{ old('trailer', $review->trailer) }}"><br>

        <label>Mala fotka - viacero recenzií (620*390)</label>
        <input type="file" name="small_img" class="form-control">

        <label>Veľká fotka - hlavná recenzia (1920*650)</label>
        <input type="file" name="big_img" class="form-control">

        <input class="btn btn-danger mt-2" type="submit" value="Poslať">

    </form>
</div>
