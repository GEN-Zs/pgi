<?php
include("connection.php");

$id = $_GET['name'];
$query = "SELECT * FROM documets WHERE Id = $id";
$data = mysqli_query($conn, $query);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PremGanga Institution</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://fonts.googleapis.com/css2?family=Verdana&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/27336307f5.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <header>PremGanga Institution
            <p>Bypass Road, Bharatpur-10, Chitwan</p>
        </header>
        <p class="note">Note: Compulsorily fill the boxes where <span style="color: red;">*</span> asterisk sign is given, others are optionals</p>
        <form action="#" method="post" id="uploadForm" enctype="multipart/form-data">
            <div class="formDocumentsSubmition" id="#formEigth">
                <h3>Documents to be submitted:</h3>
                <div class="fields">
                    <div>
                        <label for="photo"><strong>1) </strong> Digital Photo</label>
                        <input type="file" id="photoInput" accept="image/*, .pdf" name="photo" required>
                    </div>
                    <div>
                        <label for="experience"><strong>2) </strong> Experience letters</label>
                        <input type="file" id="experience" accept="image/*, .pdf" name="experience">
                    </div>
                    <div>
                        <label for="passportFront"><strong>2) </strong> Passport front</label>
                        <input type="file" id="passportFront" accept="image/*, .pdf" name="passportFront">
                    </div>
                    <div>
                        <label for="passportBack"><strong>3) </strong> Passport back</label>
                        <input type="file" id="passportBack" accept="image/*, .pdf" name="passportBack">
                    </div>
                    <div>
                        <div>
                            <label for="SLCMarkandCharacter"><strong>5) </strong> SLC Markseet and Charater</label>
                            <input type="file" id="SLCMarkandCharacter" accept="image/*, .pdf" name="SLCMarkandCharacter">
                        </div>
                        <!-- Other file input fields -->
                        <div>
                            <label for="NNCRegd"><strong>6) </strong> NNC Registration (Both side in single paper): 2 copies</label>
                            <input type="file" id="NNCRegd" accept="image/*, .pdf" name="NNCRegd">
                        </div>
                        <div>
                            <label for="PCLMarkandCharacter"><strong>7) </strong> PCL+2 Marksheet and Character</label>
                            <input type="file" id="PCLMarkandCharacter" accept="image/*, .pdf" name="PCLMarkandCharacter">
                        </div>
                        <div>
                            <label for="BachelorMarkandCharacter"><strong>8) </strong> Bachelor transcript and character</label>
                            <input type="file" id="BachelorMarkandCharacter" accept="image/*, .pdf" name="BachelorMarkandCharacter">
                        </div>
                        <div>
                            <label for="otherDoc"><strong>9) </strong> Other Documents</label>
                            <input type="file" id="otherDoc" accept="image/*, .pdf" name="otherDoc">
                        </div>
                        <!-- Repeat similar structure for other file input fields -->
                    </div>
                    <div class="input-field">
                        <label>How did you know about Premganga Institute(PGI)</label>
                        <select name="recogonizedPGI" id="">
                            <option value="family" <?php
                                                    if ($result['recogonizedPGI'] == 'family') {
                                                        echo "selected";
                                                    }
                                                    ?>>Family</option>
                            <option value="friends" <?php
                                                    if ($result['recogonizedPGI'] == 'friends') {
                                                        echo "selected";
                                                    }
                                                    ?>>Friends</option>
                            <option value="social media" <?php
                                                            if ($result['recogonizedPGI'] == 'social media') {
                                                                echo "selected";
                                                            }
                                                            ?>>Social Media</option>
                            <option value="news" <?php
                                                    if ($result['recogonizedPGI'] == 'news') {
                                                        echo "selected";
                                                    }
                                                    ?>>News</option>
                            <option value="others" <?php
                                                    if ($result['recogonizedPGI'] == 'others') {
                                                        echo "selected";
                                                    }
                                                    ?>>Others</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label>Referred by</label>
                        <input type="text" name="referrence" value="<?php echo $result['referrence']; ?>">
                    </div>
                    <!-- Student Signature -->
                    <div>
                        <label for="signature"><strong>Student signature</strong></label>
                        <input type="file" id="signature" accept="image/*, .pdf" name="signature">
                    </div>
                </div>
                <div class="btn">
        <input type="submit" value="Update" class="styled-button" name="Update">
    </div>
        </form>
    </div>
</body>

</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Update'])) {


    $photofilename = $_FILES["photo"]["name"];
    $phototempname = $_FILES["photo"]["tmp_name"];
    $photofolder = "../../premgangaforms/documents/photo/" . $photofilename;
    move_uploaded_file($phototempname, $photofolder);

    $experiencefilename = $_FILES["experience"]["name"];
    $experiencetempname = $_FILES["experience"]["tmp_name"];
    $experiencefolder = "../../premgangaforms/documents/experience/" . $experiencefilename;
    move_uploaded_file($experiencetempname, $experiencefolder);

    $passportFrontfilename = $_FILES["passportFront"]["name"];
    $passportFronttempname = $_FILES["passportFront"]["tmp_name"];
    $passportFrontfolder = "../../premgangaforms/documents/passportFront/" . $passportFrontfilename;
    move_uploaded_file($passportFronttempname, $passportFrontfolder);

    $passportBackfilename = $_FILES["passportBack"]["name"];
    $passportBacktempname = $_FILES["passportBack"]["tmp_name"];
    $passportBackfolder = "../../premgangaforms/documents/passportBack/" . $passportBackfilename;
    move_uploaded_file($passportBacktempname, $passportBackfolder);

    $SLCMarkandCharacterfilename = $_FILES["SLCMarkandCharacter"]["name"];
    $SLCMarkandCharactertempname = $_FILES["SLCMarkandCharacter"]["tmp_name"];
    $SLCMarkandCharacterfolder = "../../premgangaforms/documents/SLCmarksheetCharacter/" . $SLCMarkandCharacterfilename;
    move_uploaded_file($SLCMarkandCharactertempname, $SLCMarkandCharacterfolder);

    $NNCRegdfilename = $_FILES["NNCRegd"]["name"];
    $NNCRegdtempname = $_FILES["NNCRegd"]["tmp_name"];
    $NNCRegdfolder = "../../premgangaforms/documents/NNCRegistration/" . $NNCRegdfilename;
    move_uploaded_file($NNCRegdtempname, $NNCRegdfolder);

    $PCLMarkandCharacterfilename = $_FILES["PCLMarkandCharacter"]["name"];
    $PCLMarkandCharactertempname = $_FILES["PCLMarkandCharacter"]["tmp_name"];
    $PCLMarkandCharacterfolder = "../../premgangaforms/documents/PCLmarksheetCharacter/" . $PCLMarkandCharacterfilename;
    move_uploaded_file($PCLMarkandCharactertempname, $PCLMarkandCharacterfolder);

    $BachelorMarkandCharacterfilename = $_FILES["BachelorMarkandCharacter"]["name"];
    $BachelorMarkandCharactertempname = $_FILES["BachelorMarkandCharacter"]["tmp_name"];
    $BachelorMarkandCharacterfolder = "../../premgangaforms/documents/bachelorTranscriptCharacter/" . $BachelorMarkandCharacterfilename;
    move_uploaded_file($BachelorMarkandCharactertempname, $BachelorMarkandCharacterfolder);

    $otherDocfilename = $_FILES["otherDoc"]["name"];
    $otherDoctempname = $_FILES["otherDoc"]["tmp_name"];
    $otherDocfolder = "../../premgangaforms/documents/otherdocuments/" . $otherDocfilename;
    move_uploaded_file($otherDoctempname, $otherDocfolder);

    $recogonizedPGI = $_POST['recogonizedPGI'];
    $referrence = $_POST['referrence'];

    $signaturefilename = $_FILES["signature"]["name"];
    $signaturetempname = $_FILES["signature"]["tmp_name"];
    $signaturefolder = "../../premgangaforms/documents/Signature/" . $signaturefilename;
    move_uploaded_file($signaturetempname, $signaturefolder);
    $query = "UPDATE documets SET photo='$photofolder', experience='$experiencefolder', passportFront='$passportFrontfolder', passportBack='$passportBackfolder', SLCMarkandCharacter='$SLCMarkandCharacterfolder', NNCRegd='$NNCRegdfolder', PCLMarkandCharacter='$PCLMarkandCharacterfolder', BachelorMarkandCharacter='$BachelorMarkandCharacterfolder', otherDoc='$otherDocfolder', recogonizedPGI='$recogonizedPGI', referrence='$referrence', studentSignature='$signaturefolder' WHERE Id='$id'";

    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "<script>alert('Data Updated Successfully')</script>";
?>
        <meta http-equiv="refresh" content="0; URL=../../premgangaforms/documents/documentdisplay.php" />
<?php

    } else {

        die("Error in query: " . mysqli_error($conn));
    }
}
?>