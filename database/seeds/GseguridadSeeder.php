<?php

use Illuminate\Database\Seeder;
use App\Gseguridad;

class GseguridadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 01
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Posturas Prolongadas';
        $gseguridad->SeguImpact = 'Ergonómico';
        $gseguridad->SeguDescrip = 'Desarrollo de la labor mediante posturas sentados durante su jornada';
        $gseguridad->SeguControl = 'Implementación de actividades del programa de posturas adecuadas ';
        $gseguridad->save();

        // id = 02
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Radiaciones no ionizantes';
        $gseguridad->SeguImpact = 'Físico';
        $gseguridad->SeguDescrip = 'Utilización del computador la cual genera radiaciones';
        $gseguridad->SeguControl = 'Implementación de pausas activas orientadas a la protecciòn visual';
        $gseguridad->save();

        // id = 03
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Exposición de Polvos y Humos';
        $gseguridad->SeguImpact = 'Químico';
        $gseguridad->SeguDescrip = 'La oficina de Talento Humano se encuentra cerca a las zonas de incineración';
        $gseguridad->SeguControl = 'Controles medicos y uso de protecciòn respiratoria';
        $gseguridad->save();

        // id = 04
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Exposición a vectores, roedores, virus y bacterias';
        $gseguridad->SeguImpact = 'Biologico';
        $gseguridad->SeguDescrip = 'La actividad propia de la planta genera la presencia de los agentes mencionados';
        $gseguridad->SeguControl = 'Implementación de as actividades del programa de bioseguridad';
        $gseguridad->save();

        // id = 05
        $gseguridad = new Gseguridad();
        $gseguridad->SeguName = 'Gestión de personal';
        $gseguridad->SeguImpact = 'Psicologico';
        $gseguridad->SeguDescrip = 'La atención de trabajadores, resolver conflictos y carga de trabajo';
        $gseguridad->SeguControl = 'Desarrollo de actividades de bienestar y manejo del estrés';
        $gseguridad->save();


    }
}
