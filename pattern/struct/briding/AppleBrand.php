<?php
/**
 * @className:
 * @User     : zw
 * @DateTime : 2021/10/8 7:21 ä¸ĺ
 */

namespace App\struct\briding;


class AppleBrand implements Brand
{
    /**
     * @var string
     */
    private string $brand;

    /**
     * @constructor AppleBrand.
     */
    public function __construct()
    {
        $this->brand = "čšć";
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }
}