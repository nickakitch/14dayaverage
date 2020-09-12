<?php

namespace Tests\Http\Controllers;

use App\Http\Controllers\DailyCaseRecordController;
use App\Models\DailyCaseRecord;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Session;
use Tests\TestCase;

class DailyCaseRecordControllerTest extends TestCase
{
    use WithFaker, RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();

        Session::start();
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function test_fortnight_average_can_be_calculated_from_case_records()
    {
        $case_numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14];
        foreach ($case_numbers as $cases) {
            DailyCaseRecord::factory()->create([
                'cases' => $cases
            ]);
        }

        $correct_average = array_sum($case_numbers) / 14;

        $fortnight_average = DailyCaseRecordController::fortnightAverage();

        $this->assertEquals($correct_average, $fortnight_average);
    }

    /**
     * @runInSeparateProcess
     * @preserveGlobalState disabled
     */
    public function test_average_only_considers_past_14_days()
    {
        $case_numbers = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20];
        foreach ($case_numbers as $cases) {
            DailyCaseRecord::factory()->create([
                'cases' => $cases
            ]);
        }

        $correct_average = round(array_sum(array_slice(array_reverse($case_numbers), 0, 14)) / 14, 2);

        $fortnight_average = DailyCaseRecordController::fortnightAverage();

        $this->assertEquals($correct_average, $fortnight_average);
    }
}
