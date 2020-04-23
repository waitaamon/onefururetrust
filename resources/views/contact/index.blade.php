@extends('layouts.app')

@section('content')
    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white">Contact Us</span>
                        <h1 class="text-capitalize mb-4 text-lg">Get in Touch</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12 ">
                    <div class="contact-content">
                        <h2 class="mb-5 content-title-min">We’d love to hear from you! <br>Give us call, send us a message?</h2>
                        <ul class="address-block list-unstyled">
                            <li>
                                <h6 class="mb-2">Address</h6>
                                Brookside Pearl’s, B9. Brookside Drive, Westlands, Nairobi
                            </li>
                            <li>
                                <h6 class="mb-2">email us</h6>
                                info@onefuturetrust.org
                            </li>
                            <li>
                                <h6 class="mb-2">Phone Number</h6>
                                +254 714 173614 / +254 741400 351 / +254 723 130137.
                            </li>
                        </ul>

                        <ul class="social-icons list-inline mt-5">
                            <li><h6 class="mb-3">Find us on social media</h6></li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/One-World-One-Future-103481077971543"><i
                                            class="icofont-facebook mr-2"></i></a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/OneWorldOneFut1"><i class="icofont-twitter mr-2"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 col-sm-12 ">
                    <div class="google-map mt-5 mt-lg-0">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- contact form start -->
    <section class="contact-wrap section-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form id="contact-form" class="contact__form" method="post" action="{{ route('contact.post') }}">
                        @csrf
                        <span class="text-color">Send a message</span>
                        <!-- form message -->
                        <div class="row">
                            <div class="col-12">
                                @if(session()->has('success'))
                                    <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                        Your message was sent successfully.
                                    </div>
                                @endif
                            </div>
                        </div>
                        <!-- end message -->
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Name *</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                           name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Email *</label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Subject *</label>
                                    <input type="text" class="form-control @error('subject') is-invalid @enderror"
                                           name="subject" value="{{ old('subject') }}" required autocomplete="subject">
                                    @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Phone Number *</label>
                                    <input type="number" class="form-control @error('phone') is-invalid @enderror"
                                           name="phone" value="{{ old('phone') }}" required autocomplete="phone">
                                    @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label>Your Message *</label>
                            <textarea class="form-control @error('message') is-invalid @enderror" name="message"
                                      value="{{ old('message') }}" required autocomplete="message" rows="6"></textarea>
                            @error('message')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <button class="btn btn-main rounded" name="submit" type="submit">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection