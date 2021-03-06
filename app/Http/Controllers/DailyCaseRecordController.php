<?php

namespace App\Http\Controllers;

use App\Models\DailyCaseRecord;
use Illuminate\Http\Request;

class DailyCaseRecordController extends Controller
{
    public function fortnightAverage()
    {
        return [
            'metro' => $this->metroAverage(),
            'regional' => $this->regionalAverage()
        ];
    }

    private function metroAverage()
    {
        return number_format(DailyCaseRecord::where('region', 'metro')->first()->cases,2);
    }

    private function regionalAverage()
    {
        return number_format(DailyCaseRecord::where('region', 'regional')->first()->cases, 2);
    }
}
