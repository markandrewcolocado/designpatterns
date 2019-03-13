<?php

namespace App\Services;

use App\Contracts\PlotArea;

/**
 * Class RectangleArea
 *
 * @package App\Services
 *
 * @author Mark Andrew Colocado <mark05@simplexi.com.ph>
 * @date 3/13/2019 11:10 AM
 */
class RectangleArea implements PlotArea
{
    private $iWidth;
    private $iHeight;

    /**
     * RectangleArea constructor.
     *
     * @param $iWidth
     * @param $iHeight
     */
    public function __construct($iWidth, $iHeight)
    {
        $this->iWidth = $iWidth;
        $this->iHeight = $iHeight;
    }

    /**
     * @return float
     */
    public function totalNumberOfPlots()
    {
        return ceil($this->iWidth * $this->iHeight / 2);
    }
}