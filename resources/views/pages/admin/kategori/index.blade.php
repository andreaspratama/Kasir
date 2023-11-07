@extends('layouts.admin')

@section('title')
    Kategori
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
                      <th>Name</th>
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
            var $kategorinama = $(this).attr('kategori-nama');
            var $kategoriid = $(this).attr('kategori-id');
            swal({
              title: "Apakah Kamu Yakin",
              text: "Data Kategori "+$kategorinama+" Akan Terhapus",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
                console.log(willDelete);
              if (willDelete) {
                window.location = "kategori/"+$kategoriid+"/delete";
              } else {
                swal("Data "+$kategorinama+" Tidak Terhapus");
              }
            });
        })
    </script>
    <script>
        new DataTable('#table');
    </script>
@endpush