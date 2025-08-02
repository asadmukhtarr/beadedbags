<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;

class AdminController extends Controller
{
    // Dashboard Page
    public function dashboard() {
        return view('admin.dashboard');
    }

    // Orders Page
    public function orders() {
        return view('admin.orders');
    }

    // Settings Page
    public function settings() {
        return view('admin.settings');
    }

    // category ..
    public function category(){
        $categories = category::orderby('id','desc')->get();
        // for fetch ..
        return view('admin.products.category',compact('categories'));
    }
    // save data ..
    public function category_save(Request $request){
        $validated = $request->validate([
            'title' => 'required|min:8'
        ]);
        // for insert ..
        $category = new category;
        $category->title = $request->title;
        $category->save();
        return redirect()->back()->with('success','Category Added Succesfully');
    }
    // delete category ..
    public function delete_category($id){
        $category = category::find($id);
        $category->delete();
        return redirect()->back()->with('warning','Category Deleted Succesfully');
    }
    // edit category page ..
    public function edit_category($id){
        $category = category::find($id);
        return view('admin.products.editcateogry',compact('category'));
    }
    // update category ..
    public function update_category($id,Request $request){
          $validated = $request->validate([
            'title' => 'required|min:8'
        ]);
        // for insert ..
        $category = category::find($id);
        $category->title = $request->title;
        $category->save();
        return redirect(route('admin.products.category'))->with('success','Category Updated Succesfully');
    }
}