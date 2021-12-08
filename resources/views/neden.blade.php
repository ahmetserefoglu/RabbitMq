@extends('layouts.master_home')


@section('home_content')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Neden Ecza-Fatura'ya Geçmeliyim ?</h2>
                <ol>
                    <li><a href="{{ route('anasayfa') }}">Anasayfa</a></li>
                    <li>Neden Ecza-Fatura'ya Geçmeliyim ?</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="row">

                @foreach($nedenler as $neden)
                    <div class="col-lg-4 col-md-8 d-flex" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box {{$neden->icon}}">

                            <h6>{{$neden->title}}</h6>
                            <p class="text-justify">{{$neden->description}}</p>
                        </div>
                    </div>
                    <br>
                @endforeach


            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
{{--    <section id="features" class="features">--}}
{{--        <div class="container" data-aos="fade-up">--}}

{{--            <div class="section-title">--}}
{{--                <h2>Features</h2>--}}
{{--                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>--}}
{{--            </div>--}}

{{--            <div class="row">--}}
{{--                <div class="col-lg-3 col-md-4">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="ri-store-line" style="color: #ffbb2c;"></i>--}}
{{--                        <h3><a href="">Lorem Ipsum</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>--}}
{{--                        <h3><a href="">Dolor Sitema</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 mt-4 mt-md-0">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="ri-calendar-todo-line" style="color: #e80368;"></i>--}}
{{--                        <h3><a href="">Sed perspiciatis</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="ri-paint-brush-line" style="color: #e361ff;"></i>--}}
{{--                        <h3><a href="">Magni Dolores</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 mt-4">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="ri-database-2-line" style="color: #47aeff;"></i>--}}
{{--                        <h3><a href="">Nemo Enim</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 mt-4">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="ri-gradienter-line" style="color: #ffa76e;"></i>--}}
{{--                        <h3><a href="">Eiusmod Tempor</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 mt-4">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>--}}
{{--                        <h3><a href="">Midela Teren</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 mt-4">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>--}}
{{--                        <h3><a href="">Pira Neve</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 mt-4">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="ri-anchor-line" style="color: #b2904f;"></i>--}}
{{--                        <h3><a href="">Dirada Pack</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 mt-4">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="ri-disc-line" style="color: #b20969;"></i>--}}
{{--                        <h3><a href="">Moton Ideal</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 mt-4">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="ri-base-station-line" style="color: #ff5828;"></i>--}}
{{--                        <h3><a href="">Verdo Park</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-3 col-md-4 mt-4">--}}
{{--                    <div class="icon-box">--}}
{{--                        <i class="ri-fingerprint-line" style="color: #29cc61;"></i>--}}
{{--                        <h3><a href="">Flavor Nivelanda</a></h3>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section><!-- End Features Section -->--}}


@endsection
