<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\PersonalMedico;


class PersonalMedicoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    // La médica vinculada al usuario medico@posta.test
    $usuario = User::where('email', 'medico@posta.test')->first();
    PersonalMedico::factory()->create([
        'user_id'      => $usuario->id,
        'nombres'      => 'Rosa',
        'apellidos'    => 'Huamán Quispe',
        'especialidad' => 'Medicina general',
    ]);
 
    PersonalMedico::factory()->count(4)->create();
    PersonalMedico::factory()->inactivo()->create();   // para probar RN04
}

}
