<?php declare(strict_types=1);

namespace App\Models\Kitchen;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Recipes
 * @package App\Models\Kitchen
 */
class Recipes extends Model
{
    protected $table = 'recipes';

    protected $fillable = [
        'name',
        'description',
        'products_id',
        'active',
        'created_at',
        'updated_at'
    ];
}
