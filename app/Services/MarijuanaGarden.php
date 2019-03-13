<?php

namespace App\Services;

/**
 * Class MarijuanaGarden
 *
 * @package App\Services
 *
 * @author Mark Andrew Colocado <mark05@simplexi.com.ph>
 * @date 3/13/2019 2:55 PM
 */
class MarijuanaGarden extends EmptyGarden
{
    /**
     * @return array
     */
    public function items()
    {
        return array_fill(0, $this->oPlot->totalNumberOfPlots(), 'weed');
    }
}