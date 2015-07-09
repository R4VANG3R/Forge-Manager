<?php
/**
 * Created by PhpStorm.
 * User: R4VANG3R
 * Date: 7-7-2015
 * Time: 13:21
 */

namespace ForgeManager\Http\Controllers\Dashboard;

use Carbon\Carbon;
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

    /**
     * Calculate CPU & RAM usage and return it as a JSON string.
     *
     * @return string
     */
    public function GetResourceUsage()
    {
        //$cpuLoad = sys_getloadavg();
        $cpuLoad = rand(0, 10);
        //$memLoad = memory_get_usage(true);
        $memLoad = rand(45, 50);

        $time = Carbon::now()->toTimeString();

        $resources = [$time, $cpuLoad, $memLoad];

        return response()->json($resources);
    }

    /**
     * Calculate the concurrent players and return it as a JSON string.
     *
     * @return string
     */
    public function GetConcurrentPlayers()
    {
        $currentPlayers = rand(0, 20);
        $time = Carbon::now()->toTimeString();

        $concPlayers = [$time, $currentPlayers];

        return response()->json($concPlayers);
    }
}