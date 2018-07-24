<?php session_start();?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				
				<div id="logo-wrap">
					<div id="logo">
							<?php
								include("includes/logo.inc.php");
							?>
					</div>
				</div>
			<!-- end header -->
			
			<!-- start page -->

				<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
							<h1 class="title">About Us</h1>
							<div class="entry" style="height:auto">
<?php								
echo nl2br("This Project is made by \r\n 
Vishal Pawar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0801CS151093\r\n
Sonalika Achale&nbsp;&nbsp;&nbsp;0801CS151082\r\n
Shubham Soni&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0801CS151074\r\n 
for Object Oriented Software Engineering...!!! \r\n \r\n
Course  :  B.E \r\n
Year  :  III year \r\n
Department  :  Computer Science And Engineering \r\n
Institute  :  Shri Govindram Seksaria Institute of Technology And Science , Indore \r\n \r\n
Under able guidance of honourable Asst. Prof. Jyoti Gautam. \r\n
");
?>
 
							</div>
							
						</div>
						
					</div>
					<!-- end content -->
					
					<!-- start sidebar -->
					<div id="sidebar">
							<?php
								include("includes/search.inc.php");
							?>
					</div>
					<!-- end sidebar -->
					<div style="clear: both;">&nbsp;</div>
				</div>
			<!-- end page -->
			
			<!-- start footer -->
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			<!-- end footer -->
</body>
</html>
