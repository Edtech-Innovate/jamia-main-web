@extends('layouts.main')
@section('title', 'Authorized Latter')
@section('content')
<div class="content container-fluid">
    <!-- <div class="page-header">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h3 class="page-title">Blogs</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Blogs</li>
                </ul>
            </div>
            <div class="col-md-6 d-flex justify-content-start">
                <a href="javascript:void(0);" onclick="add_blog();"> <i class="fa fa-plus-circle fs-3"></i></a>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <!-- <div class="col-md-6 text-end">
                            <a href="javascript:void(0);" onclick="add_blog();"> <i class="fa fa-plus-circle fs-3"></i></a>
                        </div> -->
                        <table class="datatable table table-stripped">
                            <thead class="thead-light">
                                <tr>
                                    <th>Name</th>

                                    <th>Short Description</th>
                                    <th>Image</th>
                                    {{-- <th>Content</th> --}}

                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{ substr($blog->name, 0,20).'...' }}</td>

                                    <td>{{ substr($blog->short_description, 0, 60).'...' }}</td>
                                    <td><img src="/{{$blog->image}}" style="width:100px;"></td>
                                    {{-- <td>{{ substr($blog->content, 0, 60).'...' }}</td> --}}

                                    <td class="text-end">
                                        <a href="javascript:void(0);" onclick="edit_blog({{$blog->id}});" class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> </a>
                                        <a href="javascript:void(0);" onclick=" delete_blog({{$blog->id}})" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')

<script>
    //program category
    function add_blog() {
        $.ajax({
            url: '/create_blog',
            success: function(data) {
                $('#add_modal_content').html(data);
                $('#add_modal').modal('show');
            }
        })
    }

    function edit_blog(id) {
        $.ajax({
            url: '/edit_blog/' + id,
            success: function(data) {
                $('#add_modal_content').html(data);
                $('#add_modal').modal('show');
            }
        })
    }
</script>

<script>
    function delete_blog(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: '/delete_blog/' + id,
                    success: function(data) {
                        if (data.status == 200) {
                            Swal.fire(
                                'Deleted!',
                                'Your file has been deleted.',
                                'success'
                            )
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                        } else {
                            Swal.fire(
                                'Oops!',
                                'Something went wrong.',
                                'error'
                            )
                        }
                    }
                })

            }
        })
    }
</script>
@endsection