@extends('layouts.app')

@section('content')
    <section class="mw-100 overflow-hidden">
        <landing-slider></landing-slider>
    </section>

    <section class="section intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <span class="text-color ">What we do</span>
                        <h2 class="mt-3 content-title-min-primary">TOWARDS A BETTER WORLD</h2>
                    </div>
                </div>
                <div class="col-12">
                    <p class="text-center">Our operations and principles are guided by our founders’ belief in a fairer
                        world and that
                        development is possible in all parts of the world. <span style="color: rgba(7, 171, 85, 1) ">we are geared towards tackling the problems
                            the world is facing today. </span></p>
                </div>
            </div>

            <objectives-slider></objectives-slider>

        </div>
    </section>

    <div class="cta-block section">
        <div class="container">
            <div class="row justify-content-center ">
                <div class="col-lg-7 col-md-12">
                    <div class="cta-content text-center">
                        <h2 class="text-white text- mb-5 mt-3">We are a non-profit organisation established for
                            charitable purposes. We believe in development co-operation, not to create a perfect world
                            but to help create a better one.</h2>
                        <a href="/get-involved" class="btn btn-main rounded">Get involved</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section latest-blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2 class="mt-3 content-title-min-primary">Latest projects</h2>
                    </div>
                </div>
            </div>

            @if($projects->count())
                <div class="row justify-content-start">
                    @foreach($projects as $project)
                        <div class="col-lg-4 col-md-6 mb-5 mb-lg-0">
                            <div class="card blog-item">
                                <img src="{{ asset('storage/'. $project->cover_image) }}" alt="" class="img-fluid"
                                     style="max-height: 200px">

                                <div class="card-body mt-2">
                                    <span class="text-sm text-color text-uppercase font-weight-bold">{{ $project->date->format('Y-M-d') }}</span>
                                    <h3 class="mb-3"><a href="{{ '/projects/' . $project->slug }}"
                                                        class="">{{ $project->title }}</a></h3>
                                    <p class="text-sm text-justify">{{ $project->short_description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-divider"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="section intro">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2 class="mt-3 content-title-min-primary">Events</h2>
                    </div>
                </div>
            </div>

            <events-slider></events-slider>

        </div>
    </section>



    <section class="section gallery">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 text-center">
                    <div class="section-title">
                        <h2 class="mt-3 content-title-min-primary">Our gallery</h2>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="gallery-wrap">
                <div class="row">
                    @foreach($photos as $photo)
                        <div class="gallery-item col-6 col-md-3">
                            <a href="{{ url($photo->getFullUrl()) }}" class="gallery-popup thumbnail h-auto">
                                <img src="{{ url($photo->getFullUrl()) }}" alt=""
                                     class="img-fluid img-thumbnail w-100">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-divider"></div>
                </div>
            </div>
        </div>
    </section>

@endsection