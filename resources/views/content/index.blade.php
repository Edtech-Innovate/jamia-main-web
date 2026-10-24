@extends('layouts.main')
@section('title', 'Authorized Latter')

@section('content')
<div class="content container-fluid">
    <!-- <div class="page-header">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h3 class="page-title">New Centers</h3>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/home">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">New Centers</li>
                </ul>
            </div>
            <div class="col-md-6 text-end">
               <a href="javascript:void(0);" onclick="add_program();">Add <i class="far fa-plus-circle"></i></a>
            </div>
        </div>
    </div> -->

    <div class="row">
        <div class="col-sm-12">
            <div class="card card-table">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="datatables table table-stripped">
                            <thead class="thead-light">
                                <tr>
                                    <th>Center Incharge</th>
                                    <th>Center Code</th>
                                    <th>Institute Name</th>
                                    <th>E-mail</th>
                                    <th>Mobile No.</th>
                                    <th>Verify</th>
                                    <th>Image</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jamia_form as $JamiaForms)
                                <tr>
                                    <td>{{$JamiaForms->name_center_incharge}}</td>
                                    <td>{{$JamiaForms->center_code}}</td>
                                    <td>{{$JamiaForms->name_institution}}</td>
                                    <td>{{$JamiaForms->email_form}}</td>
                                    <td>{{$JamiaForms->mobile_form}}</td>
                                    <td>
                                        <label class="switch"><input type="checkbox"><span class="slider round"></span> </label>

                                    </td>
                                    <td><img src="{{$JamiaForms->pp_image}}" alt="{{$JamiaForms->conter_code}}" width="100" height="100"></td>

                                    <td class="text-end">
                                        <!-- <a href="javascript:void(0);" onclick="edit_jamia_form({{$JamiaForms->id}});"  class="btn btn-sm btn-white text-success me-2"><i class="far fa-edit me-1"></i> </a> -->
                                       <a href="/print-apply-for-center/{{$JamiaForms->id}}" class="btn btn-sm btn-white text-success me-2"><i class="fas fa-print me-1 "></i>
                                      <a href="javascript:void(0);" onclick="delete_jamia_form ({{$JamiaForms->id}})" class="btn btn-sm btn-white text-danger me-2"><i class="far fa-trash-alt me-1"></i></a>
                                      
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
    // function add_program() {
    //     $.ajax({
    //         url: '/create_program',
    //         success: function(data) {
    //             $('#add_modal_content').html(data);
    //             $('#add_modal').modal('show');
    //         }
    //     })
    // }

    function edit_jamia_form(id) {
        $.ajax({
            url: '/edit_jamia_form/' + id,
            success: function(data) {
                $('#add_modal_content').html(data);
                $('#add_modal').modal('show');
            }
        })
    }
</script>

<script>
    function delete_jamia_form(id) {
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
                    url: '/delete_jamia_form/' + id,
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