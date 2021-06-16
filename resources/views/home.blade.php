@extends('layouts.apptmp')

@section('content')
<section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{asset('mainassets/assets/img/slide/slide-1.jpg')}})">
          <div class="container">
            <h2>Welcome to <span>Medicio</span></h2>
            <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel.</p>
            <a href="{{url('laporan/kehilangan')}}" class="btn-get-started scrollto">Buat Laporan Kehilangan</a>&nbsp;&nbsp;
            <a href="{{url('laporan/penemuan')}}" class="btn-get-started scrollto">Buat Laporan Penemuan</a>
          </div>
        </div>
    </div>
  </section><!-- End Hero -->
<section id="featured-services" class="featured-services">
        <div class="section-title">
          <h2>Laporan Kehilangan</h2>
          <p></p>
        </div>
      <div class="container" data-aos="fade-up">
        @if($data->count() == 0 && $data3->count() == 0)
        <center><h3>Belum Ada Laporan</h3></center>
        @else
        <div class="row">
          @foreach($data as $row)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <img src="{{asset('storage/'.$row->foto)}}" alt="" style="width:200px;height: 150px; border-radius:5px;object-fit: cover;">
                <h4 class="title"><a href="">{{$row->nama}}</a></h4>
                <p class="description">{{$row->jenis->nama_jenis}}</p>
              </div>
            </div>
          @endforeach
          @foreach($data3 as $row)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                <img src="{{asset('storage/'.$row->foto)}}" alt="" style="width:200px;height: 150px; border-radius:5px;object-fit: cover;">
                <h4 class="title"><a href="">{{$row->nama}} (Ditemukan)</a></h4>
                <p class="description">{{$row->jenis->nama_jenis}}</p>
              </div>
            </div>
          @endforeach
          </div>
        @endif
        
      </div>
    </section><!-- End Featured Services Section -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Laporan Penemuan</h2>
          <p></p>
        </div>

        @if($data2->count() == 0 && $data4->count() == 0)
        <center><h3>Belum Ada Laporan</h3></center>
        @else
        <div class="row">
          @foreach($data2 as $row)
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="box-shadow: 5px 10px 8px #888888 !important;border-radius:7px;">
              <div class="icon-box" data-aos="fade-up" data-aos-delay="100" >
                <img src="{{asset('storage/'.$row->foto)}}" alt="" style="width:200px;height: 150px; border-radius:5px;object-fit: cover;">
                <h4 class="title"><a href="">{{$row->nama}}</a></h4>
                <p class="description">{{$row->jenis->nama_jenis}}</p>
              </div>
            </div>
          @endforeach
          </div>
        @endif

      </div>
    </section><!-- End Appointment Section -->
@endsection







