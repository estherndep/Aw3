@extends('layouts.app')

@section('content')
    <div class="content inverse">
            <section class="col-10" id="service-head-block" style="height: 100%;">
                <div class="row">
                        <div class="col-12 col-lg-8" id="featured-service"></div>
                        <div class="row col-lg-4" id="h-featured-services">
                                <div class="col-12"></div>
                                <div class="col-12"></div>
                        </div>
                </div>
            </section>
            <section class="ml-auto mr-auto col-10" id="service-content">
                <div class="section-title"><h2>OUR SERVICES</h2></div>
                <div id = "service-header">
                        <div class="service-btn active" id="residential-btn"><a>RESIDENTIAL </a></div>
                        <div class="service-btn" id="commercial-btn"><a>COMMERCIAL</a></div>
                        <div class="service-btn" id="hospitality-btn"><a>HOSPITALITY</a></div>              
                </div>
                <div id = "service-body">
                        <div class="service-block row active" id ="residential-block">
                                <div class="sngl-service">
                                        <a></a>
                                </div>
                                <div class="sngl-service">
                                <a></a>
                                </div>
                                <div class="sngl-service">
                                <a></a>
                                </div>
                                <div class="sngl-service">
                                <a></a>
                                </div>
                                <div class="sngl-service">
                                <a></a>
                                </div>
                        </div>
                        <div class="service-block row" id ="commercial-block">
                                <div class="sngl-service">
                                </div>
                                <div class="sngl-service">
                                </div>
                                <div class="sngl-service">
                                </div>
                                <div class="sngl-service">
                                </div>
                                <div class="sngl-service">
                                </div>
                        </div>
                        <div class="service-block row" id ="hospitality-block"></div>
                </div>
            </section>
    </div>
@endsection