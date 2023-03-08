@section('title') {{ 'Home' }}@endsection
@extends('admin.layouts.app')
@section('content')
  {{-- <div class="container">
    <div class="row">
      <table class="table">
          <tr>
              <td class="text-center">No</td>
              <td class="text-center">Judul</td>
              <td>Deskripsi</td>
              <td class="text-center">Link</td>
              <td class="text-center">Gambar</td>
              <td class="text-center"> </td>
              <td class="text-center"> Aksi</td>
              <td class="text-center"> </td>
          </tr>
          @foreach ($list as $l)
          <tr>
              <td class="text-center">{{ $loop->iteration }}</td>
              <td>{{ $l['judul'] }}</td>
              <td>{{ $l['deskripsi'] }}</td>
              <td class="text-center">{{ $l['link'] }}</td>
              <td class="text-center">
                  <img src="{{ asset('storage/img/' . $l['img']) }}" width="60" class="img-fluid img-thumbnail" style="max-height: 60px">
              </td>
              <td class="text-center">
                  <a href="/admin/kader/{{ $l->id }}/edit" class="btn btn-warning btn-sm">Edit</a>
              </td>
              <td class="text-start">
                  <form action="{{ route('kader.destroy', $l->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm
                      ('Apakah Anda yakin ingin menghapus kader ini?')">Hapus</button>
                  </form>
              </td>
          </tr>
          @endforeach
      </table>
  </div>
  </div> --}}
    @endsection