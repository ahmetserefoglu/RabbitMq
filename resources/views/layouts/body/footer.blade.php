@php
    $contacts = DB::table('contacts')->first();

@endphp

<!-- ======= Our Clients Section ======= -->
<section id="clients" class="clients">
    <div class="container" data-aos="fade-up">

        <div class="section-title">
            <h2>Şirketinin E-dönüşümdeki Tercihi</h2>
            <p>E-dönüşüme birçok şirket bizimle başladı. E-fatura maliyetini düşürürken gelirlerini arttırdı.</p>
        </div>

        <div class="row no-gutters clients-wrap clearfix" data-aos="fade-up">
            @foreach($brands as $brand)
            <div class="col-lg-3 col-md-4 col-6">
                <div class="client-logo">
                    <img src="{{asset($brand->brand_image)}}" class="img-fluid" alt="">
                </div>
            </div>
            @endforeach

        </div>

    </div>
</section><!-- End Our Clients Section -->

<!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Ecza Fatura</h3>
            <p>
                {{ $contacts->address }}<br>
              <strong>Telefon:</strong> {{ $contacts->phone }}<br>
              <strong>Email:</strong> {{ $contacts->email }}<br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Sayfalar</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('anasayfa') }}">Anasayfa</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('efatura') }}">E-Arşiv nedir?</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('earsiv') }}">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('zorunlu') }}">E-Fatura ve E-Arşiv Kimlere Zorunlu?</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="{{ route('neden') }}">Neden Ecza-Fatura'ya Geçmeyelim?</a></li>
            </ul>
          </div>

            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Sayfalar</h4>
                <ul>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('edefter') }}">e-Defter</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('musteri') }}">Müşteri Yorumlarımız</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('efatura') }}">Sık Sorulan Sorular</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('fiyatlandirma') }}">Fiyatlandirma</a></li>
                    <li><i class="bx bx-chevron-right"></i> <a href="{{ route('iletisim') }}">İletişim</a></li>

                </ul>
            </div>


          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Ecza Fatura</h4>
            <p>Eczafatura ile e-fatura, e-arşiv, e-deftere geçin. Şirketinizin tüm faturaları tek bir panelden kontrol edin.</p>

          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>EczaFatura</span></strong>. Bütün Hakları Saklıdır.
        </div>
        <div class="credits">

        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
