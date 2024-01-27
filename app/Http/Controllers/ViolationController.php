<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ViolationController extends Controller
{
    public function countViolations()
{
    $counts = DB::table('users')
        ->select(
            DB::raw('COUNT(CASE WHEN PC IS NOT NULL THEN 1 END) AS pc_count'),
            DB::raw('COUNT(CASE WHEN DTI IS NOT NULL THEN 1 END) AS dti_count'),
            DB::raw('COUNT(CASE WHEN A IS NOT NULL THEN 1 END) AS a_count'),
            DB::raw('COUNT(CASE WHEN DT IS NOT NULL THEN 1 END) AS dt_count'),
            DB::raw('COUNT(CASE WHEN DTPCI IS NOT NULL THEN 1 END) AS dtpci_count')
        )
        ->first();

    return response()->json([
        'pc_count' => $counts->pc_count,
        'dti_count' => $counts->dti_count,
        'a_count' => $counts->a_count,
        'dt_count' => $counts->dt_count,
        'dtpci_count' => $counts->dtpci_count,
    ]);
}
}
