@extends('layouts.master')

@section('title','Laravel 8 web app | Admin Add Post')

@section('content')

<div class="container-fluid px-4">
    
    <div class="card mt-4">
       <div class="card-header">
          <h4 class="mt-4">Add Post</h4>
       </div>
       <div class="card-body">
        @if ($errors->any())
       <div class="alert alert-danger">
                  @foreach ($errors->all() as $error )
                      <div>{{$error}}</div>
                  @endforeach
       </div>
        @endif
            <form action="{{ route('admin.addpost') }}" method="post" enctype="multipart/form-data">
                 @csrf
                 <div class="mb-3">
                    <label>Category</label>
                    <select name="category_id" class="form-control">
                        @foreach($categories as $category)
                          <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                 </div>
                 <div class="mb-3">
                    <label>Post Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter Post Name"/>
                 </div>
                 <div class="mb-3">
                    <label>Slug</label>
                    <input type="text" class="form-control" name="slug" placeholder="Enter Slug"/>
                 </div>
                 <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" class="form-control" placeholder="Enter Your Description" rows="5"></textarea>
                 </div>
                 <div class="mb-3">
                    <label>Youtube Iframe Link</label>
                    <input type="text" class="form-control" name="yt_iframe"/>
                 </div>

                 <h5>SEO Tags</h5>
                 <div class="mb-3">
                    <label>Meta Title</label>
                    <input type="text" class="form-control" placeholder="Enter Meta Title" name="meta_title"/>
                 </div>
                 <div class="mb-3">
                    <label>Meta Description</label>
                    <textarea name="meta_description" class="form-control" placeholder="Enter Your Meta Description" rows="5"></textarea>
                 </div>
                 <div class="mb-3">
                    <label>Meta Keyword</label>
                    <input type="text" class="form-control" placeholder="Enter Meta Keyword" name="meta_keyword"/>
                 </div>
                 <h5>Status Mode</h5>
                 <div class="row">
                     <div class="col-md-4 mb-3">
                        <label>Status</label>&nbsp
                        <input type="checkbox" name="status"/>
                     </div>
                     <div class="col-md-8 mb-3">
                        <input type="submit" class="btn btn-primary" value="Save Post"/>
                     </div>
                 </div>
            </form>
       </div>
    </div>

</div>

@endsection