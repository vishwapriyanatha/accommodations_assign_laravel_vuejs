<?php


namespace App\Http\Helper;


class Helper
{
    /**
     * @param int $value
     * @return float|int
     */
    public static function countTax($value = 0)
    {
        if (is_numeric($value)) {
            return ($value * 10) / 100;
        }
    }
}
