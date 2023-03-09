@section('title') {{ 'Home' }}@endsection
@extends('admin.app')
@section('content')
  <div class="container">
    
  <!-- Begin Page Content -->
  <div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Edit Home</h1>
    <p class="mb-4"></p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Gambar Home</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="" method="post">
                    <div class="my-3">
                        <label for="judul">Judul</label><br>
                        <input type="textarea" name="alamat" class="form-control" id="alamat" class="mb-3" value="{{ "judul" }}" id="alamat"/>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

  </div>
    @endsection