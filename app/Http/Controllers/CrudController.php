<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Home;
use App\Models\Category;
use App\Http\Controllers\Controller;

class CrudController extends Controller
{
    public function index() {
        

        if(request('search')){
            $crud = Home::where('name', 'like', '%'. request('search') . '%' )->get();
            $crud_category = Category::get();
            return view('crud', compact('crud', 'crud_category'));
        } else {
            $crud = Home::all();
            $crud_category = Category::get();
            return view('crud', compact('crud', 'crud_category'));
        }
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image' => 'required|image',
            'price' => 'required',
            'category' => 'required'
        ]);

        $file = $request->file('image');
        $filename = $file->getClientOriginalName();
        $file->storeAs('image', $filename);

        
        $crud = new Home;

        $crud->name = $request->name;
        $crud->description = $request->description;
        $crud->image = $request->file('image')->getClientOriginalName();
        $crud->price = $request->price;
        $getId = Category::where('name', $request->category)->first();
        $crud->category_id = $getId->id;

        $crud->save();

        return redirect('crud')->with('status', 'Data succesfully added !');
    }

    public function update(Request $request, $id) {

        $crud = Home::find($id);

        $crud->name = $request->name;
        $crud->description = $request->description;
        $crud->price = $request->price;
        $getId = Category::where('name', $request->category)->first();
        

        if($request->category == null) {
            $default_category = Home::where('id', $id)->first();
            $crud->category_id = $default_category->category_id;
        } else {
            $crud->category_id = $getId->id;
        }
        
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
        $crud_category = Category::get();
        return view('crudedit', compact('crud', 'crud_category'));
    }
}
