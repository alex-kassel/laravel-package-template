<?php

namespace AlexKassel\PackageTemplate\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    /**
     * Show an example view.
     */
    public function index()
    {
        return view('package-template::example');
    }
}