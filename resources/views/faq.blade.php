@extends('layouts.master_home')


@section('home_content')

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Sık Sorulan Sorular</h2>
                <ol>
                    <li><a href="{{ route('anasayfa') }}">Anasayfa</a></li>
                    <li>Sık Sorulan Sorular</li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Sık Sorulan Sorular</h2>
            </div>

            <div class="faq-list">
                <ul>
                   @foreach($sorular as $soru)
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


@endsection
