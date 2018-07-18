<template>
	<div id="background-image">
        <img :src="src">
    </div>
</template>

<script>
	export default{
		data(){
			return{	
				src: 'images/rockies.jpg',
			}
		},
		mounted(){
			let random
			let images = []
			images.push('images/romania.jpg')
			images.push('images/australia.jpg')
			images.push('images/rockies.jpg')
			images.push('images/cuba.jpg')
			images.push('images/venice-1.jpg')
			images.push('images/venice-2.jpg')

			setInterval(() =>{
				random= Math.floor(Math.random() * 6);
				this.src = images[random]
			}, 3000)
		}
	}
</script>

<style scoped>

	#background-image{
		/* BOX MODEL */
		z-index: 0;

		/* ENHANCEMENT */
		background-position: center center;
		background-size: cover;
		background-repeat: no-repeat; 
	}
	img{
		width: 100%;
		height: 40vh;
	}
</style>