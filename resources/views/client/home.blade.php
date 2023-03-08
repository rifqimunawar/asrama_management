@section('title') {{ 'Home' }}@endsection
@extends('client.layout.app')
@section('content')
  
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="2000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url({{ asset('storage/img/asrama2.jpeg' ) }});">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>Asrama Puteri Baiturrahman</span></h2>
                <p class="animate__animated animate__fadeInUp">Deskripsinya sedikit saja.</p>
                <a href="/login" class="btn-get-started animate__animated animate__fadeInUp scrollto">Login</a>
              </div>
            </div>
          </div>

          <!-- Slide 2 dan selanjutnya ada disini -->
          @foreach ($home as $hero)
          <div class="carousel-item" style="background-image: url({{ asset('storage/img/' . $hero['img']) }});">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">{{ $hero['judul'] }}</h2>
                <p class="animate__animated animate__fadeInUp">{{ $hero['deskripsi'] }}</p>
                <a href="{{ $hero['link'] }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>
          @endforeach
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  percobaan push anjay

  @endsection