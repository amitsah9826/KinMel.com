<?php 
//session_start();

?>


			<style>
		.header-top-inner{ 
      box-shadow: 0 0 5px 0 ; 
      background: inherit; 
      backdrop-filter: blur(10px); 
      <!--margin: 100px; according to your need--> 
}
</style>

<div class="top-bar animate-dropdown""<body style="background-color:#FAEBD7 ;">

	<div class="container">
		<div class="header-top-inner">
			<div class="cnt-account">
				<ul class="list-unstyled">

<?php if(strlen($_SESSION['login']))
    {   ?>
				<li><a href="#"><i class="icon fa fa-user"></i>Welcome -<?php echo htmlentities($_SESSION['username']);?></a></li>
				<?php } ?>

					<li><a href="my-account.php"><i class="icon fa fa-user"></i>My Account</a></li>
					<!--<li><a href="my-wishlist.php"><i class="icon fa fa-heart"></i>Wishlist</a></li>
					<li><a href="my-cart.php"><i class="icon fa fa-shopping-cart"></i>My Cart</a></li>
					<li><a href="checkout.php"><i class="icon fa fa-key"></i>Checkout</a></li>-->
					<?php if(strlen($_SESSION['login'])==0)
    {   ?>
<li><a href="login.php"><i class="icon fa fa-user"></i>Login</a></li>
<?php }
else{ ?>
	
				<li><a href="logout.php"><i class="fas fa-sign-in-alt"></i>Logout</a></li>
				
				<?php } ?>	
				</ul>
			</div><!-- /.cnt-account -->

<div class="cnt-block">
	
				<ul class="list-unstyled list-inline">
					
					<li class="dropdown dropdown-small">
						
						<a href="track-orders.php"  class="""dropdown-toggle" ><span class="key">Track Order</b></a>
						
					</li>

				
				</ul>
			</div>
			
			<div class="clearfix"></div>
		</div><!-- /.header-top-inner -->
	</div><!-- /.container -->
</div><!-- /.header-top -->
