<?php
/**
 * Created by PhpStorm.
 * User: R4VANG3R
 * Date: 7-7-2015
 * Time: 13:21
 */

namespace ForgeManager\Http\Controllers\Dashboard;

use ForgeManager\Http\Controllers\Controller;

class DashboardController extends Controller {
    public function __construct()
    {

    }

    public function ShowIndex()
    {
        // Return the view
        return view('dashboard.index');
    }
}