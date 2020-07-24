@extends('layouts.app')

@section('content')

    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h3 class="text-capitalize mb-2 h3 text-white">Article</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section cause-single">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <img src="{{ asset('storage/'. $article->cover) }}" alt="" class="img-fluid img-thumbnail w-100" style="max-height: 250px">
                </div>
                <div class="col-12 col-sm-8">
                    <div class="single-details">
                        <h3 class="mb-2">{{ $article->title }}</h3>
                        <p>published: {{ $article->published_on->diffForHumans() }}</p>
                    </div>
                    <p>{!! $article->body !!}</p>
                </div>
            </div>
        </div>
    </section>

@endsection
