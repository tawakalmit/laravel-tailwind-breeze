<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Home;
use App\Http\Controllers\Controller;


class BuyController extends Controller
{
    public function index($id) {
        $item = Home::find($id);
        return view('buy', compact('item'));
    }
}
