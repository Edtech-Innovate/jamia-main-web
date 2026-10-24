@extends('layouts.main')
@section('title', 'Authorized Letter')

@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card card-table">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 text-end px-4 pt-4">
                                <a href="javascript:void(0);" onclick="add_center();" class="btn btn-success">Add Center</a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="datatables table table-stripped">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Center Name</th>
                                        <th>Type</th>
                                        <th>Country</th>
                                        <th>State</th>
                                        <th>District</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($centers as $center)
                                        <tr>
                                            <td>{{ $center->center_name }}</td>
                                            <td>{{ ucfirst($center->type) }}</td>
                                            <td>{{ $center->country }}</td>
                                            <td>{{ $center->state }}</td>
                                            <td>
                                                @if (!empty($center->district))
                                                    {{ $center->district }}
                                                @else
                                                    {{ $center->{'district-abroad'} }}
                                                @endif
                                            </td>

                                            <td class="text-end">
                                                <a href="javascript:void(0);" onclick="edit_center({{ $center->id }});"
                                                    class="btn btn-sm btn-white text-success me-2">
                                                    <i class="far fa-edit me-1"></i>
                                                </a>
                                                <a href="javascript:void(0);" onclick="delete_center({{ $center->id }});"
                                                    class="btn btn-sm btn-white text-danger me-2">
                                                    <i class="far fa-trash-alt me-1"></i>
                                                </a>
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
        function add_center() {
            $.ajax({
                url: '/add-center',
                success: function(data) {
                    $('#add_modal_content').html(data);
                    $('#add_modal').modal('show');
                }
            });
        }

        function edit_center(id) {
            $.ajax({
                url: '/edit-center/' + id,
                success: function(data) {
                    $('#add_modal_content').html(data);
                    $('#add_modal').modal('show');
                }
            });
        }

        function delete_center(id) {
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
                        url: '/delete-center/' + id,
                        success: function(data) {
                            if (data.status == 200) {
                                Swal.fire('Deleted!', 'Center has been deleted.', 'success');
                                setTimeout(() => window.location.reload(), 1000);
                            } else {
                                Swal.fire('Oops!', 'Something went wrong.', 'error');
                            }
                        }
                    });
                }
            });
        }
    </script>
@endsection
