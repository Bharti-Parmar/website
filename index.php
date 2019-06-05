<?php
     include('include/header1.php');
?>	

<!-- booking successfull -->
<?php 
     if(@$_GET["save"]) { ?>

	<div class="alert alert-success alert-dismissible">
   <a href="index.php" class="close">&times;</a>
 	 <strong>Success!</strong> Indicates a successful or positive action.
 	</div>
 <?php  } 
       ?>

<!-- comment successfull -->
<?php 
     if(@$_GET["comment"]) { ?>

      
	<div class=" alert alert-success alert-dismissible">
   <a href="index.php" class="close">&times;</a>
 	 <strong>Success!</strong> Your Comment Successfully Submitted.
 	</div>
 	 
 <?php  } 
       ?>
	
						
					<!-- navigation bar -->
	<?php
     include('nav.php');
?>



						<!-- carousel image -->
	<?php
     include('carousel.php');
?>	




						<!--- About Us -->
		<?php
     include('about.php');
?>										
		


						<!--- who we are -->
		<?php
     include('who_we_are.php');
?>	

	
	
						<!--- Our specialist -->
											
	<?php
     include('specialist.php');
?>	

 


	
						<!--- Why Choose Us -->
											
	<?php
     include('why_us.php');
?>	




						<!--- Our service -->
	<?php
     include('accolades.php');
?>	
	
	



						<!--- Gallery -->
	<?php
     include('gallery.php');
?>	
	
	




<?php include('include/footer1.php');?>
	
	
	
	
	
	
											
	