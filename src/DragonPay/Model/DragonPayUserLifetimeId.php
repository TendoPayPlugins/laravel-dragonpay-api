<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 07.10.2018
 * Time: 00:11
 */

namespace TendoPay\Integration\DragonPay\Model;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property string $name
 * @property string $email
 * @property string $prefix
 * @property string $remarks
 * @property string $userLifetimeId
 */
class DragonPayUserLifetimeId extends Model
{
    use SoftDeletes;

    public $fillable = ['name', 'prefix', 'email', 'remarks', 'user_lifetime_id'];

    public $table = 'dp_user_lifetime_ids';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    public function setEmailAttribute($value)
    {
        $this->attributes['email']            = $value;
        $this->attributes['email_normalized'] = trim(strtolower($value));
    }
}