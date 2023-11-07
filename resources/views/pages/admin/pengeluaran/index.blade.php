@extends('layouts.admin')

@section('title')
    Pembelian
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="row">
          <div class="col-xl-12">
            <!-- Default Table -->
            <div class="block block-rounded">
              <div class="block-header block-header-default">
                <h3 class="block-title">Default Table</h3>
                <div class="block-options">
                  <div class="block-options-item">
                    <code>.table</code>
                  </div>
                </div>
              </div>
              <div class="block-content">
                <table class="table table-vcenter" id="table">
                  <thead>
                    <tr>
                      <th class="text-center" style="width: 50px;">#</th>
                      <th>Nama</th>
                      <th>Jumlah</th>
                      <th>Harga Beli</th>
                      <th>Total</th>
                      <th class="d-none d-sm-table-cell" style="width: 15%;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody></tbody>
                </table>
              </div>
            </div>
            <!-- END Default Table -->
          </div>
        </div>
    </div>
    <!-- END Page Content -->
    @include('sweetalert::alert')
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
@endpush

@push('addon-script')
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        var datatable = $('#table').DataTable({
            processing: true,
            serverSide: true,
            ordering: true,
            ajax: {
                url: '{!! url()->current() !!}',
            },
            columns: [
                { data: 'number', name: 'number' },
                { data: 'nama', name: 'nama' },
                { data: 'jumlah', name: 'jumlah' },
                { data: 'harga_beli', name: 'harga_beli' },
                { data: 'total', name: 'total' },
                {
                    data: 'aksi',
                    name: 'aksi',
                    orderable: false,
                    searcable: false,
                    width: '25%'
                },
            ]
        })
    </script>
    <script>
        $(document).on('click','.hapus', function () {
            var $pembeliannama = $(this).attr('pembelian-nama');
            var $pembelianid = $(this).attr('pembelian-id');
            swal({
              title: "Apakah Kamu Yakin",
              text: "Data Pembelian "+$pembeliannama+" Akan Terhapus",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
                console.log(willDelete);
              if (willDelete) {
                window.location = "pembelian/"+$pembelianid+"/delete";
              } else {
                swal("Data "+$pembeliannama+" Tidak Terhapus");
              }
            });
        })
    </script>
    <script>
        new DataTable('#table');
    </script>
@endpush