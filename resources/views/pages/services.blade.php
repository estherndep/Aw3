@extends('layouts.app')

@section('content')
    <div class="content inverse">
            <section class="col-10" id="service-head-block" style="height: 100%;">
                <div class="row">
                        <div class="col-12 col-lg-8"></div>
                        <div class="row col-lg-4">
                                <div class="col-12"></div>
                                <div class="col-12"></div>
                        </div>
                </div>
            </section>
            <section class="ml-auto mr-auto col-10" id="service-content">
                <div class="section-title">
                        OUR SERVICES
                </div>
                <div id = "service-header">
                        <div><a class="pr-4 service-btn active" id="residential-btn" data-ref="residential-block">RESIDENTIAL </a></div>
                        <div><a class="pr-4 service-btn" id="commercial-btn" data-ref="commercial-block">COMMERCIAL</a></div>
                        <div><a class="pr-4 service-btn" id="hospitality-btn" data-ref="hospitality-block">HOSPITALITY</a></div>              
                </div>
                <div id = "service-body">
                        <div class="service-block row active" id ="residential-block">
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