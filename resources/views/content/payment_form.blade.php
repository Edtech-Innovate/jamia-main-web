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
                                    <th>Payment ID</th>
                                    <th>Region</th>
                                    <th>Institution Name</th>
                                    <th>Name</th>
                                    <th>E-mail</th>
                                    <th>Country Code</th>
                                    <th>Mobile No.</th>
                                    <th>Purpose Payment</th>
                                    <th>Gate ID</th>
                                     <th>Amount</th>
                                    <!-- <th>Actions</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($paymentshow as $paymentShows)
                                <tr>
                                    <td>{{$paymentShows->txn_id}}</td>
                                    <td>{{$paymentShows->region}}</td>
                                    <td>{{$paymentShows->institute_name}}</td>
                                    <td>{{$paymentShows->name}}</td>
                                    <td>{{$paymentShows->email}}</td>
                                    <td>{{$paymentShows->country_code}}</td>
                                    <td>{{$paymentShows->mobile}}</td>
                                    <td>{{$paymentShows->purpose_of_payment}}</td>
                                    <td>{{$paymentShows->gateway_id}}</td>
                                    <td>{{$paymentShows->amount}}</td>

                                    <td class="text-end">
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

    function edit_payment_form(id) {
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
    function delete_payment_form(id) {
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