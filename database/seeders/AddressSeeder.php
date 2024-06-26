<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Stmt\Return_;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

     private $addresses = [
        'TIC',
        'TRANSITO',
        'TRANSITO-PMT',
        'SECRETARIA DE LA JUNTA',
        'JUZGADO DE FALTAS',
        'MECIP',
        'UAIP',
        'ASESORIA JURIDICA',
        'SECRETARIA PRIVADA',
        'AUDITORIA INTERNA',
        'UOC',
        'DIRECCION GRAL. ADM. Y FINANZAS',
        'TALENTO HUMANO',
        'PREVENCION DE ADICCIONES',
        'MUJER',
        'ADULTOS MAYORES',
        'DISCAPACIDAD',
        'ASISTENCIA SOCIAL',
        'TURISMO',
        'CODENI',
        'SALUD',
        'ARTES',
        'CULTURA',
        'JUVENTUD',
        'DEPORTES',
        'CATASTRO',
        'SEDECO',
        'EDUCACION',
        'COMISIONES VECINALES',
        'OBRAS',
        'MEDIO AMBIENTE',
        'DANZA',
        'TERRITORIO SOCIAL',
        'MIPYMES',
    ];

    public function run(): void
    {
        foreach ($this->addresses as $permission) {
            Address::create(['address' => $permission]);
        }
    }
}
