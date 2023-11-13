<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head""<body style="background-color:#98a0a3;"><i class="fa fa-fw fa-align-left"></i> Categories</div>        
    <nav class="yamm megamenu-horizontal" role="navigation">
  
        <ul class="nav">
            <li class="dropdown menu-item">
              <?php $sql=mysqli_query($con,"select id,categoryName  from category");
while($row=mysqli_fetch_array($sql))
{
    ?>
                <a href="category.php?cid=<?php echo $row['id'];?>" class="dropdown-toggle"><img src="Untitled-3 copy.png" alt="Flowers in Chania" width="50" height="50"> <i class=""></i>
                <?php echo $row['categoryName'];?></a>
                <?php }?>
                        
</li>
</ul>
    </nav>
    <!DOCTYPE html>
<html>
<body>

<video width="250" height="140" controls autoplay muted loop>
  <source src="sd.mp4" type="video/mp4">
  <source src="asd.mp4" type="video/mp4">
 

</video>

</body>
</html>
<center><h5>Checkout This Product</h5></center>
<!DOCTYPE html>
<html>
<body>

<video width="250" height="140" controls autoplay muted loop >
 </a>   <source src="ww.mkv" type="video/mp4">
</video>
</body>
</html>
 
</div>


