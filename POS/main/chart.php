<!DOCTYPE html>
<html>
<head>
<?php require_once ('auth.php');?>
<title>
POS
</title>
 <link href="css/bootstrap.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="css/DT_bootstrap.css">
  
  <link rel="stylesheet" href="css/font-awesome.min.css">
    <style type="text/css">
         .sidebar-nav {
        padding: 9px 0;
      }
      .icon-caret-down{
    float: right;
    margin-top: 12px;
    padding: 0 10px;
        }
        a{
        text-decoration: none;
     }
     li{
        list-style: none;
     }
     .dropdown {
    border: 2px solid white;
    width: 150px;
    height: 150px;
    background-color: white;
    border-radius: .5rem;
    margin-top: 2px;
    }
        .dropdown .nav-link{
    color: green;
}
        .sidebar-nav ul ul{
        display: none;
     }
     .sidebar-nav ul li:hover .dropdown{
        display:block;
     }
     .sidebar-nav li:hover .icon-caret-down:after{
        content: \2039;
     }
      </style>
      <style>
             #chart {
            width       : 100%;
            height      : 500px;
            font-size   : 11px;
        } 
        .amcharts-pie-slice {
          transform: scale(1);
          transform-origin: 50% 50%;
          transition-duration: 0.3s;
          transition: all .3s ease-out;
          -webkit-transition: all .3s ease-out;
          -moz-transition: all .3s ease-out;
          -o-transition: all .3s ease-out;
          cursor: pointer;
          box-shadow: 0 0 30px 0 #000;
      }

      .amcharts-pie-slice:hover {
          transform: scale(1.1);
          filter: url(#shadow);
      }                   
        </style>
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="../style.css" media="screen" rel="stylesheet" type="text/css" />
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script language="javascript">
function Clickheretoprint()
{ 
  var disp_setting="toolbar=yes,location=no,directories=yes,menubar=yes,"; 
      disp_setting+="scrollbars=yes,width=800, height=400, left=100, top=25"; 
  var content_vlue = document.getElementById("content").innerHTML; 
  
  var docprint=window.open("","",disp_setting); 
   docprint.document.open(); 
   docprint.document.write('</head><body onLoad="self.print()" style="width: 800px; font-size: 13px; font-family: arial;">');          
   docprint.document.write(content_vlue); 
   docprint.document.close(); 
   docprint.focus(); 
}
</script>
    <?php
function createRandomPassword() {
    $chars = "003232303232023232023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;
    while ($i <= 7) {

        $num = rand() % 33;

        $tmp = substr($chars, $num, 1);

        $pass = $pass . $tmp;

        $i++;

    }
    return $pass;
}
$finalcode='RS-'.createRandomPassword();
?>



 <script language="javascript" type="text/javascript">
/* Visit http://www.yaldex.com/ for full source code
and get more free JavaScript, CSS and DHTML scripts! */
<!-- Begin
var timerID = null;
var timerRunning = false;
function stopclock (){
if(timerRunning)
clearTimeout(timerID);
timerRunning = false;
}
function showtime () {
var now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds()
var timeValue = "" + ((hours >12) ? hours -12 :hours)
if (timeValue == "0") timeValue = 12;
timeValue += ((minutes < 10) ? ":0" : ":") + minutes
timeValue += ((seconds < 10) ? ":0" : ":") + seconds
timeValue += (hours >= 12) ? " P.M." : " A.M."
document.clock.face.value = timeValue;
timerID = setTimeout("showtime()",1000);
timerRunning = true;
}
function startclock() {
stopclock();
showtime();
}
window.onload=startclock;
// End -->
</SCRIPT>

    </head>

    <body>

<?php include('navfixed.php');?> 
    <div class="container-fluid">
      <div class="row-fluid">
<div class="span2">
             <div class="well sidebar-nav">
                 <ul class="nav nav-list">
              <li><a href="index.php"><i class="icon-dashboard icon-2x"></i> Dashboard </a></li> 
            <li ><a href="sale.php?id=cash&invoice"><i class="icon-shopping-cart icon-2x"></i> Sales</a>  </li>             
            <li><a href="products.php"><i class="icon-list-alt icon-2x"></i> Products</a>
            <ul class="submenu collapse">
             <li><a class="nav-link" href="unit.php">Units</a></li> <br>
           <li><a class="nav-link" href="cat.php">Categories</a></li><br>
           <li><a class="nav-link" href="products.php">Product Information </a></li><br>
           <li><a class="nav-link" href="change_cost.php">Change Price </a></li><br> 
        </ul>                                     
    </li>
            <li><a href="customer.php"><i class="icon-group icon-2x"></i> Customers</a>                                    </li>
            <li><a href="supplier.php"><i class="icon-group icon-2x"></i> Suppliers</a>                                    </li>
            <li><a href="purchaseslist.php"><i class="icon-money icon-2x"></i> Purchases</a> <ul class="submenu collapse">
             <li><a class="nav-link" href="purchasesportal.php">Purchases Portal</a></li> <br>
        </ul>                                   
            </li>
            <li><a href="salesreport.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i> Sales Report</a>                </li>
            <li><a href="sales_inventory.php"><i class="icon-table icon-2x"></i> Product Inventory</a>                </li>
            <li><a href="admin-settings.php"><i class="icon-flag icon-2x"></i> User Manager</a> </li>
            <li class="active"><a href="month_chart.php?d1=0&d2=0"><i class="icon-bar-chart icon-2x"></i> Charts</a>
                <ul class="dropdown">
             <li><a class="nav-link" href="yearly_chart.php">Year Chart</a></li> <br>
           <li><a class="nav-link" href="chart.php">Category Chart</a></li><br>
        </ul>                
            </li>
            <li><a href="changepss.php"><i class="icon-exchange icon-2x"></i> Change Password</a> </li>
                <br><br>        
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
            <i class    ="icon-dashboard"></i> Charts
            </div>
            <ul class="breadcrumb">
            <li class="active">Charts</li>
            </ul>

            

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Sales Charts</h1>
                    </div>
                </div>

                <!-- /.row -->

                <div class="content" id="content">
                    <p> Sales Charts According to Product Category</p>
                    <div class="row">
                        <?php 
                        include('../connect.php');
                        $sql = "SELECT *, gen_name as cat, count(gen_name) as qcount FROM sales_order GROUP BY gen_name";
                        $query = $db->prepare($sql); 
                        $query->execute();
                        $fetch = $query->fetchAll();
                        foreach ($fetch as $key => $value) {
                            $data[] = array('title'=>$value['cat'], 'value'=>$value['qcount']);
                        }
                        $d = json_encode($data);
                        ?>
                        <div class="col-lg-12">
                            <div id="chart" style="height: 500px;"></div>
                        </div>
                         <div>
                   <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">

                    <thead>
                      <tr>

                        <th> Invoice Number </th>
                        <th> Brand Name </th>
                        <th> Category</th>
                        <th> Transaction Date </th>

                      </tr>
                    </thead>
                    <tbody>

                      <?php
                      include('../connect.php');
                      $result = $db->prepare("SELECT * FROM sales_order");
                      $result->execute();
                      for($i=0; $row = $result->fetch(); $i++){
                        ?>
                        <tr class="record">
                          <td><?php echo $row['invoice']; ?></td>
                          <td><?php echo $row['name']; ?></td>
                          <td><?php echo $row['gen_name']; ?></td>
                          <td><?php echo $row['date']; ?></td>
                        </tr>
                        <?php
                      }
                      ?>

                    </tbody>
                  </table>

                </div>
                    </div>
                </div>
                <a href="javascript:Clickheretoprint()" style="font-size:15px"; class="btn btn-primary"><i class="fa fa-print"></i>Print</a>
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

        <!-- jQuery -->
        <script src="../vendor/jquery/jquery.min.js"></script>

        <script src="plugins/amcharts/amcharts.js"></script>
        <script src="plugins/amcharts/animate.min.js"></script>
        <script src="plugins/amcharts/themes/light.js"></script>
        <script src="plugins/amcharts/export/export.min.js"></script>
        <script src="plugins/amcharts/themes/patterns.js"></script>
        <script type="plugins/export/export.css" type="text/css" media="all""></script>
        <script src="plugins/amcharts/plugins/responsive/responsive.min.js"></script>
        <script src="plugins/amcharts/serial.js"></script>
        <script src="plugins/amcharts/pie.js"></script>


        <script type="text/javascript">
            var raw = '<?php echo $d; ?>';
            var data = JSON.parse(raw);
            var chart = AmCharts.makeChart( "chart", {
                "type": "pie",
                "theme": "light",
                "dataProvider": data ,
                "titleField": "title",
                "valueField": "value",
                "labelRadius": 25,
                
                "radius": "37%",
                "innerRadius": "40%",
                "labelText": " [[title]] ([[percents]]%)",
                "export": {
                    "enabled": true
                },
                "depth3D": 10,
                "angle": 17,
                "fontFamily": "Helvetica",
                "fontSize": 13,
                "balloonText": "[[value]]",
                "color": "#222",
        // "colors": ['#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222', '#222']
        "colors": ['#FF6600', '#FCD202', '#B0DE09', '#0D8ECF', '#2A0CD0', '#CD0D74', '#CC0000', '#00CC00', '#0000CC', '#DDDDDD', '#999999', '#222333', '#990000']
    } );
</script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
