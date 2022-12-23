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
            'originAddress' => 'Av Santa Lucia 36',
            'originPostcode' => '29008',
            'originCity' => 'Malaga',
            'destinationCountry' => 'Spain',
            'destinationAddress' => 'Av Barcelona 25',
            'destinationPostcode' => '08010',
            'destinationCity' => 'Barcelona',
            'destinationCountry' => 'Spain',
            'preferences' => 'All people',
            'seats' => '3',
            'price' => '80.00',
            'driverName'=> 'Noa',
            'driverSurname'=> 'Trujillo',
            'driverPhone'=> '608132564',
            'driverImg'=> 'https://drive.google.com/file/d/1AUo4h9huVVksNbiTldqgOWHyAEu13YBa/view?usp=share_link',
            'energyType' => 'Electric Car',
            'numberplate'=> '1235YXZ',
            'vehicleType'=> 'Ford fiesta',
            'date' => '2022/12/24',
            'departureTime' => '12:30',
            'arrivalTime' => '23:00',
            'topJourneys'=> 'true',
            'userEmail'=> 'noa@hotmail.com',
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://espanafascinante.com/wp-content/uploads/principal_que-hacer-en_Valencia_ciudad-de-las-Artes-672x372.jpg',
            'originAddress' => 'Paseo del prado',
            'originPostcode' => '28009',
            'originCity' => 'Madrid',
            'destinationCountry' => 'Spain',
            'destinationAddress' => 'Av Peris i Valero',
            'destinationPostcode' => '46030',
            'destinationCity' => 'Valencia',
            'destinationCountry' => 'Spain',
            'preferences' => 'Pet-friendly',
            'seats' => '2',
            'price' => '80.00',
            'driverName'=> 'Bea',
            'driverSurname'=> 'de Avila',
            'driverPhone'=> '601987654',
            'driverImg'=> 'https://drive.google.com/file/d/1AUo4h9huVVksNbiTldqgOWHyAEu13YBa/view?usp=share_link',
            'energyType' => 'Flying Car',
            'numberplate'=> '',
            'vehicleType'=> '',
            'date' => '2023/01/03',
            'departureTime' => '09:00',
            'arrivalTime' => '09:40',
            'topJourneys'=> '',
            'userEmail'=> '',
        ]);
        Trip::factory()->create([
            'imgDestination' => 'https://content.r9cdn.net/rimg/dimg/3b/c2/b4c4bfb9-city-27138-55689ae0.jpg?width=1366&height=768&xhint=1902&yhint=1090&crop=true',
            'originAddress' => '',
            'originPostcode' => '',
            'originCity' => 'Malaga',
            'destinationCountry' => '',
            'destinationAddress' => '',
            'destinationPostcode' => '',
            'destinationCity' => 'Granada',
            'destinationCountry' => '',
            'preferences' => '',
            'seats' => '',
            'price' => '80.00',
            'driverName'=> '',
            'driverSurname'=> '',
            'driverPhone'=> '',
            'driverImg'=> '',
            'energyType' => 'Hybrid Car',
            'numberplate'=> '',
            'vehicleType'=> '',
            'date' => '2023/01/10',
            'departureTime' => '14:00',
            'arrivalTime' => '15:35',
            'topJourneys'=> '',
            'userEmail'=> '',
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://www.camarasevilla.com/wp-content/uploads/2014/08/sevilla-noche.jpg',
            'originAddress' => '',
            'originPostcode' => '',
            'originCity' => 'Malaga',
            'destinationCountry' => '',
            'destinationAddress' => '',
            'destinationPostcode' => '',
            'destinationCity' => 'Seville',
            'destinationCountry' => '',
            'preferences' => '',
            'seats' => '',
            'price' => '80.00',
            'driverName'=> '',
            'driverSurname'=> '',
            'driverPhone'=> '',
            'driverImg'=> '',
            'energyType' => 'Electric Car',
            'numberplate'=> '',
            'vehicleType'=> '',
            'date' => '2022/12/31',
            'departureTime' => '16:00',
            'arrivalTime' => '18:25',
            'topJourneys'=> '',
            'userEmail'=> '',
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://static.barcelo.com/content/dam/bhg/master/es/main-destination-photo/province/malaga/destino_malaga.jpg.bhgimg.optm1100.jpg/1604674769207.jpg',
            'originAddress' => '',
            'originPostcode' => '',
            'originCity' => 'Marbella',
            'destinationCountry' => '',
            'destinationAddress' => '',
            'destinationPostcode' => '',
            'destinationCity' => 'Malaga',
            'destinationCountry' => '',
            'preferences' => '',
            'seats' => '',
            'price' => '80.00',
            'driverName'=> '',
            'driverSurname'=> '',
            'driverPhone'=> '',
            'driverImg'=> '',
            'energyType' => 'Solar Car',
            'numberplate'=> '',
            'vehicleType'=> '',
            'date' => '2023/01/10',
            'departureTime' => '07:00',
            'arrivalTime' => '08:00',
            'topJourneys'=> '',
            'userEmail'=> '',
        ]);

        Trip::factory(10)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
