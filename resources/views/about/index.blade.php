@extends('layouts.app')

@section('content')
    <section class="section about-page">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="about-item-img">
                        <img src="{{ asset('storage/' . $about->image ) }}" alt="" class="img-fluid w-100">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="about-item-content pl-4">
                        <h2 class="mb-4 content-title"> Welcome to one world one future </h2>
                        <p class="mb-4">{!!  $about->body  !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="section pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="content text-center">
                        <h2 class="content-title mb-4">Our partners</h2>
                        <p>We believe in development co-operation, by working with diverse actors.</p>
                    </div>
                </div>
            </div>

            <partners-slider></partners-slider>
        </div>
    </div>
@endsection
