<?php

namespace App\Services;

use App\Contracts\PlotArea;

/**
 * Class CircleArea
 *
 * @package App\Services
 *
 * @author Mark Andrew Colocado <mark05@simplexi.com.ph>
 * @date 3/13/2019 2:41 PM
 */
class CircleArea implements PlotArea
{
    /**
     * @var
     */
    private $iDiameter;

    /**
     * CircleArea constructor.
     *
     * @param $iDiameter
     */
    public function __construct($iDiameter)
    {
        $this->iDiameter = $iDiameter;
    }

    /**
     * @return float|int|mixed
     */
    public function totalNumberOfPlots()
    {
        $iArea = pow($this->iDiameter / 2, 2) * 3.14;

        return (integer) $iArea / 2;
    }
}