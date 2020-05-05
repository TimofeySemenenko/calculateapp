<?php declare(strict_types=1);

namespace App\Service\Kitchen;


use Illuminate\Http\Request;

/**
 * Interface KitchenInterfaceService
 * @package App\Service\Kitchen
 */
interface KitchenInterfaceService
{

    public function add(Request $request);

    public function get(Request $request);

    public function set(Request $request);

    public function delete(Request $request);

    public function update(Request $request);

}