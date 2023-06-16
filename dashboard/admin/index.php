<?php
require '../../include/db_conn.php';
page_protect();
?>
<!DOCTYPE html>
<html lang="en">
<head> 

    
    <title>SPORTS CLUB  | Dashboard </title>

    <link rel="stylesheet" href="../../css/style.css"  id="style-resource-5">
    <script type="text/javascript" src="../../js/Script.js"></script>
    <link rel="stylesheet" href="../../css/dashMain.css">
    <link rel="stylesheet" type="text/css" href="../../css/entypo.css">
     <style>
    	.page-container .sidebar-menu #main-menu li#dash > a {
    
    	color: #ffffff;
		}

    </style>

</head>
    <body class="page-body  page-fade" onload="collapseSidebar()">

    	<div class="page-container sidebar-collapsed" id="navbarcollapse">	
	
		<div class="sidebar-menu">
	
			<header class="logo-env">
			
		
			<div class="logo">
				<a href="main.php">
					<img src="logo2.jpg" alt="" width="192" height="80" />
				</a>
			</div>
			
					<div class="sidebar-collapse" onclick="collapseSidebar()">
				<a href="#" class="sidebar-collapse-icon with-animation"><!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
					<i class="entypo-menu"></i>
				</a>
			</div>
							
			
		
			</header>
    		<?php include('nav.php'); ?>
    	</div>

    		<div class="main-content">
		
				<div class="row">
					
					<div class="col-md-6 col-sm-8 clearfix">	
							
					</div>
					
					
					<div class="col-md-6 col-sm-4 clearfix hidden-xs">
						
						<ul class="list-inline links-list pull-right">

							<li>Welcome <?php echo $_SESSION['full_name']; ?> 
							</li>					
						
							<li>
								<a href="logout.php">
									Log Out <i class="entypo-logout right"></i>
								</a>
							</li>
						</ul>
						
					</div>
					
				</div>

			<h2>SPORTS CLUB </h2>

			<hr>

			

			
			<div class="col-sm-3"><a href="over_members_month.php">			
				<div class="tile-stats tile-green">
					<div class="icon"><i class="entypo-mail"></i></div>
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>PLAYERS JOINED</h2><br>	
							<?php
							date_default_timezone_set("Asia/Calcutta"); 
							$date  = date('Y-m');
							$query = "select COUNT(*) from users WHERE joining_date LIKE '$date%'";

							
							$result = mysqli_query($con, $query);
							$i      = 1;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>
						</div>
				</div></a>			
			</div>

			<div class="col-sm-3"><a href="view_plan.php">			
				<div class="tile-stats tile-red">
					<div class="icon"><i class="entypo-rss"></i></div>
						<div class="num" data-postfix="" data-duration="1500" data-delay="0">
						<h2>TOTAL SPORTS</h2><br>	
							<?php
							$query = "select COUNT(*) from plan where active='yes'";

							
							$result  = mysqli_query($con, $query);
							$i = 1;
							if (mysqli_affected_rows($con) != 0) {
							    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
							        echo $row['COUNT(*)'];
							    }
							}
							$i = 1;
							?>
						</div>
				</div></a>
			</div>
			
<marquee direction="right"><img src="fball11.gif" width="88" height="70" alt="Tutorials " border="0"></marquee>

			
   
    	<?php include('footer.php'); ?>
</div>

  
    </body>
</html>
