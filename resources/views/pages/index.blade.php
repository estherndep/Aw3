@extends('layouts.app')
@section('title'){{$title}}@endsection
@section('content')
    <div class="content">
        <div id="design"></div>
        <section id= "main">
            
            <div class=" col-10 col-offset-1 col-md-8 col-xl-6 inverse" id= "feature" >
                <div id="feature-img" style="background-image: url(/img/feat-img.jpg);"></div>
                <div class = "overlay"></div>
                <div class= "intro-block col-5 col-md-3" id="projects">
                    <a href="{{route('projects')}}">PROJECTS</a>
                </div>
                <div class= "intro-block col-5 col-md-3" id="services">
                    <a href="{{route('services')}}">SERVICES</a>
                </div>
            </div>
        </section>


        <section class="col-10 col-md-11 ml-auto mr-auto" id="about-block">
            <div class="row" >
                <div class="col-12 col-md-5" id="about-content">
                    <span class="sum">-ABOUT US-</span>
                    <h3>
                        WE ENHANCE<br>YOUR WORLD
                    </h3>
                    <p> 
                        Lorem ipsum dolor sit amet,
                        facilisis ligula sit justo.Eget tortor ut suspendisse dui pede, 
                        pellentesque auctor ut tellus, porttitor magnis morbi vel accumsan
                        ligula lacus.
                    </p>
                    <div class = "box-link text-center"><a>KNOW MORE</a></div>
                </div>


                <div class="col-12 col-md-7" id="about-image">
                    <div class="block-img"style="background-image: url(/img/abt-block.jpg);">
                        <div class="tp-corner"></div>
                        <div class="btm-corner"></div>
                        <div class="overlay"></div>
                    </div>
                    

                </div>
            </div>
            
        </section>


	    <section class = "col-12 inverse" id="services-block">
            <div class="row">
                <a href="{{route('services')}}" class="service-slide-block col-md-4">
                    <img src="{{asset('/img/com-slim.jpg')}}" alt="commercial" class="slim">
                    <div class="overlay">
                        <div class="caption">
                            <h4>Commercial</h4>
                            <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Curabitur pretium risus in turpis eleifend, 
                            in suscipit neque porta.</p>
                        </div>
                    </div>     
                </a>
                <a href="{{route('services')}}" class="service-slide-block col-md-4">
                    <img src="{{asset('/img/res-slim.jpg')}}" alt="residential" class="slim">
                    <div class="overlay">
                        <div class="caption">
                            <h4>Residential</h4>
                            <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Curabitur pretium risus in turpis eleifend, 
                            in suscipit neque porta.</p>
                        </div>
                    </div>  
                </a>
                <a href="{{route('services')}}" class="service-slide-block col-md-4">
                        <img src="{{asset('/img/hos-slim.jpg')}}" alt="hospitality">
                        <div class="overlay">
                            <div class="caption">
                                <h4>Hospitality</h4>
                                <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Curabitur pretium risus in turpis eleifend, 
                                in suscipit neque porta.</p>
                            </div>
                        </div>
                </a>
            </div> 
        </section> 

       <div id="services-carousel" class="carousel" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <a href="{{route('services')}}">
                    <img src="{{asset('/img/com-c.jpg')}}" alt="Commercial services" class="d-block w-100" >
                    <div class="overlay">
                        <div class="caption">
                            <h4>Commercial</h4>
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Curabitur pretium risus in turpis eleifend, 
                                in suscipit neque porta.
                            </p>
                        </div>
                    </div> 
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="{{route('services')}}">
                    <img src="{{asset('/img/res-c.jpg')}}" alt="Residential services" class="d-block w-100" >   
                    <div class="overlay">
                        <div class="caption">
                            <h4>Residential</h4>
                            <p>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Curabitur pretium risus in turpis eleifend, 
                                in suscipit neque porta.
                            </p>
                        </div>
                    </div> 
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="">
                    <img class="d-block w-100" src="{{asset('/img/hos-c.jpg')}}" alt="Hospitality">
                    <div class="overlay">
                    <div class="caption">
                        <h4>Hospitality</h4>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Curabitur pretium risus in turpis eleifend, 
                            in suscipit neque porta.
                        </p> 
                    </div>
                        
                    </div> 
                    </a>
                </div>
            </div>
        
        </div>
        <!-- <div id="prjcts-block" class="col-10 col-md-11 ml-auto mr-auto">
            <div class="row prjects-content col-6">
                <div class="p-img col-12" style="background-image: url(/img/abt-block.jpg);">
                    <div class="btm-corner"></div>
                    <div class="overlay"></div>
                </div>
                <div class="p-img col 12" style="background-image: url(/img/abt-block.jpg);"></div>
            </div>
            <div class="row prjects-content col-6">
                <div class="p-img" style="background-image: url(/img/abt-block.jpg);"></div>
                <div class="p-img"style="background-image: url(/img/abt-block.jpg);">
                    <div class="btm-corner"></div>
                    <div class="overlay"></div>
                </div>
            </div>
        </div> -->
        
        <section id="tis-block" class="inverse">
            <div class="tis-content row col-10 col-md-11 ml-auto mr-auto">
                <div class="col-12 col-md-5 " id="tis-content">
                    <span class="sum">-OUR PARTNER-</span>
                    <h3>
                        TIS TECH
                    </h3>
                    <p> 
                    Partners in Offering the best home automation experience
                    with the best Price.
                    </p>
                    <div class = "box-link text-center"><a>KNOW MORE</a></div>
                </div>
            </div>  
            <div id="tis-carousel" class="carousel slide row" data-ride="carousel" data-interval="5000">
                
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
        
       


        <section id= "blog-block">
            <div class= "col-12">
                <span class="sum" style="left:0;">-BLOG-</span>
                <h3>TAKE A LOOK AT OUR POSTS</h3>
            </div>			
            <div class="container-fluid wrapper row">
                <div class="featured-blog">				
                </div>

                <div class="featured-blog">				
                </div>

                <div class="featured-blog ">
                        
                </div>
                
                <div class="featured-blog ">
                        
                </div>
                
            </div>
		    <div class = "box-link text-center center"><a>SHOW MORE</a></div>
	
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
		   <div class = "box-link text-center center"><a href="{{route('contact')}}">CONTACT PAGE</a></div>
        </section>
    </div>

@endsection



	

