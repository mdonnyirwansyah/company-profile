<?php

use App\Models\Kontak;
use App\Models\UnitUsaha;

function kontak()
{
    $kontak = Kontak::all();

    return $kontak;
}

function unit_usaha()
{
    $unit_usaha = UnitUsaha::all();

    return $unit_usaha;
}
