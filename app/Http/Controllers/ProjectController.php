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
        $projects = Project::get();
        $projectData = [];
        foreach($projects as $value){
            $category = Category::where(['id'=>$value->category_id])->first();
            if(!empty($category)){
                $value->categoryName = $category->name;
            }
           
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
          
            if($request->file('filename')) {
               
            $project = new Project;
            $image = $request->file('filename');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/project/images/', $name);  
            $project->project_icon = $name;
            $project->name = $request->name;
            $project->category_id = $request->category;
            $project->project_terms = $request->project_term;
            $project->title = $request->title;
            $project->description = $request->description;
            //dd($project);
            $project->save();
            return redirect('admin/project')->with('message','Project Added SuccessFully!');
            }
           
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
        $getProject =  Project::where(['id'=>$id])->first();
        if(!empty($getProject)){
          if(!empty($request->category)){
                $category = $request->category;
          }else{
            $category = $getProject->category_id;
          }
          if($request->file('filename')){
            $image = $request->file('filename');
            $name=$image->getClientOriginalName();
            $image->move(public_path().'/project/images/', $name); 
                  $projectarr = array(
                      'name'=>$request->name,
                      'category_id'=>$category,
                      'description'=>$request->description,
                      'project_terms'=>$request->project_term,
                      'title' => $request->title,
                      'project_icon'=> $name,
  
      
                  );
                  $project = Project::where(['id'=>$id])->update($projectarr);
                  return redirect('admin/project')->with('message','Project updated Successfully!');
              
          }
        
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

    public function changeProjectStatus(Request $request){
        if(!empty($request->all())){
            if($request->status == 'Active'){
                $update = Project::where(['id'=>$request->project_id])->update(['status'=>1]);
                return redirect('admin/project')->with('message','project status change successfully!');
            }else{
                $update = Project::where(['id'=>$request->project_id])->update(['status'=>0]);
                return redirect('admin/project')->with('message','project status change successfully!');


            }
        }

    }
}
