@extends('admin.layouts.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-8 col-md-12 mb-4" style="margin-left:17%;">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
            <div>
                <form action="{{route('project.store')}}" method="post">
                @csrf
                    <div class="row">
                        
                        <label for="fname">Project Name</label>
                        <div class="col-md-7 form-group">
                        <input type="text" id="fname" name="name" class="form-control" placeholder="Project name..">

                        </div>
                    </div>
                    <div class="row">
                        
                        <label for="fname">Title</label>
                        <div class="col-md-7 form-group">
                        <input type="text" id="fname" name="title" class="form-control" placeholder="Project title..">

                        </div>
                    </div>
                 
                    <div class="row">
                        
                        <label for="fname">Category</label>
                        <div class="col-md-7 form-group">
                        <select type="select"  class="select2 form-control" name="category">
                            <option value="">Select Category </option>
                            @if(!empty($categories))
                            @foreach($categories as $key=>$value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                            @endforeach
                            @endif
                        </select>   
                        </div>
                    </div>
                    <div class="row">
                      <label for="fname">Project type</label>
                        <div class="col-md-7 form-group" >
                            <select class="form-control select2" name="type">
                                <option value="">Select Type</option>
                                <option value="1">web Project</option>
                                <option value="2">Application project</option>
                                <option value="3">Frontend/React Project</option>
                            </select>
                         </div>
                    </div>
                    <div class="row">
                        
                        <label for="fname">Description</label>
                        <div class="col-md-7 form-group">
                        <textarea type="text" id="fname" name="description" class="form-control" placeholder="Project name.."></textarea>

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
