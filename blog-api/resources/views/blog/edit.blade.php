@extends('layout')
@section('dashboard-content')
    <h1>Edit blog post form</h1>

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

    <form action="{{ URL::to('update-blog-post')}}/{{$blogPost->id}}" 
    method="post" enctype="multipart/form-data">
      @csrf
        <div class="form-group">
          <label for="postTitle">Blog Title:</label>
          <input type="text"
           class="form-control" id="postTitle"
            placeholder="Enter post title"
            name="postTitle"
            value="{{$blogPost->title}}"
            >
        </div>

        <div class="form-group">
          <label for="postDetails">Post Details:</label>
          <textarea
           class="form-control" id="postDetails"
            name="postDetails">{{$blogPost->details}}</textarea>
        </div>

        <div class="form-group">
          <label for="category">Category:</label>
          <select
           class="form-control" id="category"
            name="category">
          <option>Select one</option>
          @foreach ($categories as $category)
            <option value="{{$category->id}}"
            @if($category->id ==$blogPost->category_id)
            selected
            @endif  
            >{{$category->name}}</option>
          @endforeach
          </select>
        </div>
       
        <div class="form-group"> 
          <label for="featuredPhoto">Select featured photo:</label>
          <input type="file" class="form-control"
            id="featuredPhoto" name="featuredPhoto"
            onchange="loadPhoto(event);"
            />
         </div>

         <div>

          <img id="photo" height="100" width="100" />
         </div>

        <div class="form-group"> 
         <button type="submit" class="btn btn-primary sm-3">Submit</button>
        </div>
       
      </form>
  <script>
    function loadPhoto(event){
      var reader = new FileReader();
      reader.onload = function(){
        var output = document.getElementById('photo');
        output.src = reader.result;
      }
      reader.readAsDataURL(event.target.files[0]);
    }

  </script>

@stop
