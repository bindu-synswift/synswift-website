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
                                            <th>Title</th>
                                            <th>Description</th>
                                            <th>Created At</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        @foreach($careerJobs as $key=>$jobs)
                                        <tr>
                                            <td>{{$jobs->title}}</td>
                                            <td>{{$jobs->description}}</td>
                                            <td>{{$jobs->created_at}}</td>
                                            <form action="{{route('statusChange')}}" method="post">
                                            @csrf              
                                            <input type="hidden" value="{{$jobs->id}}" name="job_id">
                                            <td>@if($jobs->status == 1)
                                            <input type="hidden" value="Block" name="status">
                                                <button class="btn btn-success " type="submit" >Active</button> 
                                            @else
                                            <input type="hidden" value="Active" name="status">
                                                <button class="btn btn-danger" type="submit">In-active</button>
                                             @endif
                                            </td>
                                            </form>
                                            <td><a href="{{route('jobs.edit',$jobs->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i>Edit</a></td>
                                           
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection
