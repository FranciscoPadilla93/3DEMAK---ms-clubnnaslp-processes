<?php

namespace App\Services;

use App\Repositories\DonanteRepository;

use App\Mail\ReporteCumpleanerosMesSiguienteMail;
use Illuminate\Support\Facades\Mail;

class ReporteCumpleanerosService
{
    public function __construct(
        protected DonanteRepository $repository
    ) {}

    public function enviarReporte()
    {
        $cumpleaneros = $this->repository->obtenerCumpleanerosMesSiguiente();

        if ($cumpleaneros->isEmpty()) {

            return false;

        }

        Mail::to(env('REPORT_EMAIL'))->send(
            new ReporteCumpleanerosMesSiguienteMail(
                $cumpleaneros,
                ucfirst(
                    now()
                        ->locale('es')
                        ->addMonth()
                        ->translatedFormat('F')
                )
            )
        );

        return true;
    }
}
