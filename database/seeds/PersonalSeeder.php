<?php
use App\Personal;
use Illuminate\Database\Seeder;

class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Personal::create([
            'nombres' => 'Laura',
            'apellidos' => 'Loyola',
        ]);
        Personal::create([
            'nombres' => 'Carmen',
            'apellidos' => 'Ramos',
        ]);
        Personal::create([
            'nombres' => 'Mario',
            'apellidos' => 'Arteaga',
        ]);
        Personal::create([
            'nombres' => 'Sandra',
            'apellidos' => 'Castillo',
        ]);
    }
}
