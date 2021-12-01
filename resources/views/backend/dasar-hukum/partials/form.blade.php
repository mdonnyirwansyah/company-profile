<div class="form-group row">
    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
        <textarea name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" rows="3">
            {{ old('keterangan') ?? $dasar_hukum->keterangan ?? '' }}
        </textarea>
        @error('keterangan')
        <span class="error invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
