@extends('admin.admin-master')

@section('page-title','Blog')

@section('main-content')
    <div class="panel panel-primary ">
        <div class="panel-heading">Post an article on blog</div> 
        <div class="panel-body">
            <form role="form" action="{{url('admin/blog/store')}}" method="POST" enctype="multipart/form-data">
                
                @csrf

                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Blog Title" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="slug" placeholder="Blog Slug" required>
                </div>
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <label for="">Feature Image</label>
                        <input type="file" class="form-control" name="feature_image" required>
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <label for="">Post By :</label>
                        <input type="text" name="post_by" class="form-control" value="{{Session('username')}}" readonly>
                        <input type="hidden" name="user_id" class="form-control" value="{{Session('user_id')}}">

                        {{-- <input type="hidden" name="post_by" {{$useritem->id}}> --}}
                        {{-- <select name="post_by" class="form-control" id="">
                            @foreach ($user as $useritem)
                                <option value="{{$useritem->id}}">{{$useritem->name}}</option>
                            @endforeach
                        </select> --}}
                    </div>
                    <div class="col-md-3 col-sm-3">
                        <label for="">Category   </label>
                        <select name="cat_id" id="" class="form-control">
                            @foreach ($blog_cat as $item)
                                <option value="{{$item->name}}">{{$item->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-1">
                        <br>
                        <button type="button" title="Add category" class="btn btn-success" data-toggle="modal" data-target="#addcat"><i class="fa fa-plus fa-2x"></i></button>
                    </div>
                </div>
                <hr>
                <div class="form-group">
                    <label for="Details">Blog</label>
                    <textarea name="blog" class="form-control" id="" cols="30" rows="10" required></textarea>
                </div>

                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" name="alt" placeholder="Enter image alt text" required>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <input type="text" class="form-control" name="tag" placeholder="Tags notice : separate every tag by coma(,)" required>
                    </div>
                </div>

                <hr>
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <select name="solution_ad" class="form-control" id="">
                            @foreach ($solution as $sol)
                            <option value="{{$sol->id}}">{{$sol->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <select name="training_ad" class="form-control" id="">
                            @foreach ($training as $train)
                            <option value="{{$train->id}}">{{$train->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <hr>

                <input type="submit" class="btn btn-success" value="Post on blog">

            </form>
        </div>
    </div>

    {{-- end of form --}}
<hr>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                Blog category
            </div>
            <div class="panel-body">
               <!-- Button trigger modal -->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#allcat">
                      <i class="fa fa-list"></i>  Category List
                </button>

                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addcat">
                      <i class="fa fa-plus "></i> Add new category
                </button>

                <!-- Modal -->
                <div class="modal fade" id="allcat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">Category Name</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blog_cat as $item)
                                <tr>
                                    <td scope="row">{{$item->name}}</td>
                                    <td><a href="{{url('admin/blog-cat/destroy')}}/{{$item->id}}">
                                        <button class="btn btn-danger">
                                            <i class="fa fa-remove fa-2x"></i>
                                        </button>
                                    </a></td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>    
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="addcat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{url('/admin/blog-cat/save')}}" method="POST">
                            @csrf
                            <input type="text" class="form-control" placeholder="Enter a category" name="catName" required>

                            <hr>
                        <button type="submit" class="btn btn-primary">Save </button>

                        </form>
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<hr>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                All article on your web blog 
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover" id="dataTables-example">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Blog Title</th>
                            <th>Feature Image</th>
                            <th>Post by</th>
                            <th>Category</th>
                            <th>Visitor</th>
                            <th>Post at</th>
                            <th>Eidt</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                                            <tbody>
                                                @php
                                                    $i = 0;
                                                @endphp
                                                @foreach ($blog as $item)
                                                <tr>
                                                    <td>{{$i+=1}}</td>
                                                    <td>{{$item->title}}</td>
                                                    <td class="center">
                                                        <img src='{{asset("$item->feature_image")}}' width="80px" alt="">
                                                    </td>
                                                    <td>
                                                        {{$item->post_by}}
                                                    </td>
                                                    <td>
                                                        {{$item->cat_id}}
                                                    </td>
                                                    <td>
                                                        {{$item->visitor}}
                                                    </td>
                                                    <td>
                                                        {{$item->post_at}}
                                                    </td>
                                                    @if (($item->user_id == Session('user_id')) || (Session('status')=="superadmin"))
                                                    <td class="center">
                                                            <form action="{{url('admin/blog/edit')}}/{{$item->id}}" method="post">
                                                                @csrf
                                                                <button type="submit" class="btn btn-secodary btn-circle btn-lg"><i class="fa fa-edit"></i></button>
                                                            </form>
                                                    </td>
                                                    <td class="center">
                                                        <form action="{{url('admin/blog/destroy')}}/{{$item->id}}" method="post">
                                                            @csrf
                                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger btn-circle btn-lg"><i class="fa fa-remove"></i></button>
                                                        </form>                       
                                                    </td>
                                                    @else 
                                                        <td>
                                                            #
                                                        </td>
                                                        <td>
                                                            #
                                                        </td>
                                                    @endif
                                                </tr>
                                                <div class="p-2"></div>
                                                @endforeach
                                            </tbody>
                    </table>
                </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
@endsection

@section('extra-js')
    <!-- DataTables JavaScript -->
    <script src="{{asset('assets/admin/js/dataTables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets/admin/js/dataTables/dataTables.bootstrap.min.js')}}"></script>
    <script>
            $(document).ready(function() {
                $('#dataTables-example').DataTable({
                        responsive: true
                });
            });
        </script>
    
    <script src="{{asset('assets/ckeditor/ckeditor.js')}}"></script>

	<script>
      CKEDITOR.replace('blog');
    </script>

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script>

    </script>

@endsection