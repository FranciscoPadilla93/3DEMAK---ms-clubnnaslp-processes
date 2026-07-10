<?php

namespace App\Repositories;

use App\Models\Donantes;

class DonanteRepository
{
    public function obtenerCumpleanerosMesSiguiente()
    {
        $mes = now()->addMonth()->month;

        return Donantes::query()
            ->where('is_active', true)
            ->whereNotNull('fecha_nacimiento')
            ->whereMonth(
                'fecha_nacimiento',
                $mes
            )
            ->orderByRaw('DAY(fecha_nacimiento) ASC')
            ->get();
    }
}
