<?php

namespace App\Imports;

use App\Models\ImportPembayaran;
use Maatwebsite\Excel\Concerns\ToModel;

class PembayaranImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        //var_dump($row);die();
        return new ImportPembayaran([
            'tgl_pengajuan' =>  $row[0],
            'revenue' =>  $row[1], 
            'id_product' =>  $row[2], 
            'id_customer' =>  $row[3], 
            'id_branch' =>  $row[4], 
        ]);
    }
}