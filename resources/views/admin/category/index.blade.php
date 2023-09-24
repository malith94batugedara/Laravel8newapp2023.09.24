@extends('layouts.master')

@section('title','Laravel 8 web app | Admin Category')

@section('content')

<div class="container-fluid px-4">
    
    <div class="card mt-4">
       <div class="card-header">
          <h4 class="mt-4">All Categories<a href="{{route('admin.addcategory')}}" class="btn btn-success float-end">Add Category</a></h4>
       </div>
       <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-bordered">
                         <thead>
                            <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->name}}</td>
                                <td>
                                    <img src="{{ asset('uploads/category/'.$category->image)}}" width="50px" height="50px" alt=""/>
                                </td>
                                <td>{{$category->status == '1' ? 'hidden' : 'shown'}}</td>
                                <td>
                                    <a href="{{ route('admin.editcategory',$category->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ route('admin.deletecategory',$category->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                         </tbody>
                    </table>
       </div>

@endsection