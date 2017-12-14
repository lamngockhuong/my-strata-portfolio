<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class IndexController extends Controller
{

    /**
     * Display index page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(Config::get('constants.public_view') . '.index');
    }
}
