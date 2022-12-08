<?php include 'header1.php'; ?>
<?php include('navfixed.php');?>
<?php
$position=$_SESSION['SESS_LAST_NAME'];
if($position=='Cashier') {
?>
<div class="container-fluid">
      <div class="row-fluid">
<div class="span2">
             <div class="well sidebar-nav">
                 <ul class="nav nav-list">
              <li class="active"><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
			<li ><a href="sales1.php?id=cash&invoice"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li>             
				<br><br><br><br><br><br>		
			<li>
			 <div class="hero-unit-clock">
		
			<form name="clock">
			<font color="white">Time: <br></font>&nbsp;<input style="width:150px;" type="submit" class="trans" name="face" value="">
			</form>
			  </div>
			</li>
				
				</ul>           
          </div><!--/.well -->
        </div><!--/span-->	
	<div class="span10">
	<div class="contentheader">
			<i class    ="icon-dashboard"></i> Dashboard
			</div>
			<ul class="breadcrumb">
			<li class="active">Dashboard</li>
			</ul>
			<font style=" font:bold 25px 'Aleo'; color:#0489bd;"><center>FAIR DEAL TIMBER YARD</center></font>    
	
<div id="mainmain">

<a href="sales1.php?id=cash&invoice=<?php echo $finalcode ?>"><i class="icon-shopping-cart icon-2x"></i><br> Sales</a>                                   
<a href="logout.php"><i class="icon-group icon-2x"></i> <br>Logout</a>  <br><br><br><br><br><br><br><br><br><br><br><br><br>                                         
<?php 
    }                   
    ?>
<div class="clearfix"></div>
</div>
</div>
</div>
</div>
</body>
<footer><center>Brought To You By GITECH HEIGHT</center></footer>
<?php include('footer.php'); ?>
</html>
