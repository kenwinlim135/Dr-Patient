<?php include '../../datalayer/bookserver.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Patient</title>
	<link rel="stylesheet"  href="style2.css">

	<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Open+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<header>
	<h1>Doctor<span>Patient</span></h1>
		<nav>
		


		
		<ul> 
			
		
			<li><a href=" index.php">MyInfo</a></li>
			<li><a href=" book.php">Book Appointment</a></li>
			<li><a href="view.php">View Appointment</a></li>
			<li><a href="cancel.php">Cancel Booking</a></li>
			<li><a href="searchdoctor.php ">Search Doctor</a></li>
			<li><a href="donate.php">Donate Organ</a></li>
			<li><a href="searchdonor.php">Search Donor</a></li>
			<li><a href="../../applicationlayer/Doctorpatient.php">Logout</a></li>
			



	
			

		</ul>
		



	</nav>




</header>

<body>


	

	


	<div class="header">
	<h2>Book Appointment</h2>
</div>

<form method="post" action="book.php">

<?php include ('../../datalayer/errors.php');?>





	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">


			<div class="input-group">
		<label>Categery</label>
	   	<select name="categorey" class="xd">
	   		<option value="Orthopedic" >Orthopedic</option>
	   		<option value="Cardiologist">Cardiologist</option>
	   		<option value="Dentist">Dentist</option>
	   		<option value="Psychologist">Psychologist</option>
	   		<option value="Surgeon">Surgeon</option>

	   	</select>


	</div>





	<div class="input-group">
		<button type="submit" name="Search" class="btn">Search</button>
	</div>











	<?php  

	  if (isset($_POST['Search'])) {

	$categorey = mysqli_real_escape_string($mysqli,$_POST['categorey']);
	
	$query2="SELECT * FROM doctor WHERE categorey=('$categorey')";
	$result2=mysqli_query($mysqli,$query2);
	?>
	
		<div class="input-group"> 

			<label>Doctor ID</label>
			

		<select class="input-group2" name="docID">
			
	<?php   while ($row2=mysqli_fetch_assoc($result2)) {
		?>
		
	 
		<option> <?php echo $row2['DoctorID'] ?> </option>
		
	   
	  
	   <?php 

	} ?>
	 </select>
	 </div>


	<div class="input-group">
		<label>Appointment ID</label>
		<input type="text" name="AppoID" >

	</div>




	<div class="input-group">
		<label>Date</label>
		<input type="Date" name="Date">

	</div>

	<div class="input-group">
		<label>Time</label>
		<input type="Time" name="Time">
	</div>

	 <div class="input-group">
			<button type="submit" name="Book" class="btn">BOOK</button>
			</div>
	 
	 <?php  
}


	    ?>








</form>





</body>

</html>