<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 09.10.2018
 * Time: 23:52
 */

namespace TendoPay\Integration\DragonPay;

trait NormalizedEmail
{
    public function normalizeEmail($email)
    {
        return trim(strtolower($email));
    }
}
