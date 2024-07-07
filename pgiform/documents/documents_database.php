<?php
include 'connection.php';
 //   print_r( $_FILES ["photo"]);

$photofilename = $_FILES ["photo"]["name"];
$phototempname=$_FILES ["photo"]["tmp_name"];
$photofolder = "../../pgiform/documents/photo/".$photofilename;
move_uploaded_file($phototempname,$photofolder);

$experiencefilename = $_FILES ["experience"]["name"];
$experiencetempname=$_FILES ["experience"]["tmp_name"];
$experiencefolder = "../../pgiform/documents/experience/".$experiencefilename;
move_uploaded_file($experiencetempname,$experiencefolder);

$passportFrontfilename = $_FILES ["passportFront"]["name"];
$passportFronttempname=$_FILES ["passportFront"]["tmp_name"];
$passportFrontfolder = "../../pgiform/documents/passportFront/".$passportFrontfilename;
move_uploaded_file($passportFronttempname,$passportFrontfolder);

$passportBackfilename = $_FILES ["passportBack"]["name"];
$passportBacktempname=$_FILES ["passportBack"]["tmp_name"];
$passportBackfolder = "../../pgiform/documents/passportBack/".$passportBackfilename;
move_uploaded_file($passportBacktempname,$passportBackfolder);

$SLCMarkandCharacterfilename = $_FILES ["SLCMarkandCharacter"]["name"];
$SLCMarkandCharactertempname=$_FILES ["SLCMarkandCharacter"]["tmp_name"];
$SLCMarkandCharacterfolder = "../../pgiform/documents/SLCmarksheetCharacter/".$SLCMarkandCharacterfilename;
move_uploaded_file($SLCMarkandCharactertempname,$SLCMarkandCharacterfolder);

$NNCRegdfilename = $_FILES ["NNCRegd"]["name"];
$NNCRegdtempname=$_FILES ["NNCRegd"]["tmp_name"];
$NNCRegdfolder = "../../pgiform/documents/NNCRegistration/".$NNCRegdfilename;
move_uploaded_file($NNCRegdtempname,$NNCRegdfolder);

$PCLMarkandCharacterfilename = $_FILES ["PCLMarkandCharacter"]["name"];
$PCLMarkandCharactertempname=$_FILES ["PCLMarkandCharacter"]["tmp_name"];
$PCLMarkandCharacterfolder = "../../pgiform/documents/PCLmarksheetCharacter/".$PCLMarkandCharacterfilename;
move_uploaded_file($PCLMarkandCharactertempname,$PCLMarkandCharacterfolder);

$BachelorMarkandCharacterfilename = $_FILES ["BachelorMarkandCharacter"]["name"];
$BachelorMarkandCharactertempname=$_FILES ["BachelorMarkandCharacter"]["tmp_name"];
$BachelorMarkandCharacterfolder = "../../pgiform/documents/bachelorTranscriptCharacter/".$BachelorMarkandCharacterfilename;
move_uploaded_file($BachelorMarkandCharactertempname,$BachelorMarkandCharacterfolder);

$otherDocfilename = $_FILES ["otherDoc"]["name"];
$otherDoctempname=$_FILES ["otherDoc"]["tmp_name"];
$otherDocfolder = "../../pgiform/documents/otherdocuments/".$otherDocfilename;
move_uploaded_file($otherDoctempname,$otherDocfolder);

$recogonizedPGI = $_POST['recogonizedPGI'];
$referrence = $_POST['referrence'];

$signaturefilename = $_FILES ["signature"]["name"];
$signaturetempname=$_FILES ["signature"]["tmp_name"];
$signaturefolder = "../../pgiform/documents/Signature/".$signaturefilename;
move_uploaded_file($signaturetempname,$signaturefolder);


$stmt = $conn->prepare("INSERT INTO documets(photo,experience,passportFront,passportBack,SLCMarkandCharacter,NNCRegd,PCLMarkandCharacter,BachelorMarkandCharacter,otherDoc,recogonizedPGI,referrence,studentSignature)values(?,?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssssssssss",$photofolder,$experiencefolder,$passportFrontfolder,$passportBackfolder,$SLCMarkandCharacterfolder,$NNCRegdfolder,$PCLMarkandCharacterfolder,$BachelorMarkandCharacterfolder,$otherDocfolder,$recogonizedPGI,$referrence,$signaturefolder);
 if($stmt->execute()){
     header("Location: ../../pgiform/taker/exit.php");
}else{
echo"error".$stmt->error;
}

$stmt->close();
$conn->close();
?>
