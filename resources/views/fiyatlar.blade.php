@extends('layouts.master_home')


@section('home_content')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Fiyatlandırma</h2>
                <ol>
                    <li><a href="{{ route('anasayfa') }}">Anasayfa</a></li>
                    <li>Fiyatlandırma</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Eczaneler İçin Fiyatlarımız</h2>
            </div>
            <h3>
                <span>İşletmenizin ihtiyacına göre paket seçin. Uygun fiyat, kolay kullanım ile fatura göndermeye başlayın.</span></h3>
            <div class="row">

                @foreach($fiyatlar as $fiyat)
                    <div class="col-lg-3 col-md-6">
                        <div class="box">
                            <h3>{{$fiyat->title}}</h3>
                            <h4><sup></sup>{{$fiyat->fiyat}}<span></span></h4>
                            <ul>
                                @foreach(explode(',',$fiyat->description) as $list)
                                    <li>{{$list}}</li>
                                @endforeach
                            </ul>

                        </div>
                    </div>
                @endforeach

            </div>
            <br>
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Diğer İşletmeler İçin Fiyatlarımız</h2>
                </div>
                <h3>
                <span>İşletmenizin ihtiyacına göre paket seçin. Uygun fiyat, kolay kullanım ile fatura göndermeye başlayın.</span></h3>
                <div class="row">

                    @foreach($fiyatlar as $fiyat)
                        <div class="col-lg-3 col-md-6">
                            <div class="box">
                                <h3>{{$fiyat->title}}</h3>
                                <h4><sup></sup>{{$fiyat->fiyat}}<span></span></h4>
                                <ul>
                                    @foreach(explode(',',$fiyat->description) as $list)
                                        <li>{{$list}}</li>
                                    @endforeach


                                </ul>
                                {{--                            <div class="btn-wrap">--}}
                                {{--                                <a href="#" class="btn-buy">Buy Now</a>--}}
                                {{--                            </div>--}}
                            </div>
                        </div>
                    @endforeach

                </div>

        </div>
        </div>
    </section><!-- End Pricing Section -->


@endsection
