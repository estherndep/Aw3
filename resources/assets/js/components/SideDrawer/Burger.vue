<template>
    <nav>
        <div class="icon"
            v-bind:class= "{active: isActive}"
            v-on:click = "toggleActive">
            <div class="burger">
            </div>
        </div>
        <div v-bind:class= "{active: isActive}"
         class = "full-overlay"></div>
        <drawer v-bind:class= "{active: isActive}"></drawer>
    </nav>
</template> 

<script>
import SideDrawer from "./SideDrawer.vue";
import "./SideDrawer.scss";

export default {
  components: {
    drawer: SideDrawer
  },
  data: function() {
    return {
      isActive: false
    };
  },

  methods: {
    toggleActive: function() {
      this.isActive = !this.isActive;

      var element = document.getElementsByClassName("content");
      if (this.isActive) {
        element[0].classList.add("no-scroll");
      } else {
        element[0].classList.remove("no-scroll");
      }
    }
  },

  mounted() {
    console.log("Burger mounted.");
  }
};
</script>