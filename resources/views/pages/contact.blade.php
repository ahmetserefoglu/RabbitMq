@extends('layouts.master_home')

@section('home_content')


    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

          <div class="d-flex justify-content-between align-items-center">
              <h2>İletişim</h2>
              <ol>
                  <li><a href="{{ route('anasayfa') }}">Anasayfa</a></li>
                  <li>İletişim</li>
              </ol>
          </div>
      </div>
    </section><!-- End Breadcrumbs -->


    @if(session('success'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success') }}</strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
   </div>
   @endif

    <!-- ======= Contact Section ======= -->
    <div class="map-section">
      <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
    </div>

    <section id="contact" class="contact">
      <div class="container">

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Adres:</h4>
                  <p> {{ $contacts->address }}</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>{{ $contacts->email }}</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Telefon:</h4>
                  <p>{{ $contacts->phone }}</p>
                </div>
              </div>
            </div>

          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="{{ route('contact.form') }}" method="post" >
              @csrf
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control"   placeholder="Adınız"   />

                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email"  placeholder="Mail Adresiniz"   />

                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Konu"   />

              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5"   placeholder="Mesaj"></textarea>

              </div>
     <button class="btn btn-danger" type="submit">Gönder</button>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->


@endsection
