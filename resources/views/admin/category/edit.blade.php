@extends('layouts.master')

@section('title','Laravel 8 web app | Admin Edit Category')

@section('content')

<div class="container-fluid px-4">
    
    <div class="card mt-4">
       <div class="card-header">
          <h4 class="mt-4">Edit Category</h4>
       </div>
       <div class="card-body">
        @if ($errors->any())
       <div class="alert alert-danger">
                  @foreach ($errors->all() as $error )
                      <div>{{$error}}</div>
                  @endforeach
       </div>
        @endif
            <form action="{{ route('admin.updatecategory',$category->id) }}" method="post" enctype="multipart/form-data">
                 @csrf
                 @method('PUT')
                 <div class="mb-3">
                    <label>Category Name</label>
                    <input type="text" class="form-control" name="name" value="{{ $category->name }}" placeholder="Enter Category Name"/>
                 </div>
                 <div class="mb-3">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" value="{{ $category->slug }}" placeholder="Enter Slug"/>
                 </div>
                 <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" placeholder="Enter Your Description" rows="5">{{ $category->description }}</textarea>
                 </div>
                 <div class="mb-3">
                    <label>Image</label>
                    <input type="file" class="form-control" name="image"/>
                 </div>

                 <h5>SEO Tags</h5>
                 <div class="mb-3">
                    <label>Meta Title</label>
                    <input type="text" class="form-control" value="{{ $category->meta_title }}" placeholder="Enter Meta Title" name="meta_title"/>
                 </div>
                 <div class="mb-3">
                    <label>Meta Description</label>
                    <textarea name="meta_description" class="form-control"  placeholder="Enter Your Meta Description" rows="5">{{ $category->meta_description }}</textarea>
                 </div>
                 <div class="mb-3">
                    <label>Meta Keyword</label>
                    <input type="text" class="form-control" value="{{ $category->meta_keyword }}" placeholder="Enter Meta Keyword" name="meta_keyword"/>
                 </div>
                 <h5>Status Mode</h5>
                 <div class="row">
                     <div class="col-md-3 mb-3">
                        <label>Navbar Status</label>&nbsp
                        <input type="checkbox" {{ $category->navbar_status == 1 ? 'checked' : '' }} name="navbar_status"/>
                     </div>
                     <div class="col-md-3 mb-3">
                        <label>Status</label>&nbsp
                        <input type="checkbox" {{ $category->status == 1 ? 'checked' : '' }} name="status"/>
                     </div>
                     <div class="col-md-6 mb-3">
                        <input type="submit" class="btn btn-primary" value="Update Category"/>
                     </div>
                 </div>
            </form>
       </div>
    </div>

</div>

@endsection