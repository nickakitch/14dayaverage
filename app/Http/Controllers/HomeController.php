<?php

namespace App\Http\Controllers;

use App\Models\DailyCaseRecord;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $fortnight_average = DailyCaseRecordController::fortnightAverage();
        date_default_timezone_set('Australia/Melbourne');
        $last_updated = new Carbon(DailyCaseRecord::orderBy('id', 'desc')->first()->updated_at);

        return view('home', [
            'fortnight_average' => $fortnight_average,
            'last_updated' => $last_updated
        ]);
    }
}
