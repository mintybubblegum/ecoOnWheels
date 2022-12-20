<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Trip;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class CRUDTripTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */

    use RefreshDatabase;
    
    /* public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    } */

    public function test_listTripAppearInHomeView() {
        $this->withExceptionHandling();
        $trips = Trip::factory(2)->create();
        $trip = $trips[0];
        $response = $this->get('/');
        $response->assertSee($trip->name);
        $response->assertStatus(200)->assertViewIs('home');
    }

    public function test_aTripCanBeDeleted() {
        $this->withExceptionHandling();
        $trip = Trip::factory()->create();
        $this->assertCount(1, Trip::all());
        $response = $this->delete(route('deleteTrip', $trip->id));
        $this->assertCount(0, Trip::all());
    }


}
