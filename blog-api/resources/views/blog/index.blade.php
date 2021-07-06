@extends('layout')
@section('dashboard-content')

    @if(Session::get('destroy'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" id="gone">
            <strong> {{ Session::get('destroy') }} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(Session::get('failed'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">
            <strong> {{ Session::get('failed') }} </strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            Blog post List</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th> Blog Title </th>
                        <th> Blog Details </th>
                        <th> Blog Featured Image</th>
                        <th>Actions </th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th> Blog Title </th>
                        <th> Blog Details </th>
                        <th> Blog Featured Image</th>
                        <th>Actions </th>
                    </tr>
                    </tfoot>
                    <tbody>

                    @foreach($blogPosts as $blogPost)

                        <tr>
                            <td> {{ $blogPost->title }} </td>
                            <td> {{ $blogPost->details }} </td>
                            <td> <img src="{{ $blogPost->featured_image_url }}" 
                                alt="{{ $blogPost->featured_image_url }}" height="100" width="100"/> </td>
                            <td>
                                <a href="{{ URL::to('edit-blog-post') }}/{{ $blogPost->id }}" class="btn btn-outline-primary btn-sm"> Edit </a>
                                |
                                <a href="{{ URL::to('destroy-blog-post') }}/{{ $blogPost->id }}" class="btn btn-outline-danger btn-sm" 
                                    onclick="return checkDelete();"> Delete </a>
                            </td>

                        </tr>


                    @endforeach



                    </tbody>
                </table>
            </div>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
    </div>

    <script>
        function checkDelete() {
            var check = confirm('Are you sure you want to Delete this?');
            if(check){
                return true;
            }
            return false;
        }
    </script>

@stop
