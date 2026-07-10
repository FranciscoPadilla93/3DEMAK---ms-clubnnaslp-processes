@extends('emails.layouts.club')
@section('title', 'Reporte mensual de cumpleaños')
@section('content')
<h2>
    Reporte mensual de cumpleaños
</h2>
<p style="font-size:17px;color:#6d7b84;margin-top:-5px;">
    Donantes que cumplen años durante el mes de
    <strong style="color:#2BC7E5;">
        {{ strtoupper($mes) }}
    </strong>
</p>
<div class="divider"></div>
<p>
    Estimado equipo del
    <strong>CLUB de Niños y Niñas San Luis Potosí</strong>,
</p>
<p>
    Se comparte el reporte automático de los donantes que celebrarán su
    cumpleaños durante el próximo mes.
    Este informe tiene como finalidad facilitar la planeación de
    felicitaciones, seguimiento y fortalecimiento de la relación con
    nuestros donantes.
</p>
<table width="100%" class="resume-row">
    <tr>
        <td width="48%" valign="top">
            <div class="resume-card">
                <div class="resume-title">
                    MES DEL REPORTE
                </div>
                <div class="resume-value">
                    {{ strtoupper($mes) }}
                </div>
            </div>
        </td>
        <td width="4%"></td>
        <td width="48%" valign="top">
            <div class="resume-card">
                <div class="resume-title">
                    DONANTES
                </div>
                <div class="resume-value">
                    {{ $cumpleaneros->count() }}
                </div>
            </div>
        </td>
    </tr>
</table>
<table class="table">
    <thead>
        <tr>
            <th width="60">
                #
            </th>
            <th width="90">
                Día
            </th>
            <th>
                Nombre del donante
            </th>
            <th>
                Correo electrónico
            </th>
        </tr>
    </thead>
    <tbody>
    @foreach($cumpleaneros as $index => $donante)
        <tr>
            <td>
                {{ $index + 1 }}
            </td>
            <td>
                <span class="badge">
                    {{ $donante->fecha_nacimiento->format('d') }}
                </span>
            </td>
            <td>
                <strong>
                    {{ $donante->nombre_completo }}
                </strong>
            </td>
            <td>
                {{ $donante->correo_electronico_principal }}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<div class="divider"></div>
<p>
    <strong>Observaciones</strong>
</p>
<ul style="padding-left:18px; line-height:1.9; color:#55626b;">
    <li>
        Este reporte se genera automáticamente el último día de cada mes.
    </li>
    <li>
        La información corresponde únicamente a donantes activos.
    </li>
    <li>
        Si existe alguna modificación en los datos de un donante,
        favor de realizarla desde el sistema institucional.
    </li>
</ul>
<div style="margin-top:40px;
            background:#f7fbfc;
            border-left:5px solid #2BC7E5;
            padding:18px;">
    <strong style="color:#2BC7E5;">
        Información del reporte
    </strong>
    <br><br>
    Fecha de generación:
    <strong>
        {{ now()->format('d/m/Y H:i') }}
    </strong>
    <br>
    Sistema:
    <strong>
        CLUB SLP
    </strong>
</div>
@endsection
