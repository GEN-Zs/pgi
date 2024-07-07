<?php
include("connection.php");
 $id = $_GET['name'] ;

 $query = "DELETE FROM documets WHERE Id = '$id'";
 $data = mysqli_query($conn,$query);
 if($data){
 	 echo"<script>alert('Data Deleted Successfully')</script>";
 	?>
 	<meta http-equiv="refresh" content="0; URL=../../premgangaforms/documents/documentdisplay.php" />
 	<?php
 }else{
 	 echo"<script>alert('Failed To delete, Try again !');</script>";
 	
 }
?>