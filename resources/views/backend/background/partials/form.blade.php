<div class="form-group row">
    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
    <div class="col-sm-10">
        @isset($background->gambar) <img src="{{ asset('storage/'.$background->gambar) }}" alt="preview" class="img-fluid img-thumbnail mb-2"> @endisset
        <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror">
        @error('gambar')
        <span class="error invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>