<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class RedirectController extends Controller
{
    //
    public function index()
    {
        echo "Redirecting to controller's action.";
    }
}
