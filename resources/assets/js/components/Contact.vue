<!--<template>
  <div class="content">

    <div class="wrapper row">

      <div class="col-12 col-md-5" id="info-block">
        <h3>GET IN TOUCH</h3>

        <h6>We'd love to hear from you</h6>

        <div class="wrapper row">
          <div class="info-item col-12">		
            <span class="material-icons">call</span>	
            <h6>+2348106465798</h6>			
          </div>

          <div class="info-item  col-12">
            <span class="material-icons">email</span>	
            <h6>example@example.com</h6>	
          </div>

          <div class="info-item col-12">
            <span class="material-icons">location_on</span>
            <h6>61 Selly Hill, Selly Oak<br> Lagos, 105102 </h6>
          </div>               
        </div>   
      </div>

      <div class="col-12 col-md-7" id="message-block">

        <form :action="action('MessageController@store')" method="post">
          <input name="_token" type="hidden" :value="csrf_token()"/>
          <input class="col-10" type="text" id="name" name="name" placeholder="Full name">
          <input class="col-10" type="email" id="email" name="email" placeholder="Email">
          <input class="col-10" type="text" id="subject" name="subject" placeholder="Subject">
          <textarea class="col-10" id="subject" name="subject" placeholder="Message"></textarea>
          <input class="col-4 box-link" type="submit" value="Submit">          
        </form>    

      </div> 
    </div>  

    

    

    <div class="col-12" id="map-block">    
      <div class="container col-11 col-offset-1" id="map">
        <GmapMap
          :center="{lat:10, lng:10}"
          :zoom="7"
          map-type-id="terrain"
          style="width: 100%; height: 100%">

            <GmapMarker
              :key="index"
              v-for="(m, index) in markers"
              :position="m.position"
              :clickable="true"
              :draggable="true"
              @click="center=m.position"
            />

        </GmapMap>    
      </div>
    </div>  
    
  </div>
</template>
<script>
import "./Contact.scss";
export default {
  
  mounted() {
    console.log("contact mounted");
  }
};
</script>

-->