<?php

namespace App\Http\Controllers;

use App\Models\DailyCaseRecord;
use Illuminate\Http\Request;

class DailyCaseRecordController extends Controller
{
    public static function fortnightAverage()
    {
        return round(DailyCaseRecord::orderBy('id', 'desc')->skip(0)->take(14)->get()->avg('cases'), 2);
    }
}
