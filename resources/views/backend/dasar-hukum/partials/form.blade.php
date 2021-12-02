<div class="form-group row">
    <label for="landasan_hukum" class="col-sm-2 col-form-label">Landasan Hukum</label>
    <div class="col-sm-10">
        <textarea name="landasan_hukum" id="landasan_hukum" class="form-control @error('landasan_hukum') is-invalid @enderror" rows="3">
            {{ old('landasan_hukum') ?? $dasar_hukum->landasan_hukum ?? '' }}
        </textarea>
        @error('landasan_hukum')
        <span class="error invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
