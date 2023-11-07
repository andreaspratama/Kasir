@extends('layouts.admin')

@section('title')
    Pembelian
@endsection

@section('content')
    <!-- Page Content -->
    <div class="content">
        <!-- Basic -->
        <div class="block block-rounded">
          <div class="block-header block-header-default">
            <h3 class="block-title">Basic</h3>
          </div>
          <div class="block-content block-content-full">
            <form action="{{route('pembelian.update', $item->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="row push">
                <div class="col-lg-12 col-xl-12">
                  <div class="mb-4">
                    <label class="form-label" for="nama">Nama Pembelian</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Pembelian..." value="{{$item->nama}}">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="jumlah">Jumlah</label>
                    <input type="text" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah..." value="{{$item->jumlah}}">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="harga_beli">Harga Beli (satuan/kiloan)</label>
                    <input type="text" class="form-control" id="harga_beli" name="harga_beli" placeholder="Harga Beli (satuan/kiloan)..." value="{{$item->harga_beli}}">
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="total">Total</label>
                    <input type="text" class="form-control" id="total" name="total" placeholder="Total..." value="{{$item->total}}">
                  </div>
                  <button class="btn btn-primary" type="submit">Edit</button>
                  <button class="btn btn-danger" type="reset">Reset</button>
                  <a href="{{route('pembelian.index')}}" class="btn btn-secondary">Batal</a>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- END Basic -->
    </div>
    <!-- END Page Content -->
@endsection