<?php declare(strict_types=1);

namespace App\Http\Controllers\Kitchen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class ProductsController
 * @package App\Http\Controllers\Kitchen
 */
class ProductsController extends Controller
{
    public function get(Request $request)
    {
        return (new \App\Service\Kitchen\ProductsService())->get($request);
    }
}
