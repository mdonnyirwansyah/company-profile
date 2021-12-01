<div class="form-group row">
    <label for="tentang" class="col-sm-2 col-form-label">Tentang</label>
    <div class="col-sm-10">
        <textarea name="tentang" id="tentang" class="form-control @error('tentang') is-invalid @enderror" rows="3">
            {{ old('tentang') ?? $profil->tentang ?? '' }}
        </textarea>
        @error('tentang')
        <span class="error invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="tugas_pokok" class="col-sm-2 col-form-label">Tugas Pokok</label>
    <div class="col-sm-10">
        <textarea name="tugas_pokok" id="tugas_pokok" class="form-control @error('tugas_pokok') is-invalid @enderror" rows="3">
            {{ old('tugas_pokok') ?? $profil->tugas_pokok ?? '' }}
        </textarea>
        @error('tugas_pokok')
        <span class="error invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="fungsi" class="col-sm-2 col-form-label">Fungsi</label>
    <div class="col-sm-10">
        <textarea name="fungsi" id="fungsi" class="form-control @error('fungsi') is-invalid @enderror" rows="3">
            {{ old('fungsi') ?? $profil->fungsi ?? '' }}
        </textarea>
        @error('fungsi')
        <span class="error invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
