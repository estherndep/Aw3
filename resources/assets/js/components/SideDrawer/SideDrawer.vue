
<template>
	<div class="side-drawer" 
	     ref="drawer">
		<div class="container">
			<ul>
				<div id="main-content">
					<li><a>Projects</a></li>
					<li><a>Services</a></li>
				</div>
				<div id="sub-content">
					<li><a style="color: darkred">Tesla</a></li>
					<div id="sub-sub-content">
						<li><a>Products</a></li>
						<li><a>Services</a></li>
					</div>
					<li><a>About</a></li>
					<li><a>Blog</a></li>
					<li><a>Contact us</a></li>
				</div>
			</ul>
		</div>
	</div>
</template>

<script>
export default {
  mounted() {
    console.log("SideDrawer mounted.");
  }
};
</script>