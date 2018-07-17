<template>

    <div class="content">
		
        <div id= "main">
            
            <div class=" col-10 col-offset-1 col-md-8 inverse" id= "feature">
                <div class= "intro-block col-5 col-md-3" id="projects">
                    <h5><a href="">PROJECTS</a></h5>
                </div>
                <div class= "intro-block col-5 col-md-3" id="services">
                    <h5><a href ="">SERVICES</a></h5>
                </div>
            </div>
        </div>


        <div class="row" id="about-block">
            <div class="col-12 col-md-5" id="about-content">
                <span class="sum">-ABOUT US-</span>
                <h3>
                    WE ENHANCE<br>YOUR WORLD
                </h3>
                <p> 
                    Lorem ipsum dolor sit amet,
                    facilisis ligula sit justo.Eget tortor ut suspendisse dui pede, 
                    pellentesque auctor ut tellus, porttitor magnis morbi vel accumsan
                    ligula lacus. Ipsum dictum odio, luctus convallis expedita consectetuer
                    vivamus pellentesque, eu suspendisse tellus leo sagittis wisi a, amet 
                    a felis sed lectus
                </p>
                <div class = "box-link text-center"><a>KNOW MORE</a></div>
            </div>


            <div class="col-12 col-md-7" id="about-image">
                <img src="" alt="">
                <div class="top-corner">
                    <div class="vertical-line"></div>
                    <div class="horizontal-line"></div>
                </div>
                <div class="bottom-corner">
                    <div class="vertical-line"></div>
                    <div class="horizontal-line"></div>
                </div>

            </div>
	    </div>


	    <div class = "container-fluid inverse" id="services-block">
	    </div>


        <div class= "col-offset-2 container-fluid" id= "blog-block">
            <div class= "col-12" style="text-align:center;">
                <span class="sum" style="left:0;">-BLOG-</span>
                <h3>TAKE A LOOK AT OUR POSTS</h3>
            </div>			
            <div class="container-fluid wrapper row">
                <div class="featured-blog col-5 col-md-2">				
                </div>

                <div class="featured-blog col-5 col-md-2">				
                </div>

                <div class="featured-blog col-5 col-md-2">
                        
                </div>
                
                <div class="featured-blog col-5 col-md-2">
                        
                </div>
                
            </div>
		    <div class = "box-link text-center center"><a>SHOW MORE</a></div>
	
	    </div>

        <div class= "col-offset-2 container-fluid inverse" id= "contact-block">
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
		   <div class = "box-link text-center center"><a>CONTACT PAGE</a></div>
        </div>
    </div>

</template>

<script>
import './Index.scss';

export default {
  mounted() {
    console.log("Index mounted.");
  }
};
</script>
