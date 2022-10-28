@extends('admin.layouts.app')
@section('content')
<div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-8 col-md-12 mb-4" style="margin-left:10px;">
        <div class="card border-left-primary shadow h-100 py-2">
            <div class="card-body">
            <div>
                <form action="{{route('category.update',$category->id)}}" method="post">
                @csrf
                @method('PUT')                   
                    <div class="row">
                        <label for="fname">Category Name</label>
                        <div class="col-md-7 form-group">
                        <input type="text" id="fname" value="{{$category->name}}" class="form-control" name="name" placeholder="Category name..">

                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-7 form-group">
                        <input type="submit" value="Submit" class="btn btn-primary">

                        </div>
                    </div>
                </form>
             </div>
            </div>
        </div>
    </div>
</div>

@endsection