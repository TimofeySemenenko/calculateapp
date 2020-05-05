<?php declare(strict_types=1);

namespace App\Http\Controllers\Kitchen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class RecipesController
 * @package App\Http\Controllers\Kitchen
 */
class RecipesController extends Controller
{
    public function get(Request $request)
    {
        return (new \App\Service\Kitchen\RecipesService())->get($request);
    }
}
