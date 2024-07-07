<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documents</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Verdana&display=swap">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/27336307f5.js" crossorigin="anonymous"></script>

</head>

<body>
    <div class="container">
        <header>PremGanga Institution
            <p>Bypass Road, Bharatpur-10, Chitwan</p>
        </header>
        <p class="note">Note:compulsorily Fill the box where <span style="color: red;">*</span> astrik sign is given,
            others are
            optionals</p>
            <form action="documents_database.php" method="post" id="uploadForm" enctype="multipart/form-data">
    <div class="formDocumentsSubmition" id="#formEigth">
                <h3>Documents to be submitted:</h3>
                <div class="fields">
                        <div>
                            <label for="photo"><strong>1) </strong> Digital Photo</label>
                            <input type="file" id="photoInput" accept="image/*, .pdf" name="photo" >
                        </div>
                        <div>
                            <label for="experience"><strong>2) </strong> Experience letters</label>
                            <input type="file" id="experience" accept="image/*, .pdf" name="experience" >
                        </div>
                        <div>
                            <label for="passportFront"><strong>3) </strong> Passport front</label>
                            <input type="file" id="passportFront" accept="image/*, .pdf" name="passportFront" >
                        </div>
                        <div>
                            <label for="passportBack"><strong>4) </strong> Passport back</label>
                            <input type="file" id="passportBack" accept="image/*, .pdf" name="passportBack" >
                        </div>
                        <div>
                            <label for="SLCMarkandCharacter"><strong>5) </strong> SLC Markseet and Charater</label>
                            <input type="file" id="SLCMarkandCharacter" accept="image/*, .pdf"
                                name="SLCMarkandCharacter" >
                        </div>
                        <div>
                            <label for="NNCRegd"><strong>6) </strong> NNC Registration (Both side in single paper):2
                                copies</label>
                            <input type="file" id="NNCRegd" accept="image/*, .pdf" name="NNCRegd" >
                        </div>
                        <div>
                            <label for="PCLMarkandCharacter"><strong>7) </strong> PCL+2 Marksheet and Character</label>
                            <input type="file" id="PCLMarkandCharacter" accept="image/*, .pdf"
                                name="PCLMarkandCharacter" >
                        </div>
                        <div>
                            <label for="BachelorMarkandCharacter"><strong>8) </strong> Bachelor transcript and
                                character</label>
                            <input type="file" id="BachelorMarkandCharacter" accept="image/*, .pdf"
                                name="BachelorMarkandCharacter" >
                        </div>
                        <div>
                            <label for="otherDoc"><strong>9) </strong> other Documents</label>
                            <input type="file" id="otherDoc" accept="image/*, .pdf" name="otherDoc" >
                        </div>
                    </form>
                </div>
                <div class="fields">
                    <div class="input-field">
                        <label>How did you know about Premganga Institute(PGI)</label>
                        <select name="recogonizedPGI" id="">
                            <option value="family">Family</option>
                            <option value="friends">Friends</option>
                            <option value="social media">Social Media</option>
                            <option value="news">News</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="input-field">
                        <label>Referred by</label>
                        <input type="text" name="referrence" />
                    </div>
                </div>
                <div>
                    <label for="signature"><strong>Student signature</strong></label>
                    <input type="file" id="signature" accept="image/*, .pdf" name="signature">
                </div>
                <p><i>I hereby declare that the above information is valid</i></p>
                <div class="btn"> <button type="button" class="styled-button" onclick="homeSectionBack();">Back</button>
                </div>
    <div class="btn"> <button type="submit" class="styled-button" onclick="storeValue();">Submit</button>
                </div>
</form>
</div>
<script src="../../pgiwebform/pgiform/index.js"></script>
<script src="../../pgiwebform/pgiform/setting.js"></script>
<script src="../../../pgiwebform/pgiform/profile.js"></script>
<script>
    function homeSectionBack() {
    window.location.href = "../../../pgiwebform/pgiform/index.php";

};
</script>
    </body>
</html>
