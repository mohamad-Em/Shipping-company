<?php

namespace App\Exports;

use App\Models\Rate;
use Maatwebsite\Excel\Concerns\FromCollection;

class RateExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Rate::all();
    }
}
