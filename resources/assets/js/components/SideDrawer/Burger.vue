<template>
    <nav>
        <div class="icon"
            v-bind:class= "{active: isActive}"
            v-on:click = "toggleActive">
            <div class="burger">
            </div>
        </div>
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
      isActive: false,
      count: 0
    };
  },

  methods: {
    toggleActive: function() {
      this.isActive = !this.isActive;
      this.count += 1;
      if (this.count == 1) {
        console.log(this.count);
      }
    }
  },

  mounted() {
    console.log("Burger mounted.");
  }
};
</script>