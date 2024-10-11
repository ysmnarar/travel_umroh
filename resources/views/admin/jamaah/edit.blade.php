@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Data Jamaah</h1>

    <form action="{{ route('admin.jamaah.update', $jamaah->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Field yang sama seperti di create.blade.php, tetapi diisi dengan data saat ini -->
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" value="{{ $jamaah->nama_lengkap }}" required>
        </div>

        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="number" name="nik" class="form-control" value="{{ $jamaah->nik }}" required>
        </div>


        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" value="{{ $jamaah->tempat_lahir }}" required>
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" value="{{ $jamaah->tanggal_lahir }}" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" required>{{ $jamaah->alamat }}</textarea>
        </div>

        <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <select name="provinsi" id="provinsi" class="form-control" required> value="{{ $jamaah->provinsi }}"
                <option value="">Pilih Provinsi</option>
                <option value="Aceh" {{ $jamaah->provinsi == 'Aceh' ? 'selected' : '' }}>Aceh</option>
                <option value="Sumatera Utara" {{ $jamaah->provinsi == 'Sumatera Utara' ? 'selected' : '' }}>Sumatera
                    Utara</option>
                <option value="Sumatera Barat" {{ $jamaah->provinsi == 'Sumatera Barat' ? 'selected' : '' }}>Sumatera
                    Barat</option>
                <option value="Riau" {{ $jamaah->provinsi == 'Riau' ? 'selected' : '' }}>Riau</option>
                <option value="Jambi" {{ $jamaah->provinsi == 'Jambi' ? 'selected' : '' }}>Jambi</option>
                <option value="Sumatera Selatan" {{ $jamaah->provinsi == 'Sumatera Selatan' ? 'selected' : '' }}>Sumatera
                    Selatan</option>
                <option value="Bengkulu" {{ $jamaah->provinsi == 'Bengkulu' ? 'selected' : '' }}>Bengkulu</option>
                <option value="Lampung" {{ $jamaah->provinsi == 'Lampung' ? 'selected' : '' }}>Lampung</option>
                <option value="DKI Jakarta" {{ $jamaah->provinsi == 'DKI Jakarta' ? 'selected' : '' }}>DKI Jakarta
                </option>
                <option value="Jawa Barat" {{ $jamaah->provinsi == 'Jawa Barat' ? 'selected' : '' }}>Jawa Barat</option>
                <option value="Jawa Tengah" {{ $jamaah->provinsi == 'Jawa Tengah' ? 'selected' : '' }}>Jawa Tengah
                </option>
                <option value="DI Yogyakarta" {{ $jamaah->provinsi == 'DI Yogyakarta' ? 'selected' : '' }}>DI Yogyakarta
                </option>
                <option value="Jawa Timur" {{ $jamaah->provinsi == 'Jawa Timur' ? 'selected' : '' }}>Jawa Timur</option>
                <option value="Bali" {{ $jamaah->provinsi == 'Bali' ? 'selected' : '' }}>Bali</option>
                <option value="Nusa Tenggara Barat" {{ $jamaah->provinsi == 'Nusa Tenggara Barat' ? 'selected' : '' }}>
                    Nusa Tenggara Barat</option>
                <option value="Nusa Tenggara Timur" {{ $jamaah->provinsi == 'Nusa Tenggara Timur' ? 'selected' : '' }}>
                    Nusa Tenggara Timur</option>
                <option value="Kalimantan Barat" {{ $jamaah->provinsi == 'Kalimantan Barat' ? 'selected' : '' }}>
                    Kalimantan Barat</option>
                <option value="Kalimantan Tengah" {{ $jamaah->provinsi == 'Kalimantan Tengah' ? 'selected' : '' }}>
                    Kalimantan Tengah</option>
                <option value="Kalimantan Selatan" {{ $jamaah->provinsi == 'Kalimantan Selatan' ? 'selected' : '' }}>
                    Kalimantan Selatan</option>
                <option value="Kalimantan Timur" {{ $jamaah->provinsi == 'Kalimantan Timur' ? 'selected' : '' }}>
                    Kalimantan Timur</option>
                <option value="Kalimantan Utara" {{ $jamaah->provinsi == 'Kalimantan Utara' ? 'selected' : '' }}>
                    Kalimantan Utara</option>
                <option value="Sulawesi Utara" {{ $jamaah->provinsi == 'Sulawesi Utara' ? 'selected' : '' }}>Tangerang
                </option>
                <option value="Sulawesi Tengah" {{ $jamaah->provinsi == 'Sulawesi Tengah' ? 'selected' : '' }}>Sulawesi
                    Tengah</option>
                <option value="Sulawesi Selatan" {{ $jamaah->provinsi == 'Sulawesi Selatan' ? 'selected' : '' }}>Sulawesi
                    Selatan</option>
                <option value="Sulawesi Barat" {{ $jamaah->provinsi == 'Sulawesi Barat' ? 'selected' : '' }}>Sulawesi
                    Barat</option>
                <option value="Maluku" {{ $jamaah->provinsi == 'Maluku' ? 'selected' : '' }}>Maluku</option>
                <option value="Maluku Utara" {{ $jamaah->provinsi == 'Maluku Utara' ? 'selected' : '' }}>Maluku Utara
                </option>
                <option value="Papua" {{ $jamaah->provinsi == 'Papua' ? 'selected' : '' }}>Papua</option>
                <option value="Papua Barat" {{ $jamaah->provinsi == 'Papua Barat' ? 'selected' : '' }}>Papua Barat
                </option>
            </select>
        </div>

        <div class="form-group">
            <label for="kab_kota">Kabupaten/Kota</label>
            <select name="kab_kota" id="kab_kota" class="form-control" value="{{ $jamaah->kab_kota }}" required
                disabled>
                <option value="">Pilih Kabupaten/Kota</option>
                <!-- Opsi akan diisi menggunakan JavaScript -->
            </select>
        </div>

        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <select name="kecamatan" id="kecamatan" class="form-control" value="{{ $jamaah->kecamatan }}" required
                disabled>
                <option value="">Pilih Kecamatan</option>
                <!-- Opsi akan diisi menggunakan JavaScript -->
            </select>
        </div>

        <div class="form-group">
            <label for="kelurahan">Kelurahan</label>
            <select name="kelurahan" id="kelurahan" class="form-control" value="{{ $jamaah->kelurahan }}" required
                disabled>
                <option value="">Pilih Kelurahan</option>
                <!-- Opsi akan diisi menggunakan JavaScript -->
            </select>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label><br>
            <div class="form-check">
                <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" class="form-check-input" {{ $jamaah->jenis_kelamin == 'Laki-laki' ? 'checked' : '' }} required>
                <label for="laki-laki" class="form-check-label">Laki-laki</label>
            </div>
            <div class="form-check">
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" class="form-check-input" {{ $jamaah->jenis_kelamin == 'Perempuan' ? 'checked' : '' }} required>
                <label for="perempuan" class="form-check-label">Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label for="no_paspor">No. Paspor</label>
            <input type="text" name="no_paspor" class="form-control" value="{{ $jamaah->no_paspor }}" required
                pattern="[A-Z]{2}[0-9]{6,8}" title="Format: 2 huruf diikuti 6-8 angka (misalnya: AB123456)">
        </div>

        <div class="form-group">
            <label for="masa_berlaku_paspor">Masa Berlaku Paspor</label>
            <input type="date" name="masa_berlaku_paspor" class="form-control"
                value="{{ $jamaah->masa_berlaku_paspor }}" required>
        </div>

        <div class="form-group">
            <label for="lampiran_ktp">Lampiran KTP</label>
            <input type="file" name="lampiran_ktp" class="form-control" value="{{ $jamaah->lampiran_ktp }}" required>
        </div>

        <div class="form-group">
            <label for="lampiran_kk">Lampiran KK</label>
            <input type="file" name="lampiran_kk" class="form-control" value="{{ $jamaah->lampiran_kk }}" required>
        </div>

        <div class="form-group">
            <label for="lampiran_foto_diri">Lampiran Foto Diri</label>
            <input type="file" name="lampiran_foto_diri" class="form-control" value="{{ $jamaah->lampiran_foto_diri }}"
                required>
        </div>

        <div class="form-group">
            <label for="lampiran_paspor">Lampiran Paspor</label>
            <input type="file" name="lampiran_paspor" class="form-control" value="{{ $jamaah->lampiran_paspor }}"
                required>
        </div>

        <div class="form-group">
            <label for="no_visa">No. Visa</label>
            <input type="text" name="no_visa" class="form-control" value="{{ $jamaah->no_visa }}" required
                pattern="[A-Z]{2}[0-9]{6,8}" title="Format: 2 huruf diikuti 6-8 angka (misalnya: AB123456)">
        </div>

        <div class="form-group">
            <label for="berlaku_sampai">Berlaku Sampai</label>
            <input type="date" name="berlaku_sampai" class="form-control" value="{{ $jamaah->berlaku_sampai }}">
        </div>

        <div class="form-group">
            <label for="paket_id">Paket Dipilih</label>
            <select name="paket_id" class="form-control" value="{{ $jamaah->paket_id }}" required>
                @foreach ($paket as $pakets)
                    <option value="{{ $pakets->id }}">{{ $pakets->nama_paket }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="kamar_id">Kamar Dipilih</label>
            <ul class="nav nav-tabs" id="kamarTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="kamar1-tab" data-bs-toggle="tab" href="#kamar1" role="tab"
                        aria-controls="kamar1" aria-selected="true">{{ $kamar[0]->jenis_kamar }}</a>
                </li>
                @foreach ($kamar as $index => $kamars)
                    @if ($index > 0) <!-- Skip the first kamar since it's already in the tabs -->
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="kamar{{ $index + 1 }}-tab" data-bs-toggle="tab"
                                href="#kamar{{ $index + 1 }}" role="tab" aria-controls="kamar{{ $index + 1 }}"
                                aria-selected="false">{{ $kamars->jenis_kamar }}</a>
                        </li>
                    @endif
                @endforeach
            </ul>
            <div class="tab-content" id="kamarTabsContent">
                <div class="tab-pane fade show active" id="kamar1" role="tabpanel" aria-labelledby="kamar1-tab">
                    <input type="radio" name="kamar_id" value="{{ $kamar[0]->id }}" required> Pilih Kamar 1
                </div>
                @foreach ($kamar as $index => $kamars)
                    @if ($index > 0) <!-- Skip the first kamar since it's already in the tabs -->
                        <div class="tab-pane fade" id="kamar{{ $index + 1 }}" role="tabpanel"
                            aria-labelledby="kamar{{ $index + 1 }}-tab">
                            <input type="radio" name="kamar_id" value="{{ $kamars->id }}" required> Pilih Kamar {{ $index + 1 }}
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection


<!-- Alamatnya ga muncul di form edit -->