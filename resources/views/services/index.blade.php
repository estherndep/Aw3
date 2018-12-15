@extends('layouts.app')

@section('content')
         <div class="content">
                <section class="parallax-head-block row" id="service-head-block">
                        <div class="menu-backdrop col-12 col-sm-6" style="background-image: url(img/services-head.jpeg)"></div>
                        <div class= "head-parallax-content col-12 col-sm-6">
                        <div class="text-holder-table">
                                        <div class="text-holder-cell">
                                        <div class="title-holder">
                                                <h2>Our Services</h2>
                                        </div>
                                        <div class="button-holder">
                                                <a href="#">Wiew services</a>
                                        </div>
                                        </div>
                                </div>

                        </div>

                        
                        
                </section>
            
            <section class="service-content">
                <div id = "service-header">
                        <div class="service-link" data-block="residential-block" id="default-open"><a>RESIDENTIAL </a></div>
                        <div class="service-link" data-block="commercial-block"><a>COMMERCIAL</a></div>
                        <div class="service-link" data-block="hospitality-block"><a>HOSPITALITY</a></div>                         
                </div>
                <div class = "post-catalog-body">
                        <div class ="contrast"></div>
                        @foreach ($categories as $category)
                                <div class="post-block service-block owl-carousel owl-theme" id ="{{$category->title.'-block'}}">
                                        @foreach($services[$category->title] as $service)
                                                @if(count($service))
                                                        <div class="sngl-post">
                                                                <div class="sngl-post-img"></div>
                                                                <div class="sngl-post-title inverse">
                                                                        <h5><a>{{$service->title}}</a></h5>
                                                                        <h6>{{$category->title}}</h6>
                                                                </div>
                                                        </div>
                                                @endif
                                        @endforeach
                                </div>
                        @endforeach
                </div>
                <div class="content-block">
                        <div class="service-detail row">
                                <div class="img-block"></div>
                                <div class="description-block">
                                        <div class="block-title"></div>
                                        <div class="service-description"></div>
                                </div>
                                                
                        </div>
                </div>
            </section>
            <section class="contact-link-block inverse">
                <div class="box-link">
                        <a href="" class="contact-link">
                                <h3>Let's work together</h3>
                                <h6>We could just be exactly what you're looking for.</h6>
                        </a>
                </div>
                @include('layouts.contact-block')
            </section>
        </div>
@endsection

@section('scripts')
<!-- <script src = "{{asset('/assets/js/services.js')}}"></script> -->
@endsection