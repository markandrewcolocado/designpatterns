<?php

namespace App\Services;

use App\Contracts\GardenInterface;
use App\Contracts\PlotArea;

/**
 * Class EmptyGarden
 *
 * @package App\Services
 *
 * @author Mark Andrew Colocado <mark05@simplexi.com.ph>
 * @date 3/13/2019 11:11 AM
 */
class EmptyGarden implements GardenInterface
{
    /**
     * @var PlotArea
     */
    protected $oPlot;

    /**
     * EmptyGarden constructor.
     *
     * @param PlotArea $oPlot
     */
    public function __construct(PlotArea $oPlot)
    {
        $this->oPlot = $oPlot;
    }

    /**
     * @return array
     */
    public function items()
    {
        $iNumberOfPlots = $this->oPlot->totalNumberOfPlots();
        return array_fill(0, $iNumberOfPlots, 'handful of dirt');
    }

    /**
     * @param $advanceNumberOfDays
     * @return mixed
     */
    public function grow($advanceNumberOfDays)
    {
        // TODO: Implement grow() method.
    }

    /**
     * @param $pickOutPercentage
     * @return mixed
     */
    public function weed($pickOutPercentage)
    {
        // TODO: Implement weed() method.
    }

    /**
     * @param $attackFactor
     * @return mixed
     */
    public function pests($attackFactor)
    {
        // TODO: Implement pests() method.
    }

    /**
     * @param $inGallons
     * @return mixed
     */
    public function water($inGallons)
    {
        // TODO: Implement water() method.
    }

    /**
     * @param $radiationLevel
     * @return mixed
     */
    public function sunshine($radiationLevel)
    {
        // TODO: Implement sunshine() method.
    }

    /**
     * @param $type
     * @param $amount
     * @return mixed
     */
    public function fertilize($type, $amount)
    {
        // TODO: Implement fertilize() method.
    }
}