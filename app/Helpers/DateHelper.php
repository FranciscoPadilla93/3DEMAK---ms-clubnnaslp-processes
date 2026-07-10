<?php

namespace App\Helpers;

use Carbon\Carbon;

class DateHelper
{
    public static function fechaCompleta(?Carbon $fecha = null): string
    {
        $fecha = $fecha ?? now();

        return ucfirst(
            $fecha
                ->locale('es')
                ->translatedFormat(
                    'd \d\e F \d\e Y'
                )
        );
    }

    public static function hora(?Carbon $fecha = null): string
    {
        $fecha = $fecha ?? now();
        return $fecha->format('H:i') . ' hrs';
    }

    public static function mesSiguiente(): string
    {
        return ucfirst(
            now()
                ->locale('es')
                ->addMonth()
                ->translatedFormat('F')
        );
    }

    public static function mesActual(): string
    {
        return ucfirst(
            now()
                ->locale('es')
                ->translatedFormat('F')
        );
    }
}
