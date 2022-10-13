<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Sample;

class SampleController extends Controller
{
    public function index() {
        $data = Sample::paginate(20);
        return view('sample', compact('data'));
    }
}
