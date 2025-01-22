<?php

namespace App\Imports;

use App\Models\Populasi;
use Maatwebsite\Excel\Concerns\ToModel;

class PopulasiImport implements ToModel
{
    /**
     * Konversi baris data menjadi model Populasi.
     *
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Populasi([
            'wilayah' => $row[0],  // Kolom Wilayah
            'populasi_2018' => $row[1],  // Kolom 2018
            'populasi_2019' => $row[2],  // Kolom 2019
            'populasi_2020' => $row[3],  // Kolom 2020
        ]);
    }
}
