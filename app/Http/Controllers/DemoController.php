<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;

class DemoController extends Controller
{
    public function demo()
    {
        $demoVariable = Config::get('app.demo_variable');
        return $demoVariable;
    }
}
