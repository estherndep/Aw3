@extends('layouts.app')

@section('content')
    <div class="content">
        <section class="parallax-head-block " id="service-head-block">
            <div class="menu-backdrop" style="background-image: url(/img/services/{{$category->title}}/head.jpeg)">
                <div class="overlay"></div>
                <div class="text-holder-table">
                    <div class="text-holder-cell">
                        <div class="title-holder">
                            <h1>{{$category->title}} services</h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="service-content row inverse">
            <div class="service-description">
            </div>
            <div class="img-block col-4"></div>
            <div class="service-description"></div>
            <div class="img-block col-12">
                <div class="service-description">
                    <div class="overlay"></div>
                </div>
                <div class="service-description">
                    <div class="overlay"></div>
                </div>
            </div>
        </section>
        <section class="contact-link-block inverse">
            <div class="box-link">
                <a href="{{route('contact')}}" class="contact-link">
                    <h3>Let's work together</h3>
                    <h6>We could just be exactly what you're looking for.</h6>
                </a>
            </div>
            @include('layouts.contact-block')
        </section>
    </div>
@endsection
