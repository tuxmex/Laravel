@extends('layout')
@section('dashboard-content')
    <h1>Create category form</h1>
    <form action="{{URL::to('post-category-form')}}" method="post">
        @csrf
        <div class="form-group">
          <label for="categoryName">Category Name:</label>
          <input type="text" class="form-control" id="categoryName"  placeholder="Enter name" name="categoryName">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@stop