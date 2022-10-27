@extends('admin.layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-8 col-md-12 mb-4" style="margin-left:17%;">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
            <div>
                <form action="{{route('jobs.update',$job->id)}}" method="post">
                @csrf              
                @method('PUT')                   
                    <div class="row">
                        
                        <label for="fname">Title</label>
                        <div class="col-md-7 form-group">
                        <input type="text" id="fname" name="title" value="{{$job->title}}" class="form-control" placeholder="Job Title">

                        </div>
                    </div>
                   
                 
                    <div class="row">
                        
                        <label for="fname">Type</label>
                        <div class="col-md-7 form-group">
                        <select type="select"  class="select2 form-control" name="type">
                          <option value="">Select Type</option>
                          <option value="1">Full Time</option>
                          <option value="2">Part Time</option>
                        </select>   
                        </div>
                    </div>
                   
                    <div class="row">
                        
                        <label for="fname">Description</label>
                        <div class="col-md-7 form-group">
                        <textarea type="text" id="fname" name="description" class="form-control" placeholder="Description">{{$job->description}}</textarea>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-7 form-group" >
                        <input type="submit" class="btn btn-primary" value="Submit" style="float:rigth;">

                        </div>
                    </div>
                </form>
             </div>
            </div>
        </div>
    </div>
</div>

@endsection
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
