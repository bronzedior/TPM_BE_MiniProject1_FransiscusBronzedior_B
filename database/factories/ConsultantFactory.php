<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Consultant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Consultant>
 */
class ConsultantFactory extends Factory
{
    protected $model = Consultant::class;

    public function definition(): array
    {
         $positions = [
            'Research Analyst' => [50, 150], // dinyatakan dalam ribu rupiah
            'Business Analyst' => [150, 400],
            'Senior Business Analyst' => [400, 800],
            'Associate' => [800, 1300]
        ];

        $industries = [
            'Technology' => ['IoT', 'Cybersecurity', 'Cloud Computing', 'AI/ML'],
            'Energy' => ['Renewable', 'Energy Transition', 'Oil and Gas', 'Power Distribution'],
            'Financial Service' => ['Sales Effectiveness', 'Transformation', 'Risk Mitigation', 'Capital Management'],
            'Metal and Minings' => ['Strategy and Operating Model', 'Procurement and Supply Chain', 'Energy Transition'],
            'Healthcare' => ['Biopharma Innovation', 'Research', 'Development']
        ];

         $position = $this->faker->randomElement(array_keys($positions));

         $industry = $this->faker->randomElement(array_keys($industries));

         $expertise = $this->faker->randomElement($industries[$industry]);

         [$minRate, $maxRate] = $positions[$position];
         $hourlyRate = $this->faker->numberBetween($minRate, $maxRate);

         return [
            'name' => $this->faker->name(),
            'position' => $position,
            'industry' => $industry,
            'expertise' => $expertise,
            'hourlyRate' => $hourlyRate,
            'availability' => $this->faker->dateTimeBetween('now', '+3 month'),
            'client_id' => Client::inRandomOrder()->first()->id,
        ];
    }
}
