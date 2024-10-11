<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('jamaah', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('nik');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('provinsi');
            $table->string('kab_kota');
            $table->string('kecamatan');
            $table->string('kelurahan');
            $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan']);
            $table->string('no_paspor')->nullable();
            $table->date('masa_berlaku_paspor')->nullable();
            $table->string('lampiran_ktp')->nullable();
            $table->string('lampiran_kk')->nullable();
            $table->string('lampiran_foto_diri')->nullable();
            $table->string('lampiran_paspor')->nullable();
            $table->string('no_visa')->nullable();
            $table->date('berlaku_sampai')->nullable();
            $table->foreignId('paket_id')->constrained('paket');
            $table->foreignId('kamar_id')->constrained('kamar');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jamaahs');
    }
};
