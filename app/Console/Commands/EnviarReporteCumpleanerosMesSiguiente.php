<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;

use App\Services\ReporteCumpleanerosService;

#[Signature('app:enviar-reporte-cumpleaneros-mes-siguiente')]
#[Description('Command description')]
class EnviarReporteCumpleanerosMesSiguiente extends Command
{
    public function __construct(
        protected ReporteCumpleanerosService $service
    ) {
        parent::__construct();
    }

    public function handle()
    {
        $resultado = $this->service->enviarReporte();

        if ($resultado) {

            $this->info(
                'Reporte enviado correctamente.'
            );

        } else {

            $this->warn(
                'No existen cumpleañeros para el siguiente mes.'
            );

        }

        return self::SUCCESS;
    }
}
