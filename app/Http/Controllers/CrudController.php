<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Home;
use App\Http\Controllers\Controller;

class CrudController extends Controller
{
    public function index() {
        $crud = Home::all();
        return view('crud', compact('crud'));
    }
}
