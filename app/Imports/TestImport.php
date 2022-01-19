<?php

namespace App\Imports;

use App\Models\Test;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;

class TestImport implements ToModel, WithStartRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */

     /**
     * @return int
     */
    public function startRow(): int
    {
        return 2;
    }
    public function model(array $row)
    {
        $data = explode('((', $row[0]);
        // dd($data);
        return new Test([

                'name'     => $data[0],
                'data'  => $data[1]
           
        ]);
    }
}
