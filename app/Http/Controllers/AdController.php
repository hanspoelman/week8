<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ad;

class AdController extends Controller
{
    public function list($orderby = "id", $direction = "desc") {
        return Ad::orderBy($orderby, $direction)->get();
    }
}
