<?php

namespace App\Services\GardenNinja\RatedR;

use App\Services\GardenNinja\Garden;

class MarijuanaGarden implements Garden
{
    public function items()
    {
        return [new Marijuana, new Marijuana, new Marijuana];
    }
}