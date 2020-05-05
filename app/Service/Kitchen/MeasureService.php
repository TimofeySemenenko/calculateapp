<?php declare(strict_types=1);

namespace App\Service\Kitchen;

use Illuminate\Http\Request;

/**
 * Class MeasureService
 * @package App\Service\Kitchen
 */
class MeasureService implements KitchenInterfaceService
{
    public function add(Request $request)
    {
        // TODO: Implement add() method.
    }


    public function delete(Request $request)
    {
        // TODO: Implement delete() method.
    }

    public function get(Request $request)
    {
        return json_encode(['a' => 'b']);
    }

    public function set(Request $request)
    {
        // TODO: Implement set() method.
    }

    public function update(Request $request)
    {
        // TODO: Implement update() method.
    }

}