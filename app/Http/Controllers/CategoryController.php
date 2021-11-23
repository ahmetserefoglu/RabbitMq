<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    //
    public function AllCat(){
        $categories = Category::latest()->paginate(2);
        $trachCat = Category::onlyTrashed()->latest()->paginate(2);

        return view('admin.category.index',compact('categories','trachCat'));
    }

    public function AddCat(Request $request){

        $validateData = $request->validate([
            'category_name' => 'required|unique:categories|max:255'
        ],
        [
            'category_name.required' => 'Please Input Category Name',
            'category_name.max' => 'Category Less Than 255Chars'
        ]);

        $category = new Category;
        $category->category_name = $request->category_name;
        $category->user_id = Auth::user()->id;
        $category->save();

        return Redirect::back()->with('success','Category Inserted Successful');
        //view('admin.category.index',compact('categories'));
    }

    public function Edit($id){

        $categories  = Category::find($id);

        return view('admin.category.edit',compact('categories'));
        //
    }

    public function Update(Request $request,$id){

        $category = Category::find($id);
        $category->category_name = $request->category_name;
        $category->update();

        return Redirect::route('all.category')->with('success','Category Updated Successful');
        //
    }

    public function SoftDelete($id){

        Category::find($id)->delete();

        return Redirect::route('all.category')->with('success','Category Deleted Successful');
        //
    }

    public function Restore($id){

        Category::withTrashed()->find($id)->restore();

        return Redirect::route('all.category')->with('success','Category Restore Successful');
        //
    }

    public function Pdelete($id){

        Category::onlyTrashed()->find($id)->forceDelete();

        return Redirect::route('all.category')->with('success','Category Force Delete Successful');
        //
    }
}
