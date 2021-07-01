@extends('layout')
@section('dashboard-content')
    <h1>Edit category form</h1>

    @if(Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert" id="gone">  
    <strong>{{ Session::get('success')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </div>
    @endif

    @if(Session::get('failed'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">  
    <strong>{{ Session::get('failed')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </div>
    @endif

    <form action="{{ URL::to('post-category-form')}}" method="post">
      @csrf
        <div class="form-group">
          <label for="categoryName">Category Name:</label>
          <input type="text"
           class="form-control" id="categoryName"
           value="{{$category->name}}"
            aria-describedby="categoyNameHelp" 
            placeholder="Enter category name"
            name="categoryName">
          <small id="categoryNameHelp" class="form-text text-muted">This is a name of category</small>
        </div>
        <div class="form-group">
         <button type="submit" class="btn btn-primary">Update</button>
        </div>
       
      </form>
@stop
