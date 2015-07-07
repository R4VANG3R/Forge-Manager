<?php
/**
 * Created by PhpStorm.
 * User: R4VANG3R
 * Date: 7-7-2015
 * Time: 17:04
 */

namespace ForgeManager\Http\Controllers\Console;


use ForgeManager\Http\Controllers\Controller;

class ConsoleController extends Controller {

    public function __construct()
    {
    }

    public function ShowIndex()
    {
        return view('console.index');
    }
}