@extends('layouts.master_home')


@section('home_content')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>{{$efatura->title}}</h2>
                <ol>
                    <li><a href="{{ route('anasayfa') }}">Anasayfa</a></li>
                    <li>{{$efatura->title}}</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= About Us Section ======= -->
    <section id="about-us" class="about-us">
        <div class="container" data-aos="fade-up">

            <div class="row content">
                <div class="col-lg-12" data-aos="fade-right">
                    <h3>{{$efatura->title}}</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                    <h4>{{$efatura->description_alt}} ;</h4>
                    <ul>
                        @foreach($efaturalar as $efaturas)
                        <li><i class="ri-check-double-line"></i> {{$efaturas->description}}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-right">
                    <h4>{{$earsiv->description_alt}};</h4>
                    <ul>
                        @foreach($earsivler as $earsiv)
                            <li><i class="ri-check-double-line"></i> {{$earsiv->description}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->



@endsection
