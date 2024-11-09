<?php

namespace Azuriom\Plugin\StatsAzuriom\Controllers;

use Azuriom\Http\Controllers\Controller;

class StatsAzuriomHomeController extends Controller
{
    /**
     * Show the home plugin page.
     */
    public function index()
    {
        return view('stats::index');
    }
}
