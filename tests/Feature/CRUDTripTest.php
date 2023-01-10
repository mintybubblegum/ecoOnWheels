<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Trip;
use App\Models\User;
use function PHPUnit\Framework\assertCount;

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

    public function test_aTripCanBeDeletedByAdmin() {
        $this->withExceptionHandling();

        $trip = Trip::factory()->create();
        $this->assertCount(1, Trip::all());

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response = $this->delete(route('deleteTrip', $trip->id));
        $this->assertCount(1, Trip::all());

        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response = $this->delete(route('deleteTrip', $trip->id));
        $this->assertCount(0, Trip::all());
    }

    public function test_aTripCanBeCreatedByAdmin(){
        $this->withExceptionHandling();

        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response = $this->post(route ('storeTrip'),
        [
            'imgDestination' => 'imgDestination',
            'originAddress' => 'originAddress',
            'originPostcode' => 'originPostcode',
            'originCity' => 'originCity',
            'originCountry' => 'originCountry',
            'destinationAddress' => 'destinationAddress',
            'destinationPostcode' => 'destinationPostcode',
            'destinationCity' => 'destinationCity',
            'destinationCountry' => 'destinationCountry',
            'preferences' => 'preferences',
            'seats' => '3',
            'price' => '15',
            'driverName' => 'driverName',
            'driverSurname' => 'driverSurname',
            'driverPhone' => 'driverPhone',
            'driverImg' => 'driverImg',
            'energyType' => 'energyType',
            'numberplate' => 'numberplate',
            'vehicleType' => 'vehicleType',
            'date' => '2022-12-23',
            'departureTime' => 'departureTime',
            'arrivalTime' => 'arrivalTime',
            'topJourneys' => 'topJourneys',
            'userEmail' => 'userEmail'
        ]);

        $this->assertCount(1,Trip::all()); 

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response = $this->post(route ('storeTrip'),
        [
            'imgDestination' => 'imgDestination',
            'originAddress' => 'originAddress',
            'originPostcode' => 'originPostcode',
            'originCity' => 'originCity',
            'originCountry' => 'originCountry',
            'destinationAddress' => 'destinationAddress',
            'destinationPostcode' => 'destinationPostcode',
            'destinationCity' => 'destinationCity',
            'destinationCountry' => 'destinationCountry',
            'preferences' => 'preferences',
            'seats' => '3',
            'price' => '15',
            'driverName' => 'driverName',
            'driverSurname' => 'driverSurname',
            'driverPhone' => 'driverPhone',
            'driverImg' => 'driverImg',
            'energyType' => 'energyType',
            'numberplate' => 'numberplate',
            'vehicleType' => 'vehicleType',
            'date' => '2022-12-23',
            'departureTime' => 'departureTime',
            'arrivalTime' => 'arrivalTime',
            'topJourneys' => 'topJourneys',
            'userEmail' => 'userEmail'
        ]);

        $this->assertCount(1,Trip::all()); 
    }

    public function test_aTripCanBeUpdatedByAdmin(){
        $this->withExceptionHandling();
        $trip=Trip::factory()->create();
        $this->assertCount(1,Trip::all());

        $userAdmin = User::factory()->create(['isAdmin'=>true]);
        $this->actingAs($userAdmin);
        $response=$this->patch(route('updateTrip',$trip->id), ['destinationCity'=>'New DestinationCity']);
        $this->assertEquals('New DestinationCity', Trip::first()->destinationCity);

        $userNoAdmin = User::factory()->create(['isAdmin'=>false]);
        $this->actingAs($userNoAdmin);
        $response=$this->patch(route('updateTrip',$trip->id), ['destinationCity'=>'New DestinationCity if not Admin']);
        $this->assertEquals('New DestinationCity', Trip::first()->destinationCity);
    }

    public function test_aTripCanBeShowed(){
        $this->withExceptionHandling();
        $trip=Trip::factory()->create();
        $this->assertCount(1,Trip::all());
        $response=$this->get(route('showTrip', $trip->id));
        $response->assertSee($trip->name);
        $response->assertStatus(200)->assertViewIs('showTrip');
    }

}