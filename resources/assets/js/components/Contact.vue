<template>
  <div class="content container-fluid">
    <div class="row">
        <div class="col-12 col-md-6 inverse" id="message-block">
          <h3>GET IN TOUCH</h3>
          <h6>We'd love to hear from you</h6>
          <form class="row" action="/action_page.php" >
            <input class="col-10" type="text" id="name" name="name" placeholder="Full name">
            <input class="col-10" type="email" id="email" name="email" placeholder="Email">
            <input class="col-10" type="text" id="subject" name="subject" placeholder="Subject">
            <textarea class="col-10" id="subject" name="subject" placeholder="Message" style="height:8rem"></textarea>
            <input class="col-10" type="submit" value="Submit">
          </form>

          </div>  
        <div class="col-12 col-md-6" id="map-block">
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
  components: {},
  mounted() {
    console.log("contact mounted");
  }
};
</script>

