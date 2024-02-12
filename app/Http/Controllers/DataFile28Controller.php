<?php

namespace App\Http\Controllers;

use App\Imports\DataFileImport_28;
use App\Models\Data_File_28;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;

class DataFile28Controller extends Controller
{
    public function index()
    {
        //
    }

    public function import(Request $request)
    {
        $this->validate($request, [
            'file' => 'required|mimes:csv,xls,xlsx'
        ]);

        $file = $request->file('file');

        // membuat nama file unik
        $nama_file = $file->hashName();

        //temporary file
        $path = $file->storeAs('public/excel/',$nama_file);

        // import data
        $import = Excel::import(new DataFileImport_28(), storage_path('app/public/excel/'.$nama_file));

        //remove from server
        Storage::delete($path);

        if($import) {
            //redirect
            return redirect()->route('page.pelanggaran.info-pelanggaran')->with(['success' => 'Data Berhasil Diimport!']);
        } else {
            //redirect
            return redirect()->route('page.pelanggaran.info-pelanggaran')->with(['error' => 'Data Gagal Diimport!']);
        }
    }

    public function deleteAllUsers()
    {
        Data_File_28::truncate(); // Menghapus semua data pada tabel User

        return redirect()->route('page.pelanggaran.info-pelanggaran')->with('success', 'Semua data user berhasil dihapus.');
    }
}
