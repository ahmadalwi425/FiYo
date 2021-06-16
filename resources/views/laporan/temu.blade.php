@extends('layouts.apptmp')

@section('content')
<section id="appointment" class="appointment section-bg" style="padding-top:150px">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Laporan Penemuan</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="{{url('laporan/temu')}}" enctype="multipart/form-data" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          @csrf
          <div class="form-row">
            <div class="col-md-4 form-group">
              <label for="nama">Nama Barang (brand, seri, dll)</label>
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Barang" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
              <label for="jenis">Jenis Barang</label>
              <select name="id_jenis" id="jenis" class="form-control">
              @foreach($data as $row)
                <option value="{{ $row->id }}">{{ $row->nama_jenis }}</option>
              @endforeach
              </select>
              <div class="validate"></div>
            </div>
            <div class="col-md-4 form-group">
            <label for="hilang">Tanggal Menemukan</label>
              <input type="date" class="form-control" name="tanggal_hilang" id="hilang" placeholder="Tanggal Hilang" >
              <div class="validate"></div>
            </div>
          </div>
          
          <div class="form-row">
            <div class="col-md-6 form-group">
              <label for="lokasi">Lokasi Penemuann</label>
              <input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="Lokasi Anda Menemukan Barang" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
            <label for="foto">Foto Barang Temuan</label>
              <input type="file" class="form-control" name="foto" id="foto" >
              <div class="validate"></div>
            </div>
          </div>

          <div class="form-group">
            <label for="lokasi">Deskripsi</label>
            <textarea class="form-control" name="deskripsi" rows="5" placeholder="Deskripsi barang anda yang hilang"></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center"><button type="submit">Ajukan Laporan Ini</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->
@endsection







