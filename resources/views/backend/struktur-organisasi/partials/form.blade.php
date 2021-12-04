<div class="form-group row">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
        <input name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') ?? $struktur_organisasi->nama ?? '' }}">
        @error('nama')
        <span class="error invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
    <div class="col-sm-10">
        @isset($struktur_organisasi->gambar) <img src="{{ asset('storage/'.$struktur_organisasi->gambar) }}" alt="preview" class="img-fluid img-thumbnail mb-2"> @endisset
        <input type="file" name="gambar" id="gambar" class="form-control @error('gambar') is-invalid @enderror">
        @error('gambar')
        <span class="error invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="keterangan" class="col-sm-2 col-form-label">Keterangan</label>
    <div class="col-sm-10">
        <textarea name="keterangan" id="keterangan" class="form-control @error('keterangan') is-invalid @enderror" rows="3">
            {{ old('keterangan') ?? $struktur_organisasi->keterangan ?? '' }}
        </textarea>
        @error('keterangan')
        <span class="error invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
