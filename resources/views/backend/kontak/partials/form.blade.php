<div class="form-group row">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
        <input name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ old('alamat') ?? $kontak->alamat ?? '' }}">
        @error('alamat')
        <span class="error invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
        <input name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') ?? $kontak->email ?? '' }}">
        @error('email')
        <span class="error invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
<div class="form-group row">
    <label for="jam_kerja" class="col-sm-2 col-form-label">Jam Kerja</label>
    <div class="col-sm-10">
        <input name="jam_kerja" id="jam_kerja" class="form-control @error('jam_kerja') is-invalid @enderror" value="{{ old('jam_kerja') ?? $kontak->jam_kerja ?? '' }}">
        @error('jam_kerja')
        <span class="error invalid-feedback">
            {{ $message }}
        </span>
        @enderror
    </div>
</div>
