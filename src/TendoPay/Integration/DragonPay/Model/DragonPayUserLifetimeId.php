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
 * TendoPay\Integration\DragonPay\Model\DragonPayUserLifetimeId
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $email_normalized
 * @property string $email
 * @property string $name
 * @property string|null $prefix
 * @property string|null $remarks
 * @property string $user_lifetime_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\TendoPay\Integration\DragonPay\Model\DragonPayUserLifetimeIdFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId query()
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId whereEmailNormalized($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId wherePrefix($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId whereRemarks($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId whereUserLifetimeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|DragonPayUserLifetimeId withoutTrashed()
 * @mixin \Eloquent
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
    public function setEmailAttribute(string $value): void
    {
        $this->attributes['email']            = $value;
        $this->attributes['email_normalized'] = $this->normalizeEmail($value);
    }
}
