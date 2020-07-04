<?php

use Illuminate\Database\Seeder;
use App\Gambiental;

class GambientalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// id = 01
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Consumo y utilización de agua';
        $gambiental->GesImpact = 'Recurso Agua';
        $gambiental->GesDescrip = 'Generación de vertimientos y disminución del recurso natural';
        $gambiental->GesControl = 'Implementación de actividades del programa de uso racional del agua';
        $gambiental->save();

        // id = 02
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Consumo de energía';
        $gambiental->GesImpact = 'Recursos Naturales';
        $gambiental->GesDescrip = 'Agotamiento de los recursos no renovables';
        $gambiental->GesControl = 'Implementación de actividades del programa de ahorro de energia';
        $gambiental->save();

        // id = 03
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Consumo de papel normal';
        $gambiental->GesImpact = 'Recurso Flora';
        $gambiental->GesDescrip = 'Agotamiento del recurso natural ';
        $gambiental->GesControl = 'Campañas orientadas al uso de herramientas informáticas';
        $gambiental->save();

        // id = 04
        $gambiental = new Gambiental();
        $gambiental->GesName = 'Generación de residuos';
        $gambiental->GesImpact = 'Recurso Suelo';
        $gambiental->GesDescrip = 'Contaminaciòn al aire por su tratamiento por incineraciòn';
        $gambiental->GesControl = 'Implementación del programa ambiental de las 3R';
        $gambiental->save();

    }
}
