@extends('layouts.apptmp')

@section('content')
<section id="appointment" class="appointment section-bg" style="padding-top:150px">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="{{url('formfill')}}" method="post" enctype="multipart/form-data" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          @csrf
          <div class="form-row">
            <div class="col-md-4 form-group">
              <label for="alamat">NIK</label>
              <input type="number" class="form-control" name="NIK" id="NIK" placeholder="NIK">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <label for="foto">Foto Diri</label>
              <input type="file" class="form-control" name="foto" id="foto" placeholder="Foto Anda">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <label for="identitas">Foto Kartu Identitas (KTP/SIM/Kartu Pelajar)</label>
              <input type="file" class="form-control" name="identitas" id="identitas" placeholder="Identitas Anda">
              <div class="validate"></div>
            </div>
            <div class="col-md-12 form-group">
              <label for="alamat">Alamat Rumah</label>
              <textarea class="form-control" name="alamat" rows="5" placeholder="Message (Optional)"></textarea>
            <div class="validate"></div>
          </div>
          </div>
          
          <div class="text-center"><button type="submit">Lengkapi Profile</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->
@endsection







