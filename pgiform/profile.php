<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Verdana&display=swap">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/27336307f5.js" crossorigin="anonymous"></script>
  <script src="../../pgiwebform/pgiform/profile.js" defer></script>
</head>
<style>
    .hide {
        display: none;
    }

    ;
</style>
</head>

<body>
    <div class="profile_container" id="personal">
        <header>Premganga Forms
            <p>Bypass Road, Bharatpur-10, Chitwan</p>
        </header>
        <p class="note">Note:Please check all details and click on Submit button or click Prev button </p>
        <div class="image_container">
            <h1 id="heading_name">Charles lal Adhikari</h1>
            <img src="image/images.jpg" />
        </div>
        <!--Personal Details Section-->
        <section id="personalDetailsProfile">
            <div class="row">
                <h3 class="column">Personal details</h3>

            </div>
            <div class="row">
                <h6 class="sub_heading">Full Name</h6>
                <h6 class="sub_heading">Alternative Name</h6>
            </div>
            <div class="row">
                <p class="subtitle">First Name</p>
                <p class="subtitle">Middle Name</p>
                <p class="subtitle">Last Name</p>
                <p class="subtitle">First Name</p>
                <p class="subtitle">Middle Name</p>
                <p class="subtitle">Last Name</p>
            </div>
            <div class="row">
                <div class="column" id="first_name">No data available</div>
                <div class="column" id="middle_name">No data available</div>
                <div class="column" id="last_name">No data available</div>
                <div class="column" id="alt_fname">No data available</div>
                <div class="column" id="alt_mname">No data available</div>
                <div class="column" id="alt_lname">No data available</div>
            </div>
        </section>
        <!--Address Details Section-->
        <section id="addressProfile">
            <div class="row">
                <h5 class="column">Address</h5>

            </div>
            <div class="row">
                <h6 class="sub_heading">Permanent Address</h6>
                <h6 class="sub_heading">Temporary Address</h6>
            </div>
            <div class="row">
                <p class="subtitle">Street</p>
                <p class="subtitle">Ward Number</p>
                <p class="subtitle">Municipality</p>
                <p class="subtitle">Street</p>
                <p class="subtitle">Ward Number</p>
                <p class="subtitle">Municipality</p>
            </div>
            <div class="row">
                <div class="column" id="perm_street">No data available</div>
                <div class="column" id="perm_ward">NO data available</div>
                <div class="column" id="perm_municipality">NO data available</div>
                <div class="column" id="temp_street">NO data available</div>
                <div class="column" id="temp_ward">NO data available</div>
                <div class="column" id="temp_municipality">NO data available</div>
            </div>
            <div class="row">
                <p class="subtitle">District</p>
                <p class="subtitle">Province</p>
                <p class="subtitle">Country</p>
                <p class="subtitle">District</p>
                <p class="subtitle">Province</p>
                <p class="subtitle">Country</p>
            </div>
            <div class="row">
                <div class="column" id="perm_district">NO data available</div>
                <div class="column" id="perm_province">NO data available</div>
                <div class="column" id="perm_country">NO data available</div>
                <div class="column" id="temp_district">NO data available</div>
                <div class="column" id="temp_province">NO data available</div>
                <div class="column" id="temp_country">NO data available</div>
            </div>
        </section>
        <!--Other Details Section-->
        <section id="otherDetailsProfile">
            <div class="row">
                <h5 class="column">Others Details</h5>

            </div>
            <div class="row">
                <p class="subtitle">Date of Birth</p>
                <p class="subtitle">Gender</p>
                <p class="subtitle">Marital Status</p>
                <p class="subtitle">Email Account</p>
                <p class="subtitle">Phone Number</p>
            </div>
            <div class="row">
                <div class="column" id="dob_profile">NO data available</div>
                <div class="column" id="gender_profile">Not selected</div>
                <div class="column" id="ms_profile">Not selected</div>
                <div class="column" id="mail_profile">NO data available</div>
                <div class="column" id="number_profile">NO data available</div>
            </div>
        </section>
        <!--Passport Details Section-->
        <section class="passportProfile">
            <div class="row">
                <h5 class="column">Passport Details</h5>

            </div>
            <div class="row">
                <p class="subtitle">Passport Number</p>
                <p class="subtitle">Issued Country</p>
                <p class="subtitle">Issued District</p>
                <p class="subtitle">Date of Issue</p>
                <p class="subtitle">Date of EXpiry</p>
            </div>
            <div class="row">
                <div class="column" id="profile_pass">NO data available</div>
                <div class="column" id="profile_isscountry">NO data available</div>
                <div class="column" id="profile_issuecon">NO data available</div>
                <div class="column" id="profile_issuedate">NO data available</div>
                <div class="column" id="profile_expirydate">NO data available</div>
            </div>
        </section>
        <!--Application For Details Section-->
        <section class="applicationprofile">
            <div class="row">
                <h5 class="column">Application Details</h5>

            </div>
            <div class="row">
                <p class="subtitle">Country For Application</p>
                <p class="subtitle">Application For (course)</p>
                <p class="subtitle">Board Of Nurshing </p>
            </div>
            <div class="row">
                <div class="column" id="profile_conforapp">NOt selected</div>
                <div class="column" id="profile_appforcourse">NOt selected</div>
                <div class="column" id="profile_boardnurse">NOt selected</div>
            </div>
        </section>
        <!--Academic Details Section-->
        <div class="row">
            <h3 class="column">Academic details</h3>
        </div>
        <!--primary academic Details-->
        <div class="row">
            <section class="primaryEducationProfile">
                <div class="row">
                    <h5 class="column">Primary Education(1class - 8class)</h5>

                </div>
                <div class="row">
                    <p class="subtitle">School Name</p>
                    <p class="subtitle">School Address</p>
                    <p class="subtitle">Date of Started</p>
                    <p class="subtitle">Date of Completed</p>
                </div>
                <div class="row">
                    <div class="column" id="profile_sclnameprime">NO data available</div>
                    <div class="column" id="profile_scladdprime">NO data available</div>
                    <div class="column" id="profile_sclstartprime">NO data available</div>
                    <div class="column" id="profile_sclcompprime">NO data available</div>
                </div>
            </section>
            <!--secondary Education Details-->
            <section class="secondaryEducationProfile">
                <div class="row">
                    <h5 class="column">Secondary Education(9class - 10class)</h5>

                </div>
                <div class="row">
                    <p class="subtitle">School Name</p>
                    <p class="subtitle">School Address</p>
                    <p class="subtitle">Date of Started</p>
                    <p class="subtitle">Date of completed</p>
                </div>
                <div class="row">
                    <div class="column" id="profil_secsclname">NO data available</div>
                    <div class="column" id="profil_secscladd">NO data available</div>
                    <div class="column" id="profil_secsclstart">NO data available</div>
                    <div class="column" id="profil_secsclcomp">NO data available</div>
                </div>
            </section>
        </div>
        <!--Higher Education Details--->
        <section class="higherEducationProfile">
            <div class="row">
                <h5 class="column">Higher Education(+2)</h5>

            </div>
            <div class="row">
                <p class="subtitle">School Name</p>
                <p class="subtitle">School Address</p>
                <p class="subtitle">Date of Started</p>
                <p class="subtitle">Date of Completed</p>
            </div>
            <div class="row">
                <div class="column" id="profile_highsclname">No data available</div>
                <div class="column" id="profile_highscladd">No data available</div>
                <div class="column" id="profile_highsclstart">No data available</div>
                <div class="column" id="profile_highsclcomp">No data available</div>
            </div>
        </section>
        <!--PCL Bn/Bsc Details Section-->
        <div class="row">
            <section class="pclEducationProfile">
                <div class="row">
                    <h5 class="column">PCL</h5>

                </div>
                <div class="row">
                    <p class="subtitle">School Name</p>
                    <p class="subtitle">School Address</p>
                    <p class="subtitle">Date of Started</p>
                    <p class="subtitle">Date of Completed</p>
                </div>
                <div class="row">
                    <div class="column" id="profile_pclsclname">No data available</div>
                    <div class="column" id="profile_pclscladd">No data available</div>
                    <div class="column" id="profile_pclsclstart">No data available</div>
                    <div class="column" id="profile_pclsclcomp">No data available</div>
                </div>
            </section>
            <section class="bnbscEducationProfile">
                <div class="row">
                    <h5 class="column">BN/BSC</h5>

                </div>
                <div class="row">
                    <p class="subtitle">School Name</p>
                    <p class="subtitle">School Address</p>
                    <p class="subtitle">Date of Started</p>
                    <p class="subtitle">Date of Completed</p>
                </div>
                <div class="row">
                    <div class="column" id="profile_bscsclname">No data available</div>
                    <div class="column" id="profile_bscscladd">No data available</div>
                    <div class="column" id="profile_bscsclstart">No data available</div>
                    <div class="column" id="profile_bscsclcomp">No data available</div>
                </div>
            </section>
        </div>
        <!--Nurshing Licensure  Section-->
        <div class="row">
            <h3 class="column">Nurshing Licensure</h3>
        </div>
        <section class="nurshingLicensureProfile">
            <div class="row">
                <p class="subtitle">NNC Regisration No.</p>
                <p class="subtitle">NNC Exam Date</p>
                <p class="subtitle">Registration Date</p>
                <p class="subtitle">Expiry Date</p>
                <p class="subtitle">Multiple Exam</p>
                <p class="subtitle">Number of Attempts</p>
            </div>
            <div class="row">
                <div class="column" id="profile_nncregdnum">No data available</div>
                <div class="column" id="profile_nncexamdate">No data available</div>
                <div class="column" id="profile_regddate">No data available</div>
                <div class="column" id="profile_nncexpirydate">No data available</div>
                <div class="column" id="profile_multipleexam">No data available</div>
                <div class="column" id="profile_numofattem">No data available</div>
            </div>
        </section>
        <!--Job Qualification Section-->
        <div class="row">
            <h3 class="column">Job Qualification</h3>
        </div>
        <section class="jobQualificationProfile">
            <div class="row">
                <p class="subtitle">Job Title</p>
                <p class="subtitle">Hospital Name</p>
                <p class="subtitle">Permanent Address</p>
                <p class="subtitle">Supervisior Name</p>
                <p class="subtitle">Supervisior Position</p>
                <p class="subtitle">Date of Started</p>
                <p class="subtitle">Date of Completed</p>
            </div>
            <div class="row">
                <div class="column" id="profile_jobtitle">No data available</div>
                <div class="column" id="profile_hosname">No data available</div>
                <div class="column" id="profile_permadd">No data available</div>
                <div class="column" id="profile_supername">No data available</div>
                <div class="column" id="profile_superposition">No data available</div>
                <div class="column" id="profile_jobstartdate">No data available</div>
                <div class="column" id="profile_jobcompdate">No data available</div>
            </div>
        </section>
        <!--Language Test Details--->
        <div class="row">
            <h3 class="column">Language Test</h3>
        </div>
        <section class="languageTestProfile">
            <div class="row">
                <p class="subtitle">Test Name</p>
                <p class="subtitle">Exam Date</p>
                <p class="subtitle">Marks</p>
            </div>
            <div class="row">
                <div class="column" id="profile_testname">No data available</div>
                <div class="column" id="profile_testexamdate">No data available</div>
                <div class="column" id="profile_testmarks">No data available</div>
            </div>
        </section>
        <!--Family Details-->
        <div class="row">
            <h3 class="column">Family Details</h3>
        </div>
        <section class="familyDetailsProfile">
            <div class="row">
                <p class="subtitle">Guardian Full Name</p>
                <p class="subtitle">Relation</p>
                <p class="subtitle">Permanent Address</p>
                <p class="subtitle">Contact Number</p>
                <p class="subtitle">Occupation</p>
            </div>
            <div class="row">
                <div class="column" id="profile_guardname">No data available</div>
                <div class="column" id="profile_guardrel">No data available</div>
                <div class="column" id="profile_guardperadd">No data available</div>
                <div class="column" id="profile_guardnum">No data available</div>
                <div class="column" id="profile_guardocc">No data available</div>
            </div>
        </section>
        <div class="btn"><button type="submit" name="back" class="styled-button" id="ChangeData" onclick=confirmationChange()>Change</button>
            </div>
        <div class="btn"><button type="submit" name="register" class="styled-button" id="firstNext" onclick="validateForm(); confirmation();">Submit</button>
            </div>
    </div>
<script>
    function confirmation() {
            let confirmed = confirm("Do you really want to submit?");
            if (confirmed) {
                window.location.href = "../../pgiform/taker/exit.php"; 
            } else {
              
            }
        }
    function confirmationChange(){
        let confirmed = confirm("Do you really want to change data?");
            if (confirmed) {
                window.location.href = "../../pgiform/index.php"; 
            } else {
              
            }
    };

</script>
</body>

</html>