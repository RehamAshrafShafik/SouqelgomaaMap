<?php

namespace App\Imports;

use App\Models\Zone;
use Maatwebsite\Excel\Concerns\ToModel;

class ZoneImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row[0]);
        if($row[0] == null){
            $row[0] = "";
        }
        return new Zone([
                'governoment_id' => 8,
                'name'     => $row[0],
           
        ]);
    }
}
