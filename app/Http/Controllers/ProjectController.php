<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::where(['status'=>1])->get();
        $projectData = [];
        foreach($projects as $value){
            $category = Category::where(['id'=>$value->category_id])->first();
            $value->categoryName = $category->name;
            $projectData[]=$value;
        }
        return view('admin.projects.list',['projects'=>$projectData]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where(['status'=>1])->get();
        return view('admin.projects.add',['categories'=>$categories]);
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
            $project = new Project;
            $project->name = $request->name;
            $project->category_id = $request->category;
            $project->type = $request->type;
            $project->title = $request->title;
            $project->description = $request->description;
            $project->save();
            return redirect('admin/project');
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
        $project = Project::where(['id'=>$id])->first();

        return view('single',['project'=>$project]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::where(['id'=>$id])->first();
        $categories = Category::where(['status'=>1])->get();
        return view('admin.projects.edit',['project'=>$project,'categories'=>$categories]);
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
        if(!empty($id)){
            $projectarr = array(
                'name'=>$request->name,
                'category_id'=>$request->category,

            );
            $project = Project::where(['id'=>$id])->update($projectarr);
            return redirect('admin/project');
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
}
