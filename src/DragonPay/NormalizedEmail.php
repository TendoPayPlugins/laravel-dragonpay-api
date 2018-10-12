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
    /**
     * Normalizes the email by trimming it (removing spaces from the beginning and end of the string) and making it
     * lowercase.
     *
     * @param string $email email to be normalized
     *
     * @return string normalized email
     */
    public function normalizeEmail($email)
    {
        return trim(strtolower($email));
    }
}
