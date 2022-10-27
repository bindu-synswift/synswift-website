@extends('admin.layouts.app')
@section('content')
<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Project type</th>
                                            <th>Created_at</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        @foreach($projects as $key=>$project)
                                        <tr>
                                            <td>{{$project->name}}</td>
                                            <td>{{$project->categoryName}}</td>
                                            <td>@if($project->type == 1)
                                                <span>Web Project</span>
                                                @else
                                                <span>Application Project</span>
                                                @endif
                                            </td>
                                            <td>{{$project->created_at}}</td>
                                            <td>@if($project->status == 1)
                                                <button class="btn btn-success">Active</button> 
                                            @else
                                                <button class="btn btn-danger">In-active</button>
                                             @endif
                                            </td>
                                            <td><a href="{{route('project.edit',$project->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a></td>
                                           
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection