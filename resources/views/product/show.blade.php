@extends('layouts.master')

@section('top')
@endsection

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Products</h1><br>

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <!-- <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6> -->
    <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary float-right"><i class="fas fa-fw fa-chevron-left"></i> Back</a>
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table  class="table table-bordered" width="100%" cellspacing="0">
        <thead class="thead-light">
          <tr>
            <th>Name</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th><center>Spesifikasi</center></th>
            <th>Qty</th>
          </tr>
        </thead>
        <tfoot class="thead-light">
          <tr>
            <th>Name</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th><center>Spesifikasi</center></th>
            <th>Qty</th>
          </tr>
        </tfoot>
        <tbody>
          @foreach ($product as $brg)
            <tr>
                <td class="align-middle">{{ $brg->nama_barang }}</td>
                <td class="align-middle">{{ $brg->category->nama_kategori }}</td>
                <td class="align-middle">{{ $brg->harga }}</td>
                <td class="align-middle"><?php echo "$brg->spesifikasi";?></td>
                <td class="align-middle">{{ $brg->qty }}</td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->


@endsection