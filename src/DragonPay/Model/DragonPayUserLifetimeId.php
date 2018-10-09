<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 07.10.2018
 * Time: 00:11
 */

namespace TendoPay\Integration\DragonPay\Model;


use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name
 * @property string $email
 * @property string $prefix
 * @property string $remarks
 * @property string $userLifetimeId
 */
class DragonPayUserLifetimeId extends Model
{
    public $fillable = ['name', 'prefix', 'email', 'remarks', 'user_lifetime_id'];

    public $table = 'dp_user_lifetime_ids';
}