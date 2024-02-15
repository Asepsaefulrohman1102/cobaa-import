<?php

namespace App\Http\Controllers;

use file;
use App\Models\User;
use App\Models\Pegawai;
use App\Models\Data_File;
use App\Models\Data_File_28;
use App\Models\Data_File_30;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PelanggaranController extends Controller
{
    public function index()
    {
        $pelanggaran_31 = Data_File::selectRaw('SUM(
            CASE WHEN tgl_21 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_31 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "PC" THEN 1 ELSE 0 END
        ) AS total_PC_count_all')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_31 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DT" THEN 1 ELSE 0 END
        ) AS total_DT_count_all')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_31 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "A" THEN 1 ELSE 0 END
        ) AS total_A_count_all')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_31 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTPC" THEN 1 ELSE 0 END
        ) AS total_DTPC_count_all')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_31 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTIPC" THEN 1 ELSE 0 END
        ) AS total_DTIPC_count_all')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_31 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTPCI" THEN 1 ELSE 0 END
        ) AS total_DTPCI_count_all')
        ->get();

        $pelanggaran_28 = Data_File_28::selectRaw('SUM(
            CASE WHEN tgl_21 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "PC" THEN 1 ELSE 0 END
        ) AS total_PC_count_all_28')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DT" THEN 1 ELSE 0 END
        ) AS total_DT_count_all_28')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "A" THEN 1 ELSE 0 END
        ) AS total_A_count_all_28')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTPC" THEN 1 ELSE 0 END
        ) AS total_DTPC_count_all_28')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTIPC" THEN 1 ELSE 0 END
        ) AS total_DTIPC_count_all_28')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTPCI" THEN 1 ELSE 0 END
        ) AS total_DTPCI_count_all_28')
        ->get();

        $pelanggaran_30 = Data_File_30::selectRaw('SUM(
            CASE WHEN tgl_21 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "PC" THEN 1 ELSE 0 END
        ) AS total_PC_count_all_30')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DT" THEN 1 ELSE 0 END
        ) AS total_DT_count_all_30')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "A" THEN 1 ELSE 0 END
        ) AS total_A_count_all_30')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTPC" THEN 1 ELSE 0 END
        ) AS total_DTPC_count_all_30')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTIPC" THEN 1 ELSE 0 END
        ) AS total_DTIPC_count_all_30')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTPCI" THEN 1 ELSE 0 END
        ) AS total_DTPCI_count_all_30')
        ->get();

        return view('page.index', compact('pelanggaran_30', 'pelanggaran_28', 'pelanggaran_31'));

    }

    // Info Pelanggaran
    public function info()
    {
        $pelanggaran_31 = Data_File::selectRaw('SUM(
            CASE WHEN tgl_21 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_31 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "PC" THEN 1 ELSE 0 END
        ) AS total_PC_count_all')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_31 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DT" THEN 1 ELSE 0 END
        ) AS total_DT_count_all')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_31 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "A" THEN 1 ELSE 0 END
        ) AS total_A_count_all')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_31 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTPC" THEN 1 ELSE 0 END
        ) AS total_DTPC_count_all')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_31 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTIPC" THEN 1 ELSE 0 END
        ) AS total_DTIPC_count_all')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_31 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTPCI" THEN 1 ELSE 0 END
        ) AS total_DTPCI_count_all')
        ->get();

        $pelanggaran_28 = Data_File_28::selectRaw('SUM(
            CASE WHEN tgl_21 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "PC" THEN 1 ELSE 0 END
        ) AS total_PC_count_all_28')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DT" THEN 1 ELSE 0 END
        ) AS total_DT_count_all_28')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "A" THEN 1 ELSE 0 END
        ) AS total_A_count_all_28')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTPC" THEN 1 ELSE 0 END
        ) AS total_DTPC_count_all_28')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTIPC" THEN 1 ELSE 0 END
        ) AS total_DTIPC_count_all_28')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTPCI" THEN 1 ELSE 0 END
        ) AS total_DTPCI_count_all_28')
        ->get();

        $pelanggaran_30 = Data_File_30::selectRaw('SUM(
            CASE WHEN tgl_21 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "PC" THEN 1 ELSE 0 END
        ) AS total_PC_count_all_30')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DT" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DT" THEN 1 ELSE 0 END
        ) AS total_DT_count_all_30')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "A" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "A" THEN 1 ELSE 0 END
        ) AS total_A_count_all_30')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTPC" THEN 1 ELSE 0 END
        ) AS total_DTPC_count_all_30')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTIPC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTIPC" THEN 1 ELSE 0 END
        ) AS total_DTIPC_count_all_30')

        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "DTPCI" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "DTPCI" THEN 1 ELSE 0 END
        ) AS total_DTPCI_count_all_30')
        ->get();

        // $pulangcepat_28 = Data_File_28::select('name', 'tgl_21', 'tgl_22', 'tgl_23', 'tgl_24', 'tgl_25', 'tgl_26', 'tgl_27', 'tgl_28', 'tgl_1', 'tgl_2', 'tgl_3', 'tgl_4', 'tgl_5', 'tgl_6', 'tgl_7', 'tgl_8', 'tgl_9', 'tgl_10', 'tgl_11', 'tgl_12', 'tgl_13', 'tgl_14', 'tgl_15', 'tgl_16', 'tgl_17', 'tgl_18', 'tgl_19', 'tgl_20')
        // ->selectRaw('SUM(
        //     CASE WHEN tgl_21 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_22 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_23 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_24 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_25 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_26 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_27 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_28 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_1 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_2 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_3 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_4 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_5 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_6 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_7 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_8 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_9 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_10 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_11 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_12 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_13 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_14 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_15 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_16 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_17 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_18 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_19 = "PC" THEN 1 ELSE 0 END
        //     +
        //     CASE WHEN tgl_20 = "PC" THEN 1 ELSE 0 END
        // ) AS total_PulangCepat_28')

        // ->groupBy('name', 'tgl_21', 'tgl_22', 'tgl_23', 'tgl_24', 'tgl_25', 'tgl_26', 'tgl_27', 'tgl_28', 'tgl_1', 'tgl_2', 'tgl_3', 'tgl_4', 'tgl_5', 'tgl_6', 'tgl_7', 'tgl_8', 'tgl_9', 'tgl_10', 'tgl_11', 'tgl_12', 'tgl_13', 'tgl_14', 'tgl_15', 'tgl_16', 'tgl_17', 'tgl_18', 'tgl_19', 'tgl_20')
        // ->get();

        $pulangcepat_28 = DB::table('data__file_28s as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'PC')
        ->orWhere('df.tgl_22', 'PC')
        ->orWhere('df.tgl_23', 'PC')
        ->orWhere('df.tgl_24', 'PC')
        ->orWhere('df.tgl_25', 'PC')
        ->orWhere('df.tgl_26', 'PC')
        ->orWhere('df.tgl_27', 'PC')
        ->orWhere('df.tgl_28', 'PC')
        ->orWhere('df.tgl_1', 'PC')
        ->orWhere('df.tgl_2', 'PC')
        ->orWhere('df.tgl_3', 'PC')
        ->orWhere('df.tgl_4', 'PC')
        ->orWhere('df.tgl_5', 'PC')
        ->orWhere('df.tgl_6', 'PC')
        ->orWhere('df.tgl_7', 'PC')
        ->orWhere('df.tgl_8', 'PC')
        ->orWhere('df.tgl_9', 'PC')
        ->orWhere('df.tgl_10', 'PC')
        ->orWhere('df.tgl_11', 'PC')
        ->orWhere('df.tgl_12', 'PC')
        ->orWhere('df.tgl_13', 'PC')
        ->orWhere('df.tgl_14', 'PC')
        ->orWhere('df.tgl_15', 'PC')
        ->orWhere('df.tgl_16', 'PC')
        ->orWhere('df.tgl_17', 'PC')
        ->orWhere('df.tgl_18', 'PC')
        ->orWhere('df.tgl_19', 'PC')
        ->orWhere('df.tgl_20', 'PC')
        ->get();

        $pulangcepat_30 = DB::table('data__file_30s as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_29', 'df.tgl_30', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'PC')
        ->orWhere('df.tgl_22', 'PC')
        ->orWhere('df.tgl_23', 'PC')
        ->orWhere('df.tgl_24', 'PC')
        ->orWhere('df.tgl_25', 'PC')
        ->orWhere('df.tgl_26', 'PC')
        ->orWhere('df.tgl_27', 'PC')
        ->orWhere('df.tgl_28', 'PC')
        ->orWhere('df.tgl_29', 'PC')
        ->orWhere('df.tgl_30', 'PC')
        ->orWhere('df.tgl_1', 'PC')
        ->orWhere('df.tgl_2', 'PC')
        ->orWhere('df.tgl_3', 'PC')
        ->orWhere('df.tgl_4', 'PC')
        ->orWhere('df.tgl_5', 'PC')
        ->orWhere('df.tgl_6', 'PC')
        ->orWhere('df.tgl_7', 'PC')
        ->orWhere('df.tgl_8', 'PC')
        ->orWhere('df.tgl_9', 'PC')
        ->orWhere('df.tgl_10', 'PC')
        ->orWhere('df.tgl_11', 'PC')
        ->orWhere('df.tgl_12', 'PC')
        ->orWhere('df.tgl_13', 'PC')
        ->orWhere('df.tgl_14', 'PC')
        ->orWhere('df.tgl_15', 'PC')
        ->orWhere('df.tgl_16', 'PC')
        ->orWhere('df.tgl_17', 'PC')
        ->orWhere('df.tgl_18', 'PC')
        ->orWhere('df.tgl_19', 'PC')
        ->orWhere('df.tgl_20', 'PC')
        ->get();

        $pulangcepat_31 = DB::table('data__files as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_29', 'df.tgl_30', 'df.tgl_31', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'PC')
        ->orWhere('df.tgl_22', 'PC')
        ->orWhere('df.tgl_23', 'PC')
        ->orWhere('df.tgl_24', 'PC')
        ->orWhere('df.tgl_25', 'PC')
        ->orWhere('df.tgl_26', 'PC')
        ->orWhere('df.tgl_27', 'PC')
        ->orWhere('df.tgl_28', 'PC')
        ->orWhere('df.tgl_29', 'PC')
        ->orWhere('df.tgl_30', 'PC')
        ->orWhere('df.tgl_31', 'PC')
        ->orWhere('df.tgl_1', 'PC')
        ->orWhere('df.tgl_2', 'PC')
        ->orWhere('df.tgl_3', 'PC')
        ->orWhere('df.tgl_4', 'PC')
        ->orWhere('df.tgl_5', 'PC')
        ->orWhere('df.tgl_6', 'PC')
        ->orWhere('df.tgl_7', 'PC')
        ->orWhere('df.tgl_8', 'PC')
        ->orWhere('df.tgl_9', 'PC')
        ->orWhere('df.tgl_10', 'PC')
        ->orWhere('df.tgl_11', 'PC')
        ->orWhere('df.tgl_12', 'PC')
        ->orWhere('df.tgl_13', 'PC')
        ->orWhere('df.tgl_14', 'PC')
        ->orWhere('df.tgl_15', 'PC')
        ->orWhere('df.tgl_16', 'PC')
        ->orWhere('df.tgl_17', 'PC')
        ->orWhere('df.tgl_18', 'PC')
        ->orWhere('df.tgl_19', 'PC')
        ->orWhere('df.tgl_20', 'PC')
        ->get();

        // -------------------------
        // ALFA
        // -------------------------

        $alfa_28 = DB::table('data__file_28s as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'A')
        ->orWhere('df.tgl_22', 'A')
        ->orWhere('df.tgl_23', 'A')
        ->orWhere('df.tgl_24', 'A')
        ->orWhere('df.tgl_25', 'A')
        ->orWhere('df.tgl_26', 'A')
        ->orWhere('df.tgl_27', 'A')
        ->orWhere('df.tgl_28', 'A')
        ->orWhere('df.tgl_1', 'A')
        ->orWhere('df.tgl_2', 'A')
        ->orWhere('df.tgl_3', 'A')
        ->orWhere('df.tgl_4', 'A')
        ->orWhere('df.tgl_5', 'A')
        ->orWhere('df.tgl_6', 'A')
        ->orWhere('df.tgl_7', 'A')
        ->orWhere('df.tgl_8', 'A')
        ->orWhere('df.tgl_9', 'A')
        ->orWhere('df.tgl_10', 'A')
        ->orWhere('df.tgl_11', 'A')
        ->orWhere('df.tgl_12', 'A')
        ->orWhere('df.tgl_13', 'A')
        ->orWhere('df.tgl_14', 'A')
        ->orWhere('df.tgl_15', 'A')
        ->orWhere('df.tgl_16', 'A')
        ->orWhere('df.tgl_17', 'A')
        ->orWhere('df.tgl_18', 'A')
        ->orWhere('df.tgl_19', 'A')
        ->orWhere('df.tgl_20', 'A')
        ->get();

        $alfa_30 = DB::table('data__file_30s as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_29', 'df.tgl_30', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'A')
        ->orWhere('df.tgl_22', 'A')
        ->orWhere('df.tgl_23', 'A')
        ->orWhere('df.tgl_24', 'A')
        ->orWhere('df.tgl_25', 'A')
        ->orWhere('df.tgl_26', 'A')
        ->orWhere('df.tgl_27', 'A')
        ->orWhere('df.tgl_28', 'A')
        ->orWhere('df.tgl_29', 'A')
        ->orWhere('df.tgl_30', 'A')
        ->orWhere('df.tgl_1', 'A')
        ->orWhere('df.tgl_2', 'A')
        ->orWhere('df.tgl_3', 'A')
        ->orWhere('df.tgl_4', 'A')
        ->orWhere('df.tgl_5', 'A')
        ->orWhere('df.tgl_6', 'A')
        ->orWhere('df.tgl_7', 'A')
        ->orWhere('df.tgl_8', 'A')
        ->orWhere('df.tgl_9', 'A')
        ->orWhere('df.tgl_10', 'A')
        ->orWhere('df.tgl_11', 'A')
        ->orWhere('df.tgl_12', 'A')
        ->orWhere('df.tgl_13', 'A')
        ->orWhere('df.tgl_14', 'A')
        ->orWhere('df.tgl_15', 'A')
        ->orWhere('df.tgl_16', 'A')
        ->orWhere('df.tgl_17', 'A')
        ->orWhere('df.tgl_18', 'A')
        ->orWhere('df.tgl_19', 'A')
        ->orWhere('df.tgl_20', 'A')
        ->get();

        $alfa_31 = DB::table('data__files as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_29', 'df.tgl_30', 'df.tgl_31', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'A')
        ->orWhere('df.tgl_22', 'A')
        ->orWhere('df.tgl_23', 'A')
        ->orWhere('df.tgl_24', 'A')
        ->orWhere('df.tgl_25', 'A')
        ->orWhere('df.tgl_26', 'A')
        ->orWhere('df.tgl_27', 'A')
        ->orWhere('df.tgl_28', 'A')
        ->orWhere('df.tgl_29', 'A')
        ->orWhere('df.tgl_30', 'A')
        ->orWhere('df.tgl_31', 'A')
        ->orWhere('df.tgl_1', 'A')
        ->orWhere('df.tgl_2', 'A')
        ->orWhere('df.tgl_3', 'A')
        ->orWhere('df.tgl_4', 'A')
        ->orWhere('df.tgl_5', 'A')
        ->orWhere('df.tgl_6', 'A')
        ->orWhere('df.tgl_7', 'A')
        ->orWhere('df.tgl_8', 'A')
        ->orWhere('df.tgl_9', 'A')
        ->orWhere('df.tgl_10', 'A')
        ->orWhere('df.tgl_11', 'A')
        ->orWhere('df.tgl_12', 'A')
        ->orWhere('df.tgl_13', 'A')
        ->orWhere('df.tgl_14', 'A')
        ->orWhere('df.tgl_15', 'A')
        ->orWhere('df.tgl_16', 'A')
        ->orWhere('df.tgl_17', 'A')
        ->orWhere('df.tgl_18', 'A')
        ->orWhere('df.tgl_19', 'A')
        ->orWhere('df.tgl_20', 'A')
        ->get();

        // -------------------------
        // DATANG TERLAMBAT
        // -------------------------

        $datangterlambat_28 = DB::table('data__file_28s as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'DT')
        ->orWhere('df.tgl_22', 'DT')
        ->orWhere('df.tgl_23', 'DT')
        ->orWhere('df.tgl_24', 'DT')
        ->orWhere('df.tgl_25', 'DT')
        ->orWhere('df.tgl_26', 'DT')
        ->orWhere('df.tgl_27', 'DT')
        ->orWhere('df.tgl_28', 'DT')
        ->orWhere('df.tgl_1', 'DT')
        ->orWhere('df.tgl_2', 'DT')
        ->orWhere('df.tgl_3', 'DT')
        ->orWhere('df.tgl_4', 'DT')
        ->orWhere('df.tgl_5', 'DT')
        ->orWhere('df.tgl_6', 'DT')
        ->orWhere('df.tgl_7', 'DT')
        ->orWhere('df.tgl_8', 'DT')
        ->orWhere('df.tgl_9', 'DT')
        ->orWhere('df.tgl_10', 'DT')
        ->orWhere('df.tgl_11', 'DT')
        ->orWhere('df.tgl_12', 'DT')
        ->orWhere('df.tgl_13', 'DT')
        ->orWhere('df.tgl_14', 'DT')
        ->orWhere('df.tgl_15', 'DT')
        ->orWhere('df.tgl_16', 'DT')
        ->orWhere('df.tgl_17', 'DT')
        ->orWhere('df.tgl_18', 'DT')
        ->orWhere('df.tgl_19', 'DT')
        ->orWhere('df.tgl_20', 'DT')
        ->get();

        $datangterlambat_30 = DB::table('data__file_30s as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_29', 'df.tgl_30', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'DT')
        ->orWhere('df.tgl_22', 'DT')
        ->orWhere('df.tgl_23', 'DT')
        ->orWhere('df.tgl_24', 'DT')
        ->orWhere('df.tgl_25', 'DT')
        ->orWhere('df.tgl_26', 'DT')
        ->orWhere('df.tgl_27', 'DT')
        ->orWhere('df.tgl_28', 'DT')
        ->orWhere('df.tgl_29', 'DT')
        ->orWhere('df.tgl_30', 'DT')
        ->orWhere('df.tgl_1', 'DT')
        ->orWhere('df.tgl_2', 'DT')
        ->orWhere('df.tgl_3', 'DT')
        ->orWhere('df.tgl_4', 'DT')
        ->orWhere('df.tgl_5', 'DT')
        ->orWhere('df.tgl_6', 'DT')
        ->orWhere('df.tgl_7', 'DT')
        ->orWhere('df.tgl_8', 'DT')
        ->orWhere('df.tgl_9', 'DT')
        ->orWhere('df.tgl_10', 'DT')
        ->orWhere('df.tgl_11', 'DT')
        ->orWhere('df.tgl_12', 'DT')
        ->orWhere('df.tgl_13', 'DT')
        ->orWhere('df.tgl_14', 'DT')
        ->orWhere('df.tgl_15', 'DT')
        ->orWhere('df.tgl_16', 'DT')
        ->orWhere('df.tgl_17', 'DT')
        ->orWhere('df.tgl_18', 'DT')
        ->orWhere('df.tgl_19', 'DT')
        ->orWhere('df.tgl_20', 'DT')
        ->get();

        $datangterlambat_31 = DB::table('data__files as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_29', 'df.tgl_30', 'df.tgl_31', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'DT')
        ->orWhere('df.tgl_22', 'DT')
        ->orWhere('df.tgl_23', 'DT')
        ->orWhere('df.tgl_24', 'DT')
        ->orWhere('df.tgl_25', 'DT')
        ->orWhere('df.tgl_26', 'DT')
        ->orWhere('df.tgl_27', 'DT')
        ->orWhere('df.tgl_28', 'DT')
        ->orWhere('df.tgl_29', 'DT')
        ->orWhere('df.tgl_30', 'DT')
        ->orWhere('df.tgl_31', 'DT')
        ->orWhere('df.tgl_1', 'DT')
        ->orWhere('df.tgl_2', 'DT')
        ->orWhere('df.tgl_3', 'DT')
        ->orWhere('df.tgl_4', 'DT')
        ->orWhere('df.tgl_5', 'DT')
        ->orWhere('df.tgl_6', 'DT')
        ->orWhere('df.tgl_7', 'DT')
        ->orWhere('df.tgl_8', 'DT')
        ->orWhere('df.tgl_9', 'DT')
        ->orWhere('df.tgl_10', 'DT')
        ->orWhere('df.tgl_11', 'DT')
        ->orWhere('df.tgl_12', 'DT')
        ->orWhere('df.tgl_13', 'DT')
        ->orWhere('df.tgl_14', 'DT')
        ->orWhere('df.tgl_15', 'DT')
        ->orWhere('df.tgl_16', 'DT')
        ->orWhere('df.tgl_17', 'DT')
        ->orWhere('df.tgl_18', 'DT')
        ->orWhere('df.tgl_19', 'DT')
        ->orWhere('df.tgl_20', 'DT')
        ->get();

        // -------------------------
        // DATANG TERLAMBAT PULANG CEPAT
        // -------------------------

        $dtpc_28 = DB::table('data__file_28s as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'DTPC')
        ->orWhere('df.tgl_22', 'DTPC')
        ->orWhere('df.tgl_23', 'DTPC')
        ->orWhere('df.tgl_24', 'DTPC')
        ->orWhere('df.tgl_25', 'DTPC')
        ->orWhere('df.tgl_26', 'DTPC')
        ->orWhere('df.tgl_27', 'DTPC')
        ->orWhere('df.tgl_28', 'DTPC')
        ->orWhere('df.tgl_1', 'DTPC')
        ->orWhere('df.tgl_2', 'DTPC')
        ->orWhere('df.tgl_3', 'DTPC')
        ->orWhere('df.tgl_4', 'DTPC')
        ->orWhere('df.tgl_5', 'DTPC')
        ->orWhere('df.tgl_6', 'DTPC')
        ->orWhere('df.tgl_7', 'DTPC')
        ->orWhere('df.tgl_8', 'DTPC')
        ->orWhere('df.tgl_9', 'DTPC')
        ->orWhere('df.tgl_10', 'DTPC')
        ->orWhere('df.tgl_11', 'DTPC')
        ->orWhere('df.tgl_12', 'DTPC')
        ->orWhere('df.tgl_13', 'DTPC')
        ->orWhere('df.tgl_14', 'DTPC')
        ->orWhere('df.tgl_15', 'DTPC')
        ->orWhere('df.tgl_16', 'DTPC')
        ->orWhere('df.tgl_17', 'DTPC')
        ->orWhere('df.tgl_18', 'DTPC')
        ->orWhere('df.tgl_19', 'DTPC')
        ->orWhere('df.tgl_20', 'DTPC')
        ->get();

        $dtpc_30 = DB::table('data__file_30s as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_29', 'df.tgl_30', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'DTPC')
        ->orWhere('df.tgl_22', 'DTPC')
        ->orWhere('df.tgl_23', 'DTPC')
        ->orWhere('df.tgl_24', 'DTPC')
        ->orWhere('df.tgl_25', 'DTPC')
        ->orWhere('df.tgl_26', 'DTPC')
        ->orWhere('df.tgl_27', 'DTPC')
        ->orWhere('df.tgl_28', 'DTPC')
        ->orWhere('df.tgl_29', 'DTPC')
        ->orWhere('df.tgl_30', 'DTPC')
        ->orWhere('df.tgl_1', 'DTPC')
        ->orWhere('df.tgl_2', 'DTPC')
        ->orWhere('df.tgl_3', 'DTPC')
        ->orWhere('df.tgl_4', 'DTPC')
        ->orWhere('df.tgl_5', 'DTPC')
        ->orWhere('df.tgl_6', 'DTPC')
        ->orWhere('df.tgl_7', 'DTPC')
        ->orWhere('df.tgl_8', 'DTPC')
        ->orWhere('df.tgl_9', 'DTPC')
        ->orWhere('df.tgl_10', 'DTPC')
        ->orWhere('df.tgl_11', 'DTPC')
        ->orWhere('df.tgl_12', 'DTPC')
        ->orWhere('df.tgl_13', 'DTPC')
        ->orWhere('df.tgl_14', 'DTPC')
        ->orWhere('df.tgl_15', 'DTPC')
        ->orWhere('df.tgl_16', 'DTPC')
        ->orWhere('df.tgl_17', 'DTPC')
        ->orWhere('df.tgl_18', 'DTPC')
        ->orWhere('df.tgl_19', 'DTPC')
        ->orWhere('df.tgl_20', 'DTPC')
        ->get();

        $dtpc_31 = DB::table('data__files as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_29', 'df.tgl_30', 'df.tgl_31', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'DTPC')
        ->orWhere('df.tgl_22', 'DTPC')
        ->orWhere('df.tgl_23', 'DTPC')
        ->orWhere('df.tgl_24', 'DTPC')
        ->orWhere('df.tgl_25', 'DTPC')
        ->orWhere('df.tgl_26', 'DTPC')
        ->orWhere('df.tgl_27', 'DTPC')
        ->orWhere('df.tgl_28', 'DTPC')
        ->orWhere('df.tgl_29', 'DTPC')
        ->orWhere('df.tgl_30', 'DTPC')
        ->orWhere('df.tgl_31', 'DTPC')
        ->orWhere('df.tgl_1', 'DTPC')
        ->orWhere('df.tgl_2', 'DTPC')
        ->orWhere('df.tgl_3', 'DTPC')
        ->orWhere('df.tgl_4', 'DTPC')
        ->orWhere('df.tgl_5', 'DTPC')
        ->orWhere('df.tgl_6', 'DTPC')
        ->orWhere('df.tgl_7', 'DTPC')
        ->orWhere('df.tgl_8', 'DTPC')
        ->orWhere('df.tgl_9', 'DTPC')
        ->orWhere('df.tgl_10', 'DTPC')
        ->orWhere('df.tgl_11', 'DTPC')
        ->orWhere('df.tgl_12', 'DTPC')
        ->orWhere('df.tgl_13', 'DTPC')
        ->orWhere('df.tgl_14', 'DTPC')
        ->orWhere('df.tgl_15', 'DTPC')
        ->orWhere('df.tgl_16', 'DTPC')
        ->orWhere('df.tgl_17', 'DTPC')
        ->orWhere('df.tgl_18', 'DTPC')
        ->orWhere('df.tgl_19', 'DTPC')
        ->orWhere('df.tgl_20', 'DTPC')
        ->get();

        // -------------------------
        // DATANG TERLAMBAT IZIN PULANG CEPAT
        // -------------------------

        $dtipc_28 = DB::table('data__file_28s as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'DTIPC')
        ->orWhere('df.tgl_22', 'DTIPC')
        ->orWhere('df.tgl_23', 'DTIPC')
        ->orWhere('df.tgl_24', 'DTIPC')
        ->orWhere('df.tgl_25', 'DTIPC')
        ->orWhere('df.tgl_26', 'DTIPC')
        ->orWhere('df.tgl_27', 'DTIPC')
        ->orWhere('df.tgl_28', 'DTIPC')
        ->orWhere('df.tgl_1', 'DTIPC')
        ->orWhere('df.tgl_2', 'DTIPC')
        ->orWhere('df.tgl_3', 'DTIPC')
        ->orWhere('df.tgl_4', 'DTIPC')
        ->orWhere('df.tgl_5', 'DTIPC')
        ->orWhere('df.tgl_6', 'DTIPC')
        ->orWhere('df.tgl_7', 'DTIPC')
        ->orWhere('df.tgl_8', 'DTIPC')
        ->orWhere('df.tgl_9', 'DTIPC')
        ->orWhere('df.tgl_10', 'DTIPC')
        ->orWhere('df.tgl_11', 'DTIPC')
        ->orWhere('df.tgl_12', 'DTIPC')
        ->orWhere('df.tgl_13', 'DTIPC')
        ->orWhere('df.tgl_14', 'DTIPC')
        ->orWhere('df.tgl_15', 'DTIPC')
        ->orWhere('df.tgl_16', 'DTIPC')
        ->orWhere('df.tgl_17', 'DTIPC')
        ->orWhere('df.tgl_18', 'DTIPC')
        ->orWhere('df.tgl_19', 'DTIPC')
        ->orWhere('df.tgl_20', 'DTIPC')
        ->get();

        $dtipc_30 = DB::table('data__file_30s as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_29', 'df.tgl_30', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'DTIPC')
        ->orWhere('df.tgl_22', 'DTIPC')
        ->orWhere('df.tgl_23', 'DTIPC')
        ->orWhere('df.tgl_24', 'DTIPC')
        ->orWhere('df.tgl_25', 'DTIPC')
        ->orWhere('df.tgl_26', 'DTIPC')
        ->orWhere('df.tgl_27', 'DTIPC')
        ->orWhere('df.tgl_28', 'DTIPC')
        ->orWhere('df.tgl_29', 'DTIPC')
        ->orWhere('df.tgl_30', 'DTIPC')
        ->orWhere('df.tgl_1', 'DTIPC')
        ->orWhere('df.tgl_2', 'DTIPC')
        ->orWhere('df.tgl_3', 'DTIPC')
        ->orWhere('df.tgl_4', 'DTIPC')
        ->orWhere('df.tgl_5', 'DTIPC')
        ->orWhere('df.tgl_6', 'DTIPC')
        ->orWhere('df.tgl_7', 'DTIPC')
        ->orWhere('df.tgl_8', 'DTIPC')
        ->orWhere('df.tgl_9', 'DTIPC')
        ->orWhere('df.tgl_10', 'DTIPC')
        ->orWhere('df.tgl_11', 'DTIPC')
        ->orWhere('df.tgl_12', 'DTIPC')
        ->orWhere('df.tgl_13', 'DTIPC')
        ->orWhere('df.tgl_14', 'DTIPC')
        ->orWhere('df.tgl_15', 'DTIPC')
        ->orWhere('df.tgl_16', 'DTIPC')
        ->orWhere('df.tgl_17', 'DTIPC')
        ->orWhere('df.tgl_18', 'DTIPC')
        ->orWhere('df.tgl_19', 'DTIPC')
        ->orWhere('df.tgl_20', 'DTIPC')
        ->get();

        $dtipc_31 = DB::table('data__files as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_29', 'df.tgl_30', 'df.tgl_31', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'DTIPC')
        ->orWhere('df.tgl_22', 'DTIPC')
        ->orWhere('df.tgl_23', 'DTIPC')
        ->orWhere('df.tgl_24', 'DTIPC')
        ->orWhere('df.tgl_25', 'DTIPC')
        ->orWhere('df.tgl_26', 'DTIPC')
        ->orWhere('df.tgl_27', 'DTIPC')
        ->orWhere('df.tgl_28', 'DTIPC')
        ->orWhere('df.tgl_29', 'DTIPC')
        ->orWhere('df.tgl_30', 'DTIPC')
        ->orWhere('df.tgl_31', 'DTIPC')
        ->orWhere('df.tgl_1', 'DTIPC')
        ->orWhere('df.tgl_2', 'DTIPC')
        ->orWhere('df.tgl_3', 'DTIPC')
        ->orWhere('df.tgl_4', 'DTIPC')
        ->orWhere('df.tgl_5', 'DTIPC')
        ->orWhere('df.tgl_6', 'DTIPC')
        ->orWhere('df.tgl_7', 'DTIPC')
        ->orWhere('df.tgl_8', 'DTIPC')
        ->orWhere('df.tgl_9', 'DTIPC')
        ->orWhere('df.tgl_10', 'DTIPC')
        ->orWhere('df.tgl_11', 'DTIPC')
        ->orWhere('df.tgl_12', 'DTIPC')
        ->orWhere('df.tgl_13', 'DTIPC')
        ->orWhere('df.tgl_14', 'DTIPC')
        ->orWhere('df.tgl_15', 'DTIPC')
        ->orWhere('df.tgl_16', 'DTIPC')
        ->orWhere('df.tgl_17', 'DTIPC')
        ->orWhere('df.tgl_18', 'DTIPC')
        ->orWhere('df.tgl_19', 'DTIPC')
        ->orWhere('df.tgl_20', 'DTIPC')
        ->get();

        // -------------------------
        // DATANG TERLAMBAT IZIN
        // -------------------------

        $dtpci_28 = DB::table('data__file_28s as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'DTPCI')
        ->orWhere('df.tgl_22', 'DTPCI')
        ->orWhere('df.tgl_23', 'DTPCI')
        ->orWhere('df.tgl_24', 'DTPCI')
        ->orWhere('df.tgl_25', 'DTPCI')
        ->orWhere('df.tgl_26', 'DTPCI')
        ->orWhere('df.tgl_27', 'DTPCI')
        ->orWhere('df.tgl_28', 'DTPCI')
        ->orWhere('df.tgl_1', 'DTPCI')
        ->orWhere('df.tgl_2', 'DTPCI')
        ->orWhere('df.tgl_3', 'DTPCI')
        ->orWhere('df.tgl_4', 'DTPCI')
        ->orWhere('df.tgl_5', 'DTPCI')
        ->orWhere('df.tgl_6', 'DTPCI')
        ->orWhere('df.tgl_7', 'DTPCI')
        ->orWhere('df.tgl_8', 'DTPCI')
        ->orWhere('df.tgl_9', 'DTPCI')
        ->orWhere('df.tgl_10', 'DTPCI')
        ->orWhere('df.tgl_11', 'DTPCI')
        ->orWhere('df.tgl_12', 'DTPCI')
        ->orWhere('df.tgl_13', 'DTPCI')
        ->orWhere('df.tgl_14', 'DTPCI')
        ->orWhere('df.tgl_15', 'DTPCI')
        ->orWhere('df.tgl_16', 'DTPCI')
        ->orWhere('df.tgl_17', 'DTPCI')
        ->orWhere('df.tgl_18', 'DTPCI')
        ->orWhere('df.tgl_19', 'DTPCI')
        ->orWhere('df.tgl_20', 'DTPCI')
        ->get();

        $dtpci_30 = DB::table('data__file_30s as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_29', 'df.tgl_30', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'DTPCI')
        ->orWhere('df.tgl_22', 'DTPCI')
        ->orWhere('df.tgl_23', 'DTPCI')
        ->orWhere('df.tgl_24', 'DTPCI')
        ->orWhere('df.tgl_25', 'DTPCI')
        ->orWhere('df.tgl_26', 'DTPCI')
        ->orWhere('df.tgl_27', 'DTPCI')
        ->orWhere('df.tgl_28', 'DTPCI')
        ->orWhere('df.tgl_29', 'DTPCI')
        ->orWhere('df.tgl_30', 'DTPCI')
        ->orWhere('df.tgl_1', 'DTPCI')
        ->orWhere('df.tgl_2', 'DTPCI')
        ->orWhere('df.tgl_3', 'DTPCI')
        ->orWhere('df.tgl_4', 'DTPCI')
        ->orWhere('df.tgl_5', 'DTPCI')
        ->orWhere('df.tgl_6', 'DTPCI')
        ->orWhere('df.tgl_7', 'DTPCI')
        ->orWhere('df.tgl_8', 'DTPCI')
        ->orWhere('df.tgl_9', 'DTPCI')
        ->orWhere('df.tgl_10', 'DTPCI')
        ->orWhere('df.tgl_11', 'DTPCI')
        ->orWhere('df.tgl_12', 'DTPCI')
        ->orWhere('df.tgl_13', 'DTPCI')
        ->orWhere('df.tgl_14', 'DTPCI')
        ->orWhere('df.tgl_15', 'DTPCI')
        ->orWhere('df.tgl_16', 'DTPCI')
        ->orWhere('df.tgl_17', 'DTPCI')
        ->orWhere('df.tgl_18', 'DTPCI')
        ->orWhere('df.tgl_19', 'DTPCI')
        ->orWhere('df.tgl_20', 'DTPCI')
        ->get();

        $dtpci_31 = DB::table('data__files as df')
        ->select('df.name', 'df.tgl_21', 'df.tgl_22', 'df.tgl_23', 'df.tgl_24', 'df.tgl_25', 'df.tgl_26', 'df.tgl_27', 'df.tgl_28', 'df.tgl_29', 'df.tgl_30', 'df.tgl_31', 'df.tgl_1', 'df.tgl_2', 'df.tgl_3', 'df.tgl_4', 'df.tgl_5', 'df.tgl_6', 'df.tgl_7', 'df.tgl_8', 'df.tgl_9', 'df.tgl_10', 'df.tgl_11', 'df.tgl_12', 'df.tgl_13', 'df.tgl_14', 'df.tgl_15', 'df.tgl_16', 'df.tgl_17', 'df.tgl_18', 'df.tgl_19', 'df.tgl_20', 'p.nomor_wa')
        ->join('pegawais as p', 'df.name', '=', 'p.nama_pegawai')
        ->where('df.tgl_21', 'DTPCI')
        ->orWhere('df.tgl_22', 'DTPCI')
        ->orWhere('df.tgl_23', 'DTPCI')
        ->orWhere('df.tgl_24', 'DTPCI')
        ->orWhere('df.tgl_25', 'DTPCI')
        ->orWhere('df.tgl_26', 'DTPCI')
        ->orWhere('df.tgl_27', 'DTPCI')
        ->orWhere('df.tgl_28', 'DTPCI')
        ->orWhere('df.tgl_29', 'DTPCI')
        ->orWhere('df.tgl_30', 'DTPCI')
        ->orWhere('df.tgl_31', 'DTPCI')
        ->orWhere('df.tgl_1', 'DTPCI')
        ->orWhere('df.tgl_2', 'DTPCI')
        ->orWhere('df.tgl_3', 'DTPCI')
        ->orWhere('df.tgl_4', 'DTPCI')
        ->orWhere('df.tgl_5', 'DTPCI')
        ->orWhere('df.tgl_6', 'DTPCI')
        ->orWhere('df.tgl_7', 'DTPCI')
        ->orWhere('df.tgl_8', 'DTPCI')
        ->orWhere('df.tgl_9', 'DTPCI')
        ->orWhere('df.tgl_10', 'DTPCI')
        ->orWhere('df.tgl_11', 'DTPCI')
        ->orWhere('df.tgl_12', 'DTPCI')
        ->orWhere('df.tgl_13', 'DTPCI')
        ->orWhere('df.tgl_14', 'DTPCI')
        ->orWhere('df.tgl_15', 'DTPCI')
        ->orWhere('df.tgl_16', 'DTPCI')
        ->orWhere('df.tgl_17', 'DTPCI')
        ->orWhere('df.tgl_18', 'DTPCI')
        ->orWhere('df.tgl_19', 'DTPCI')
        ->orWhere('df.tgl_20', 'DTPCI')
        ->get();


        return view('page.pelanggaran.info-pelanggaran', compact('pelanggaran_30', 'pelanggaran_28', 'pelanggaran_31', 'pulangcepat_28', 'pulangcepat_30', 'pulangcepat_31', 'datangterlambat_28', 'datangterlambat_30', 'datangterlambat_31', 'alfa_28', 'alfa_30', 'alfa_31', 'dtpc_28', 'dtpc_30', 'dtpc_31', 'dtipc_28', 'dtipc_30', 'dtipc_31', 'dtpci_28', 'dtpci_30', 'dtpci_31'));
    }


    // public function detailPelanggaranPegawai($id)
    // {
    //     // mencocokan data pegawai dengan data file sesuai dengan nama
    //     $pegawai = Pegawai::where('id', $id)->first();
    //     $data_file = Data_File::where('nama', $pegawai->nama)->get();
    //     return view('page.pegawai.detailPelanggaran', compact('pegawai', 'data_file'));

    // }

    public function detailPelanggaranPegawai($id)
    {
        // mencocokan data pegawai dengan data file sesuai dengan nama
        $pegawai = Pegawai::where('id', $id)->first();
        $data_file = Data_File::where('name', $pegawai->name)->get();
        return view('page.pegawai.detail_pegawai', compact('pegawai', 'data_file'));
    }

    public function pc()
    {
        $pulangcepat = Data_File::select('name', 'tgl_21', 'tgl_22', 'tgl_23', 'tgl_24', 'tgl_25', 'tgl_26', 'tgl_27', 'tgl_28', 'tgl_29', 'tgl_30','tgl_1', 'tgl_2', 'tgl_3', 'tgl_4', 'tgl_5', 'tgl_6', 'tgl_7', 'tgl_8', 'tgl_9', 'tgl_10', 'tgl_11', 'tgl_12', 'tgl_13', 'tgl_14', 'tgl_15', 'tgl_16', 'tgl_17', 'tgl_18', 'tgl_19', 'tgl_20')
        ->selectRaw('SUM(
            CASE WHEN tgl_21 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_22 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_23 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_24 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_25 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_26 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_27 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_28 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_29 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_30 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_1 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_2 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_3 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_4 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_5 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_6 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_7 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_8 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_9 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_10 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_11 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_12 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_13 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_14 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_15 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_16 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_17 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_18 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_19 = "PC" THEN 1 ELSE 0 END
            +
            CASE WHEN tgl_20 = "PC" THEN 1 ELSE 0 END
        ) AS total_PulangCepat')

        ->groupBy('name', 'tgl_21', 'tgl_22', 'tgl_23', 'tgl_24', 'tgl_25', 'tgl_26', 'tgl_27', 'tgl_28', 'tgl_29', 'tgl_30','tgl_1', 'tgl_2', 'tgl_3', 'tgl_4', 'tgl_5', 'tgl_6', 'tgl_7', 'tgl_8', 'tgl_9', 'tgl_10', 'tgl_11', 'tgl_12', 'tgl_13', 'tgl_14', 'tgl_15', 'tgl_16', 'tgl_17', 'tgl_18', 'tgl_19', 'tgl_20')
        ->get();
        return view('page.pelanggaran.pc', compact('pulangcepat'));
    }

    // public function infoPelanggaranSetiapPegawai($nama_pegawai)
    // {
    //     $alfa = Data_File::select('name', 'tgl_21', 'tgl_22', 'tgl_23', 'tgl_24', 'tgl_25', 'tgl_26', 'tgl_27', 'tgl_28', 'tgl_29', 'tgl_30','tgl_1', 'tgl_2', 'tgl_3', 'tgl_4', 'tgl_5', 'tgl_6', 'tgl_7', 'tgl_8', 'tgl_9', 'tgl_10', 'tgl_11', 'tgl_12', 'tgl_13', 'tgl_14', 'tgl_15', 'tgl_16', 'tgl_17', 'tgl_18', 'tgl_19', 'tgl_20')
    //     ->selectRaw('SUM(
    //         CASE
    //             WHEN tgl_21 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_22 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_23 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_24 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_25 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_26 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_27 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_28 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_29 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_30 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_1 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_2 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_3 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_4 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_5 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_6 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_7 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_8 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_9 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_10 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_11 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_12 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_13 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_14 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_15 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_16 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_17 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_18 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_19 = "PC" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_20 = "PC" THEN 1
    //             ELSE 0
    //         END
    //     ) AS total_PulangCepat')

    //     ->selectRaw('SUM(
    //         CASE
    //             WHEN tgl_21 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_22 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_23 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_24 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_25 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_26 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_27 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_28 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_29 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_30 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_1 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_2 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_3 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_4 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_5 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_6 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_7 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_8 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_9 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_10 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_11 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_12 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_13 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_14 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_15 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_16 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_17 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_18 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_19 = "A" THEN 1
    //             ELSE 0
    //         END
    //         +
    //         CASE
    //             WHEN tgl_20 = "A" THEN 1
    //             ELSE 0
    //         END
    //     ) AS total_Alfa')

    //     ->groupBy('name', 'tgl_21', 'tgl_22', 'tgl_23', 'tgl_24', 'tgl_25', 'tgl_26', 'tgl_27', 'tgl_28', 'tgl_29', 'tgl_30','tgl_1', 'tgl_2', 'tgl_3', 'tgl_4', 'tgl_5', 'tgl_6', 'tgl_7', 'tgl_8', 'tgl_9', 'tgl_10', 'tgl_11', 'tgl_12', 'tgl_13', 'tgl_14', 'tgl_15', 'tgl_16', 'tgl_17', 'tgl_18', 'tgl_19', 'tgl_20')
    //     ->get();
    //     return view('page.pelanggaran.alfa', compact('alfa'));
    // }

    public function infoPelanggaranSetiapPegawai($namaPegawai)
    {
        $pelanggar = Data_File::join('pegawais', 'Data__Files.name', '=', 'pegawais.nama_pegawai')
        ->where('pegawais.nama_pegawai', $namaPegawai)
        ->whereRaw('tgl_21 = "PC" OR tgl_22 = "PC" OR tgl_23 = "PC" OR tgl_24 = "PC" OR tgl_25 = "PC" OR tgl_26 = "PC" OR tgl_27 = "PC" OR tgl_28 = "PC" OR tgl_29 = "PC" OR tgl_30 = "PC" OR tgl_31 = "PC" OR tgl_1 = "PC" OR tgl_2 = "PC" OR tgl_3 = "PC" OR tgl_4 = "PC" OR tgl_5 = "PC" OR tgl_6 = "PC" OR tgl_7 = "PC" OR tgl_8 = "PC" OR tgl_9 = "PC" OR tgl_10 = "PC" OR tgl_11 = "PC" OR tgl_12 = "PC" OR tgl_13 = "PC" OR tgl_14 = "PC" OR tgl_15 = "PC" OR tgl_16 = "PC" OR tgl_17 = "PC" OR tgl_18 = "PC" OR tgl_19 = "PC" OR tgl_20 = "PC"')

        ->orWhereRaw('tgl_21 = "A" OR tgl_22 = "A" OR tgl_23 = "A" OR tgl_24 = "A" OR tgl_25 = "A" OR tgl_26 = "A" OR tgl_27 = "A" OR tgl_28 = "A" OR tgl_29 = "A" OR tgl_30 = "A" OR tgl_31 = "A" OR tgl_1 = "A" OR tgl_2 = "A" OR tgl_3 = "A" OR tgl_4 = "A" OR tgl_5 = "A" OR tgl_6 = "A" OR tgl_7 = "A" OR tgl_8 = "A" OR tgl_9 = "A" OR tgl_10 = "A" OR tgl_11 = "A" OR tgl_12 = "A" OR tgl_13 = "A" OR tgl_14 = "A" OR tgl_15 = "A" OR tgl_16 = "A" OR tgl_17 = "A" OR tgl_18 = "A" OR tgl_19 = "A" OR tgl_20 = "A"')

        ->orWhereRaw('tgl_21 = "DT" OR tgl_22 = "DT" OR tgl_23 = "DT" OR tgl_24 = "DT" OR tgl_25 = "DT" OR tgl_26 = "DT" OR tgl_27 = "DT" OR tgl_28 = "DT" OR tgl_29 = "DT" OR tgl_30 = "DT" OR tgl_31 = "DT" OR tgl_1 = "DT" OR tgl_2 = "DT" OR tgl_3 = "DT" OR tgl_4 = "DT" OR tgl_5 = "DT" OR tgl_6 = "DT" OR tgl_7 = "DT" OR tgl_8 = "DT" OR tgl_9 = "DT" OR tgl_10 = "DT" OR tgl_11 = "DT" OR tgl_12 = "DT" OR tgl_13 = "DT" OR tgl_14 = "DT" OR tgl_15 = "DT" OR tgl_16 = "DT" OR tgl_17 = "DT" OR tgl_18 = "DT" OR tgl_19 = "DT" OR tgl_20 = "DT"')

        ->orWhereRaw('tgl_21 = "DTPC" OR tgl_22 = "DTPC" OR tgl_23 = "DTPC" OR tgl_24 = "DTPC" OR tgl_25 = "DTPC" OR tgl_26 = "DTPC" OR tgl_27 = "DTPC" OR tgl_28 = "DTPC" OR tgl_29 = "DTPC" OR tgl_30 = "DTPC" OR tgl_31 = "DTPC" OR tgl_1 = "DTPC" OR tgl_2 = "DTPC" OR tgl_3 = "DTPC" OR tgl_4 = "DTPC" OR tgl_5 = "DTPC" OR tgl_6 = "DTPC" OR tgl_7 = "DTPC" OR tgl_8 = "DTPC" OR tgl_9 = "DTPC" OR tgl_10 = "DTPC" OR tgl_11 = "DTPC" OR tgl_12 = "DTPC" OR tgl_13 = "DTPC" OR tgl_14 = "DTPC" OR tgl_15 = "DTPC" OR tgl_16 = "DTPC" OR tgl_17 = "DTPC" OR tgl_18 = "DTPC" OR tgl_19 = "DTPC" OR tgl_20 = "DTPC"')

        ->orWhereRaw('tgl_21 = "DTIPC" OR tgl_22 = "DTIPC" OR tgl_23 = "DTIPC" OR tgl_24 = "DTIPC" OR tgl_25 = "DTIPC" OR tgl_26 = "DTIPC" OR tgl_27 = "DTIPC" OR tgl_28 = "DTIPC" OR tgl_29 = "DTIPC" OR tgl_30 = "DTIPC" OR tgl_31 = "DTIPC" OR tgl_1 = "DTIPC" OR tgl_2 = "DTIPC" OR tgl_3 = "DTIPC" OR tgl_4 = "DTIPC" OR tgl_5 = "DTIPC" OR tgl_6 = "DTIPC" OR tgl_7 = "DTIPC" OR tgl_8 = "DTIPC" OR tgl_9 = "DTIPC" OR tgl_10 = "DTIPC" OR tgl_11 = "DTIPC" OR tgl_12 = "DTIPC" OR tgl_13 = "DTIPC" OR tgl_14 = "DTIPC" OR tgl_15 = "DTIPC" OR tgl_16 = "DTIPC" OR tgl_17 = "DTIPC" OR tgl_18 = "DTIPC" OR tgl_19 = "DTIPC" OR tgl_20 = "DTIPC"')

        ->orWhereRaw('tgl_21 = "DTPCI" OR tgl_22 = "DTPCI" OR tgl_23 = "DTPCI" OR tgl_24 = "DTPCI" OR tgl_25 = "DTPCI" OR tgl_26 = "DTPCI" OR tgl_27 = "DTPCI" OR tgl_28 = "DTPCI" OR tgl_29 = "DTPCI" OR tgl_30 = "DTPCI" OR tgl_31 = "DTPCI" OR tgl_1 = "DTPCI" OR tgl_2 = "DTPCI" OR tgl_3 = "DTPCI" OR tgl_4 = "DTPCI" OR tgl_5 = "DTPCI" OR tgl_6 = "DTPCI" OR tgl_7 = "DTPCI" OR tgl_8 = "DTPCI" OR tgl_9 = "DTPCI" OR tgl_10 = "DTPCI" OR tgl_11 = "DTPCI" OR tgl_12 = "DTPCI" OR tgl_13 = "DTPCI" OR tgl_14 = "DTPCI" OR tgl_15 = "DTPCI" OR tgl_16 = "DTPCI" OR tgl_17 = "DTPCI" OR tgl_18 = "DTPCI" OR tgl_19 = "DTPCI" OR tgl_20 = "DTPCI"')

        ->select('pegawais.nama_pegawai', 'tgl_21', 'tgl_22', 'tgl_23', 'tgl_24', 'tgl_25', 'tgl_26', 'tgl_27', 'tgl_28', 'tgl_29', 'tgl_30','tgl_31','tgl_1', 'tgl_2', 'tgl_3', 'tgl_4', 'tgl_5', 'tgl_6', 'tgl_7', 'tgl_8', 'tgl_9', 'tgl_10', 'tgl_11', 'tgl_12', 'tgl_13', 'tgl_14', 'tgl_15', 'tgl_16', 'tgl_17', 'tgl_18', 'tgl_19', 'tgl_20')
        ->selectRaw('SUM(
            CASE
                WHEN tgl_21 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_22 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_23 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_24 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_25 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_26 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_27 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_28 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_29 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_30 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_31 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_1 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_2 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_3 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_4 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_5 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_6 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_7 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_8 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_9 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_10 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_11 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_12 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_13 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_14 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_15 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_16 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_17 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_18 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_19 = "PC" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_20 = "PC" THEN 1
                ELSE 0
            END
        ) AS total_PulangCepat')

        ->selectRaw('SUM(
            CASE
                WHEN tgl_21 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_22 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_23 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_24 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_25 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_26 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_27 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_28 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_29 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_30 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_31 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_1 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_2 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_3 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_4 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_5 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_6 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_7 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_8 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_9 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_10 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_11 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_12 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_13 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_14 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_15 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_16 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_17 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_18 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_19 = "A" THEN 1
                ELSE 0
            END
            +
            CASE
                WHEN tgl_20 = "A" THEN 1
                ELSE 0
            END
        ) AS total_Alfa')

        ->groupBy('pegawais.nama_pegawai', 'tgl_21', 'tgl_22', 'tgl_23', 'tgl_24', 'tgl_25', 'tgl_26', 'tgl_27', 'tgl_28', 'tgl_29', 'tgl_30','tgl_31','tgl_1', 'tgl_2', 'tgl_3', 'tgl_4', 'tgl_5', 'tgl_6', 'tgl_7', 'tgl_8', 'tgl_9', 'tgl_10', 'tgl_11', 'tgl_12', 'tgl_13', 'tgl_14', 'tgl_15', 'tgl_16', 'tgl_17', 'tgl_18', 'tgl_19', 'tgl_20')
        ->get();


        return view('page.pegawai.detail_pegawai')->with('pelanggar', $pelanggar);
    }




}
