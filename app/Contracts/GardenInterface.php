<?php
/**
 * Created by PhpStorm.
 * User: PH_DEVPC
 * Date: 3/13/2019
 * Time: 2:44 PM
 */

namespace App\Contracts;

/**
 * Interface GardenInterface
 *
 * @package App\Contracts
 */
interface GardenInterface
{
    /**
     * @param $advanceNumberOfDays
     * @return mixed
     */
    public function grow($advanceNumberOfDays);

    /**
     * @param $pickOutPercentage
     * @return mixed
     */
    public function weed($pickOutPercentage);

    /**
     * @param $attackFactor
     * @return mixed
     */
    public function pests($attackFactor);

    /**
     * @param $inGallons
     * @return mixed
     */
    public function water($inGallons);

    /**
     * @param $radiationLevel
     * @return mixed
     */
    public function sunshine($radiationLevel);

    /**
     * @param $type
     * @param $amount
     * @return mixed
     */
    public function fertilize($type, $amount);
}