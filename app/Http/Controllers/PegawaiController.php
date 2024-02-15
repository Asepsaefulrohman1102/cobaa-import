<?php

namespace App\Http\Controllers;

use App\Imports\DataPegawai;
use App\Models\Data_File;
use App\Models\Pegawai;
use App\Imports\UsersImport;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Maatwebsite\Excel\Facades\Excel;
use DB;

// class PegawaiController extends Controller
// {

//     public function index()
//     {
//         $pegawais = Pegawai::select('name')
//             ->selectRaw('SUM(
//                 CASE
//                     WHEN tgl_21 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_22 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_23 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_24 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_25 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_26 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_27 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_28 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_29 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_30 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_1 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_2 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_3 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_4 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_5 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_6 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_7 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_8 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_9 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_10 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_11 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_12 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_13 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_14 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_15 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_16 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_17 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_18 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_19 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_20 = "PC" THEN 1
//                     ELSE 0
//                 END
//             ) AS total_PC_count')

//             ->selectRaw('SUM(
//                 CASE
//                     WHEN tgl_21 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_22 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_23 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_24 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_25 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_26 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_27 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_28 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_29 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_30 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_1 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_2 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_3 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_4 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_5 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_6 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_7 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_8 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_9 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_10 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_11 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_12 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_13 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_14 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_15 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_16 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_17 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_18 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_19 = "DT" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_20 = "DT" THEN 1
//                     ELSE 0
//                 END

//                 ) AS total_DT_count')

//             // ALFA
//             ->selectRaw('SUM(
//                 CASE
//                     WHEN tgl_21 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_22 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_23 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_24 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_25 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_26 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_27 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_28 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_29 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_30 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_1 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_2 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_3 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_4 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_5 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_6 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_7 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_8 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_9 = "A"
//                     THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_10 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_11 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_12 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_13 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_14 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_15 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_16 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_17 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_18 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_19 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_20 = "A" THEN 1
//                     ELSE 0
//                 END
//             ) AS total_A_count')

//             // DTPC
//             ->selectRaw('SUM(
//                 CASE
//                     WHEN tgl_21 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_22 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_23 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_24 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_25 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_26 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_27 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_28 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_29 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_30 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_1 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_2 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_3 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_4 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_5 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_6 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_7 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_8 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_9 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_10 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_11 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_12 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_13 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_14 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_15 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_16 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_17 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_18 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_19 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_20 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//             ) AS total_DTPC_count')

//             //DTIPC
//             ->selectRaw('SUM(
//                 CASE
//                     WHEN tgl_21 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_22 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_23 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_24 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_25 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_26 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_27 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_28 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_29 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_30 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_1 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_2 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_3 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_4 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_5 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_6 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_7 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_8 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_9 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_10 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_11 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_12 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_13 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_14 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_15 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_16 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_17 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_18 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_19 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_20 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//             ) AS total_DTIPC_count')

//             // DTPCI
//             ->selectRaw('SUM(
//                 CASE
//                     WHEN tgl_21 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_22 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_23 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_24 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_25 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_26 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_27 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_28 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_29 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_30 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_1 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_2 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_3 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_4 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_5 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_6 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_7 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_8 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_9 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_10 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_11 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_12 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_13 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_14 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_15 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_16 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_17 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_18 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_19 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_20 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//             ) AS total_DTPCI_count')

//             ->groupBy('name')
//             ->get();

//         return view('page.pegawai.index', compact('pegawais'));
//     }

//     public function import(Request $request)
//     {
//         $this->validate($request, [
//             'file' => 'required|mimes:csv,xls,xlsx'
//         ]);

//         $file = $request->file('file');

//         // membuat nama file unik
//         $nama_file = $file->hashName();

//         //temporary file
//         $path = $file->storeAs('public/excel/',$nama_file);

//         // import data
//         $import = Excel::import(new UsersImport(), storage_path('app/public/excel/'.$nama_file));

//         //remove from server
//         Storage::delete($path);

//         if($import) {
//             //redirect
//             return redirect()->route('page.pegawai.index')->with(['success' => 'Data Berhasil Diimport!']);
//         } else {
//             //redirect
//             return redirect()->route('page.pegawai.index')->with(['error' => 'Data Gagal Diimport!']);
//         }
//     }


//     public function getUsersWithPCCount()
//     {
//         $pegawais = Pegawai::selectRaw('SUM(
//                 CASE
//                     WHEN tgl_21 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_22 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_23 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_24 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_25 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_26 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_27 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_28 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_29 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_30 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_1 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_2 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_3 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_4 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_5 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_6 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_7 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_8 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_9 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_10 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_11 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_12 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_13 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_14 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_15 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_16 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_17 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_18 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_19 = "PC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_20 = "PC" THEN 1
//                     ELSE 0
//                 END
//             ) AS total_PC_count_all')
//             ->selectRaw('SUM(
//                 CASE
//                     WHEN tgl_21 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_22 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_23 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_24 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_25 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_26 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_27 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_28 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_29 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_30 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_1 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_2 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_3 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_4 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_5 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_6 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_7 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_8 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_9 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_10 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_11 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_12 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_13 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_14 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_15 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_16 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_17 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_18 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_19 = "DTI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_20 = "DTI" THEN 1
//                     ELSE 0
//                 END

//                 ) AS total_DTI_count_all')
//                 ->selectRaw('SUM(
//                     CASE
//                         WHEN tgl_21 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_22 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_23 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_24 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_25 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_26 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_27 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_28 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_29 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_30 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_1 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_2 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_3 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_4 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_5 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_6 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_7 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_8 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_9 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_10 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_11 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_12 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_13 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_14 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_15 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_16 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_17 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_18 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_19 = "DT" THEN 1
//                         ELSE 0
//                     END
//                     +
//                     CASE
//                         WHEN tgl_20 = "DT" THEN 1
//                         ELSE 0
//                     END

//                     ) AS total_DT_count_all')
//             ->selectRaw('SUM(
//                 CASE
//                     WHEN tgl_21 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_22 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_23 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_24 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_25 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_26 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_27 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_28 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_29 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_30 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_1 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_2 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_3 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_4 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_5 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_6 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_7 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_8 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_9 = "A"
//                     THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_10 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_11 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_12 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_13 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_14 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_15 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_16 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_17 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_18 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_19 = "A" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_20 = "A" THEN 1
//                     ELSE 0
//                 END
//             ) AS total_A_count_all')


//             // PCI
//             ->selectRaw('SUM(
//                 CASE
//                     WHEN tgl_21 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_22 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_23 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_24 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_25 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_26 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_27 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_28 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_29 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_30 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_1 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_2 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_3 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_4 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_5 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_6 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_7 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_8 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_9 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_10 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_11 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_12 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_13 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_14 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_15 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_16 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_17 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_18 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_19 = "PCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_20 = "PCI" THEN 1
//                     ELSE 0
//                 END
//             ) AS total_PCI_count_all')

//             // DTPC
//             ->selectRaw('SUM(
//                 CASE
//                     WHEN tgl_21 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_22 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_23 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_24 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_25 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_26 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_27 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_28 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_29 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_30 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_1 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_2 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_3 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_4 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_5 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_6 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_7 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_8 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_9 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_10 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_11 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_12 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_13 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_14 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_15 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_16 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_17 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_18 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_19 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_20 = "DTPC" THEN 1
//                     ELSE 0
//                 END
//             ) AS total_DTPC_count_all')

//             //DTIPC
//             ->selectRaw('SUM(
//                 CASE
//                     WHEN tgl_21 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_22 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_23 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_24 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_25 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_26 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_27 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_28 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_29 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_30 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_1 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_2 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_3 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_4 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_5 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_6 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_7 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_8 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_9 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_10 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_11 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_12 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_13 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_14 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_15 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_16 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_17 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_18 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_19 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_20 = "DTIPC" THEN 1
//                     ELSE 0
//                 END
//             ) AS total_DTIPC_count_all')

//             // DTPCI
//             ->selectRaw('SUM(
//                 CASE
//                     WHEN tgl_21 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_22 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_23 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_24 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_25 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_26 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_27 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_28 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_29 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_30 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_1 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_2 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_3 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_4 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_5 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_6 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_7 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_8 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_9 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_10 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_11 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_12 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_13 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_14 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_15 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_16 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_17 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_18 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_19 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//                 +
//                 CASE
//                     WHEN tgl_20 = "DTPCI" THEN 1
//                     ELSE 0
//                 END
//             ) AS total_DTPCI_count_all')

//             ->get();

//         return view('page.pegawai.hitung', compact('users'));
//     }


//     public function deleteAllUsers()
//     {
//         Pegawai::truncate(); // Menghapus semua data pada tabel User

//         return redirect()->route('page.pegawai.index')->with('success', 'Semua data user berhasil dihapus.');
//     }


// }

// class PegawaiController extends Controller
// {
//     public function index()
//     {
//         $pegawai = Pegawai::all();
//         return view('page.pegawai.index', compact('pegawai'));
//     }

// }

class PegawaiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
    	$pegawai = DB::table('pegawais')->get();

    	// mengirim data pegawai ke view index
    	return view('page.pegawai.data_pegawai',['pegawais' => $pegawai]);

    }

    public function tambah()
    {
    	// memanggil view tambah
    	return view('page.pegawai.tambah_pegawai');
    }

    public function store(Request $request)
    {
    	// insert data ke table pegawai
    	DB::table('pegawais')->insert([
            'nip' => $request->nip,
    		'nama_pegawai' => $request->nama_pegawai,
            'golongan' => $request->golongan,
            'jabatan' => $request->jabatan,
    		'nomor_wa' => $request->nomor_wa,
    	]);
    	// alihkan halaman ke halaman pegawai
    	return redirect('/pegawai/data_pegawai');
    }

    public function edit($id)
    {
    	// mengambil data pegawai berdasarkan id yang dipilih
    	$pegawai = DB::table('pegawais')->where('id',$id)->get();
    	// passing data pegawai yang didapat ke view edit.blade.php
    	return view('page.pegawai.edit_pegawai',['pegawai' => $pegawai]);
    }

    public function update(Request $request)
    {
    	// update data pegawai
    	DB::table('pegawais')->where('id',$request->id)->update([
            'nip' => $request->nip,
    		'nama_pegawai' => $request->nama_pegawai,
            'golongan' => $request->golongan,
            'jabatan' => $request->jabatan,
    		'nomor_wa' => $request->nomor_wa,
    	]);
    	// alihkan halaman ke halaman pegawai
    	return redirect('/data_pegawai');
    }

    public function hapus($nama_pegawai)
    {
    	// menghapus data pegawai berdasarkan id yang dipilih
    	DB::table('pegawais')->where('nama_pegawai',$nama_pegawai)->delete();

    	// alihkan halaman ke halaman pegawai
    	return redirect('/pegawai/data_pegawai');
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
        $import = Excel::import(new DataPegawai(), storage_path('app/public/excel/'.$nama_file));

        //remove from server
        Storage::delete($path);

        if($import) {
            //redirect
            return redirect()->route('page.pegawai.data_pegawai')->with(['success' => 'Data Berhasil Diimport!']);
        } else {
            //redirect
            return redirect()->route('page.pegawai.data_pegawai')->with(['error' => 'Data Gagal Diimport!']);
        }
    }

    public function deleteAllPegawai()
    {
        Pegawai::truncate(); // Menghapus semua data pada tabel User

        return redirect()->route('page.pegawai.data_pegawai')->with('success', 'Semua data user berhasil dihapus.');
    }

    public function detailPegawai($nama_pegawai)
    {
        $pegawai = Pegawai::where('nama_pegawai', $nama_pegawai);
        return view('page.pegawai.detail_pegawai', compact('pegawai'));
    }


}
