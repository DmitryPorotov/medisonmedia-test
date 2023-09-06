<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 * @package App\Models
 *
 * @property-read $id
 * @property int $user_id
 * @property string $name
 * @property string $iso
 * @property-read Carbon $created_at
 * @property-read Carbon $updated_at
 *
 */
class Country extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'iso',
    ];
}
