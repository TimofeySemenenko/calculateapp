<?php declare(strict_types=1);

namespace App\Models\Kitchen;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Measure
 * @package App\Models\Kitchen
 */
class Measure extends Model
{
    protected $table = 'measure';

    protected $fillable = [
        'name',
        'description',
        'active',
        'created_at',
        'updated_at'
    ];
}
