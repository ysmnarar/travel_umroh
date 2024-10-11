@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Data Jamaah</h1>

    <!-- Alert message -->
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Alert Error -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('admin.jamaah.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Form inputs here -->
        <div class="form-group">
            <label for="nama_lengkap">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="number" name="nik" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <div class="form-group">
            <label for="provinsi">Provinsi</label>
            <select name="provinsi" id="provinsi" class="form-control" required>
                <option value="">Pilih Provinsi</option>
                <option value="Aceh">Aceh</option>
                <option value="Sumatera Utara">Sumatera Utara</option>
                <option value="Sumatera Barat">Sumatera Barat</option>
                <option value="Riau">Riau</option>
                <option value="Jambi">Jambi</option>
                <option value="Sumatera Selatan">Sumatera Selatan</option>
                <option value="Bengkulu">Bengkulu</option>
                <option value="Lampung">Lampung</option>
                <option value="DKI Jakarta">DKI Jakarta</option>
                <option value="Jawa Barat">Jawa Barat</option>
                <option value="Jawa Tengah">Jawa Tengah</option>
                <option value="DI Yogyakarta">DI Yogyakarta</option>
                <option value="Jawa Timur">Jawa Timur</option>
                <option value="Bali">Bali</option>
                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                <option value="Kalimantan Barat">Kalimantan Barat</option>
                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                <option value="Kalimantan Timur">Kalimantan Timur</option>
                <option value="Kalimantan Utara">Kalimantan Utara</option>
                <option value="Sulawesi Utara">Tangerang</option>
                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                <option value="Sulawesi Barat">Sulawesi Barat</option>
                <option value="Maluku">Maluku</option>
                <option value="Maluku Utara">Maluku Utara</option>
                <option value="Papua">Papua</option>
                <option value="Papua Barat">Papua Barat</option>
            </select>
        </div>

        <div class="form-group">
            <label for="kab_kota">Kabupaten/Kota</label>
            <select name="kab_kota" id="kab_kota" class="form-control" required disabled>
                <option value="">Pilih Kabupaten/Kota</option>
                <!-- Opsi akan diisi menggunakan JavaScript -->
            </select>
        </div>

        <div class="form-group">
            <label for="kecamatan">Kecamatan</label>
            <select name="kecamatan" id="kecamatan" class="form-control" required disabled>
                <option value="">Pilih Kecamatan</option>
                <!-- Opsi akan diisi menggunakan JavaScript -->
            </select>
        </div>

        <div class="form-group">
            <label for="kelurahan">Kelurahan</label>
            <select name="kelurahan" id="kelurahan" class="form-control" required disabled>
                <option value="">Pilih Kelurahan</option>
                <!-- Opsi akan diisi menggunakan JavaScript -->
            </select>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label><br>
            <div class="form-check">
                <input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki" class="form-check-input"
                    required>
                <label for="laki-laki" class="form-check-label">Laki-laki</label>
            </div>
            <div class="form-check">
                <input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan" class="form-check-input"
                    required>
                <label for="perempuan" class="form-check-label">Perempuan</label>
            </div>
        </div>

        <div class="form-group">
            <label for="no_paspor">No. Paspor</label>
            <input type="text" name="no_paspor" class="form-control" required pattern="[A-Z]{2}[0-9]{6,8}"
                title="Format: 2 huruf diikuti 6-8 angka (misalnya: AB123456)">
        </div>

        <div class="form-group">
            <label for="masa_berlaku_paspor">Masa Berlaku Paspor</label>
            <input type="date" name="masa_berlaku_paspor" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="lampiran_ktp">Lampiran KTP</label>
            <input type="file" name="lampiran_ktp" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="lampiran_kk">Lampiran KK</label>
            <input type="file" name="lampiran_kk" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="lampiran_foto_diri">Lampiran Foto Diri</label>
            <input type="file" name="lampiran_foto_diri" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="lampiran_paspor">Lampiran Paspor</label>
            <input type="file" name="lampiran_paspor" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="no_visa">No. Visa</label>
            <input type="text" name="no_visa" class="form-control" required pattern="[A-Z]{2}[0-9]{6,8}"
                title="Format: 2 huruf diikuti 6-8 angka (misalnya: AB123456)">
        </div>

        <div class="form-group">
            <label for="berlaku_sampai">Berlaku Sampai</label>
            <input type="date" name="berlaku_sampai" class="form-control">
        </div>

        <div class="form-group">
            <label for="paket_id">Paket Dipilih</label>
            <select name="paket_id" class="form-control" required>
                <option value="">Pilih Paket</option>
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

        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>

<script>
    const kabupatenKotaData = {
        "Aceh": {
            "Banda Aceh": ["Baiturrahman", "Kuta Alam", "Ulee Kareng", "Syiah Kuala", "Jaya Baru"],
            "Aceh Besar": ["Jantho", "Lhoong", "Kota Jantho", "Simpang Tiga", "Ingin Jaya"],
            "Sabang": ["Sabang", "Banda Sakti", "Jaya", "Kota Seudati"],
            "Pidie": ["Sigli", "Grong-Grong", "Mutiara", "Pasi Pulau"],
            "Bireuen": ["Bireuen", "Jeunib", "Ganda Pura", "Peusangan"],
            "Aceh Utara": ["Lhoksukon", "Kota Lhokseumawe", "Sawang", "Tanah Jambo Aye"],
            "Nagan Raya": ["Suka Makmue", "Seunagan", "Darul Makmur", "Kota Nagan Raya"],
            "Aceh Tengah": ["Takengon", "Bintang", "Kebayakan", "Kute Panang"],
            "Aceh Jaya": ["Calang", "Teunom", "Krueng Sabee"],
            "Gayo Lues": ["Blangkejeren", "Putri Betung", "Pining"]
        },
        "Sumatera Utara": {
            "Medan": ["Medan Amplas", "Medan Maimun", "Medan Petisah", "Medan Johor", "Medan Belawan"],
            "Deli Serdang": ["Lubuk Pakam", "Beringin", "Sunggal", "Tanjung Morawa"],
            "Tebing Tinggi": ["Tebing Tinggi Kota", "Tebing Tinggi", "Bandar Khalifah"],
            "Binjai": ["Binjai Kota", "Binjai Utara", "Binjai Selatan"],
            "Langkat": ["Stabat", "Wampu", "Tanjung Pura"],
            "Karo": ["Kabanjahe", "Berastagi", "Merek"],
            "Simalungun": ["Pematang Siantar", "Raya", "Hatonduhan"],
            "Asahan": ["Kisaran Barat", "Kisaran Timur", "Air Joman"],
            "Labuhanbatu": ["Rantauprapat", "Bilah Hilir", "Bilah Hulu"],
            "Humbang Hasundutan": ["Dolok Sanggul", "Paranginan", "Pakkat"],
            "Tapanuli Utara": ["Tarutung", "Sipoholon", "Pahae Julu"],
            "Nias": ["Gunungsitoli", "Nias Selatan", "Nias Barat"],
            "Sergai": ["Seirampah", "Perbaungan", "Seyegan"]
        },
        "Sumatera Barat": {
            "Padang": ["Padang Barat", "Padang Timur", "Koto Tangah", "Lubuk Begalung", "Nanggalo"],
            "Bukittinggi": ["Guguk Panjang", "Aur Sanjaya", "Matur"],
            "Payakumbuh": ["Payakumbuh Barat", "Payakumbuh Timur"],
            "Solok": ["Solok Kota", "Lubuk Sikarah", "Tanah Garam"],
            "Sijunjung": ["Sijunjung", "Koto Baru", "Junjung Sirih"],
            "Tanah Datar": ["Batusangkar", "X Koto", "Pangkalan"],
            "Pesisir Selatan": ["Painan", "IV Jurai", "Lembah Gumanti"],
            "Agam": ["Lubuk Basung", "Ampek Nagari", "Malalak"],
            "Dharmasraya": ["Dharmasraya", "Pulau Punjung", "Sembilan"],
            "Pasaman": ["Lubuk Sikaping", "Pasaman Barat", "Tanjung Alai"]
        },
        "Riau": {
            "Pekanbaru": ["Senapelan", "Marpoyan Damai", "Rumbai", "Tebing Tinggi"],
            "Kampar": ["Bangkinang", "Kampar Kiri", "Rumbio Jaya", "Suka Maju"],
            "Kuantan Singingi": ["Teluk Kuantan", "Singingi", "Hulu Kuantan"],
            "Indragiri Hulu": ["Rengat", "Kota Rengat", "Seberida"],
            "Indragiri Hilir": ["Tembilahan", "Enok", "Kateman"],
            "Pelalawan": ["Pangkalan Kerinci", "Langgam", "Bunut"],
            "Rokan Hulu": ["Pasir Pengaraian", "Kuntansi", "Rokan IV Koto"],
            "Rokan Hilir": ["Bagan Siapi-api", "Kubu", "Kubu Babussalam"],
            "Siak": ["Siak", "Koto Gasib", "Mempura"]
        },
        "Jambi": {
            "Jambi": ["Jambi Selatan", "Jambi Timur", "Danau Teluk", "Pelayangan"],
            "Muaro Jambi": ["Muaro Jambi", "Sungai Gelam", "Sekernan"],
            "Batanghari": ["Muara Tembesi", "Maro Sebo", "Sungai Penuh"],
            "Bungo": ["Muara Bungo", "Rantau Pandan", "Jujun"],
            "Tanjung Jabung Timur": ["Kuala Tungkal", "Sabak Barat", "Sabak Timur"],
            "Tanjung Jabung Barat": ["Tanjung Jabung", "Pengabuan", "Kota Bharu"],
            "Kerinci": ["Sungai Penuh", "Siulak", "Air Hangat"],
            "Sarolangun": ["Sarolangun", "Pelawan", "Mandiangin"]
        },
        "Sumatera Selatan": {
            "Palembang": ["Ilir Barat I", "Ilir Timur II", "Ulu Melaka", "Kertapati"],
            "Ogan Ilir": ["Indralaya", "Tanjung Raja", "Payaraman"],
            "Ogan Komering Ilir": ["Kayuagung", "Kota Kayuagung", "Mesuji Raya"],
            "Muara Enim": ["Muara Enim", "Prabumulih", "Lahat"],
            "Banyuasin": ["Pangkalan Balai", "Makarti Jaya", "Talang Kelapa"],
            "Lahat": ["Lahat", "Kota Lahat", "Pagar Alam"],
            "Musi Banyuasin": ["Sekayu", "Banyuasin I", "Banyuasin II"],
            "Empat Lawang": ["Tebing Tinggi", "Pendopo", "Ulu Musi"]
        },
        "Bengkulu": {
            "Bengkulu": ["Bengkulu Utara", "Ratu Agung", "Gading Cempaka"],
            "Seluma": ["Seluma", "Semidang Alas", "Talo"],
            "Kaur": ["Bintuhan", "Nasal", "Maje"],
            "Rejang Lebong": ["Curup", "Selupu Rejang", "Bengkulu Tengah"],
            "Lebong": ["Lebong Sakti", "Pernasahan", "Topos"],
            "Mukomuko": ["Mukomuko", "Air Manjunto", "Penarik"],
            "Bengkulu Selatan": ["Kota Manna", "Pino", "Sungaipenuh"]
        },
        "Lampung": {
            "Bandar Lampung": ["Enggal", "Kedaton", "Tanjung Karang Pusat", "Rajabasa"],
            "Lampung Selatan": ["Kalianda", "Rajabasa", "Sidomulyo"],
            "Lampung Tengah": ["Gunung Sugih", "Terbanggi Besar", "Rumbia"],
            "Lampung Utara": ["Kotabumi", "Tanjung Raja", "Abung Selatan"],
            "Way Kanan": ["Blambangan Umpu", "Baradatu", "Negeri Besar"],
            "Pesawaran": ["Gedong Tataan", "Pesawaran", "Way Lima"],
            "Tanggamus": ["Kota Agung", "Kota Agung Timur", "Pematang Sawa"],
            "Pringsewu": ["Pringsewu", "Gadingrejo", "Sukoharjo"]
        },
        "DKI Jakarta": {
            "Jakarta Pusat": ["Gambir", "Tanah Abang", "Menteng", "Johar Baru"],
            "Jakarta Utara": ["Kamal Muara", "Penjaringan", "Pademangan", "Tanjung Priok"],
            "Jakarta Barat": ["Kebon Jeruk", "Palmerah", "Grogol Petamburan"],
            "Jakarta Selatan": ["Kebayoran Baru", "Cilandak", "Jagakarsa"],
            "Jakarta Timur": ["Pulo Gadung", "Cakung", "Jatinegara"],
        },
        "Jawa Barat": {
            "Bandung": ["Bandung Wetan", "Coblong", "Cidadap", "Sumurbandung"],
            "Bogor": ["Bogor Selatan", "Bogor Tengah", "Bogor Utara"],
            "Bekasi": ["Bekasi Selatan", "Bekasi Utara", "Medan Satria"],
            "Depok": ["Beji", "Pancoran Mas", "Cimanggis"],
            "Sukabumi": ["Sukabumi Kota", "Sukabumi", "Cikembang"],
            "Cirebon": ["Cirebon Utara", "Cirebon Selatan", "Cirebon Tengah"],
            "Karawang": ["Karawang Barat", "Karawang Timur"],
            "Tasikmalaya": ["Tasikmalaya Kota", "Cihideung", "Indihiang"]
        },
        "Jawa Tengah": {
            "Semarang": ["Semarang Selatan", "Semarang Utara", "Tembalang", "Gajahmungkur"],
            "Surakarta": ["Banjarsari", "Laweyan", "Jebres"],
            "Sukoharjo": ["Sukoharjo", "Gatak", "Bendosari"],
            "Klaten": ["Klaten Utara", "Klaten Selatan", "Kota Klaten"],
            "Magelang": ["Magelang Selatan", "Magelang Utara"],
            "Batang": ["Batang", "Banyuputih", "Gringsing"],
            "Pekalongan": ["Pekalongan Selatan", "Pekalongan Utara"],
            "Wonosobo": ["Wonosobo", "Garung", "Kertek"]
        },
        "DI Yogyakarta": {
            "Yogyakarta": ["Kota Yogyakarta", "Gondokusuman", "Mergangsan", "Mantrijeron"],
            "Sleman": ["Sleman", "Godean", "Turi"],
            "Bantul": ["Bantul", "Seyegan", "Dlingo"],
            "Gunungkidul": ["Wonosari", "Karangmojo", "Nglipar"],
            "Kulon Progo": ["Wates", "Kalibawang", "Sentolo"]
        },
        "Jawa Timur": {
            "Surabaya": ["Genteng", "Gubeng", "Wonokromo"],
            "Malang": ["Malang Kota", "Batu", "Malang"],
            "Sidoarjo": ["Sidoarjo", "Taman", "Candi"],
            "Pasuruan": ["Pasuruan Kota", "Gempol", "Bangil"],
            "Probolinggo": ["Probolinggo Kota", "Gending", "Kotaanyar"],
            "Bangkalan": ["Bangkalan", "Kota Bangkalan", "Blega"],
            "Bojonegoro": ["Bojonegoro", "Dander", "Sukosewu"]
        },
        "Bali": {
            "Denpasar": ["Denpasar Selatan", "Denpasar Utara", "Denpasar Barat"],
            "Badung": ["Mangupura", "Kuta", "Abiansemal"],
            "Buleleng": ["Singaraja", "Seririt", "Tejakula"],
            "Gianyar": ["Gianyar", "Ubud", "Payangan"],
            "Karangasem": ["Amlapura", "Abang", "Karangasem"],
            "Klungkung": ["Semarapura", "Kusamba"],
            "Tabanan": ["Tabanan", "Kediri", "Pancoran"]
        },
        "Nusa Tenggara Barat": {
            "Mataram": ["Mataram", "Cakranegara", "Selaparang"],
            "Lombok Barat": ["Lombok Barat", "Gunung Sari"],
            "Lombok Tengah": ["Praya", "Janapria", "Pujut"],
            "Lombok Timur": ["Selong", "Sikur", "Pringgabaya"],
            "Sumbawa": ["Sumbawa Besar", "Labuhan Badas", "Moyo Hilir"],
            "Dompu": ["Dompu", "Kempo", "Pajo"],
            "Bima": ["Bima", "Rontu", "Sanggar"],
            "West Sumbawa": ["Taliwang", "Seteluk"]
        },
        "Nusa Tenggara Timur": {
            "Kupang": ["Kupang", "Kelapa Lima", "Makassar"],
            "Timor Tengah Selatan": ["Soe", "Noebana"],
            "Timor Tengah Utara": ["Kota Kefamenanu", "Insana"],
            "Belu": ["Atambua", "Tasifeto Timur"],
            "Alor": ["Kalabahi", "Mataru"],
            "Flores Timur": ["Larantuka", "Kota Flores Timur"],
            "Sikka": ["Maumere", "Nita"],
            "Ngada": ["Bajawa", "Soa"],
            "Ende": ["Ende", "Kota Ende"],
            "Nagekeo": ["Mbawa", "Aesesa"],
            "Manggarai": ["Ruteng", "Cibal"],
            "Manggarai Barat": ["Labuan Bajo", "Komodo"]
        },
        "Kalimantan Barat": {
            "Pontianak": ["Pontianak Kota", "Pontianak Timur", "Pontianak Selatan"],
            "Singkawang": ["Singkawang Selatan", "Singkawang Tengah", "Singkawang Utara"],
            "Ketapang": ["Ketapang", "Banjarsari"],
            "Sintang": ["Sintang", "Kayan Hilir"],
            "Kapuas Hulu": ["Kapuas Hulu", "Putussibau"],
            "Sekadau": ["Sekadau", "Sekadau Hilir"],
            "Landak": ["Ngabang", "Mempawah"],
            "Mempawah": ["Mempawah", "Siantan"],
            "Bengkayang": ["Bengkayang", "Lemar"],
            "Sambas": ["Sambas", "Pemangkat"]
        },
        "Kalimantan Tengah": {
            "Palangkaraya": ["Palangkaraya", "Pahandut", "Sabangau"],
            "Kotawaringin Barat": ["Kotawaringin Lama", "Pangkalan Bun"],
            "Kotawaringin Timur": ["Sampit", "Seranau"],
            "Kapuas": ["Kapuas", "Timpah"],
            "Barito Selatan": ["Buntok", "Karau Kuala"],
            "Barito Utara": ["Muara Teweh", "Montallat"],
            "Gunung Mas": ["Kuala Kurun", "Kahayan Hilir"]
        },
        "Kalimantan Selatan": {
            "Banjarmasin": ["Banjarmasin Selatan", "Banjarmasin Utara", "Banjarmasin Timur"],
            "Banjar": ["Martapura", "Kandangan"],
            "Barito Kuala": ["Marabahan", "Anjir Muara"],
            "Tapin": ["Rantau", "Tapin Selatan"],
            "Hulu Sungai Selatan": ["Kandangan", "Loksado"],
            "Hulu Sungai Utara": ["Amuntai", "Banjarmasin"],
            "Tanah Laut": ["Pelaihari", "Kintap"]
        },
        "Kalimantan Timur": {
            "Samarinda": ["Samarinda Ulu", "Samarinda Ilir"],
            "Balikpapan": ["Balikpapan Kota", "Balikpapan Selatan"],
            "Kutai Kartanegara": ["Tenggarong", "Samarinda Seberang"],
            "Berau": ["Tanjung Redeb", "Gunung Tabur"],
            "Paser": ["Tanah Grogot", "Long Ikis"],
            "Mahakam Ulu": ["Ulu Mahakam", "Long Apari"]
        },
        "Kalimantan Utara": {
            "Tarakan": ["Tarakan Tengah", "Tarakan Barat"],
            "Nunukan": ["Nunukan", "Sebatik"],
            "Malinau": ["Malinau Kota", "Mentarang"],
            "Bulungan": ["Tanjung Selor", "Buli"],
            "Kota Baru": ["Kota Baru", "Kotabaru"]
        },
        "Sulawesi Utara": {
            "Manado": ["Manado Kota", "Bunaken", "Malalayang"],
            "Bitung": ["Bitung", "Madidir"],
            "Tomohon": ["Tomohon Utara", "Tomohon Selatan"],
            "Minahasa": ["Tondano", "Langowan"],
            "Sangihe": ["Sangihe", "Tahuna"],
            "Talaud": ["Salibabu", "Kepulauan Talaud"],
            "Bolaang Mongondow": ["Bolaang Mongondow", "Bolaang"],
            "Mongondow": ["Mongondow"]
        },
        "Sulawesi Tengah": {
            "Palu": ["Palu", "Tatanga", "Ulujadi"],
            "Donggala": ["Donggala"],
            "Sigi": ["Sigi Biromaru", "Nokilalaki"],
            "Parigi Moutong": ["Parigi", "Moutong"],
            "Morowali": ["Morowali", "Bungku"]
        },
        "Sulawesi Selatan": {
            "Makassar": ["Makassar", "Bontoala", "Ujung Pandang"],
            "Gowa": ["Gowa", "Tompobulu"],
            "Tana Toraja": ["Rantepao", "Makale"],
            "Bone": ["Watampone", "Bola"],
            "Luwu": ["Luwu", "Palopo"],
            "Sinjai": ["Sinjai", "Sinjai Timur"]
        },
        "Sulawesi Barat": {
            "Mamuju": ["Mamuju", "Simboro"],
            "Majene": ["Majene", "Pamboang"],
            "Polewali Mandar": ["Polewali", "Anreapi"],
            "Mamasa": ["Mamasa", "Mesakada"],
            "Mamuju Tengah": ["Mamuju Tengah"]
        },
        "Maluku": {
            "Ambon": ["Ambon", "Baguala"],
            "Maluku Tengah": ["Masohi", "Pulau Haruku"],
            "Maluku Tenggara": ["Langgur", "Kota Tual"],
            "Maluku Barat Daya": ["Saumlaki", "Kota Saumlaki"],
            "Seram Bagian Barat": ["Seram Barat", "Siri Sori Islam"],
            "Seram Bagian Timur": ["Seram Timur", "Bula"]
        },
        "Maluku Utara": {
            "Ternate": ["Ternate", "TIDORE"],
            "Halmahera Selatan": ["Bacan", "Kota Bacan"],
            "Halmahera Utara": ["Sofifi", "Galela"],
            "Pulau Morotai": ["Morotai", "Duma"]
        },
        "Papua": {
            "Jayapura": ["Jayapura Kota", "Abepura", "Heram"],
            "Sarmi": ["Sarmi"],
            "Kepulauan Yapen": ["Serui"],
            "Biak Numfor": ["Biak Kota", "Numfor"],
            "Puncak Jaya": ["Mulia", "Tembagapura"],
            "Mimika": ["Timika", "Mimika Barat"],
            "Asmat": ["Agats"],
            "Waropen": ["Biak"]
        },
        "Papua Barat": {
            "Manokwari": ["Manokwari", "Masni", "Prafi"],
            "Sorong": ["Sorong", "Sorong Selatan"],
            "Raja Ampat": ["Waisai", "Waigeo"],
            "Kaimana": ["Kaimana", "Kaimana"],
            "Fakfak": ["Fakfak"],
            "Teluk Bintuni": ["Teluk Bintuni"],
            "Bintuni": ["Bintuni"],
            "Mansoramo": ["Mansoramo"]
        }
    }

    const provinsiSelect = document.getElementById('provinsi');
    const kabKotaSelect = document.getElementById('kab_kota');
    const kecamatanSelect = document.getElementById('kecamatan');
    const kelurahanSelect = document.getElementById('kelurahan');

    provinsiSelect.addEventListener('change', function () {
        const selectedProvinsi = this.value;

        // Reset dropdown
        kabKotaSelect.innerHTML = '<option value="">Pilih Kabupaten/Kota</option>';
        kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
        kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';

        if (selectedProvinsi) {
            kabKotaSelect.disabled = false;
            const kabupatenKotaOptions = kabupatenKotaData[selectedProvinsi];

            for (const kabKota in kabupatenKotaOptions) {
                kabKotaSelect.innerHTML += `<option value="${kabKota}">${kabKota}</option>`;
            }
        } else {
            kabKotaSelect.disabled = true;
            kecamatanSelect.disabled = true;
            kelurahanSelect.disabled = true;
        }
    });

    kabKotaSelect.addEventListener('change', function () {
        const selectedProvinsi = provinsiSelect.value;
        const selectedKabKota = this.value;

        // Reset dropdown
        kecamatanSelect.innerHTML = '<option value="">Pilih Kecamatan</option>';
        kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';

        if (selectedKabKota) {
            kecamatanSelect.disabled = false;
            const kecamatanOptions = kabupatenKotaData[selectedProvinsi][selectedKabKota];

            for (const kecamatan of kecamatanOptions) {
                kecamatanSelect.innerHTML += `<option value="${kecamatan}">${kecamatan}</option>`;
            }
        } else {
            kecamatanSelect.disabled = true;
            kelurahanSelect.disabled = true;
        }
    });

    kecamatanSelect.addEventListener('change', function () {
        const selectedKecamatan = this.value;

        // Reset dropdown kelurahan
        kelurahanSelect.innerHTML = '<option value="">Pilih Kelurahan</option>';

        if (selectedKecamatan) {
            kelurahanSelect.disabled = false;
            // Di sini Anda bisa menambahkan data kelurahan sesuai dengan kecamatan
            // Contoh:
            kelurahanSelect.innerHTML += `<option value="Kelurahan 1">Kelurahan 1</option>`;
            kelurahanSelect.innerHTML += `<option value="Kelurahan 2">Kelurahan 2</option>`;
            // Sesuaikan dengan data yang relevan
        } else {
            kelurahanSelect.disabled = true;
        }
    });
</script>

@endsection