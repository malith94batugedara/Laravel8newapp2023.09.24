@extends('layouts.master')

@section('title','Laravel 8 web app | Admin Posts')

@section('content')

<div class="container-fluid px-4">
    
    <div class="card mt-4">
       <div class="card-header">
          <h4 class="mt-4">All Posts<a href="{{route('admin.addpost')}}" class="btn btn-success float-end">Add Post</a></h4>
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
                                <th>Category</th>
                                <th>Post Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                         </thead>
                         <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->category->name}}</td>
                                <td>{{$post->name}}</td>
                                <td>{{ $post->status == 1 ? 'hidden' : 'shown' }}</td>
                                <td>
                                    <a href="" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                         </tbody>
                    </table>
       </div>

@endsection