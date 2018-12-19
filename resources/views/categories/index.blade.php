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
                @foreach($services as $service)
                        <div class="service" style="background-image: url(/img/services/{{$category->title}}/{{$service->image}})">
                                <a href="/services/{{$category->title}}/{{$service->id}}">
                                        <div class="text-holder-table">
                                                <div class="text-holder-cell">
                                                        <div class="title-holder">
                                                                <h4>{{$service->title}}</h4>
                                                        </div>
                                                </div>
                                        </div>
                                </a>
                        </div>
                @endforeach
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
