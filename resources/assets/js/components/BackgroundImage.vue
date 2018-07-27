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
		height: 50vh;
	}

	/*********** iPhones and SmartPhones ******************/
@media only screen and (max-width: 740px) {
	img{
		height: 30vh;
	}
}
@media only screen and (max-width: 740px) and (orientation: landscape) {
	img{
		height: 75vh;
	}
}


/*********** Device = Tablets, Ipads (portrait)*/
@media only screen and (min-width: 768px) {
	img{
		height: 40vh;
	}
}
@media only screen and (min-width: 768px) and (orientation: landscape) {
	img{
		height: 70vh;
	}
}

/* Laptops (1280) */
@media only screen and (min-width: 1280px) {
  	img{
		height: 80vh;
	}
}
@media only screen and (min-width: 1280px)  and (orientation: landscape){
    img{
		height: 50vh;
	}
}

/* other laptops */
@media only screen and (min-width: 1440px) {
   	
}
@media only screen and (min-width: 1440px)  and (orientation: landscape){
    
}

/* desktops- wide screen */
@media only screen and (min-width: 1900px) {
    img{
		width: 100%;
		height: 50vh;
	}
}
@media only screen and (min-width: 1900px)  and (orientation: landscape){
   
}


</style>