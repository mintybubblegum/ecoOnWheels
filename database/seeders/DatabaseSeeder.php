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
            'date' => '2022-12-24',
            'departureTime' => '12:30',
            'arrivalTime' => '23:00',
            
            'userEmail'=> 'noa@hotmail.com',
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://espanafascinante.com/wp-content/uploads/principal_que-hacer-en_Valencia_ciudad-de-las-Artes-672x372.jpg',
            'originAddress' => 'Paseo del Prado, 47',
            'originPostcode' => '28009',
            'originCity' => 'Madrid',
            'destinationCountry' => 'Spain',
            'destinationAddress' => 'Av Peris i Valero, 32',
            'destinationPostcode' => '46030',
            'destinationCity' => 'Valencia',
            'destinationCountry' => 'Spain',
            'preferences' => 'Pet-friendly',
            'seats' => '2',
            'price' => '45.00',
            'driverName'=> 'Bea',
            'driverSurname'=> 'de Avila',
            'driverPhone'=> '601987654',
            'driverImg'=> 'https://drive.google.com/file/d/1AUo4h9huVVksNbiTldqgOWHyAEu13YBa/view?usp=share_link',
            'energyType' => 'Flying Car',
            'numberplate'=> '5481MLK',
            'vehicleType'=> 'Citroen C5',
            'date' => '2023-01-03',
            'departureTime' => '09:00',
            'arrivalTime' => '12:40',
            
            'userEmail'=> 'bea@gmail.com',
        ]);
        Trip::factory()->create([
            'imgDestination' => 'https://content.r9cdn.net/rimg/dimg/3b/c2/b4c4bfb9-city-27138-55689ae0.jpg?width=1366&height=768&xhint=1902&yhint=1090&crop=true',
            'originAddress' => 'Estacion Maria Zambrano',
            'originPostcode' => '29001',
            'originCity' => 'Malaga',
            'destinationCountry' => 'Spain',
            'destinationAddress' => 'Av Juan Pablo II,45',
            'destinationPostcode' => '18014',
            'destinationCity' => 'Granada',
            'destinationCountry' => 'Spain',
            'preferences' => 'No smokers',
            'seats' => '4',
            'price' => '35.00',
            'driverName'=> 'Luis',
            'driverSurname'=> 'Marquez',
            'driverPhone'=> '650248595',
            'driverImg'=> 'https://drive.google.com/file/d/1AUo4h9huVVksNbiTldqgOWHyAEu13YBa/view?usp=share_link',
            'energyType' => 'Hybrid Car',
            'numberplate'=> '4874KLV',
            'vehicleType'=> 'Mercedes Vito',
            'date' => '2023-01-10',
            'departureTime' => '14:00',
            'arrivalTime' => '15:35',
            
            'userEmail'=> 'Luismarquez235@gmail.com',
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://www.camarasevilla.com/wp-content/uploads/2014/08/sevilla-noche.jpg',
            'originAddress' => 'Av Carlos Haya, 45',
            'originPostcode' => '29010',
            'originCity' => 'Malaga',
            'destinationCountry' => 'Spain',
            'destinationAddress' => 'Plaza de Armas',
            'destinationPostcode' => '41001',
            'destinationCity' => 'Seville',
            'destinationCountry' => 'Spain',
            'preferences' => 'women',
            'seats' => '2',
            'price' => '20.00',
            'driverName'=> 'Maribel',
            'driverSurname'=> 'Perea',
            'driverPhone'=> '664852575',
            'driverImg'=> 'https://drive.google.com/file/d/1AUo4h9huVVksNbiTldqgOWHyAEu13YBa/view?usp=share_link',
            'energyType' => 'Electric Car',
            'numberplate'=> '8897JMS',
            'vehicleType'=> 'Wolkswagen Golf',
            'date' => '2022-12-31',
            'departureTime' => '16:00',
            'arrivalTime' => '18:25',
         
            'userEmail'=> 'Maribelpg@hotmail.es',
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://static.barcelo.com/content/dam/bhg/master/es/main-destination-photo/province/malaga/destino_malaga.jpg.bhgimg.optm1100.jpg/1604674769207.jpg',
            'originAddress' => 'C.c. Marina Banus',
            'originPostcode' => '29660',
            'originCity' => 'Marbella',
            'destinationCountry' => 'Spain',
            'destinationAddress' => 'Estacion Maria Zambrano',
            'destinationPostcode' => '29001',
            'destinationCity' => 'Malaga',
            'destinationCountry' => 'Spain',
            'preferences' => 'No smokers',
            'seats' => '2',
            'price' => '40.00',
            'driverName'=> 'Jose Manuel',
            'driverSurname'=> 'Artea',
            'driverPhone'=> '645897787',
            'driverImg'=> 'https://drive.google.com/file/d/1AUo4h9huVVksNbiTldqgOWHyAEu13YBa/view?usp=share_link',
            'energyType' => 'Solar Car',
            'numberplate'=> '6542LLJ',
            'vehicleType'=> 'Seat Ateca',
            'date' => '2023-01-10',
            'departureTime' => '07:00',
            'arrivalTime' => '08:00',
            
            'userEmail'=> 'Jmarteavilchez@gmail.com',
        ]);

        Trip::factory(10)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
