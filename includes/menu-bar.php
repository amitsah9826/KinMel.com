
<div class="header-nav animate-dropdown""<body style="background-color:;">
    <div class="container">


        <div class="yamm navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button data-target="#mc-horizontal-menu-collapse" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                                  </button>
            </div>
            <div class="nav-bg-class">
            <style>
*{



  border-radius: 15px;
  box-shadow: 0 0px #FFFFFF;
}

.button:hover {background-color: #ffee00}

.button:active {
  background-color: #00FF00;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>
                <div class="navbar-collapse collapse" id="mc-horizontal-menu-collapse">
	<div class="nav-outer">
		<ul class="nav navbar-nav">
			<li class="bg-navy">
				<a href="index.php" data-hover="dropdown" class="dropdown-toggle">Home</a>
        
							</li>
      
      <html lang="en" dir="ltr">
     
   <head>
    <style>
      
        @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
html,body{
  display: center;
  height: 100%;
  width: 100%;
  place-items: center;
  background: linear-gradient(315deg, #ffffff 0%, #d7e1ec 2000%);
}
.wrapper{
  display: inline-flex;
}
.wrapper .icon{
  margin: 0 20px;
  text-align: center;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
  position: relative;
  z-index: 2;
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon span{
  display: block;
  height: 60px;
  width: 60px;
  background: #fff;
  border-radius: 50%;
  position: relative;
  z-index: 2;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon span i{
  line-height: 60px;
  font-size: 25px;
}
.wrapper .icon .tooltip{
  position: absolute;
  top: 0;
  z-index: 1;
  background: #fff;
  color: #fff;
  padding: 10px 18px;
  font-size: 20px;
  font-weight: 500;
  border-radius: 25px;
  opacity: 0;
  pointer-events: none;
  box-shadow: 0px 10px 10px rgba(0,0,0,0.1);
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon:hover .tooltip{
  top: -70px;
  opacity: 1;
  pointer-events: auto;
}
.icon .tooltip:before{
  position: absolute;
  content: "";
  height: 15px;
  width: 15px;
  background: #fff;
  left: 50%;
  bottom: -6px;
  transform: translateX(-50%) rotate(45deg);
  transition: 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
}
.wrapper .icon:hover span{
  color: #fff;
}
.wrapper .icon:hover span,
.wrapper .icon:hover .tooltip{
  text-shadow: 0px -1px 0px rgba(0,0,0,0.4);
}
.wrapper .facebook:hover span,
.wrapper .facebook:hover .tooltip,
.wrapper .facebook:hover .tooltip:before{
  background: #3B5999;
}
.wrapper .twitter:hover span,
.wrapper .twitter:hover .tooltip,
.wrapper .twitter:hover .tooltip:before{
  background: #46C1F6;
}
.wrapper .instagram:hover span,
.wrapper .instagram:hover .tooltip,
.wrapper .instagram:hover .tooltip:before{
  background: #e1306c;
}
.wrapper .github:hover span,
.wrapper .github:hover .tooltip,
.wrapper .github:hover .tooltip:before{
  background: #333;
}
.wrapper .youtube:hover span,
.wrapper .youtube:hover .tooltip,
.wrapper .youtube:hover .tooltip:before{
  background: #DE463B;
}
</style>
<style>
    
    .carousel-item>img{
        object-fit:fill !important;
    }
    #carouselExampleControls .carousel-inner{
        height: 450px;px !important;

</style>
              <?php $sql=mysqli_query($con,"select id,categoryName  from category limit 6");
while($row=mysqli_fetch_array($sql))
{
    ?>

			<li class="dropdown yamm">
      
				<a href="category.php?cid=<?php echo $row['id'];?>"> <?php echo $row['categoryName'];?></a>
			
			</li>
			<?php } ?>

			
		</ul><!-- /.navbar-nav -->
  
		<div class="clearfix"></div>	
    
    			
	</div>
  
</div>



            </div>
            
        </div>
        
    </div>
    
</div>

<img src="flow9.png" alt="Flowers in Chania" width="1600" height="80">
<div class="container">
<div id="brands-carousel" class="logo-slider wow fadeInUp">
<p><center><h5><p id="amit">Choose Categories</p></h5></center>
<style>
					@keyframes amit {
  8% {
    opacity: 1;
  }
  50% {
    opacity: 0;
  }
  100% {
    opacity: 1;
  }
}


/* attach the animations to the elements via their id attribute using a delay of 0s and 50% of the runtime respectively */


#amit {
  animation: amit 2s infinite 1.2s;
}
</style>
		<div class="logo-slider-inner">	
			<div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
				<div class="item">
				
          <a href="http://localhost/KinMel.com/sub-category.php?scid=14" class="image">
						<img data-echo="brandsimage/3.png" " width="70" height="80" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="http://localhost/KinMel.com/sub-category.php?scid=16" class="image">
						<img data-echo="brandsimage/7.png" width="70" height="80" src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="http://localhost/KinMel.com/sub-category.php?scid=15" class="image">
						<img data-echo="brandsimage/8.png" width="70" height="80"  src="assets/images/blank.gif" alt="">
					</a>	
				</div><!--/.item-->

				<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/12.png" width="70" height="80"  src="assets/images/blank.gif" alt="">
					</a>	
				</div>

				<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/15.png" width="70" height="80" src="assets/images/blank.gif" alt="">
					</a>	
				</div>

				

				<div class="item">
					<a href="http://localhost/KinMel.com/product-details.php?pid=26" class="image">
						<img data-echo="brandsimage/20.png" width="70" height="80"  src="assets/images/blank.gif" alt="">
					</a>	
				</div>
<div class="item">
					<a href="#" class="image">
						<img data-echo="brandsimage/21.png" width="70" height="80" src="assets/images/blank.gif" alt="">
					</a>	
				</div>
				




		    </div><!-- /.owl-carousel #logo-slider -->
		</div><!-- /.logo-slider-inner -->
	
</div><!-- /.logo-slider -->
</div>