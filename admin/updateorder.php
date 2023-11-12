<?php
session_start();

include_once 'include/config.php';
if(strlen($_SESSION['alogin'])==0)
  { 
header('location:index.php');
}
else{
$oid=intval($_GET['oid']);
if(isset($_POST['submit2'])){
$status=$_POST['status'];
$remark=$_POST['remark'];//space char

$query=mysqli_query($con,"insert into ordertrackhistory(orderId,status,remark) values('$oid','$status','$remark')");
$sql=mysqli_query($con,"update orders set orderStatus='$status' where id='$oid'");
echo "<script>alert('Order updated sucessfully...');</script>";
//}
}

 ?>
<script language="javascript" type="text/javascript">
function f2()
{
window.close();
}ser
function f3()
{
window.print(); 
}
</script>
<style>
* {
    background-image: url('w.gif');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
  
  
}
</style>

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
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Update Compliant</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="anuj.css" rel="stylesheet" type="text/css">
</head>
<body>

<div style="margin-left:50px;">
 <form name="updateticket" id="updateticket" method="post"> 
<table width="100%" border="0" cellspacing="0" cellpadding="0">

    <tr height="50">
   <img src="images/img_amit	.png" align="center" " width="200" height="65"  alt="">
      <td colspan="2" class="fontkink2" style="padding-left:0px;"><div class="fontpink2"> <b>Update Order</b></div></td>
      
    </tr>
    <tr height="30">
      <td  class="fontkink1"><b>Order Id :</b></td>
      <td  class="fontkink"><?php echo $oid;?></td>
    </tr>
    <?php 
$ret = mysqli_query($con,"SELECT * FROM ordertrackhistory WHERE orderId='$oid'");
     while($row=mysqli_fetch_array($ret))
      {
     ?>
		
    
    
      <tr height="20">
      <td class="fontkink1" ><b>At Date:</b></td>
      <td  class="fontkink"><?php echo $row['postingDate'];?></td>
    </tr>
     <tr height="20">
      <td  class="fontkink1"><b>Status:</b></td>
      <td  class="fontkink"><?php echo $row['status'];?></td>
    </tr>
     <tr height="20">
      <td  class="fontkink1"><b>Remark:</b></td>
      <td  class="fontkink"><?php echo $row['remark'];?></td>
    </tr>

   
    <tr>
      <td colspan="2"><hr /></td>
    </tr>
   <?php } ?>
   <?php 
$st='Delivered';
   $rt = mysqli_query($con,"SELECT * FROM orders WHERE id='$oid'");
     while($num=mysqli_fetch_array($rt))
     {
     $currrentSt=$num['orderStatus'];
   }
     if($st==$currrentSt)
     { ?>
   <tr><td colspan="2"><b>
      Product Delivered </b></td>
   <?php }else  {
      ?>
   
    <tr height="50">
      <td class="fontkink1">Status: </td>
      <td  class="fontkink"><span class="fontkink1" >
        <select name="status" class="fontkink" required="required" >
          <option value="">Select Status</option>
                 <option value="in Process">In Process</option>
                 <option value="in Shipping">Shipping</option>
                 <option value="in Cancel">Cancel</option>
                  <option value="Delivered">Delivered</option>
                  
        </select>
        </span></td>
    </tr>

     <tr style=''>
      <td class="fontkink1" >Remark:</td>
      <td class="fontkink" align="justify" ><span class="fontkink">
        <textarea cols="50" rows="7" name="remark"  required="required" >
                                !! Thanks You !!
                                  
                   Delivered by: Amit Kumar Sah
        </textarea>
        </span></td>
    </tr>
    <tr>
      <td class="fontkink1">&nbsp;</td>
      <td  >&nbsp;</td>
    </tr>
    <tr>
      <td class="fontkink">       </td>
      <td  class="fontkink"> <input type="submit" name="submit2"  value="Update"   size="40" style="cursor: pointer;" /> &nbsp;&nbsp;   
      <input name="Submit2" type="submit" class="txtbox4" value="Close this Window " onClick="return f2();" style="cursor: pointer;"  /></td>
    </tr>
<?php } ?>
</table>
 </form>
</div>

</body>
</html>
<?php } ?>

     