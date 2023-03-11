@section('title') {{ 'Berita' }}@endsection
@extends('client.layout.app')
@section('content')
    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Berita</h2>
        <div class="row portfolio-container">

          
<!--================News Area =================-->
<section class="news_area p_100">
  <div class="container">
     <div class="row">
        <div class="col-lg-8">
           <div class="main_title2">
              <h2>All News </h2>
           </div>
           <div class="latest_news">

                 <div class="media">
                    <div class="d-flex">
                       <img class="img-fluid" src="{{ asset('storage/img/galeri_-1678441969.jpeg')}}" alt="">
                    </div>
                    <div class="media-body">
                       <div class="choice_text">
                          <div class="date">
                             <a class="gad_btn" href="#">categori</a>
                             <a href="" class="float-right"><i class="fa fa-calendar" aria-hidden="true">
                                </i>10-maret 2023
                             </a>
                          </div>
                          <a href="#">
                             <h4>ini jduul</h4>
                          </a>
                          <p>character limiter</p>
                       </div>
                    </div>
                 </div>
           </div>

           <!-- Pagination -->
           <div class="row mt-5">
              <div class="col">
                 <nav aria-label="Page navigation example">
                    {{-- <?= $pagination ?> --}}
                 </nav>
              </div> 
           </div>
           <!-- End of Pagination -->
           
        </div>
        <!-- ================Sidebar================== -->
          sidebar
        <!-- ================End of Sidebar================== -->
     </div>
  </div>
</section>
<!--================End News Area =================-->

        </div>
      </div>
    </section><!-- End Our Portfolio Section -->
    @endsection