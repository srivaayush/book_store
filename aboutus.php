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
								
<!-- We <a href="http://www.phptpoint.com">Phptpoint</a> are an online free PHP tutorial website for PHP interested candidates.<br/>
 We are providing industry specific PHP tutorial designed for intermediate to advanced PHP levels of complexity.<br/> We are an Online Php Tutorial for Beginners as well as for active PHP programmers to learn and improve their knowledge about PHP, Mysql, cake php, codeigniter & joomla.
 <br/>
  The tutorial we provide comes easy and appropriate examples that give learner the ability to create powerful PHP based web applications very quickly. -->

  This site has been designed by <a href="https://www.github.com/srivaayush"><b>Ayush Srivastava</b></a>. I am a second-year undergraduate student at Madan Mohan Malaviya University of Technology,Gorakhpur. 
  I am an aspiring Flutter Developer at <a href="https://codebugged.com/">Codebugged AI</a>, 
  presently working as Exective Member in the <a href="https://chefmmmutchapter.tech/">Codechef MMMUT Chapter Team</a>
   and <a href="https://uicmmmut.com/">University Innovation Cell,MMMUT</a>.
   My interests aside from Application Development are Competitive Coding and working on TFLite Models.<br>
   <b>TIMELINE</b><br>

- App Developer,  <a href="https://codebugged.com/">Codebugged AI</a> (May, 2020 - Present)<br>
- Executive Member, <a href="https://chefmmmutchapter.tech/">Codechef MMMUT Chapter Team</a>(December 2020 - Present)<br>
- Executive Member,<a href="https://uicmmmut.com/">University Innovation Cell,MMMUT</a>.(March 2020 - Present)<br>
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
