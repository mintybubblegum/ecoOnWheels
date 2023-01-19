<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Trip;
use App\Models\User;
use Illuminate\Database\Seeder;

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
            'originCountry' => 'Spain',
            'destinationAddress' => 'Av Barcelona 25',
            'destinationPostcode' => '08010',
            'destinationCity' => 'Barcelona',
            'destinationCountry' => 'Spain',
            'preferences' => 'Family-friendly',
            'seats' => '3',
            'price' => '80.00',
            'driverName'=> 'Noa',
            'driverSurname'=> 'Trujillo',
            'driverPhone'=> '608132564',
            'driverImg'=> 'https://st2.depositphotos.com/2703645/11438/v/950/depositphotos_114389662-stock-illustration-woman-avatar-character.jpg',
            'energyType' => 'Electric Car',
            'numberplate'=> '1235YXZ',
            'vehicleType'=> 'Ford fiesta',
            'date' => '2023-01-23',
            'departureTime' => '12:30',
            'arrivalTime' => '23:00',
            'topJourneys'=>0,
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://espanafascinante.com/wp-content/uploads/principal_que-hacer-en_Valencia_ciudad-de-las-Artes-672x372.jpg',
            'originAddress' => 'Paseo del Prado, 47',
            'originPostcode' => '28009',
            'originCity' => 'Madrid',
            'originCountry' => 'Spain',
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
            'driverImg'=> 'https://st4.depositphotos.com/2703645/24892/v/1600/depositphotos_248920644-stock-illustration-colorful-vector-illustration-woman-avatar.jpg',
            'energyType' => 'Flying Car',
            'numberplate'=> '5481MLK',
            'vehicleType'=> 'Citroen C5',
            'date' => '2023-01-18',
            'departureTime' => '09:00',
            'arrivalTime' => '12:40',
            'topJourneys'=>1,
        ]);
        Trip::factory()->create([
            'imgDestination' => 'https://content.r9cdn.net/rimg/dimg/3b/c2/b4c4bfb9-city-27138-55689ae0.jpg?width=1366&height=768&xhint=1902&yhint=1090&crop=true',
            'originAddress' => 'Estacion Maria Zambrano',
            'originPostcode' => '29001',
            'originCity' => 'Malaga',
            'originCountry' => 'Spain',
            'destinationAddress' => 'Av Juan Pablo II,45',
            'destinationPostcode' => '18014',
            'destinationCity' => 'Granada',
            'destinationCountry' => 'Spain',
            'preferences' => 'No smokers',
            'seats' => '4',
            'price' => '35.00',
            'driverName'=> 'Himo',
            'driverSurname'=> 'Jaramillo',
            'driverPhone'=> '650248595',
            'driverImg'=> 'https://st2.depositphotos.com/2703645/11476/v/950/depositphotos_114764242-stock-illustration-woman-avatar-character.jpg',
            'energyType' => 'Hybrid Car',
            'numberplate'=> '4874KLV',
            'vehicleType'=> 'Mercedes Vito',
            'date' => '2023-01-28',
            'departureTime' => '14:00',
            'arrivalTime' => '15:35',
            'topJourneys'=>0,
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://www.camarasevilla.com/wp-content/uploads/2014/08/sevilla-noche.jpg',
            'originAddress' => 'Av Carlos Haya, 45',
            'originPostcode' => '29010',
            'originCity' => 'Malaga',
            'originCountry' => 'Spain',
            'destinationAddress' => 'Plaza de Armas',
            'destinationPostcode' => '41001',
            'destinationCity' => 'Seville',
            'destinationCountry' => 'Spain',
            'preferences' => 'Women',
            'seats' => '2',
            'price' => '20.00',
            'driverName'=> 'Raquel',
            'driverSurname'=> 'Palomo',
            'driverPhone'=> '664852575',
            'driverImg'=> 'https://st2.depositphotos.com/2703645/11476/v/950/depositphotos_114763844-stock-illustration-woman-avatar-character.jpg',
            'energyType' => 'Electric Car',
            'numberplate'=> '8897JMS',
            'vehicleType'=> 'Volkswagen Golf',
            'date' => '2023-01-31',
            'departureTime' => '16:00',
            'arrivalTime' => '18:25',
            'topJourneys'=>1,
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://static.barcelo.com/content/dam/bhg/master/es/main-destination-photo/province/malaga/destino_malaga.jpg.bhgimg.optm1100.jpg/1604674769207.jpg',
            'originAddress' => 'C.C. Marina Banus',
            'originPostcode' => '29660',
            'originCity' => 'Marbella',
            'originCountry' => 'Spain',
            'destinationAddress' => 'Estacion Maria Zambrano',
            'destinationPostcode' => '29001',
            'destinationCity' => 'Malaga',
            'destinationCountry' => 'Spain',
            'preferences' => 'No smokers',
            'seats' => '2',
            'price' => '25.00',
            'driverName'=> 'Adriana',
            'driverSurname'=> 'Aguilar',
            'driverPhone'=> '645897787',
            'driverImg'=> 'https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59094623-stock-illustration-female-avatar-woman.jpg',
            'energyType' => 'Solar Car',
            'numberplate'=> '6542LLJ',
            'vehicleType'=> 'Seat Ateca',
            'date' => '2023-01-10',
            'departureTime' => '07:00',
            'arrivalTime' => '08:00',
            'topJourneys'=> 0,
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://www.ahoracordoba.es/wp-content/uploads/2021/11/Cordoba-1.jpg',
            'originAddress' => 'C/ Isaac Albéniz, 2',
            'originPostcode' => '23009',
            'originCity' => 'Jaen',
            'originCountry' => 'Spain',
            'destinationAddress' => 'Gta. Tres Culturas',
            'destinationPostcode' => '14011',
            'destinationCity' => 'Cordoba',
            'destinationCountry' => 'Spain',
            'preferences' => 'FemCoders-Friendly',
            'seats' => '4',
            'price' => '20.00',
            'driverName'=> 'Lola',
            'driverSurname'=> 'García',
            'driverPhone'=> '633245897',
            'driverImg'=> 'https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59094623-stock-illustration-female-avatar-woman.jpg',
            'energyType' => 'Hybrid Car',
            'numberplate'=> '8367LGM',
            'vehicleType'=> 'Toyota Yaris',
            'date' => '2023-01-25',
            'departureTime' => '09:00',
            'arrivalTime' => '10:20',
            'topJourneys'=> 1,
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://www.ahoracordoba.es/wp-content/uploads/2021/11/Cordoba-1.jpg',
            'originAddress' => 'C/ Isaac Albéniz, 2',
            'originPostcode' => '23009',
            'originCity' => 'Jaen',
            'originCountry' => 'Spain',
            'destinationAddress' => 'Gta. Tres Culturas',
            'destinationPostcode' => '14011',
            'destinationCity' => 'Cordoba',
            'destinationCountry' => 'Spain',
            'preferences' => 'FemCoders-Friendly',
            'seats' => '4',
            'price' => '20.00',
            'driverName'=> 'Lola',
            'driverSurname'=> 'García',
            'driverPhone'=> '633245897',
            'driverImg'=> 'https://st2.depositphotos.com/1006318/5909/v/950/depositphotos_59094623-stock-illustration-female-avatar-woman.jpg',
            'energyType' => 'Hybrid Car',
            'numberplate'=> '8367LGM',
            'vehicleType'=> 'Toyota Yaris',
            'date' => '2023-01-02',
            'departureTime' => '09:00',
            'arrivalTime' => '10:20',
            'topJourneys'=> 1,
        ]);

        Trip::factory()->create([
            'imgDestination' => 'https://content.r9cdn.net/rimg/dimg/3b/c2/b4c4bfb9-city-27138-55689ae0.jpg?width=1366&height=768&xhint=1902&yhint=1090&crop=true',
            'originAddress' => 'Estacion Maria Zambrano',
            'originPostcode' => '29001',
            'originCity' => 'Malaga',
            'originCountry' => 'Spain',
            'destinationAddress' => 'Av Juan Pablo II,45',
            'destinationPostcode' => '18014',
            'destinationCity' => 'Granada',
            'destinationCountry' => 'Spain',
            'preferences' => 'No smokers',
            'seats' => '4',
            'price' => '35.00',
            'driverName'=> 'Himo',
            'driverSurname'=> 'Jaramillo',
            'driverPhone'=> '650248595',
            'driverImg'=> 'https://st2.depositphotos.com/2703645/11476/v/950/depositphotos_114764242-stock-illustration-woman-avatar-character.jpg',
            'energyType' => 'Hybrid Car',
            'numberplate'=> '4874KLV',
            'vehicleType'=> 'Mercedes Vito',
            'date' => '2023-01-14',
            'departureTime' => '14:00',
            'arrivalTime' => '15:35',
            'topJourneys'=>0,
        ]);

/*         Trip::factory()->create();
 */
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'isAdmin' => true,
        ]); 

        User::factory()->create([
            'name' => 'user1',
            'email' => 'user1@user1.com',
            'isAdmin' => false,
        ]); 

/*         User::factory(5)->create();

        User::factory()
            ->has(Trip::factory()->count(5))
            ->create();

        Trip::factory()
            ->has(User::factory()->count(5))
            ->create(); */
        
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
