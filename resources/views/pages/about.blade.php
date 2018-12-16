@extends('layouts.app')

@section('content')
<div class="content">
        <section class="parallax-head-block " id="service-head-block">
                <div class="menu-backdrop" style="background-image: url(/img/pages/about/head.jpeg);">
                        <div class="overlay"></div>
                        <div class="text-holder-table">
                                <div class="text-holder-cell">
                                        <div class="title-holder">
                                                <h1>WHO WE ARE</h1>
                                        </div>
                                </div>
                        </div>
                </div>
        </section>
        <section class="content-block about-block inverse">
                <div class="row">
                    <div class="col-12"></div>
                    <div class="inner row">
                        <div class="col-lg-6 about-content">
                            <div class="text-holder-table">
                                <div class="text-holder-cell">
                                    <p> 
                                        Awtomeiddia provides innovative smart home automation products and services to individuals and coorporations alike. 
                                        Our solutions range from security and access control in large organisations to the lighting and comfort of our individual clients.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 about-image">
                            <div class="block-img" style="background-image: url(/img/pages/about/sub.jpeg);">
                            </div>
                        </div>
                </div>
                    <div class="col-12"></div>
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
