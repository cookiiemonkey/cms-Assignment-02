<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class CategoriesController extends Controller
{
    public function index() {
        return view('categories.index')->with('categories', category::all());
    }
    public function create () {

        return view('categories.create');
    }
    public function store () {
        $this->validate(request(), [
            'name' => 'required'
        ]);

        $data = request()->all();
        $category = new category();
        $category->name = $data['name'];
        $category->save();
            
        session()->flash('success', 'Category Created Succesfully');
        return redirect('/categories')->with('categories', category::all());
    }
    public function edit (category $category) {
        return view('categories.edit')->with('category', $category);
    }
    public function update (category $category) {
        $this->validate(request(), [
            'name' => 'required'
        ]);
        
        $data = request()->all();
        
        $category->name = $data['name'];
        $category->save();
        session()->flash('success', 'Category Edited Succesfully');
        return redirect('/categories');
    }
    public function delete (category $category) {
        $category->delete();
        session()->flash('success', 'Category Deleted Succesfully');
        return redirect('/categories');
    }
}
