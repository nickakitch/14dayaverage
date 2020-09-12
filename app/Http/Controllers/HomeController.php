<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $case_numbers = [
            37,
            43,
            50,
            71,
            49,
            38,
            62,
            72,
            76,
            110,
            87,
            66,
            71,
            108
        ];

        $fortnight_average = round(array_sum(array_slice($case_numbers, 0, 14)) / 14, 2);
        date_default_timezone_set('Australia/Melbourne');
        $last_updated = new Carbon('2020-09-12 10:55:00');

        return view('home', [
            'fortnight_average' => $fortnight_average,
            'last_updated' => $last_updated
        ]);
    }
}
