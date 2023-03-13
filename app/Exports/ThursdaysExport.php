<?php

namespace App\Exports;

use App\Models\Thursday;
use Maatwebsite\Excel\Concerns\FromCollection;

class ThursdaysExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Thursday::all();
    }
}
