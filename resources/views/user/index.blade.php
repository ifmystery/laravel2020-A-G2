@extends('layouts.master')
 
@section('top')
    <!-- {{-- Datatables --}} -->
    <script src="{{ asset('template/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
@endsection

@section('content')
@include('sweet::alert')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Users</h1><br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
    <a href="{{route('user.create')}}" class="btn btn-primary"><i class="fas fa-fw fa-plus"></i> Add User</a>
  </div>
  <div class="card-body">
  <div class="table-responsive">
      <table class="table table-bordered data-table" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th><center>Action</center></th>
          </tr>
        </thead>
        <tfoot class="thead-light">
          <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Role</th>
            <th><center>Action</center></th>
          </tr>
        </tfoot>
        <tbody>
          <tr>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

<script>
$(function() {
   const table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        autoWidth: true,
        ajax: {url:"{{ route('user.index') }}"},
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'name', name: 'name'},
            {data: 'email', name: 'email'},
            {data: 'role', name: 'role'},
            {data: 'action', name: 'action',orderable : false, searchable: false, sClass: 'text-center'}
           ]
          })
        })

        function deleteData(id) {
        swal({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            showCancelButton: true,
            cancelButtonColor: '#d33',
        }).then((willDelete) => {
            $.ajaxSetup({
            headers: {
                'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
            }
        });
            if (willDelete) {
                $('#data' + id).submit();
            }
        })
    }
</script>
@endsection