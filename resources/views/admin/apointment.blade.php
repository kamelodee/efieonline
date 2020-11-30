@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Apointments</h4>
              <p class="card-category">apointments booked</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered apintment_table">
                    <thead>
                        <tr>
                            <th width="50">No</th>
                            <th>First Name</th>
                            <th>Last name</th>
                            <th width="100px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  @endsection
  @section('scripts')
  <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script>
 $(function () {
    var table = $('.apintment_table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/admin-apointment",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'first_name', name: 'first_name'},
            {data: 'last_name', name: 'last_name'},
            {data: 'action', name: 'id', orderable: false, searchable: false},
        ]
    });
  });

</script>
 
  @stop