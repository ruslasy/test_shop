<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CatalogController extends Controller
{
    /**
     * Show main page catalog.
     *
     * @return View
     */
    
    public function default()
    {
        return view('catalog.default');
    }
}