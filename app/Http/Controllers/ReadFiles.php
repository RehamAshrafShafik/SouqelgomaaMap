<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
use App\Imports\GovImport;
use App\Imports\ZoneImport;

class ReadFiles extends Controller
{
    public function readGovs()
    {
        $path = base_path().'/public/zones.xlsx';
        // $row = Excel::import(new CsvImport,$path);
        $row = Excel::import(new ZoneImport, 'zones.xlsx');

        dd($row);
    //      function ($reader) {

    //         foreach ($reader->toArray() as $row) {
    //             dd($row);
    //         }
    // });
    }
}
