<?php

namespace App\Imports;

use App\Models\User;
use App\Models\Data_File;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Data_File([
            'name'     => $row[1],
            'tgl_21'    => $row[3],
            'tgl_22'    => $row[4],
            'tgl_23'    => $row[5],
            'tgl_24'    => $row[6],
            'tgl_25'    => $row[7],
            'tgl_26'    => $row[8],
            'tgl_27'    => $row[9],
            'tgl_28'    => $row[10],
            'tgl_29'    => $row[11],
            'tgl_30'    => $row[12],
            'tgl_31'    => $row[13],
            'tgl_1'    => $row[14],
            'tgl_2'    => $row[15],
            'tgl_3'    => $row[16],
            'tgl_4'    => $row[17],
            'tgl_5'    => $row[18],
            'tgl_6'    => $row[19],
            'tgl_7'    => $row[20],
            'tgl_8'    => $row[21],
            'tgl_9'    => $row[22],
            'tgl_10'    => $row[23],
            'tgl_11'    => $row[24],
            'tgl_12'    => $row[25],
            'tgl_13'    => $row[26],
            'tgl_14'    => $row[27],
            'tgl_15'    => $row[28],
            'tgl_16'    => $row[29],
            'tgl_17'    => $row[30],
            'tgl_18'    => $row[31],
            'tgl_19'    => $row[32],
            'tgl_20'    => $row[33]
        ]);
    }
}
