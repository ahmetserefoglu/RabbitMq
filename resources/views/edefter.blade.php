@extends('layouts.master_home')


@section('home_content')


    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>e-Defter</h2>
                <ol>
                    <li><a href="{{ route('anasayfa') }}">Anasayfa</a></li>
                    <li>e-Defter</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
        <div class="container" data-aos="fade-up">
            <div class="portfolio-details-container">

                <div class="owl-carousel portfolio-details-carousel">
                    <img src="{{asset($edefter->image)}}" class="img-fluid" alt="">
                </div>

                <div class="portfolio-info">
                    <h3>{{ $edefter->title }}</h3>
                </div>

            </div>
            <br>
            <div class="portfolio-description">
                <h3>{{ $edefter->description }}</h3>
                <p>
                    {{ $edefter->description_alt }}
                </p>
            </div>

        </div>
    </section><!-- End Portfolio Details Section -->


    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Sık Sorulan Sorular</h2>
            </div>

            <div class="faq-list">
                <ul>
                   @foreach($edefterler as $soru)
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-toggle="collapse" class="collapse" href="#faq-list-1">
                            {{$soru->title}}<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-parent=".faq-list">
                                <p>
                                    {{$soru->description}}
                                </p>
                            </div>
                        </li>

                    @endforeach

                </ul>
            </div>

        </div>
    </section><!-- End Frequently Asked Questions Section -->
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Neden Ecza-Fatura'ya Geçmeliyim ?</h2>
            </div>
            <div class="row">

                @foreach($endefterler as $neden)
                    <div class="col-lg-4 col-md-8 d-flex" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box">

                            <h6>{{$neden->title}}</h6>
                            <p class="text-justify">{{$neden->description}}</p>
                        </div>
                    </div>
                    <br>
                @endforeach


            </div>

        </div>
    </section><!-- End Services Section -->

@endsection
