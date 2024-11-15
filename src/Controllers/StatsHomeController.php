<?php

namespace Azuriom\Plugin\Stats\Controllers;

use Azuriom\Http\Controllers\Controller;

class StatsHomeController extends Controller
{
    /**
     * Show the home plugin page.
     */
    public function index()
    {
        return view('stats::index');
    }
}
