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
 <marquee direction = "up"> <a href="http://localhost/mobile_store/?p=view_product&id=33e75ff09dd601bbe69f351039152189"> <center> <img src="img_carr.png" alt="Flowers in Chania" width="190" height="250"></center></a></marquee>
       
</div>