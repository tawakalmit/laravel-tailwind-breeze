<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Home;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function index() {
        return view('profile');
    }
}
