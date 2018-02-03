@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
@if (Session::has(‘message’))
 <div class=”col-md-12">
 <div class=”alert alert-info”>{{ Session::get(‘message’) }}</div>
 </div>
@endif
<div class=”container”>
 <div class=”col-md-2"></div>
 <div class=”col-md-8">
 <div class=”pull-right”>
<a href="posts/create"><div class="btn btn-success">Add New Blog Post</div></a>
 </div>
 <table  style="width:100%">
 <thead>
 <tr>
 <th>ID</th>
 <th>BLOG TITLE</th>
 <th>EDIT BLOG</th>
 <th>DELETE BLOG</th>
 </tr>
 </thead>
 <tbody>
 <tr>
 <td>1</td>
 <td>Hello world</td>
 <td><a href="posts/edit"><div class ='btn btn-primary'>Edit Blog</div></a></td>
 <td><a href="posts/delte"><div class ='btn btn-danger'>Delete Blog</div></a></td>
 </tr>
 </tbody>
 </table>
 </div>
 </div>
 </div>
 </div>
 </div>
@endsection
