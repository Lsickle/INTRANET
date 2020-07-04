<?php

use Illuminate\Database\Seeder;
use App\Recursos;

class RecursosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // id = 01
        $recurso = new Recursos();
        $recurso->RecName = 'Oficinas';
        $recurso->RecType = '0'; /* 0->fisico 1->humano 2->financiero */
        $recurso->save();

        // id = 02
        $recurso = new Recursos();
        $recurso->RecName = 'sala de reuniones';
        $recurso->RecType = '0';
        $recurso->save();

        // id = 03
        $recurso = new Recursos();
        $recurso->RecName = 'área de archivo';
        $recurso->RecType = '0';
        $recurso->save();

        // id = 04
        $recurso = new Recursos();
        $recurso->RecName = 'computadores';
        $recurso->RecType = '0';
        $recurso->save();

        // id = 05
        $recurso = new Recursos();
        $recurso->RecName = 'impresoras';
        $recurso->RecType = '0';
        $recurso->save();

        // id = 06
        $recurso = new Recursos();
        $recurso->RecName = 'equipos de comunicación';
        $recurso->RecType = '0';
        $recurso->save();

        // id = 07
        $recurso = new Recursos();
        $recurso->RecName = 'sistemas de información';
        $recurso->RecType = '0';
        $recurso->save();

        // id = 08
        $recurso = new Recursos();
        $recurso->RecName = 'Responsable de Gestión Humana';
        $recurso->RecType = '1';
        $recurso->save();

        // id = 09
        $recurso = new Recursos();
        $recurso->RecName = 'Director de Planta';
        $recurso->RecType = '1';
        $recurso->save();

        // id = 10
        $recurso = new Recursos();
        $recurso->RecName = 'Subgerente Comercial';
        $recurso->RecType = '1';
        $recurso->save();

        // id = 11
        $recurso = new Recursos();
        $recurso->RecName = 'Gerente General';
        $recurso->RecType = '1';
        $recurso->save();

        // id = 12
        $recurso = new Recursos();
        $recurso->RecName = 'Asesor Externo (abogado)';
        $recurso->RecType = '1';
        $recurso->save();

        // id = 13
        $recurso = new Recursos();
        $recurso->RecName = 'Presupuesto Aprobado por Gerencia General';
        $recurso->RecType = '2';
        $recurso->save();

    }
}
