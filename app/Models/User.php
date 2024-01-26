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

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function countCategoriesByDateRange($startDate, $endDate)
    {
        $categories = ['PC', 'DTI', 'A', 'DT', 'DTIPC'];

        $countsByCategory = [];

        foreach ($categories as $category) {
            // Inisialisasi jumlah untuk kategori ini
            $countForCategory = 0;

            // Loop untuk setiap tgl
            for ($day = 21; $day <= 31; $day++) {
                // Gunakan sum untuk menghitung jumlah nilai yang sama pada tgl tersebut
                $countForDay = self::whereBetween('created_at', [$startDate, $endDate])
                    ->where("tgl_{$day}", $category)
                    ->count();

                // Tambahkan jumlah ini ke total kategori
                $countForCategory += $countForDay;
            }

            // Simpan jumlah total kategori
            $countsByCategory[$category] = $countForCategory;
        }

        return $countsByCategory;
    }
}
