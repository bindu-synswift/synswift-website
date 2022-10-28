@extends('admin.layouts.app')
@section('content')
<div class="card shadow mb-4">
@if (session('message'))
        <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session('message') }}
        </div>
    @endif
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Subject</th>
                                            <th> Email</th>
                                            <th> Message</th>
                                            <th>Created_at</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        @foreach($contacts as $key=>$contact)
                                        <tr>
                                            <td>{{$contact->name}}</td>
                                            <td>{{$contact->email}}</td>
                                            <td>{{$contact->message}}</td>
                                            <td>{{$project->created_at}}</td>
                                           
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection