<html>
<head>
	<title>Student Personal Details</title>
	<style>
		 body {
        margin: 0;
        padding: 0;
        font-family:Verdana,Arial, sans-serif;
    }

    h2 {
        text-align: center;
        position: fixed;
        top: 0;
        width: 100%;
        background-color: #f2f2f2; /* Light gray background for the fixed header */
        padding: 10px;
        z-index: 1; /* Ensure that the header is on top of other elements */
    }  table {
        border-collapse: collapse;
        width: 100%;
        margin-top: 70px; /* Adjust the margin as needed */
    }

    th, td {
        border: 1px solid #dddddd;
        text-align: center;
        padding: 8px;
        white-space: nowrap;
    }

    th {
        background-color: #f2f2f2; /* Light gray background for headers */
    }

    tr:nth-child(even) {
        background-color: #f9f9f9; /* Alternate row background color */
    }
    .Update, .delete{
    	background-color: green;
    	color: white;
    	margin: 5px;
    	padding: 4px;
    	cursor: pointer;
    	border: none;
    	outline: none;
    	border-radius: 5px;
    	height: 30px;
    	width: 80px;
    	font-weight: bold;
    }
    .delete{
    	background-color: darkred;
    }
</style>
</head>
	


<?php
include("connection.php");

$query = "SELECT * FROM documets";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);

if ($total != 0) {
	?>

	<h2>Documents Details</h2>
<table border="1" style='width:100%'>
	<tr>
		<th>I'd</th>
	<th>Digital Photo</th>
	<th>Experience Letter</th>
	<th>Passport Front</th>
	<th>Passport Back</th>
	<th>SLC Marksheet and Character</th>
	<th>NNC Registration</th>
	<th>PCL Marksheet and Character</th>
	<th>Bachelor Transcript and Character</th>
	<th>Other Documents</th>
	<th>Known PGI Through</th>
	<th>Referred By</th>
	<th>Student Signature</th>
	<th>Opertaions</th>
</tr>

	<?php
    while ($result = mysqli_fetch_assoc($data)) {
     echo " <tr>
     <td>".$result['Id']."</td>
	<td><img src = '".$result['photo']."' height='100px' width='100px'></td>
	<td><img src = '".$result['experience']."' height='100px' width='100px'></td>
	<td><img src = '".$result['passportFront']."' height='100px' width='100px'></td>
	<td><img src = '".$result['passportBack']."' height='100px' width='100px'></td>
	<td><img src = '".$result['SLCMarkandCharacter']."' height='100px' width='100px'></td>
	<td><img src = '".$result['NNCRegd']."' height='100px' width='100px'></td>
	<td><img src = '".$result['PCLMarkandCharacter']."' height='100px' width='100px'></td>
	<td><img src = '".$result['BachelorMarkandCharacter']."' height='100px' width='100px'></td>
	<td><img src = '".$result['otherDoc']."' height='100px' width='100px'></td>
	<td>".$result['recogonizedPGI']."</td>
	<td>".$result['referrence']."</td>
	<td><img src = '".$result['studentSignature']."' height='100px' width='100px'></td>
	<td><a href='documentupdater.php?name=$result[Id]'><input type='submit' value='Update' class='Update'></a><a href='documentdelete.php?name=$result[Id]'><input type='submit' value='Delete' class='delete' ></a></td>

</tr>
";

    }
}

mysqli_close($conn);
?>
</table>
<script>
	function confirmation(){
		return confirm('Are You Sure You Want To Delete This Data ?');
	}
</script>
 </html>
