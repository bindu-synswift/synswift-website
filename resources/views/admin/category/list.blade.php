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
                                            <th>Created_at</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        @foreach($categories as $key=>$category)
                                        <tr>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->created_at}}</td>
                                            <form action="{{route('catgeoryStatusChange')}}" method="post">
                                            @csrf              
                                                <input type="hidden" value="{{$category->id}}" name="category_id">
                                            <td>
                                                @if($category->status ==1)
                                                <input type="hidden" name="status" value="Block">
                                                <button  class="btn btn-success" type="submit">Active</button>
                                                @else
                                                <input type="hidden" name="status" value="Active">
                                                <button class="btn btn-danger" type="submit" >In-Active</button>
                                                @endif
                                            </td>
                                            </form>
                                           
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection