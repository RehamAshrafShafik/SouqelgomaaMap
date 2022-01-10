<?php

namespace App\Imports;

use App\Models\Governoment;
use Maatwebsite\Excel\Concerns\ToModel;

class GovImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Governoment([
            'name'     => $row[0],
        ]);
    }
}
