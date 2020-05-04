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
                        <h2 class="mb-2 content-title-min-primary"> Welcome to one world one future </h2>
                        <p class="mb-4">{!!  $about->body  !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
