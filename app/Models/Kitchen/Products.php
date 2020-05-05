<?php declare(strict_types=1);

namespace App\Models\Kitchen;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Products
 * @package App\Models\Kitchen
 */
class Products extends Model
{
    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'price',
        'measure_id',
        'active',
        'created_at',
        'updated_at'
    ];
}
