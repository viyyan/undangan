<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;
use App\Models\Store;


class StoreController extends ApiController
{
    /**
     * Get Store
     *
     * @return JSON string
     */
    public function getStores(Request $request)
    {
        $stores = Store::orderBy('order', 'asc')->get();

        return $this->response->array([
            "stores" => $stores,
        ]);
    }

}
