<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imgDestination'=> $this->faker->imageUrl(),
            'originAddress'=> $this->faker->streetAddress(),
            'originPostcode'=> $this->faker->postcode(),
            'originCity'=> $this->faker->city(),
            'originCountry'=> $this->faker->country(),
            'destinationAddress'=> $this->faker->streetAddress(),
            'destinationPostcode'=> $this->faker->postcode(),
            'destinationCity'=> $this->faker->city(),
            'destinationCountry'=> $this->faker->country(),
            'preferences'=> $this->faker->realText(),
            'seats'=> $this->faker->biasedNumberBetween($min = 1, $max = 10, $function = 'sqrt'),
            'price'=> $this->faker->biasedNumberBetween($min = 1, $max = 300, $function = 'sqrt'),
            'driverName'=> $this->faker->firstName(),
            'driverSurname'=> $this->faker->lastName(),
            'driverPhone'=> $this->faker->name(),
            'driverImg'=> $this->faker->imageUrl(),
            'energyType'=> $this->faker->name(),
            'numberplate'=> $this->faker->name(),
            'vehicleType'=> $this->faker->name(),
            'date'=> $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'departureTime'=> $this->faker->time($format = 'H:i', $max = 'now'),
            'arrivalTime'=> $this->faker->time($format = 'H:i', $max = 'now'),
            'topJourneys'=> $this->faker->boolean(),
        ];
    }
}
