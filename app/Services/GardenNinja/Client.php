<?php

namespace App\Services\GardenNinja;

/**
 * Class Client
 *
 * @package App\Services\GardenNinja
 *
 * @author Mark Andrew Colocado <mark05@simplexi.com.ph>
 * @date 5/3/2019 8:43 AM
 */
class Client
{
    /**
     * @var \App\Services\GardenNinja\Merchant
     */
    private $oMerchant;

    /**
     * Client constructor.
     *
     * @param \App\Services\GardenNinja\Merchant $oMerchant
     */
    public function __construct(Merchant $oMerchant)
    {
        $this->oMerchant = $oMerchant;
    }

    public function run()
    {
        print "Your merchant made $" . $this->oMerchant->makeMoney() . PHP_EOL;
    }
}
