@section('title') {{ 'Tambah Penajar' }}@endsection
@extends('admin.app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Pengajar</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Pengajar</h6>
        </div>
        <div class="card-body">

          <form action="/admin/team/store" method="post" enctype="multipart/form-data" >
            @csrf 

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Nama Pengajar</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="nama">
            </div>

            <div class="mb-3">
              <label for="exampleFormControlInput1" class="form-label">Pembayaran</label>
              <input type="text" class="form-control" id="exampleFormControlInput1" name="posisi">
            </div>

            <div class="mb-3">
              <label for="img" class="form-label">Pilih Foto</label>
              <input class="form-control" type="file" id="formFile" name="img">
            </div>

            <div class="my-3">
              <a href="/admin/team" class="btn btn-warning">Kembali</a>
              <button type="submit" class="btn btn-success">Simpan</button>
          </div>

          </form>

        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

  </div>
    @endsection