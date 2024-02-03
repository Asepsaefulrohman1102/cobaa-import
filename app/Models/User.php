<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded= [];

    // /**
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
    //  */
    // protected $hidden = [
    //     'password', 'remember_token',
    // ];

    // /**
    //  * The attributes that should be cast to native types.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'email_verified_at' => 'datetime',
    // ];



}


// SELECT *
// FROM users
// WHERE tgl_21 = 'PC'
//    OR tgl_22 = 'PC'
//    OR tgl_23 = 'PC'
//    OR tgl_24 = 'PC'
//     OR tgl_25 = 'PC'
//     OR tgl_26 = 'PC'
//     OR tgl_27 = 'PC'
//     OR tgl_28 = 'PC'
//     OR tgl_29 = 'PC'
//     OR tgl_30 = 'PC'
//     OR tgl_31 = 'PC'
//     OR tgl_1 = 'PC'
//     OR tgl_2 = 'PC'
//     OR tgl_3 = 'PC'
//     OR tgl_4 = 'PC'
//     OR tgl_5 = 'PC'
//     OR tgl_6 = 'PC'
//     OR tgl_7 = 'PC'
//     OR tgl_8 = 'PC'
//     OR tgl_9 = 'PC'
//     OR tgl_10 = 'PC'
//     OR tgl_11 = 'PC'
//     OR tgl_12 = 'PC'
//     OR tgl_13 = 'PC'
//     OR tgl_14 = 'PC'
//     OR tgl_15 = 'PC'
//     OR tgl_16 = 'PC'
//     OR tgl_17 = 'PC'
//     OR tgl_18 = 'PC'
//     OR tgl_19 = 'PC'
//     OR tgl_20 = 'PC';

// SELECT
//     name,
//     SUM(CASE WHEN tgl_21 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_21_count,
//     SUM(CASE WHEN tgl_22 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_22_count,
//     SUM(CASE WHEN tgl_23 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_23_count,
//     SUM(CASE WHEN tgl_24 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_24_count,
//     SUM(CASE WHEN tgl_25 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_25_count,
//     SUM(CASE WHEN tgl_26 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_26_count,
//     SUM(CASE WHEN tgl_27 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_27_count,
//     SUM(CASE WHEN tgl_28 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_28_count,
//     SUM(CASE WHEN tgl_29 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_29_count,
//     SUM(CASE WHEN tgl_30 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_30_count,
//     SUM(CASE WHEN tgl_31 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_31_count,
//     SUM(CASE WHEN tgl_1 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_1_count,
//     SUM(CASE WHEN tgl_2 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_2_count,
//     SUM(CASE WHEN tgl_3 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_3_count,
//     SUM(CASE WHEN tgl_4 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_4_count,
//     SUM(CASE WHEN tgl_5 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_5_count,
//     SUM(CASE WHEN tgl_6 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_6_count,
//     SUM(CASE WHEN tgl_7 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_7_count,
//     SUM(CASE WHEN tgl_8 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_8_count,
//     SUM(CASE WHEN tgl_9 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_9_count,
//     SUM(CASE WHEN tgl_10 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_10_count,
//     SUM(CASE WHEN tgl_11 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_11_count,
//     SUM(CASE WHEN tgl_12 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_12_count,
//     SUM(CASE WHEN tgl_13 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_13_count,
//     SUM(CASE WHEN tgl_14 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_14_count,
//     SUM(CASE WHEN tgl_15 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_15_count,
//     SUM(CASE WHEN tgl_16 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_16_count,
//     SUM(CASE WHEN tgl_17 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_17_count,
//     SUM(CASE WHEN tgl_18 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_18_count,
//     SUM(CASE WHEN tgl_19 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_19_count,
//     SUM(CASE WHEN tgl_20 LIKE '%PC%' THEN 1 ELSE 0 END) AS tgl_20_count

// FROM
//     users
// GROUP BY
//     name;



// SELECT
//     name,
//     SUM(CASE WHEN tgl_21 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_21,
//     SUM(CASE WHEN tgl_22 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_22,
//     SUM(CASE WHEN tgl_23 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_23,
//     SUM(CASE WHEN tgl_24 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_24,
//     SUM(CASE WHEN tgl_25 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_25,
//     SUM(CASE WHEN tgl_26 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_26,
//     SUM(CASE WHEN tgl_27 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_27,
//     SUM(CASE WHEN tgl_28 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_28,
//     SUM(CASE WHEN tgl_29 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_29,
//     SUM(CASE WHEN tgl_30 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_30,
//     SUM(CASE WHEN tgl_31 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_31,
//     SUM(CASE WHEN tgl_1 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_1,
//     SUM(CASE WHEN tgl_2 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_2,
//     SUM(CASE WHEN tgl_3 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_3,
//     SUM(CASE WHEN tgl_4 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_4,
//     SUM(CASE WHEN tgl_5 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_5,
//     SUM(CASE WHEN tgl_6 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_6,
//     SUM(CASE WHEN tgl_7 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_7,
//     SUM(CASE WHEN tgl_8 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_8,
//     SUM(CASE WHEN tgl_9 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_9,
//     SUM(CASE WHEN tgl_10 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_10,
//     SUM(CASE WHEN tgl_11 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_11,
//     SUM(CASE WHEN tgl_12 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_12,
//     SUM(CASE WHEN tgl_13 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_13,
//     SUM(CASE WHEN tgl_14 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_14,
//     SUM(CASE WHEN tgl_15 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_15,
//     SUM(CASE WHEN tgl_16 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_16,
//     SUM(CASE WHEN tgl_17 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_17,
//     SUM(CASE WHEN tgl_18 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_18,
//     SUM(CASE WHEN tgl_19 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_19,
//     SUM(CASE WHEN tgl_20 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_20,

//     SUM(CASE WHEN tgl_21 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_21,
//     SUM(CASE WHEN tgl_22 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_22,
//     SUM(CASE WHEN tgl_23 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_23,
//     SUM(CASE WHEN tgl_24 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_24,
//     SUM(CASE WHEN tgl_25 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_25,
//     SUM(CASE WHEN tgl_26 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_26,
//     SUM(CASE WHEN tgl_27 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_27,
//     SUM(CASE WHEN tgl_28 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_28,
//     SUM(CASE WHEN tgl_29 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_29,
//     SUM(CASE WHEN tgl_30 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_30,
//     SUM(CASE WHEN tgl_31 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_31,
//     SUM(CASE WHEN tgl_1 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_1,
//     SUM(CASE WHEN tgl_2 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_2,
//     SUM(CASE WHEN tgl_3 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_3,
//     SUM(CASE WHEN tgl_4 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_4,
//     SUM(CASE WHEN tgl_5 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_5,
//     SUM(CASE WHEN tgl_6 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_6,
//     SUM(CASE WHEN tgl_7 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_7,
//     SUM(CASE WHEN tgl_8 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_8,
//     SUM(CASE WHEN tgl_9 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_9,
//     SUM(CASE WHEN tgl_10 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_10,
//     SUM(CASE WHEN tgl_11 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_11,
//     SUM(CASE WHEN tgl_12 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_12,
//     SUM(CASE WHEN tgl_13 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_13,
//     SUM(CASE WHEN tgl_14 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_14,
//     SUM(CASE WHEN tgl_15 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_15,
//     SUM(CASE WHEN tgl_16 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_16,
//     SUM(CASE WHEN tgl_17 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_17,
//     SUM(CASE WHEN tgl_18 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_18,
//     SUM(CASE WHEN tgl_19 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_19,
//     SUM(CASE WHEN tgl_20 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_20,

//     SUM(CASE WHEN tgl_21 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_21,
//     SUM(CASE WHEN tgl_22 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_22,
//     SUM(CASE WHEN tgl_23 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_23,
//     SUM(CASE WHEN tgl_24 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_24,
//     SUM(CASE WHEN tgl_25 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_25,
//     SUM(CASE WHEN tgl_26 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_26,
//     SUM(CASE WHEN tgl_27 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_27,
//     SUM(CASE WHEN tgl_28 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_28,
//     SUM(CASE WHEN tgl_29 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_29,
//     SUM(CASE WHEN tgl_30 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_30,
//     SUM(CASE WHEN tgl_31 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_31,
//     SUM(CASE WHEN tgl_1 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_1,
//     SUM(CASE WHEN tgl_2 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_2,
//     SUM(CASE WHEN tgl_3 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_3,
//     SUM(CASE WHEN tgl_4 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_4,
//     SUM(CASE WHEN tgl_5 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_5,
//     SUM(CASE WHEN tgl_6 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_6,
//     SUM(CASE WHEN tgl_7 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_7,
//     SUM(CASE WHEN tgl_8 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_8,
//     SUM(CASE WHEN tgl_9 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_9,
//     SUM(CASE WHEN tgl_10 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_10,
//     SUM(CASE WHEN tgl_11 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_11,
//     SUM(CASE WHEN tgl_12 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_12,
//     SUM(CASE WHEN tgl_13 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_13,
//     SUM(CASE WHEN tgl_14 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_14,
//     SUM(CASE WHEN tgl_15 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_15,
//     SUM(CASE WHEN tgl_16 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_16,
//     SUM(CASE WHEN tgl_17 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_17,
//     SUM(CASE WHEN tgl_18 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_18,
//     SUM(CASE WHEN tgl_19 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_19,
//     SUM(CASE WHEN tgl_20 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_20,

//     SUM(CASE WHEN tgl_21 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_21,
//     SUM(CASE WHEN tgl_22 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_22,
//     SUM(CASE WHEN tgl_23 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_23,
//     SUM(CASE WHEN tgl_24 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_24,
//     SUM(CASE WHEN tgl_25 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_25,
//     SUM(CASE WHEN tgl_26 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_26,
//     SUM(CASE WHEN tgl_27 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_27,
//     SUM(CASE WHEN tgl_28 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_28,
//     SUM(CASE WHEN tgl_29 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_29,
//     SUM(CASE WHEN tgl_30 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_30,
//     SUM(CASE WHEN tgl_31 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_31,
//     SUM(CASE WHEN tgl_1 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_1,
//     SUM(CASE WHEN tgl_2 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_2,
//     SUM(CASE WHEN tgl_3 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_3,
//     SUM(CASE WHEN tgl_4 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_4,
//     SUM(CASE WHEN tgl_5 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_5,
//     SUM(CASE WHEN tgl_6 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_6,
//     SUM(CASE WHEN tgl_7 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_7,
//     SUM(CASE WHEN tgl_8 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_8,
//     SUM(CASE WHEN tgl_9 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_9,
//     SUM(CASE WHEN tgl_10 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_10,
//     SUM(CASE WHEN tgl_11 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_11,
//     SUM(CASE WHEN tgl_12 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_12,
//     SUM(CASE WHEN tgl_13 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_13,
//     SUM(CASE WHEN tgl_14 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_14,
//     SUM(CASE WHEN tgl_15 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_15,
//     SUM(CASE WHEN tgl_16 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_16,
//     SUM(CASE WHEN tgl_17 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_17,
//     SUM(CASE WHEN tgl_18 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_18,
//     SUM(CASE WHEN tgl_19 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_19,
//     SUM(CASE WHEN tgl_20 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_20,
// FROM
//     users
// GROUP BY
//     name;


// SELECT
//     name,
//     MAX(CASE WHEN tgl_21 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_21,
//     MAX(CASE WHEN tgl_22 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_22,
//     MAX(CASE WHEN tgl_23 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_23,
//     MAX(CASE WHEN tgl_24 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_24,
//     MAX(CASE WHEN tgl_25 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_25,
//     MAX(CASE WHEN tgl_26 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_26,
//     MAX(CASE WHEN tgl_27 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_27,
//     MAX(CASE WHEN tgl_28 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_28,
//     MAX(CASE WHEN tgl_29 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_29,
//     MAX(CASE WHEN tgl_30 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_30,
//     MAX(CASE WHEN tgl_31 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_31,
//     MAX(CASE WHEN tgl_1 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_1,
//     MAX(CASE WHEN tgl_2 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_2,
//     MAX(CASE WHEN tgl_3 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_3,
//     MAX(CASE WHEN tgl_4 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_4,
//     MAX(CASE WHEN tgl_5 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_5,
//     MAX(CASE WHEN tgl_6 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_6,
//     MAX(CASE WHEN tgl_7 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_7,
//     MAX(CASE WHEN tgl_8 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_8,
//     MAX(CASE WHEN tgl_9 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_9,
//     MAX(CASE WHEN tgl_10 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_10,
//     MAX(CASE WHEN tgl_11 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_11,
//     MAX(CASE WHEN tgl_12 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_12,
//     MAX(CASE WHEN tgl_13 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_13,
//     MAX(CASE WHEN tgl_14 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_14,
//     MAX(CASE WHEN tgl_15 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_15,
//     MAX(CASE WHEN tgl_16 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_16,
//     MAX(CASE WHEN tgl_17 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_17,
//     MAX(CASE WHEN tgl_18 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_18,
//     MAX(CASE WHEN tgl_19 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_19,
//     MAX(CASE WHEN tgl_20 = 'PC' THEN 1 ELSE 0 END) AS PC_count_tgl_20,

//     MAX(CASE WHEN tgl_21 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_21,
//     MAX(CASE WHEN tgl_22 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_22,
//     MAX(CASE WHEN tgl_23 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_23,
//     MAX(CASE WHEN tgl_24 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_24,
//     MAX(CASE WHEN tgl_25 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_25,
//     MAX(CASE WHEN tgl_26 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_26,
//     MAX(CASE WHEN tgl_27 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_27,
//     MAX(CASE WHEN tgl_28 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_28,
//     MAX(CASE WHEN tgl_29 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_29,
//     MAX(CASE WHEN tgl_30 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_30,
//     MAX(CASE WHEN tgl_31 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_31,
//     MAX(CASE WHEN tgl_1 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_1,
//     MAX(CASE WHEN tgl_2 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_2,
//     MAX(CASE WHEN tgl_3 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_3,
//     MAX(CASE WHEN tgl_4 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_4,
//     MAX(CASE WHEN tgl_5 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_5,
//     MAX(CASE WHEN tgl_6 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_6,
//     MAX(CASE WHEN tgl_7 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_7,
//     MAX(CASE WHEN tgl_8 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_8,
//     MAX(CASE WHEN tgl_9 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_9,
//     MAX(CASE WHEN tgl_10 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_10,
//     MAX(CASE WHEN tgl_11 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_11,
//     MAX(CASE WHEN tgl_12 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_12,
//     MAX(CASE WHEN tgl_13 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_13,
//     MAX(CASE WHEN tgl_14 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_14,
//     MAX(CASE WHEN tgl_15 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_15,
//     MAX(CASE WHEN tgl_16 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_16,
//     MAX(CASE WHEN tgl_17 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_17,
//     MAX(CASE WHEN tgl_18 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_18,
//     MAX(CASE WHEN tgl_19 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_19,
//     MAX(CASE WHEN tgl_20 = 'DT' THEN 1 ELSE 0 END) AS DT_count_tgl_20,

//     MAX(CASE WHEN tgl_21 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_21,
//     MAX(CASE WHEN tgl_22 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_22,
//     MAX(CASE WHEN tgl_23 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_23,
//     MAX(CASE WHEN tgl_24 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_24,
//     MAX(CASE WHEN tgl_25 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_25,
//     MAX(CASE WHEN tgl_26 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_26,
//     MAX(CASE WHEN tgl_27 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_27,
//     MAX(CASE WHEN tgl_28 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_28,
//     MAX(CASE WHEN tgl_29 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_29,
//     MAX(CASE WHEN tgl_30 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_30,
//     MAX(CASE WHEN tgl_31 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_31,
//     MAX(CASE WHEN tgl_1 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_1,
//     MAX(CASE WHEN tgl_2 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_2,
//     MAX(CASE WHEN tgl_3 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_3,
//     MAX(CASE WHEN tgl_4 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_4,
//     MAX(CASE WHEN tgl_5 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_5,
//     MAX(CASE WHEN tgl_6 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_6,
//     MAX(CASE WHEN tgl_7 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_7,
//     MAX(CASE WHEN tgl_8 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_8,
//     MAX(CASE WHEN tgl_9 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_9,
//     MAX(CASE WHEN tgl_10 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_10,
//     MAX(CASE WHEN tgl_11 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_11,
//     MAX(CASE WHEN tgl_12 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_12,
//     MAX(CASE WHEN tgl_13 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_13,
//     MAX(CASE WHEN tgl_14 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_14,
//     MAX(CASE WHEN tgl_15 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_15,
//     MAX(CASE WHEN tgl_16 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_16,
//     MAX(CASE WHEN tgl_17 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_17,
//     MAX(CASE WHEN tgl_18 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_18,
//     MAX(CASE WHEN tgl_19 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_19,
//     MAX(CASE WHEN tgl_20 = 'DTI' THEN 1 ELSE 0 END) AS DTI_count_tgl_20,

//     MAX(CASE WHEN tgl_21 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_21,
//     MAX(CASE WHEN tgl_22 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_22,
//     MAX(CASE WHEN tgl_23 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_23,
//     MAX(CASE WHEN tgl_24 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_24,
//     MAX(CASE WHEN tgl_25 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_25,
//     MAX(CASE WHEN tgl_26 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_26,
//     MAX(CASE WHEN tgl_27 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_27,
//     MAX(CASE WHEN tgl_28 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_28,
//     MAX(CASE WHEN tgl_29 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_29,
//     MAX(CASE WHEN tgl_30 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_30,
//     MAX(CASE WHEN tgl_31 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_31,
//     MAX(CASE WHEN tgl_1 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_1,
//     MAX(CASE WHEN tgl_2 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_2,
//     MAX(CASE WHEN tgl_3 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_3,
//     MAX(CASE WHEN tgl_4 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_4,
//     MAX(CASE WHEN tgl_5 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_5,
//     MAX(CASE WHEN tgl_6 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_6,
//     MAX(CASE WHEN tgl_7 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_7,
//     MAX(CASE WHEN tgl_8 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_8,
//     MAX(CASE WHEN tgl_9 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_9,
//     MAX(CASE WHEN tgl_10 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_10,
//     MAX(CASE WHEN tgl_11 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_11,
//     MAX(CASE WHEN tgl_12 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_12,
//     MAX(CASE WHEN tgl_13 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_13,
//     MAX(CASE WHEN tgl_14 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_14,
//     MAX(CASE WHEN tgl_15 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_15,
//     MAX(CASE WHEN tgl_16 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_16,
//     MAX(CASE WHEN tgl_17 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_17,
//     MAX(CASE WHEN tgl_18 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_18,
//     MAX(CASE WHEN tgl_19 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_19,
//     MAX(CASE WHEN tgl_20 = 'A' THEN 1 ELSE 0 END) AS A_count_tgl_20,

//     MAX(CASE WHEN tgl_21 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_21,
//     MAX(CASE WHEN tgl_22 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_22,
//     MAX(CASE WHEN tgl_23 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_23,
//     MAX(CASE WHEN tgl_24 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_24,
//     MAX(CASE WHEN tgl_25 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_25,
//     MAX(CASE WHEN tgl_26 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_26,
//     MAX(CASE WHEN tgl_27 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_27,
//     MAX(CASE WHEN tgl_28 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_28,
//     MAX(CASE WHEN tgl_29 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_29,
//     MAX(CASE WHEN tgl_30 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_30,
//     MAX(CASE WHEN tgl_31 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_31,
//     MAX(CASE WHEN tgl_1 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_1,
//     MAX(CASE WHEN tgl_2 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_2,
//     MAX(CASE WHEN tgl_3 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_3,
//     MAX(CASE WHEN tgl_4 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_4,
//     MAX(CASE WHEN tgl_5 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_5,
//     MAX(CASE WHEN tgl_6 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_6,
//     MAX(CASE WHEN tgl_7 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_7,
//     MAX(CASE WHEN tgl_8 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_8,
//     MAX(CASE WHEN tgl_9 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_9,
//     MAX(CASE WHEN tgl_10 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_10,
//     MAX(CASE WHEN tgl_11 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_11,
//     MAX(CASE WHEN tgl_12 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_12,
//     MAX(CASE WHEN tgl_13 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_13,
//     MAX(CASE WHEN tgl_14 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_14,
//     MAX(CASE WHEN tgl_15 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_15,
//     MAX(CASE WHEN tgl_16 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_16,
//     MAX(CASE WHEN tgl_17 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_17,
//     MAX(CASE WHEN tgl_18 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_18,
//     MAX(CASE WHEN tgl_19 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_19,
//     MAX(CASE WHEN tgl_20 = 'DTPCI' THEN 1 ELSE 0 END) AS DTPCI_count_tgl_20,
// FROM
//     users
// GROUP BY
//     name
// HAVING
    // PC_count_tgl_21 = 1 OR
    // PC_count_tgl_22 = 1 OR
    // PC_count_tgl_22 = 1 OR
    // PC_count_tgl_23 = 1 OR
    // PC_count_tgl_24 = 1 OR
    // PC_count_tgl_25 = 1 OR
    // PC_count_tgl_26 = 1 OR
    // PC_count_tgl_27 = 1 OR
    // PC_count_tgl_28 = 1 OR
    // PC_count_tgl_29 = 1 OR
    // PC_count_tgl_30 = 1 OR
    // PC_count_tgl_31 = 1 OR
    // PC_count_tgl_1 = 1 OR
    // PC_count_tgl_2 = 1 OR
    // PC_count_tgl_3 = 1 OR
    // PC_count_tgl_4 = 1 OR
    // PC_count_tgl_5 = 1 OR
    // PC_count_tgl_6 = 1 OR
    // PC_count_tgl_7 = 1 OR
    // PC_count_tgl_8 = 1 OR
    // PC_count_tgl_9 = 1 OR
    // PC_count_tgl_10 = 1 OR
    // PC_count_tgl_11 = 1 OR
    // PC_count_tgl_12 = 1 OR
    // PC_count_tgl_13 = 1 OR
    // PC_count_tgl_14 = 1 OR
    // PC_count_tgl_15 = 1 OR
    // PC_count_tgl_16 = 1 OR
    // PC_count_tgl_17 = 1 OR
    // PC_count_tgl_18 = 1 OR
    // PC_count_tgl_19 = 1 OR
    // PC_count_tgl_20 = 1 OR

    // DT_count_tgl_21 = 1 OR
    // DT_count_tgl_22 = 1 OR
    // DT_count_tgl_22 = 1 OR
    // DT_count_tgl_23 = 1 OR
    // DT_count_tgl_24 = 1 OR
    // DT_count_tgl_25 = 1 OR
    // DT_count_tgl_26 = 1 OR
    // DT_count_tgl_27 = 1 OR
    // DT_count_tgl_28 = 1 OR
    // DT_count_tgl_29 = 1 OR
    // DT_count_tgl_30 = 1 OR
    // DT_count_tgl_31 = 1 OR
    // DT_count_tgl_1 = 1 OR
    // DT_count_tgl_2 = 1 OR
    // DT_count_tgl_3 = 1 OR
    // DT_count_tgl_4 = 1 OR
    // DT_count_tgl_5 = 1 OR
    // DT_count_tgl_6 = 1 OR
    // DT_count_tgl_7 = 1 OR
    // DT_count_tgl_8 = 1 OR
    // DT_count_tgl_9 = 1 OR
    // DT_count_tgl_10 = 1 OR
    // DT_count_tgl_11 = 1 OR
    // DT_count_tgl_12 = 1 OR
    // DT_count_tgl_13 = 1 OR
    // DT_count_tgl_14 = 1 OR
    // DT_count_tgl_15 = 1 OR
    // DT_count_tgl_16 = 1 OR
    // DT_count_tgl_17 = 1 OR
    // DT_count_tgl_18 = 1 OR
    // DT_count_tgl_19 = 1 OR
    // DT_count_tgl_20 = 1 OR

    // DTI_count_tgl_21 = 1 OR
    // DTI_count_tgl_22 = 1 OR
    // DTI_count_tgl_22 = 1 OR
    // DTI_count_tgl_23 = 1 OR
    // DTI_count_tgl_24 = 1 OR
    // DTI_count_tgl_25 = 1 OR
    // DTI_count_tgl_26 = 1 OR
    // DTI_count_tgl_27 = 1 OR
    // DTI_count_tgl_28 = 1 OR
    // DTI_count_tgl_29 = 1 OR
    // DTI_count_tgl_30 = 1 OR
    // DTI_count_tgl_31 = 1 OR
    // DTI_count_tgl_1 = 1 OR
    // DTI_count_tgl_2 = 1 OR
    // DTI_count_tgl_3 = 1 OR
    // DTI_count_tgl_4 = 1 OR
    // DTI_count_tgl_5 = 1 OR
    // DTI_count_tgl_6 = 1 OR
    // DTI_count_tgl_7 = 1 OR
    // DTI_count_tgl_8 = 1 OR
    // DTI_count_tgl_9 = 1 OR
    // DTI_count_tgl_10 = 1 OR
    // DTI_count_tgl_11 = 1 OR
    // DTI_count_tgl_12 = 1 OR
    // DTI_count_tgl_13 = 1 OR
    // DTI_count_tgl_14 = 1 OR
    // DTI_count_tgl_15 = 1 OR
    // DTI_count_tgl_16 = 1 OR
    // DTI_count_tgl_17 = 1 OR
    // DTI_count_tgl_18 = 1 OR
    // DTI_count_tgl_19 = 1 OR
    // DTI_count_tgl_20 = 1 OR

    // A_count_tgl_21 = 1 OR
    // A_count_tgl_22 = 1 OR
    // A_count_tgl_22 = 1 OR
    // A_count_tgl_23 = 1 OR
    // A_count_tgl_24 = 1 OR
    // A_count_tgl_25 = 1 OR
    // A_count_tgl_26 = 1 OR
    // A_count_tgl_27 = 1 OR
    // A_count_tgl_28 = 1 OR
    // A_count_tgl_29 = 1 OR
    // A_count_tgl_30 = 1 OR
    // A_count_tgl_31 = 1 OR
    // A_count_tgl_1 = 1 OR
    // A_count_tgl_2 = 1 OR
    // A_count_tgl_3 = 1 OR
    // A_count_tgl_4 = 1 OR
    // A_count_tgl_5 = 1 OR
    // A_count_tgl_6 = 1 OR
    // A_count_tgl_7 = 1 OR
    // A_count_tgl_8 = 1 OR
    // A_count_tgl_9 = 1 OR
    // A_count_tgl_10 = 1 OR
    // A_count_tgl_11 = 1 OR
    // A_count_tgl_12 = 1 OR
    // A_count_tgl_13 = 1 OR
    // A_count_tgl_14 = 1 OR
    // A_count_tgl_15 = 1 OR
    // A_count_tgl_16 = 1 OR
    // A_count_tgl_17 = 1 OR
    // A_count_tgl_18 = 1 OR
    // A_count_tgl_19 = 1 OR
    // A_count_tgl_20 = 1 OR

    // DTPCI_count_tgl_21 = 1 OR
    // DTPCI_count_tgl_22 = 1 OR
    // DTPCI_count_tgl_22 = 1 OR
    // DTPCI_count_tgl_23 = 1 OR
    // DTPCI_count_tgl_24 = 1 OR
    // DTPCI_count_tgl_25 = 1 OR
    // DTPCI_count_tgl_26 = 1 OR
    // DTPCI_count_tgl_27 = 1 OR
    // DTPCI_count_tgl_28 = 1 OR
    // DTPCI_count_tgl_29 = 1 OR
    // DTPCI_count_tgl_30 = 1 OR
    // DTPCI_count_tgl_31 = 1 OR
    // DTPCI_count_tgl_1 = 1 OR
    // DTPCI_count_tgl_2 = 1 OR
    // DTPCI_count_tgl_3 = 1 OR
    // DTPCI_count_tgl_4 = 1 OR
    // DTPCI_count_tgl_5 = 1 OR
    // DTPCI_count_tgl_6 = 1 OR
    // DTPCI_count_tgl_7 = 1 OR
    // DTPCI_count_tgl_8 = 1 OR
    // DTPCI_count_tgl_9 = 1 OR
    // DTPCI_count_tgl_10 = 1 OR
    // DTPCI_count_tgl_11 = 1 OR
    // DTPCI_count_tgl_12 = 1 OR
    // DTPCI_count_tgl_13 = 1 OR
    // DTPCI_count_tgl_14 = 1 OR
    // DTPCI_count_tgl_15 = 1 OR
    // DTPCI_count_tgl_16 = 1 OR
    // DTPCI_count_tgl_17 = 1 OR
    // DTPCI_count_tgl_18 = 1 OR
    // DTPCI_count_tgl_19 = 1 OR
    // DTPCI_count_tgl_20 = 1;
