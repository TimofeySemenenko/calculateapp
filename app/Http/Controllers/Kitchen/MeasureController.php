<?php declare(strict_types=1);

namespace App\Http\Controllers\Kitchen;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class MeasureController
 * @package App\Http\Controllers\Kitchen
 */

class MeasureController extends Controller
{
    public function get(Request $request)
    {
        return (new \App\Service\Kitchen\MeasureService())->get($request);
    }
}
