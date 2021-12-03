<?php

use App\Models\UnitUsaha;

function unit_usaha()
{
    $unit_usaha = UnitUsaha::all();

    return $unit_usaha;
}
