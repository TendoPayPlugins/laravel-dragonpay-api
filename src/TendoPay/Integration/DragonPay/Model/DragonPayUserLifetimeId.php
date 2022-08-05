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
use TendoPay\Integration\DragonPay\NormalizedEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * @property string $name
 * @property string $email
 * @property string $email_normalized
 * @property string $prefix
 * @property string $remarks
 * @property string $userLifetimeId
 */
class DragonPayUserLifetimeId extends Model
{
    use SoftDeletes;
    use NormalizedEmail;
    use HasFactory;

    public $fillable = ['name', 'prefix', 'email', 'remarks', 'user_lifetime_id'];

    public $table = 'dragonpay_user_lifetime_ids';

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'deleted_at'];

    /**
     * Sets the email value passed to the model. Also prepares normalized version of the email
     * by trimming it and making it lowercase.
     *
     * @param string $value email value passed to the model
     */
    public function setEmailAttribute($value)
    {
        $this->attributes['email']            = $value;
        $this->attributes['email_normalized'] = $this->normalizeEmail($value);
    }
}
