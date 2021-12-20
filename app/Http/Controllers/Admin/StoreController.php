<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Store;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();

        return $stores;
    }
}
