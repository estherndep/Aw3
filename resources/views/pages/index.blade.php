@extends('layouts.app')
@section('title'){{$title}}@endsection
@section('content')
    <div class="content">
        <div class="design"></div>
        <section id= "content-head">
            <div class="page-intro">
                <div class="slider-svg">
                    <div class="intro-text">
                        <h2>AWTO.<br>MEITTED.<br>LIFESTYLE.</h2>
                    </div>
                    <img src="img/home/slider.svg" alt="">
                </div>
                <div id="head-carousel" class="carousel slide carousel-fade" data-ride="carousel">
                    <div class="overlay"></div>
                    <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                    </ul>

                    <div class="carousel-inner">
                        <div class="carousel-item active" style="background-image: url('img/home/home-slider1.jpeg');"></div>
                        <div class="carousel-item" style="background-image: url('img/home/home-slider2.jpeg');"></div>
                        <div class="carousel-item" style="background-image: url('img/home/home-slider3.jpeg');"></div>
                        <div class="carousel-item" style="background-image: url('img/home/home-slider4.jpeg');"></div>
                    </div>  
                </div>
            </div>
        </section>

        <section class="content-block about-block">
            <div class="block-quote">
                <h2> 
                    Lorem ipsum dolor sit amet,
                    facilisis ligula sit justo.Eget tortor ut suspendisse dui pede.
                </h2>
            </div>
            <div class="inner row">
                 <div class="col-lg-6 about-image">
                    <div class="block-img" style="background-image: url(/img/home/about-block.jpeg);">
                    </div>
                </div>
                <div class="col-lg-6 about-content">
                    <div class="text-holder-table">
                        <div class="text-holder-cell">
                            <p> 
                                Awtomeiddia provides innovative smart home automation products and services to individuals and coorporations alike. 
                                Our solutions range from security and access control in large organisations to the lighting and comfort of our individual clients.
                            </p>
                            <div class="button-holder">
                                <div class = "box-link text-center"><a href="{{route('about')}}">KNOW MORE</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>


	    <section class = "col-12 inverse" id="services-block">
           <div class="img-block_container">
               <div class="accordian-holder">
                   @foreach($categories as $category)
                   <h4 class="accordian-title title">
                       <span class="accordian-width-block">
                           <span class="tab-title">{{$category->title}}</span>
                           <span class="tab-icon lnr lnr-cross"></span>
                       </span>
                   </h4>
                   <div class= "accordian-content">
                       <div class="accordian-content-inner accordian-width-block">
                           <div class="row">
                               <div class="col-sm-8">
                                   <div class="column-inner">
                                       <div class="column-text-title">{{$category->title}}</div>
                                       <div class="column-text-content">{{$category->description}}</div>
                                   </div>
                               </div>
                               <div class="col-sm-4">
                               <div class="column-inner">
                                   <div class="image-wrapper">
                                       <img class="single-image" src="/img/home/residential-service.jpeg" alt="">
                                   </div>
                               </div>
                               </div>
                           </div>
                       </div>
                   </div>
                   @endforeach
               </div>
           </div>
        </section> 

      
        <section class="content-block container" id="projects-block">
            <div class= "block-title centre">
                <span class="sum" style="left:0;">-Projects-</span>
                <h4>FEATURED PROJECT</h4>
            </div>
            <div class="inner row two-column">
                <div>
                    <div class="block-img" style="background-image: url('img/home/home-slider2.jpeg');"></div>
                </div>
                
                <div class="text-image-block">
                    <div class="text-holder-cell">
                        <p> 
                            Lorem ipsum dolor sit amet,
                            facilisis ligula sit justo.Eget tortor ut suspendisse dui pede, 
                            pellentesque auctor ut tellus, porttitor magnis morbi vel accumsan
                            ligula lacus.
                        </p>
                        <div class="button-holder">
                            <div class = "box-link text-center"><a href="{{route('about')}}">KNOW MORE</a></div>
                        </div>
                    </div>
                    <div class="block-img" style="background-image: url('img/home/home-slider2.jpeg');"></div>
                </div>
            </div>
        </section>
        
        <section class="content-block inverse" id="tis-block" >
            <div class="text-holder-table" id="tis-content">
                <div class="text-holder-cell">
                    <div class="title-holder">
                        <span class="sum">-OUR PARTNER-</span>
                        <h3>
                            TIS TECH
                        </h3>
                    </div>
                    <p> 
                    Partners in Offering the best home automation experience
                    with the best Price.
                    </p>
                    <div class="button-holder">
                        <div class = "box-link text-center">
                            <a href="{{route('tis')}}">KNOW MORE</a>
                        </div>
                    </div>
                </div>
            </div>  
            <div id="tis-carousel" class="carousel slide" data-ride="carousel" data-interval="5000">
                
                <div class="carousel-inner w-100" role="listbox">
                    <div id="ld-br"></div>
                    <div class="carousel-item row no-gutters active">
                        <div class="col-6 float-left sngl-itm" style="background-image: url(/img/tis/l-bell.jpg);"></div>
                        <div class="col-6 float-left sngl-itm" style="background-image: url(/img/tis/lw-pnl.jpg);"></div>
                    </div>
                    <div class="carousel-item row no-gutters">
                        <div class="col-6 float-left sngl-itm" style="background-image: url(/img/tis/vb-pnl.jpg);"></div>
                        <div class="col-6 float-left sngl-itm" style="background-image: url(/img/tis/vw-pnl.jpg);"></div>
                    </div>
                    <div class="carousel-item row no-gutters">
                        <div class="col-6 float-left sngl-itm" style="background-image: url(/img/tis/smt-bat.jpg);"></div>
                        <div class="col-6 float-left sngl-itm" style="background-image: url(/img/tis/smrt-sns.jpg);"></div>
                    </div>
                    <div class="carousel-item row no-gutters">
                        <div class="col-6 float-left sngl-itm" style="background-image: url(/img/tis/vd-bl2.jpg);"></div>
                        <div class="col-6 float-left sngl-itm" style="background-image: url(/img/tis/vd-bl.jpg);"></div>
                    </div>
                </div>
            </div>
        </section>
        
       


        <section class="content-block" id="blog-block">
            <div class= "block-title">
                <span class="sum" style="left:0;">-BLOG-</span>
                <h3>TAKE A LOOK AT OUR POSTS</h3>
            </div>	
            <div class="post-catalog-body">
                <div class="inner row">
                    <div class="sngl-post">	
                        <div class="sngl-post-img block-img">
                            <div class="block-img-title"></div>
                        </div>
                    </div>
                    <div class="sngl-post">	
                        <div class="sngl-post-img block-img">
                            <div class="block-img-title"></div>
                        </div>
                    </div>

                    <div class="sngl-post">	
                        <div class="sngl-post-img block-img">
                            <div class="block-img-title"></div>
                        </div>
                    </div>
                    
                    <div class="sngl-post">	
                        <div class="sngl-post-img block-img">
                            <div class="block-img-title"></div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="button-holder">
                <div class = "box-link"><a href="{{route('blog.index')}}">SHOW MORE</a></div>
            </div>		
	
        </section>

        <section class= "col-offset-2 container-fluid inverse" id= "contact-block">
            <div class= "col-12" style="text-align:center;">
                <span class="sum" style="left:0;">-CONTACT-</span>
                <h3>GET IN TOUCH</h3>
            </div>			
            <div class="container-fluid wrapper row">
                
                <div class="contact-item col-8 col-md-4">		
                <span class="material-icons">call</span>	
                <h6>+2348106465798</h6>			
                </div>

                <div class="contact-item  col-8 col-md-4">
                <span class="material-icons">email</span>	
                <h6>example@example.com</h6>	
                </div>

                <div class="contact-item col- 8 col-md-4">
                <span class="material-icons">location_on</span>
                <h6>61 Selly Hill, Selly Oak<br> Lagos, 105102 </h6>
               </div>
           </div>
           <div class="button-holder">
                <div class = "box-link"><a href="{{route('contact')}}">CONTACT PAGE</a></div>
           </div>
        </section>
    </div>

@endsection



	

