<?php

use Illuminate\Database\Seeder;
use App\Requisitos;

class RequisitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// Id = 01
        $requisito = new Requisitos();
        $requisito->ReqName = 'Decreto 1072 de 2015';
        $requisito->ReqType = '0';
        $requisito->ReqDate = '2015/05/26';
        $requisito->ReqEnte = 'Ministerio de Trabajo y Protecciòn social.';
        $requisito->ReqQueDice = 'Por medio del cual se expide el Decreto Único Reglamentario del Sector Trabajo';
        $requisito->ReqSrc = '#';
        $requisito->ReqLink = 'https://www.mintrabajo.gov.co/documents/20147/0/DUR+Sector+Trabajo+Actualizado+a+15+de+abril++de+2016.pdf/a32b1dcf-7a4e-8a37-ac16-c121928719c8';
        $requisito->save();


        // Id = 02
        $requisito = new Requisitos();
        $requisito->ReqName = 'Reglamento Interno de Trabajo';
        $requisito->ReqType = '1';
        $requisito->ReqDate = '1998/08/04';
        $requisito->ReqEnte = 'Prosarc S.A. ESP';
        $requisito->ReqQueDice = 'Reglamento Interno de Trabajo';
        $requisito->ReqSrc = 'N';
        $requisito->ReqLink = '#';
        $requisito->save();


        // Id = 03
        $requisito = new Requisitos();
        $requisito->ReqName = 'Reglamento de Higiene';
        $requisito->ReqType = '1';
        $requisito->ReqDate = '2002/08/06';
        $requisito->ReqEnte = 'Prosarc S.A. ESP';
        $requisito->ReqQueDice = 'Reglamento de HSEQ';
        $requisito->ReqSrc = 'N';
        $requisito->ReqLink = '#';
        $requisito->save();


        // Id = 04
        $requisito = new Requisitos();
        $requisito->ReqName = 'NTC 9000-2015';
        $requisito->ReqType = '3';
        $requisito->ReqDate = '2002/08/06';
        $requisito->ReqEnte = 'Instituto Colombiano de Normas Técnicas y Certificación';
        $requisito->ReqQueDice = '5.3 Roles, responsabilidades y autoridades en la organización 7.1.2 Personas 7.1.4 Ambiente para la operación de los procesos 7.1.6 Conocimientos dr la organización 7.2 Competencia. 7.3 Toma de conciencia 9. Evaluación del desempeño 10 Mejora';
        $requisito->ReqSrc = 'N';
        $requisito->ReqLink = 'https://www.usco.edu.co/contenido/ruta-calidad/documentos/anexos/65-NTC%20ISO%209000-2005.pdf';
        $requisito->save();


        // Id = 05
        $requisito = new Requisitos();
        $requisito->ReqName = 'NTC 14000-2015';
        $requisito->ReqType = '3';
        $requisito->ReqDate = '2007/08/06';
        $requisito->ReqEnte = 'Instituto Colombiano de Normas Técnicas y Certificación';
        $requisito->ReqQueDice = '5.3 Roles, responsabilidades y autoridades en la organización 7.1.2 Personas 7.2 Competencia. 7.3 Conciencia 9.  Evaluación de desempeño 10 Mejora';
        $requisito->ReqSrc = 'N';
        $requisito->ReqLink = 'https://www.nueva-iso-14001.com/pdfs/FDIS-14001.pdf';
        $requisito->save();


        // Id = 06
        $requisito = new Requisitos();
        $requisito->ReqName = 'NTC 45000-2018';
        $requisito->ReqType = '3';
        $requisito->ReqDate = '2004/12/01';
        $requisito->ReqEnte = ' Instituto Colombiano de Normas Técnicas y Certificación';
        $requisito->ReqQueDice = '5. Liderazgo y partiipación de los trabajadores 7.2 Competencia. 7.3 Toma de conciencia 9. Evaluación del desempeño 10. Mejora';
        $requisito->ReqSrc = 'N';
        $requisito->ReqLink = 'https://www.iso.org/obp/ui/#iso:std:iso:45001:ed-1:v1:es';
        $requisito->save();
    }
}