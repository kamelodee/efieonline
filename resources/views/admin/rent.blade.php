@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header card-header-primary">
              <h4 class="card-title ">Properties for Rent</h4>
              <p class="card-category">Properties on rents</p>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered rent-table">
                    <thead>
                        <tr>
                            <th width="50">No</th>
                            <th>title</th>
                            <th>description</th>
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
    var table = $('.rent-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/admin-rent",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'title', name: 'title'},
            {data: 'description', name: 'description'},
            {data: 'action', name: 'id', orderable: false, searchable: false},
        ]
    });
  });

</script>
 
  @stop