<div class="form-group row">
    <label for="visi" class="col-sm-2 col-form-label">Visi</label>
    <div class="col-sm-10">
        <textarea name="visi" id="visi" class="form-control @error('visi') is-invalid @enderror" rows="3">
            {{ old('visi') ?? $visi_misi->visi ?? '' }}
        </textarea>
        @error('visi')
        <span class="error invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="misi" class="col-sm-2 col-form-label">Misi</label>
    <div class="col-sm-10">
        <textarea name="misi" id="misi" class="form-control @error('misi') is-invalid @enderror" rows="3">
            {{ old('misi') ?? $visi_misi->misi ?? '' }}
        </textarea>
        @error('misi')
        <span class="error invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
