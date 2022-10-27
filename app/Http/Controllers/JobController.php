<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CareerJob;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $careerjobs = CareerJob::get();
        return view('admin.career.list',['careerJobs'=>$careerjobs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.career.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        if(!empty($request->all())){
            $career = new CareerJob;
            $career->title = $request->title;
            $career->type = $request->type;
            $career->description = $request->description;
            $career->status = 1;
            $career->save();
            return redirect('admin/jobs');
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
        $jobs = CareerJob::where(['id'=>$id])->first();
        return view('admin.career.edit',['job'=>$jobs]);
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
            $career = CareerJob::where(['id'=>$id])->update(['title'=>$request->title,'type'=>$request->type,'description'=>$request->description]);
            return redirect('admin/jobs');
        }else{
            return redirect()->back();
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

    public function statusChange(Request $request){
        //dd($request);
        if($request->status == 'Active'){
            //dd($request);
            $update = CareerJob::where(['id'=>$request->job_id])->update(['status'=>1]);
            return redirect('admin/jobs');
        }else{
            //dd($request);
            $update = CareerJob::where(['id'=>$request->job_id])->update(['status'=>0]);
            return redirect('admin/jobs');
        }

    }
}
