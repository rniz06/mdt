<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use Exception;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserPmtSeeder extends Seeder
{
    private $pmts = [
        'Juan Perez',
        'Maria Gomez',
        // agrega más nombres según sea necesario
    ];

    public function run(): void
    {
        // Obtener el ID de la dirección "TRANSITO-PMT"
        $transitoPmtAddress = Address::where('address', 'TRANSITO-PMT')->first();

        if (!$transitoPmtAddress) {
            // Lanza una excepción si no se encuentra la dirección
            throw new Exception('Address "TRANSITO-PMT" not found in the addresses table.');
        }

        // Obtener el rol "TRANSITO-PMT", créalo si no existe
        $transitoPmtRole = Role::firstOrCreate(['name' => 'TRANSITO-PMT']);

        foreach ($this->pmts as $pmt) {
            $nameParts = explode(' ', $pmt);
            $firstName = $nameParts[0];
            $lastName = $nameParts[1];

            // Generar username y email
            $username = strtolower($firstName . '.' . $lastName); // ejemplo: juan.perez
            $email = strtolower(substr($firstName, 0, 1) . $lastName) . '@nemby.gov.py'; // ejemplo: jperez@nemby.gov.py

            // Crear el usuario
            $user = User::create([
                'name' => $pmt,
                'username' => $username,
                'email' => $email,
                'address_id' => $transitoPmtAddress->id,
                'password' => Hash::make('Paraguay2024'),
            ]);

            // Asignar el rol "TRANSITO-PMT" al usuario
            $user->assignRole($transitoPmtRole);
        }
    }
}
