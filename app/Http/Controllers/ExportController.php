<?php

namespace App\Http\Controllers;

use App\Models\Jamaah;
use Illuminate\Http\Request;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use PhpOffice\PhpSpreadsheet\Writer\Csv;

class ExportController extends Controller
{
    public function index()
    {
        return view('admin.export');
    }
    public function export(Request $request)
    {
        // Validasi input kolom yang diminta
        $request->validate([
            'columns' => 'required|array',
            'columns.*' => 'string|in:nama_lengkap,nik,tempat_lahir,tanggal_lahir,alamat,provinsi,kab_kota,kecamatan,kelurahan,jenis_kelamin,no_paspor,masa_berlaku_paspor,lampiran_ktp,lampiran_kk,lampiran_foto_diri,lampiran_paspor,no_visa,berlaku_sampai,paket_id,kamar_id'
        ]);

        // Ambil data dari database dengan kolom yang dipilih oleh pengguna
        $jamaah = Jamaah::select($request->columns)->get();

        // Inisialisasi Spreadsheet
        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Set Header
        $columns = $request->columns;
        foreach ($columns as $key => $column) {
            $sheet->setCellValueByColumnAndRow($key + 1, 1, ucfirst($column)); // Set nama kolom
        }

        // Isi data ke Excel/CSV
        $row = 2;
        foreach ($jamaah as $data) {
            foreach ($columns as $key => $column) {
                $sheet->setCellValueByColumnAndRow($key + 1, $row, $data->$column);
            }
            $row++;
        }

        // Export ke format Excel atau CSV
        if ($request->format() == 'xlsx') {
            $writer = new Xlsx($spreadsheet);
            $fileName = 'data_jamaah.xlsx';
        } else {
            $writer = new Csv($spreadsheet);
            $fileName = 'data_jamaah.csv';
        }

        // Simpan dan kirim file ke pengguna
        $response = response()->streamDownload(function () use ($writer) {
            $writer->save('php://output');
        }, $fileName);

        return $response;
    }
}
