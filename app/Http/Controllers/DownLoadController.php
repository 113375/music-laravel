<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class DownLoadController extends Controller
{
    public function index(): View
    {
        return View("download");
    }
}
