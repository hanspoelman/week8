<?php

namespace Marktplaats\Http\Controllers;

use Illuminate\Http\Request;
use Marktplaats\Ad;

class AdController extends Controller
{
    public function list($orderby = "id", $direction = "desc") {
        return Ad::orderBy($orderby, $direction)->get();
    }

    public function store(Request $request)
    {
            $ad = new Ad;
            $ad->title = request('title');
            $ad->user_id = 1;
            $ad->body = request('body');
            $ad->asking_price = request('asking_price');
            $ad->save();
            return redirect('list');
    }
}
