<?php

use Illuminate\Database\Seeder;
use App\Process;

class ProcessesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // id = 01
        $process = new Process();
        $process->ProcName = 'GESTION DEL TALENTO HUMANO';
        $process->ProcRevVersion = 'HSEQ-04 - REV. 1 - Ene 20';
        $process->ProcChangesDescription = 'Actualizado por seeder de procesos';
        $process->ProcImage = 'https://i.picsum.photos/id/475/536/354.jpg';
        $process->ProcObjetivo = 'Planear, organizar, ejecutar y controlar las acciones tendientes a la vinculación, evaluación y retiro del personal de planta y temporal contribuyendo al desarrollo de sus potencialidades, destrezas y habilidades encaminadas al fortalecimiento continuo de las competencias, mejoramiento del clima organizacional y bienestar, reconociendo los derechos laborales, promoviendo los valores y principios éticos dentro del marco costitucional y legal, que contribuya al logro de las metas de PROSARC S.A ESP.';
        $process->ProcElaboro = 'Lider Comunicaciones e Informatica';
        $process->ProcResponsable = ['Responsable de Gestión Humana'];
        $process->ProcAmbienTrabajo = 'Condiciones favorables y/o adecuadas en cuanto a temperatura, ambiente, ruido, iluminacion, ventilacion, ergonomia, relaciones interpersonales y trabajo en equipo. No requiere condiciones ambientales especiales';
        $process->ProcAlcance = 'Inicia con la gestión para la  vinculación de personal ya sea de forma directa o por la temporal, de acuerdo a la estructura administrativa de PROSARC S.A ESP; continúa con la capacitación a los trabajadores, según la necesidad de la Empresa, entrenamiento, estímulos, seguridad y salud en el trabajo, compensaciones, evaluación de desempeño, administración de las historias laborales, procesos disciplinarios, liquidación de nomina, trámites de incapacidades, licencias, permisos y vacaciones, actividades enmarcadas en el reglamento Interno de Trabajo y termina con el retiro definitivo del trabajador.';
        $process->ProcParticipantes = ['Subgerente'];
        $process->ProcPolitOperacion = ['Con el propósito de asegurar que PROSARC S.A ESP cuente con trabajadores directos / temporales y contratistas que garanticen el cumplimiento de la misión de la Empresa, el proceso de Gestión Humana, con el concurso y compromiso de los demás procesos y dando cumplimiento a la normatividad vigente y el Reglamento Interno de Trabajo para la vinculación, permanencia y retiro del personal, deberá: 1. Aplicar programas de inducción, reinducción y capacitación, que garanticen el conocimiento de la Entidad, la permanente actualización y el desarrollo de las competencias laborales de sus servidores. 2. Desarrollar estrategias orientadas al mejoramiento continuo de la calidad de vida laboral, mediante la ejecución de programas de bienestar social e incentivos y seguridad y salud en el trabajo. 3. Diseñar y aplicar un adecuado sistema de evaluación del desempeño laboral, que permita el cumplimiento de las metas de la Empresa y el reconocimiento a las labores desarrolladas por los trabajadores directos / temporales y contratistas de la Empresa.'];
        $process->ProcElaboro = 'Lider Comunicaciones e Informatica';
        $process->ProcReviso = 'Lider Comunicaciones e Informatica';
        $process->ProcAprobo = 'Lider Comunicaciones e Informatica';
        $process->ProcLink = "https://onedrive.live.com/embed?resid=C2421B24BB4BB872%216893&authkey=%21ADmKx9rE-721hL4&em=2&wdAllowInteractivity=False&Item='Hoja1'!A10%3AJ22&wdInConfigurator=True";
        $process->ProcRiesgos = [
            'Incumplimiento de metas  propuestas en los indicadores de gestión',
            'Perdida de la documentación de los expedientes (historias Laborales)',
            'Favorecimiento por acción u omisión en las actuaciones en el proceso disciplinario',
            'Ascenso o reubicación de trabajadores  sin cumplir requisitos',
            'Error en la liquidación de pagos de cualquier indole prestacional (Nomina, vacaciones, seguridad social, parafiscales,etc)',
            'No acatar las disposiciones judiciales que pueda interponer las entidades del gobierno como el Ministerio de trabajo en los tiempos indicados o prestablecidos',
            'Acoso Laboral',
            'Falsedad en títulos académicos o demas documentos presentados por los candidatos a ocupar un cargo - Personal con antecedentes Judiciales'
        ];
        $process->ProcTipo = 'De Apoyo'
        $process->save();
        $process->recursos()->sync(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13']);
        $process->gambientals()->sync(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11']);
        $process->gseguridads()->sync(['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15']);
        $process->requisitos()->sync(['1', '2', '3', '4', '5', '6']);

    }
}
