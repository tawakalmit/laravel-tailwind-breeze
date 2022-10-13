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

    public function store(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'price' => 'required'
        ]);

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->storeAs('image', $filename);

        $crud = new Home;

        $crud->name = $request->name;
        $crud->description = $request->description;
        $crud->image = $request->file('image')->getClientOriginalName();
        $crud->price = $request->price;

        $crud->save();

        return redirect('crud')->with('status', 'Data succesfully added !');
    }

    public function update(Request $request, $id) {

        $crud = Home::find($id);

        $crud->name = $request->name;
        $crud->description = $request->description;
        $crud->price = $request->price;
        if(file_exists($request->file('image'))){
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->storeAs('image', $filename);
            $crud->image = $request->file('image')->getClientOriginalName();
        } else {

        }
        $crud->save();

        return redirect('crud')->with('status', 'Data succesfully updated !');
    }

    public function destroy($id) {
        $crud = Home::find($id);
        $crud->delete();
        return redirect('crud');
    }

    public function edit($id) {
        $crud = Home::find($id);
        return view('crudedit', compact('crud'));
    }
}
