<?php

use Illuminate\Database\Seeder;
use App\Riesgo;


class RiesgoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Id = 01
        $requisito = new Riesgo();
        $requisito->RiesgDescrip = 'Incumplimiento de metas  propuestas en los indicadores de gestión';
        $requisito->RiesgAction = 'Verificar y analizar los motivos que generaron la desviación presentada con el fin de analizar cada uno de los motivos y realizar el ajuste a la meta la cual debe ser aprobada por la gerencia una vez expuesto el motivo de su desviación';
        $requisito->save();

        // Id = 02
        $requisito = new Riesgo();
        $requisito->RiesgDescrip = 'Perdida de la documentación de los expedientes (historias Laborales)';
        $requisito->RiesgAction = 'Mantener las carpetas separadas y marcadas por trabajador, con sus documentos foliados y bajo llave en la oficina de Talento Humano';
        $requisito->save();

        // Id = 03
        $requisito = new Riesgo();
        $requisito->RiesgDescrip = 'Favorecimiento por acción u omisión en las actuaciones en el proceso disciplinario';
        $requisito->RiesgAction = 'Revisión de cada una de las acctuaciones realizadas por el asesor externo (abogado)';
        $requisito->save();

        // Id = 04
        $requisito = new Riesgo();
        $requisito->RiesgDescrip = 'Ascenso o reubicación de trabajadores  sin cumplir requisitos';
        $requisito->RiesgAction = 'Verificación por parte del comité de convivencia y Gerencia los documentos y sustentaciones que ameriten los ascensos o reubicación del personal';
        $requisito->save();

        // Id = 05
        $requisito = new Riesgo();
        $requisito->RiesgDescrip = 'Error en la liquidación de pagos de cualquier indole prestacional (Nomina, vacaciones, seguridad social, parafiscales,etc)';
        $requisito->RiesgAction = 'Evaluar el error, el cual debe ser reportado dentro de las desviaciones del proceso de Talento Humano. Corregir el error y hacer el pago o deducción presentada';
        $requisito->save();

        // Id = 06
        $requisito = new Riesgo();
        $requisito->RiesgDescrip = 'No acatar las disposiciones judiciales que pueda interponer las entidades del gobierno como el Ministerio de trabajo en los tiempos indicados o prestablecidos';
        $requisito->RiesgAction = 'Realizar  descargos por parte de talento Humano por la omisición presentada.  Presentar los requerimiento solicitados por las entidades del gobierno';
        $requisito->save();

        // Id = 07
        $requisito = new Riesgo();
        $requisito->RiesgDescrip = 'Acoso Laboral';
        $requisito->RiesgAction = 'Capacitar a los funcionarios y jefes en temas como comunicación asertiva, trabajo en equipo, valores, atención al cliente y Ley de acoso laboral Gestionar  por parte del comité de convivencia las actividades tendientes a evitar el acoso laboral al interior de la empresa, hacer seguimiento de su gestión';
        $requisito->save();

        // Id = 08
        $requisito = new Riesgo();
        $requisito->RiesgDescrip = 'Falsedad en títulos académicos o demas documentos presentados por los candidatos a ocupar un cargo - Personal con antecedentes Judiciales';
        $requisito->RiesgAction = 'Verificación de la documentación del candidato y sus antecedentes previo a su vinculación, si se evidencia de la falsedad de documentos o la generación de antecedentes judiciales del trabajador vinculado se procedera a su retiro inmediato';
        $requisito->save();

        
    }
}
