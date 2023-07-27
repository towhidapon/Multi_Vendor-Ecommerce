<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;
use Image;

class subcategoryController extends Controller
{
    public function AllSubcategory(){
        $subcategories = Subcategory::latest()->get();
        return view('admin.backend.subcategory.subcategory_all',compact('subcategories'));
    } // End Method


    public function AddSubcategory(){
        $categories = Category::orderBy('category_name','ASC')->get();
         return view('admin.backend.subcategory.subcategory_add', compact('categories'));
    } // End Method

    public function StoreSubcategory(Request $request){

        SubCategory::insert([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-',$request->subcategory_name)),
        ]);

       $notification = array(
            'message' => 'SubCategory Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.subcategory')->with($notification);

    }// End Method

    public function EditSubcategory($id){
        $categories = Category::orderBy('category_name','ASC')->get();
        $subcategory = Subcategory::findOrFail($id);
        return view('admin.backend.subcategory.subcategory_edit',compact('categories','subcategory'));
    }// End Method

    public function UpdateSubcategory(Request $request){
        $subcat_id = $request->id;

         SubCategory::findOrFail($subcat_id)->update([
            'category_id' => $request->category_id,
            'subcategory_name' => $request->subcategory_name,
            'subcategory_slug' => strtolower(str_replace(' ', '-',$request->subcategory_name)),
        ]);

       $notification = array(
            'message' => 'SubCategory Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.subcategory')->with($notification);
    }// End

    public function DeleteSubcategory($id){

        SubCategory::findOrFail($id)->delete();

        $notification = array(
           'message' => 'SubCategory Deleted Successfully',
           'alert-type' => 'success'
       );

       return redirect()->back()->with($notification);
    }
}
