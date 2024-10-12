<?php

require 'vendor/autoload.php';

use Illuminate\Support\Facades\Blade;

// Inisialisasi aplikasi Laravel
$app = require_once 'bootstrap/app.php';

// Render template Blade
$html = Blade::render('resource.view.layout.app', [
    // Tambahkan data yang diperlukan di sini
]);

// Simpan hasil render ke file HTML
file_put_contents('app.html', $html);