<?php

namespace Database\Factories;

use App\Models\DailyCaseRecord;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DailyCaseRecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DailyCaseRecord::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cases' => $this->faker->numberBetween(0, 500),
            'deaths' => $this->faker->numberBetween(0, 50),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ];
    }
}
