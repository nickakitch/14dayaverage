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
        return round(DailyCaseRecord::where('region', 'metro')->orderBy('id', 'desc')->skip(0)->take(14)->get()->avg('cases'), 2);
    }

    private function regionalAverage()
    {
        return round(DailyCaseRecord::where('region', 'regional')->orderBy('id', 'desc')->skip(0)->take(14)->get()->avg('cases'), 2);
    }
}
