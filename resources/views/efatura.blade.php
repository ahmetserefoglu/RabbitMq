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
                <div class="col-lg-6" data-aos="fade-right">
                    <h3>{{$efatura->title}}</h3>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left">
                    <p >
                        {{$efatura->description}}
                    </p>
                    <p >
                        {{$efatura->description_alt}}
                    </p>
{{--                    <ul>--}}
{{--                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>--}}
{{--                        <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>--}}
{{--                        <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>--}}
{{--                    </ul>--}}
{{--                    <p class="font-italic">--}}
{{--                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore--}}
{{--                        magna aliqua.--}}
{{--                    </p>--}}
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->



@endsection
