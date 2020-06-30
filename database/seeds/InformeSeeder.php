<?php

use Illuminate\Database\Seeder;
use App\Informe;


class InformeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         // id = 01
        $informe = new Informe();
        $informe->InfoName = 'Informe de prueba PDA';
        $informe->InfoLink = 'https://onedrive.live.com/embed?cid=C2421B24BB4BB872&resid=C2421B24BB4BB872%216887&authkey=AH-eik6VViNfZDQ&em=2';
        $informe->save();

         // id = 02
        $informe = new Informe();
        $informe->InfoName = 'Power Query / Pivot / BI TEST';
        $informe->InfoLink = 'https://onedrive.live.com/embed?cid=C2421B24BB4BB872&resid=C2421B24BB4BB872%216889&authkey=AEb3nWRIUESnkuM&em=2';
        $informe->save();

    }
}
