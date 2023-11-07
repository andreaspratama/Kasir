@extends('layouts.admin')

@section('title')
    Produk
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
            <form action="{{route('produk.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="row push">
                <div class="col-lg-12 col-xl-12">
                  <div class="mb-4">
                    <label class="form-label" for="kategori_id">Kategori</label>
                    <select class="form-select" id="kategori_id" name="kategori_id">
                      <option selected="">-- Pilih Kategori --</option>
                      @foreach ($kategori as $kat)
                        <option value="{{$kat->id}}">{{$kat->nama}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-4">
                    <label class="form-label" for="nama">Produk</label>
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Produk...">
                  </div>
                  <button class="btn btn-primary" type="submit">Simpan</button>
                  <button class="btn btn-danger" type="reset">Reset</button>
                  <a href="{{route('produk.index')}}" class="btn btn-secondary">Batal</a>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- END Basic -->
    </div>
    <!-- END Page Content -->
@endsection