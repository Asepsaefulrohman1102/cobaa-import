<?php

namespace App\Imports;

use App\Models\Pegawai;
use Maatwebsite\Excel\Concerns\ToModel;

class DataPegawai implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pegawai([
            'nip'     => $row[0],
            'nama_pegawai'    => $row[1],
            'golongan'    => $row[2],
            'jabatan'    => $row[3],
            'nomor_wa'    => $row[4]
        ]);
    }
}
