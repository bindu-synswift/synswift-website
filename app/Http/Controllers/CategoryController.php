<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        return view('admin.category.list',['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!empty($request)){
            $category = new Category;
            $category->name = $request->name;
            $category->save();
            return redirect('admin/category')->with('message','Category Added successfully!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where(['id'=>$id])->first();
        return view('admin.category.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if(!empty($request->all())){
            $update = Category::where(['id'=>$id])->update(['name'=>$request->name]);
            return redirect('admin/category')->with('message','Category Updated Successfully!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function changeCatgeoryStatus(Request $request){
        //dd($request);
        if(!empty($request->all())){
            if($request->status == 'Active'){
                //dd('uu');
                $update = Category::where(['id'=>$request->category_id])->update(['status'=>1]);
                return redirect('admin/category')->with('message','Category status change Successfully!');
            }else{
                //dd('ddd');
                $update = Category::where(['id'=>$request->category_id])->update(['status'=>0]);
                return redirect('admin/category');

            }
        }

    }
}
