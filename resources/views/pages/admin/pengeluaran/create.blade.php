@extends('layouts.admin')

@section('title')
    Pengeluaran
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Basic -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Pengeluaran</h3>
          </div>
          <div class="block-content block-content-full">
            <form action="{{route('pengeluaran.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="row push">
                <div class="col-lg-12 col-xl-12">
                  <div class="mb-4">
                    <label class="form-label" for="nama">Nama Pengeluaran</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pengeluaran...">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal" name="tanggal" placeholder="Tanggal...">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah...">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="tot_pengeluaran">Total</label>
                    <input type="text" class="form-control" id="tot_pengeluaran" name="tot_pengeluaran" placeholder="Total...">
                  </div>
                  <button class="btn btn-primary" type="submit">Simpan</button>
                  <button class="btn btn-danger" type="reset">Reset</button>
                  <a href="{{route('pengeluaran.index')}}" class="btn btn-secondary">Batal</a>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- END Basic -->
    </div>
    <!-- END Page Content -->
@endsection