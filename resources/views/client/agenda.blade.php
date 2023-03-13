@section('title') {{ 'Agenda' }}@endsection
@extends('client.layout.app')
@section('content')
    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="section-title">
          <h2>Jadwal Kegiatan</h2>
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Hari</th>
                <th>Waktu</th>
                <th>Kegiatan</th>
                <th>Keterangan</th>
              
              </tr>
            </thead>
            <tbody>
              @foreach ($agenda as $a)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $a['hari'] }}</td>
                <td>{{ $a['waktu'] }}</td>
                <td>{{ $a['kegiatan'] }}</td>
                <td>{{ $a['keterangan'] }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
    </section><!-- End Our Portfolio Section -->
    @endsection