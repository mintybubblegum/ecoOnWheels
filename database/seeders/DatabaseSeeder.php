<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Trip;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Trip::factory()->create([
            'imgDestination' => 'https://media.istockphoto.com/id/1130443789/photo/sagrada-familia-basilica-in-barcelona.jpg?s=612x612&w=0&k=20&c=bw6WVHnaiwXxAFllDVujJanDQ3eayUt5ZQf8Ij75jVk=',
            'originCity' => 'Malaga',
            'destinationCity' => 'Barcelona',
            'energyType' => 'Electric Car',
            'date' => '2022/12/24',
            'departureTime' => '12:30',
            'arrivalTime' => '23:00',
            'price' => '80.00',
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://espanafascinante.com/wp-content/uploads/principal_que-hacer-en_Valencia_ciudad-de-las-Artes-672x372.jpg',
            'originCity' => 'Madrid',
            'destinationCity' => 'Valencia',
            'energyType' => 'Flying Car',
            'date' => '2023/01/03',
            'departureTime' => '09:00',
            'arrivalTime' => '09:40',
            'price' => '50.00',
        ]);
        Trip::factory()->create([
            'imgDestination' => 'https://content.r9cdn.net/rimg/dimg/3b/c2/b4c4bfb9-city-27138-55689ae0.jpg?width=1366&height=768&xhint=1902&yhint=1090&crop=true',
            'originCity' => 'Malaga',
            'destinationCity' => 'Granada',
            'energyType' => 'Hybrid Car',
            'date' => '2023/01/10',
            'departureTime' => '14:00',
            'arrivalTime' => '15:35',
            'price' => '8.00',
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://www.camarasevilla.com/wp-content/uploads/2014/08/sevilla-noche.jpg',
            'originCity' => 'Malaga',
            'destinationCity' => 'Seville',
            'energyType' => 'Electric Car',
            'date' => '2022/12/31',
            'departureTime' => '16:00',
            'arrivalTime' => '18:25',
            'price' => '15.00',
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://static.barcelo.com/content/dam/bhg/master/es/main-destination-photo/province/malaga/destino_malaga.jpg.bhgimg.optm1100.jpg/1604674769207.jpg',
            'originCity' => 'Marbella',
            'destinationCity' => 'Malaga',
            'energyType' => 'Solar Car',
            'date' => '2023/01/10',
            'departureTime' => '07:00',
            'arrivalTime' => '08:00',
            'price' => '5.00',
        ]);

        Trip::factory(10)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
