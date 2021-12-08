@extends('layouts.master_home')

@extends('layouts.body.slider')

@section('home_content')
    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><strong>{{ $abouts->title }}</strong></h2>
            </div>

            <div class="row content">
                <div class="col-lg-6" data-aos="fade-right">
                    <h3>{{ $abouts->short_dis }}</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                    <p>
                        {{ $abouts->long_dis }}
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><strong>Neden Eczafatura Kullanmalıyım?</strong></h2>
                <p>Eczafatura sağlık alanı başta olmak üzere kurumsal firmaların en çok tercih ettiği e-dönüşüm firmalarından biridir.</p>
            </div>

            <div class="row">


                @foreach($services as $service)
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon-box iconbox-blue">
                            <div class="icon">
                                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">

                                </svg>
                                <i class="{{$service->span}}"></i>
                            </div>
                            <h4><a href="">{{$service->title}}</a></h4>
                            <p>{{$service->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section><!-- End Services Section -->


@endsection
