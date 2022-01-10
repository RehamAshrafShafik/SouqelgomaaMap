<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Input;
use App\Imports\GovImport;
class ReadFiles extends Controller
{
    public function readGovs()
    {
        // $path = base_path().'/public/govs.xlsx';
        // $row = Excel::import(new CsvImport,$path);
        $row = Excel::import(new GovImport, 'govs.xlsx');

        dd($row);
    //      function ($reader) {

    //         foreach ($reader->toArray() as $row) {
    //             dd($row);
    //         }
    // });
    }
}
