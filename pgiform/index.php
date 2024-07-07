<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premganga Forms</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Verdana&display=swap">
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/27336307f5.js" crossorigin="anonymous"></script>
    <script src="../../pgiwebform/pgiform/settings.js" defer></script>
</head>
<style>
    footer {
        background-color: #3498db;
        color: #ecf0f1;
        padding: 30px 20px;
        text-align: center;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    footer div {
        flex: 1;
        margin: 10px;
    }

    footer p {
        margin: 0;
        font-size: 14px;
        line-height: 1.6;
    }

    footer a {
        color: #ecf0f1;
        text-decoration: none;
        transition: color 0.3s ease;
    }

    footer a:hover {
        color: #2980b9;
    }

    footer button {
        background-color: #2ecc71;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 14px;
        transition: background-color 0.3s ease;
    }

    footer button:hover {
        background-color: #27ae60;
    }

    footer img {
        width: 25px;
        margin: 0 5px;
    }

    .hide {
        display: none;
    }

    ;
</style>

<body>
    <div class="topic">
        <div class="sub-topics">
            <h2>Heading</h2>
            <ul>
                <li id="personalList" class="lister" onclick="personalform(); personalDetonator(); academicDetonator(); nurshingDetonator(); licensureDetonator(); jobDetonator(); langDetonator(); familyDetonator(); docDetonator();">Personal Details
                    <ul class="indicator">
                        <li id="personalPositive" class="hide positive">Completed</li>
                        <li id="personalWarning" class="hide warning">Complete</li>
                        <li id="personalNegative" class="negative">InComplete</li>
                    </ul>
                </li>
                <li id="academicList" class="lister" onclick="academicform(); personalDetonator(); academicDetonator(); nurshingDetonator(); licensureDetonator(); jobDetonator(); langDetonator(); familyDetonator(); docDetonator();">Academic Details
                    <ul class="indicator">
                        <li id="academicPositive" class="hide positive">Completed</li>
                        <li id="academicWarning" class="hide warning">Complete</li>
                        <li id="academicNegative" class="negative">InComplete</li>
                    </ul>
                </li>
                <li id="nurshing" class="lister" onclick="nurshingForm(); personalDetonator(); academicDetonator(); nurshingDetonator(); licensureDetonator(); jobDetonator(); langDetonator(); familyDetonator(); docDetonator();">Nurshing Education
                    <ul class="indicator">
                        <li id="nurshignPositive" class="hide positive">Completed</li>
                        <li id="nurshingNegative" class="negative">InComplete</li>
                        <li id="nurshingwarning" class="hide warning">Complete</li>
                    </ul>
                </li>
                <li id="licensure" class="lister" onclick="licenseForm(); personalDetonator(); academicDetonator(); nurshingDetonator(); licensureDetonator(); jobDetonator(); langDetonator(); familyDetonator(); docDetonator();">Nurshing Licensure
                    <ul class="indicator">
                        <li id="licensePositive" class="hide positive">Completed</li>
                        <li id="licenseWarning" class="hide warning">Complete</li>
                        <li id="licenseNegative" class="negative">InComplete</li>
                    </ul>
                </li>
                <li id="job" class="lister" onclick="jobForm(); personalDetonator(); academicDetonator(); nurshingDetonator(); licensureDetonator(); jobDetonator(); langDetonator(); familyDetonator(); docDetonator();">Job Qualification
                    <ul class="indicator">
                        <li id="jobPositive" class="hide positive">Completed</li>
                        <li id="jobWarning" class="hide warning">Complete</li>
                        <li id="jobNegative" class="negative">InComplete</li>
                    </ul>
                </li>
                <li id="language" class="lister" onclick="languageForm(); personalDetonator(); academicDetonator(); nurshingDetonator(); licensureDetonator(); jobDetonator(); langDetonator(); familyDetonator(); docDetonator();">Language Test
                    <ul class="indicator">
                        <li id="langPositive" class="hide positive">Completed</li>
                        <li id="langWarning" class="hide warning">Complete</li>
                        <li id="langNegative" class="negative">InComplete</li>
                    </ul>
                </li>
                <li id="family" class="lister" onclick="familyForm(); personalDetonator(); academicDetonator(); nurshingDetonator(); licensureDetonator(); jobDetonator(); langDetonator(); familyDetonator(); docDetonator();">Family Details
                    <ul class="indicator">
                        <li id="familyPositive" class="hide positive">Completed</li>
                        <li id="familyWarning" class="hide warning">Complete</li>
                        <li id="familyNegative" class="negative">InComplete</li>
                    </ul>
                </li>
                <li id="documents" class="lister" onclick="documentSection(); personalDetonator(); academicDetonator(); nurshingDetonator(); licensureDetonator(); jobDetonator(); langDetonator(); familyDetonator(); docDetonator();">Documents
                    <ul class="indicator">
                        <li id="docPositive" class="hide positive">Completed</li>
                        <li id="docWarning" class="hide warning">Complete</li>
                        <li id="docNegative" class="negative">InComplete</li>
                    </ul>
                </li>
                <li id="final" class="lister"><a href="../../pgiwebform/pgiform/profile.php">Your form</a></li>
            </ul>
        </div>
        <!--PERSONAL SECTION-->
        <div class="code" id="personal">
            <header>PremGanga Institution
                <img src="" />
                <p>Bypass Road, Bharatpur-10, Chitwan</p>
            </header>
            <p class="note">Note:compulsorily Fill the box where <span style="color: red;">*</span> astrik sign is given,
                others are
                optionals</p>
            <form action="" method="post">
                <div class="formPersonnal" id="formFirst">
                    <div class="details personal">
                        <h3>Personal Details</h3>
                        <h5>Fullname</h5>
                        <div class="fields">

                            <!--First one-->
                            <div class="input-field">
                                <label for="fullNameFirst">First name<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter your first name" id="fullNameFirst" name="fullNameFirst" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="middleNameFirst">Middle name</label>
                                <input type="text" placeholder="Enter your middle name" id="middleNameFirst" name="middleNameFirst" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="lastNameFirst">Last name<span style="color: red;">*</span></label>
                                <input type="text" id="lastNameFirst" placeholder="Enter your last name" name="lastNameFirst" oninput="saveFormData()">
                            </div>
                        </div>

                        <div class="fields">
                            <!--First one-->
                            <div class="input-field">
                                <span class="title">Alternative name</span>
                                <label for="fullNamealt">First name</label>
                                <input type="text" placeholder="Enter your other first name(if any)" id="fullNamealt" name="fullNamealt" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="middleNamealt">Middle name</label>
                                <input type="text" id="middleNamealt" placeholder="Enter your other middle name(if any)" name="middleNamealt" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="lastNamealt">Last name</label>
                                <input type="text" placeholder="Enter your other last name(if any)" id="lastNamealt" name="lastNamealt" oninput="saveFormData()">
                            </div>
                            <div class="input-field">
                                <label for="NNCnumber">NNC Number<span style="color: red;">*</span></label>
                                <input type="number" id="NNCnumber" name="NNCnumber" placeholder="Enter your NNC number" oninput="saveFormData()">
                            </div>
                        </div>
                        <h5>Address</h5>
                        <div class="fields">
                            <!--Perm add-->
                            <div class="permanent-address input-field">
                                <span class="title">Permanent Address</span>
                                <label for="street">Tol/street<span style="color: red;">*</span></label>
                                <input type="text" id="street" placeholder="Enter tol/street" name="street" oninput="saveFormData()">
                            </div>
                            <div class="permanent-address input-field">
                                <label for="ward">Ward no.<span style="color: red;">*</span></label>
                                <input type="text" id="ward" placeholder="Enter ward number" name="ward" oninput="saveFormData()">
                            </div>
                            <div class="permanent-address input-field">
                                <label for="municipality">Municipality<span style="color: red;">*</span></label>
                                <input type="text" id="municipality" placeholder="Enter municipality name" name="municipality" oninput="saveFormData()">
                            </div>
                            <div class="permanent-address input-field">
                                <label for="district">District<span style="color: red;">*</span></label>
                                <input type="text" id="district" placeholder="Enter district name" name="district" oninput="saveFormData()">
                            </div>
                            <div class="permanent-address input-field">
                                <label for="province">Province<span style="color: red;">*</span></label>
                                <input type="text" id="province" placeholder="Enter province name" name="province" oninput="saveFormData()">
                            </div>
                            <div class="permanent-address input-field">
                                <label for="country">Country<span style="color: red;">*</span></label>
                                <input type="text" id="country" placeholder="Enter country name" name="country" oninput="saveFormData()">
                            </div>
                            <!--Button to Fetch Permanent data to Temporary -->
                            <label>same as above</label>
                            <input type="radio" id="sameAsAbove" onchange="resetRadio(this)">
                            <div class="permanent-address input-field"></div>
                            <div class="permanent-address input-field"></div>
                            <!--Ending OF Button with 2 div -->

                            <div class="temporary-address input-field">
                                <span class="title">Temporary Address</span>
                                <label for="streetTemp">Tol/street</label>
                                <input type="text" id="streetTemp" placeholder="Enter tol/street name" name="streetTemp" oninput="saveFormData()">
                            </div>
                            <div class="temporary-address input-field">
                                <label for="wardTemp">Ward no.</label>
                                <input type="text" id="wardTemp" placeholder="Ente ward number" name="wardTemp" oninput="saveFormData()">
                            </div>
                            <div class="temporary-address input-field">
                                <label for="">Municipality</label>
                                <input type="text" id="municipalityTemp" placeholder="Enter municipality name" name="municipalityTemp" oninput="saveFormData()">
                            </div>
                            <div class="temporary-address input-field">
                                <label for="municipalityTemp">District</label>
                                <input type="text" id="tempDistrict" placeholder="Enter district name" name="districtTemp" oninput="saveFormData()">
                            </div>
                            <div class="temporary-address input-field">
                                <label for="provinceTemp">Province</label>
                                <input type="text" id="provinceTemp" placeholder="Enter province name" name="provinceTemp" oninput="saveFormData()">
                            </div>
                            <div class="temporary-address input-field">
                                <label for="countryTemp">Country</label>
                                <input type="text" id="countryTemp" placeholder="Enter country name" name="countryTemp" oninput="saveFormData()">
                            </div>
                        </div>
                        <h5>Other Details</h5>
                        <div class="fields">
                            <!--DOB one-->
                            <div class="input-field">
                                <label for="dateOfBirth">Date of Birth (AD):<span style="color: red;">*</span></label>
                                <input type="date" placeholder="Enter your birth date" id="dateOfBirth" name="dateOfBirth" oninput="saveFormData()">
                            </div>
                            <!--gender one-->
                            <div class="input-field">
                                <label for="gender">Gender<span style="color: red;">*</span></label>
                                <select name="gender" id="gender" onchange="saveFormData()">
                                    <option value="Not Selected">Select</option>
                                    <option value="male" name="gender">Male</option>
                                    <option value="female" name="gender">Female</option>
                                    <option value="other" name="gender">Other</option>
                                </select>
                            </div>
                            <!--Marital one-->
                            <div class="input-field">
                                <label for="maritalStatus">Marital Status</label>
                                <select name="maritalStatus" id="maritalStatus" onchange="saveFormData()">
                                    <option value="Not Selected">Select</option>
                                    <option value="unmarried">Unmarried</option>
                                    <option value="married">Married</option>
                                    <option value="divorced">Divorced</option>
                                    <option value="others">Others</option>
                                </select>
                            </div>
                            <!--Gmail one-->
                            <div class="input-field">
                                <label for="gmail">Gmail<span style="color: red;">*</span></label>
                                <input type="email" placeholder="Enter your gmail I'd" id="gmail" name="gmail" oninput="saveFormData()">
                            </div>
                            <!--Number one-->
                            <div class="input-field">
                                <label for="phoneNumber">Phone Number<span style="color: red;">*</span></label>
                                <input type="number" placeholder="Enter your phone number" id="phoneNumber" name="phoneNumber" oninput="saveFormData()">
                            </div>
                            <!--Alt number one-->
                            <div class="input-field">
                                <label for="">Alternative Number</label>
                                <input type="number" id="altNumber" placeholder="Enter your alternative number" name="altnumber" oninput="saveFormData()">
                            </div>
                        </div>
                        <h5>Passport Details</h5>
                        <div class="fields">
                            <!--Passport one-->
                            <div class="input-field">
                                <label for="passportNumber">Passport Number<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter your Passport number" id="passportNumber" name="passportNumber" oninput="saveFormData()">
                            </div>
                            <div class="input-field">
                                <label for="passIssueCountry">Issued country<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter name of issued country" id="passIssueCountry" name="passIssueCountry" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="dateOfIssuePass">Date Of issue<span style="color: red;">*</span></label>
                                <input type="date" placeholder="Enter issued date" id="dateOfIssuePass" name="dateOfIssuePass" oninput="saveFormData()">
                            </div>
                            <div class="input-field">
                                <label for="issuedDistrict">Issued District<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter issued District" id="issuedDistrict" name="issuedDistrict" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="dateOfExpiryPass">Date Of expiry<span style="color: red;">*</span></label>
                                <input type="date" placeholder="Enter expiry name" id="dateOfExpiryPass" name="dateOfExpiryPass" oninput="saveFormData()">
                            </div>

                        </div>
                        <div class="details otherDetails">
                            <h5>Application Details</h5>
                            <div class="fields">
                                <div class="input-field">
                                    <label for="CountryForapplication">Country for application<span style="color: red;">*</span></label>
                                    <select name="CountryForapplication" id="CountryForapplication" onchange="saveFormData()">
                                        <option value="Not selected">Select</option>
                                        <option value="USA">USA</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Australia">Australia</option>
                                        <option value="New Zealand">New Zealand</option>
                                    </select>
                                </div>
                                <div class="input-field">
                                    <label for="Forapplication">Application for<span style="color: red;">*</span></label>
                                    <select name="Forapplication" id="Forapplication" onchange="saveFormData()">
                                        <option value="Not selected">Select</option>
                                        <option value="CGFNS">CGFNS</option>
                                        <option value="Form 2F/3F">Form 2F/3F</option>
                                        <option value="NNAS">NNAS</option>
                                        <option value="AHPRA">AHPRA</option>
                                        <option value="NCN">NCN</option>
                                    </select>
                                </div>
                                <div class="input-field">
                                    <label for="boardForapplication">Board of nurshing(Only for USA)</label>
                                    <select name="boardForapplication" id="boardForapplication" onchange="saveFormData()">
                                        <option value="Not selected">Select</option>
                                        <option value="New York">New York</option>
                                        <option value="Texas">Texas</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="btn"> <button type="button" name="register" class="styled-button" id="firstNext" onclick="academicform(); personalDetonator(); ">Next</button>
            </div>
        </div>
        <!--ACADEMIC SECTION-->
        <div class="code hide" id="academic">
            <header>PremGanga Institution
                <p>Bypass Road, Bharatpur-10, Chitwan</p>
            </header>
            <p class="note">Note:compulsorily Fill the box where <span style="color: red;">*</span> astrik sign is given,
                others are
                optionals</p>
            <form action="#" method="post">
                <div class="formAcademic" id="#formSecond">
                    <h3>Academic Details</h3>
                    <div class="details Primarylevel">
                        <h5>General Education</h5>
                        <span class="title">Primary level(1-8)]</span>
                        <div class="fields">
                            <!--First one-->
                            <div class="input-field">
                                <label for="primarySchoolName">School Name <span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter your school Name" id="primarySchoolName" name="primarySchoolName" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="primarySchoolAddress">Permanent Address<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter Permanent Address" id="primarySchoolAddress" name="primarySchoolAddress" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="primaryStartedDate">Date Of Started</label>
                                <input type="month" placeholder="Enter Date Of Started" id="primaryStartedDate" name="primaryStartedDate" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="primaryCompletionDate">Date Of Completed</label>
                                <input type="month" placeholder="Enter  Date Of Completion" id="primaryCompletionDate" name="primaryCompletionDate" oninput="saveFormData()">
                            </div>
                        </div>

                        <label>same as primary</label>
                        <input type="radio" id="SchoolSameAsAbove">
                        <div class="details SecondaryLevel">
                            <span class="title">Secondary level(9-10)]</span>
                            <div class="fields">
                                <!--First one-->
                                <div class="input-field">
                                    <label for="secondarySchoolName">School Name <span style="color: red;">*</span></label>
                                    <input type="text" placeholder="Enter your school Name" id="secondarySchoolName" name="secondarySchoolName" oninput="saveFormData()">
                                </div>
                                <!--First one-->
                                <div class="input-field">
                                    <label for="secondarySchoolAddress">Permanent Address<span style="color: red;">*</span></label>
                                    <input type="text" placeholder="Enter Permanent Address" id="secondarySchoolAddress" name="secondarySchoolAddress" oninput="saveFormData()">
                                </div>
                                <!--First one-->
                                <div class="input-field">
                                    <label for="secondaryStartedDate">Date Of Started</label>
                                    <input type="month" placeholder="Enter Date Of Started" id="secondaryStartedDate" name="secondaryStartedDate" oninput="saveFormData()">
                                </div>
                                <!--First one-->
                                <div class="input-field">
                                    <label for="secondaryCompletionDate">Date Of Completed</label>
                                    <input type="month" placeholder="Enter  Date Of Completion" id="secondaryCompletionDate" name="secondaryCompletionDate" oninput="saveFormData()">
                                </div>
                            </div>
                        </div>
                        <div class="details HigherLevel">
                            <span class="title">Higher level (+2)]</span>
                            <div class="fields">
                                <!--First one-->
                                <div class="input-field">
                                    <label for="higherSchool">School Name <span style="color: red;">*</span></label>
                                    <input type="text" placeholder="Enter your  school Name" id="higherSchool" name="higherSchool" oninput="saveFormData()">
                                </div>
                                <!--First one-->
                                <div class="input-field">
                                    <label for="higherAddress">Permanent Address<span style="color: red;">*</span></label>
                                    <input type="text" placeholder="Enter Permanent Address" id="higherAddress" name="higherAddress" oninput="saveFormData()">
                                </div>
                                <!--First one-->
                                <div class="input-field">
                                    <label for="higherStartedDate">Date Of Started</label>
                                    <input type="month" placeholder="Enter Date Of Started" id="higherStartedDate" name="higherStartedDate" oninput="saveFormData()">
                                </div>
                                <!--First one-->
                                <div class="input-field">
                                    <label for="higherCompletionDate">Date Of Completed</label>
                                    <input type="month" placeholder="Enter  Date Of Completion" id="higherCompletionDate" name="higherCompletionDate" oninput="saveFormData()">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="btn"> <button type="button" class="styled-button" onclick="nurshingEducation(); academicDetonator();">Next</button></div>
        </div>
        <!--NURSHING EDUCATION SECTION-->
        <div class="code hide" id="nurshingEducation">
            <header>PremGanga Institution
                <p>Bypass Road, Bharatpur-10, Chitwan</p>
            </header>
            <p class="note">Note:compulsorily Fill the box where <span style="color: red;">*</span> astrik sign is given,
                others are
                optionals</p>
            <form action="" method="post">
                <div class="formNursingEducation" id="#formThird">
                    <h5>Nurshing Education</h5>
                    <div class="details PCL">

                        <span class="title">PCL</span>
                        <div class="fields">
                            <!--First one-->
                            <div class="input-field">
                                <label for="pclSchoolName">School Name </label>
                                <input type="text" placeholder="Enter your school Name" id="pclSchoolName" name="pclSchoolName" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="pclSchoolAddress">Permanent Address</label>
                                <input type="text" placeholder="Enter Permanent Address" id="pclSchoolAddress" name="pclSchoolAddress" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="pclDateOfStarted">Date Of Started</label>
                                <input type="date" placeholder="Enter Date Of Started" id="pclDateOfStarted" name="pclDateOfStarted" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="pclDateOfCompletion">Date Of Completed</label>
                                <input type="date" placeholder="Enter  Date Of Completion" id="pclDateOfCompletion" name="pclDateOfCompletion" oninput="saveFormData()">
                            </div>
                        </div>
                        <div class="details BN/BSC">
                            <span class="title">BN/BSC</span>
                            <div class="fields">
                                <!--First one-->
                                <div class="input-field">
                                    <label for="bn/bscSchoolName">School Name </label>
                                    <input type="text" placeholder="Enter your school Name" id="bn/bscSchoolName" name="bn/bscSchoolName" oninput="saveFormData()">
                                </div>
                                <!--First one-->
                                <div class="input-field">
                                    <label for="bn/bscSchoolAddress">Permanent Address</label>
                                    <input type="text" placeholder="Enter Permanent Address" id="bn/bscSchoolAddress" name="bn/bscSchoolAddress" oninput="saveFormData()">
                                </div>
                                <!--First one-->
                                <div class="input-field">
                                    <label for="bn/bscDateOfStarted">Date Of Started</label>
                                    <input type="date" placeholder="Enter Date Of Started" id="bn/bscDateOfStarted" name="bn/bscDateOfStarted" oninput="saveFormData()">
                                </div>
                                <!--First one-->
                                <div class="input-field">
                                    <label for="bn/bscDateOfCompletion">Date Of Completion</label>
                                    <input type="date" placeholder="Enter  Date Of Completion" id="bn/bscDateOfCompletion" name="bn/bscDateOfCompletion" oninput="saveFormData()">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="btn"> <button type="button" class="styled-button" onclick="nurshinglicensure(); nurshingDetonator();">Next</button>
            </div>
        </div>
        <!--NURSHING LICENSURE SECTION-->
        <div class="code hide" id="nursingLicensure">
            <header>PremGanga Institution
                <p>Bypass Road, Bharatpur-10, Chitwan</p>
            </header>
            <p class="note">Note: Compulsorily fill the boxes where <span style="color: red;">*</span> asterisk sign is given, others are optionals</p>
            <form action="" method="post">
                <div class="formNursingLicensure" id="formFourth">
                    <h3>Nursing Licensure</h3>
                    <div class="details Licensure">
                        <div class="fields">
                            <!-- NNC Regd No. -->
                            <div class="input-field">
                                <label for="nncRegistrationNumber">NNC Regd No.<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter your NNC registration number" id="nncRegistrationNumber" name="nncRegistrationNumber" oninput="saveFormData()">
                            </div>
                            <!-- NNC Exam Date -->
                            <div class="input-field">
                                <label for="nncExamDate">NNC Exam Date<span style="color: red;">*</span></label>
                                <input type="date" id="nncExamDate" name="nncExamDate" oninput="saveFormData()">
                            </div>
                            <!-- Registration Date -->
                            <div class="input-field">
                                <label for="nncRegistrationDate">Registration Date<span style="color: red;">*</span></label>
                                <input type="date" id="nncRegistrationDate" name="nncRegistrationDate" oninput="saveFormData()">
                            </div>
                            <!-- Expiry Date -->
                            <div class="input-field">
                                <label for="nncExpiryDate">Expiry Date<span style="color: red;">*</span></label>
                                <input type="date" id="nncExpiryDate" name="nncExpiryDate" oninput="saveFormData()">
                            </div>
                        </div>
                    </div>

                    <!-- Form container for multiple attempts -->
                    <div class="form-container">
                        <label for="exam" class="form-label">Did you take multiple attempts to pass the license exam?</label>

                        <label for="exam_yes" class="form-label">Yes
                            <input type="radio" id="exam_yes" value="Yes" name="exam" class="radio-input" onclick="saveFormData()">
                        </label>

                        <label for="exam_no" class="form-label">No
                            <input type="radio" id="exam_no" value="No" name="exam" class="radio-input" onclick="saveFormData()">
                        </label>

                        <label for="noOfAttempts" class="form-label">How many attempts?
                            <input type="number" id="noOfAttempts" name="noOfAttempts" class="number-input" min="0" oninput="saveFormData()">
                        </label>
                    </div>

                </div>
            </form>
            <div class="btn">
                <button type="button" name="register" class="styled-button" onclick="jobQualification(); licensureDetonator();">Next</button>
            </div>
        </div>
        <!--JOB QUALIFICATION SECTION-->
        <div class="code hide" id="jobQualification">
            <header>PremGanga Institution
                <p>Bypass Road, Bharatpur-10, Chitwan</p>
            </header>
            <p class="note">Note:compulsorily Fill the box where <span style="color: red;">*</span> astrik sign is given,
                others are
                optionals</p>
            <form action="" method="post">
                <div class="formJobQualification" id="#formFifth">
                    <h3>Job Qualification</h3>
                    <div class="details PCL">
                        <div class="fields">
                            <!--First one-->
                            <div class="input-field">
                                <label for="jobTitle">Job Title<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter job title" id="jobTitle" name="jobTitle" oninput="saveFormData()">
                            </div>
                            <div class="input-field">
                                <label for="jobHospitalName">Hospital Name<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter hospital name" id="jobHospitalName" name="jobHospitalName" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="jobHospitalAddress">Permanent Address<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter Permanent Address" id="jobHospitalAddress" name="jobHospitalAddress" oninput="saveFormData()">
                            </div>
                            <div class="input-field">
                                <label for="jobSupervisiorName">Supervisor name<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter supervisior name" id="jobSupervisiorName" name="jobSupervisiorName" oninput="saveFormData()">
                            </div>
                            <div class="input-field">
                                <label for="jobSupervisiorPost">Supervisor Position<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter supervisior position" id="jobSupervisiorPost" name="jobSupervisiorPost" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="jobDateOfStarted">Date Of Started<span style="color: red;">*</span></label>
                                <input type="month" placeholder="Enter Date Of Started" id="jobDateOfStarted" name="jobDateOfStarted" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="jobDateOfCompletion">Date Of Completed<span style="color: red;">*</span></label>
                                <input type="month" placeholder="Enter  Date Of Completion" id="jobDateOfCompletion" name="jobDateOfCompletion" oninput="saveFormData()">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="btn"> <button type="button" name="register" class="styled-button" onclick="languageTest(); jobDetonator();">Next</button>
            </div>
        </div>
        <!--LANGUAGE TEST SECTION-->
        <div class="code hide" id="languageTest">
            <header>PremGanga Institution
                <p>Bypass Road, Bharatpur-10, Chitwan</p>
            </header>
            <p class="note">Note:compulsorily Fill the box where <span style="color: red;">*</span> astrik sign is given,
                others are
                optionals</p>
            <form action="languagetest_database.php" method="post">
                <div class="formLanguageTest" id="#formSixth">
                    <h3>English Language Test</h3>
                    <div class="details PCL">

                        <div class="fields">

                            <!--First one-->
                            <div class="input-field">
                                <label for="langTest">Test</label>
                                <input type="text" placeholder="Enter your Test Name" id="langTest" name="langTest" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="langTestDate">Exam Date</label>
                                <input type="date" placeholder="Enter Date Of Started" id="langTestDate" name="langTestDate" oninput="saveFormData()">
                            </div>
                            <div class="input-field">
                                <label for="langTestMarks">Marks</label>
                                <input type="text" placeholder="Enter your marks" id="langTestMarks" name="langTestMarks" oninput="saveFormData()">
                            </div>

                        </div>
                    </div>
                </div>
            </form>
            <div class="btn"> <button type="button" class="styled-button" onclick="familyDetails(); langDetonator();">Next</button>
            </div>
        </div>
        <!--FAMILY SECTION-->
        <div class="code hide" id="familyDetails">
            <header>PremGanga Institution
                <p>Bypass Road, Bharatpur-10, Chitwan</p>
            </header>
            <p class="note">Note:compulsorily Fill the box where <span style="color: red;">*</span> astrik sign is given,
                others are
                optionals</p>
            <form action="" method="post">
                <div class="formFamilyDetails" id="#formSeventh">
                    <h3>Parent's Details</h3>
                    <div class="details Guardian">
                        <div class="fields">
                            <!--First one-->
                            <div class="input-field">
                                <label for="guardianName">Guardian Full Name<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter your Guardian Full Name" id="guardianName" name="guardianName" oninput="saveFormData()">
                            </div>
                            <div class="input-field">
                                <label for="guardianRelation">Relation<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter Relation" id="guardianRelation" name="guardianRelation" oninput="saveFormData()">
                            </div>
                            <!--First one-->
                            <div class="input-field">
                                <label for="guardianAddress">Address<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter Address" id="guardianAddress" name="guardianAddress" oninput="saveFormData()">
                            </div>
                            <div class="input-field">
                                <label for="guardianContact">Contact no.<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter Contact number" id="guardianContact" name="guardianContact" oninput="saveFormData()">
                            </div>
                            <div class="input-field">
                                <label for="guardianOccupation">Occupation<span style="color: red;">*</span></label>
                                <input type="text" placeholder="Enter Occupation" id="guardianOccupation" name="guardianOccupation" oninput="saveFormData()">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="btn"> <button type="submit" class="styled-button" onclick="documentSection(); familyDetonator(); storeValue();">Next</button>
            </div>
        </div>
       
        </div>
    </div>
    <footer>
        <div>
            <p>Contact Us</p>
            <p>Premganga Institution</p>
            <p>Bypass road( aside of Road division office), Bharatpur, 44200</p>
            <p>Phone: (123) 456-7890 | Email: <a href="mailto:pgibharatpur2@gmail.com">pgibharatpur2@gmail.com</a></p>
        </div>
        <div>
            <p>Follow Us on Social Media</p>
            <p>
                <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
                <a href="#"><img src="instagram-icon.png" alt="Instagram"></a>
                <a href="#"><img src="linkedin-icon.png" alt="LinkedIn"></a>
            </p>
        </div>
        <div>
            <p>Stay Connected</p>
            <p>Our Privacy Policy</p>
            <p><a href="#">Privacy Policy</a></p>
        </div>
        <div>
            <p>Quick Links and Resources</p>
            <p>
                <a href="#">Admissions</a> |
                <a href="#">Programs</a> |
                <a href="#">Academic Calendar</a> |
                <a href="#">Campus Map</a> |
                <a href="#">Student Portal</a> |
                <a href="#">FAQ</a>
            </p>
        </div>
        <div>
            <!--Created By SAMRAT THAPA Contact details +977-9806872953, samratthapa1100@gmail.com-->
            <p>&copy; 2024 Premganga Institiution. All Rights Reserved</p>
        </div>
    </footer>
    <script>
        function confirmation() {
            let confirmed = confirm("Do you really want to submit?");
            if (confirmed) {
                window.location.href = "../../pgiwebform/pgiform/profile.php";
            } else {
                
            }
        };
        function documentSection() {
    window.location.href = "../../pgiwebform/pgiform/documents/documents.php";

};
        function saveFormData() {
            const formData = {
                //Primary Part Of Form Where Personal Details are Included
                fullNameFirst: document.getElementById('fullNameFirst').value,
                middleNameFirst: document.getElementById('middleNameFirst').value,
                lastname: document.getElementById("lastNameFirst").value,
                fullNameAlt: document.getElementById('fullNamealt').value,
                middleNameAlt: document.getElementById('middleNamealt').value,
                lastnameAlt: document.getElementById("lastNamealt").value,
                nncNumber: document.getElementById("NNCnumber").value,
                permanentStreet: document.getElementById("street").value,
                permanentWard: document.getElementById("ward").value,
                permanentMunicipality: document.getElementById("municipality").value,
                permanentDistrict: document.getElementById("district").value,
                permanentprovince: document.getElementById("province").value,
                permanentcountry: document.getElementById("country").value,
                tempStreet: document.getElementById("streetTemp").value,
                tempWard: document.getElementById("wardTemp").value,
                tempMunicipality: document.getElementById("municipalityTemp").value,
                tempDistrict: document.getElementById("tempDistrict").value,
                tempprovince: document.getElementById("provinceTemp").value,
                tempcountry: document.getElementById("countryTemp").value,
                dateOfBirth: document.getElementById("dateOfBirth").value,
                gender: document.getElementById("gender").value,
                maritalStatus: document.getElementById("maritalStatus").value,
                gmail: document.getElementById("gmail").value,
                phoneNumber: document.getElementById("phoneNumber").value,
                altNumber: document.getElementById("altNumber").value,
                passportNumber: document.getElementById("passportNumber").value,
                issuedCountry: document.getElementById("passIssueCountry").value,
                issuedDistrict: document.getElementById("issuedDistrict").value,
                dateOfIssue: document.getElementById("dateOfIssuePass").value,
                dateofExpiry: document.getElementById("dateOfExpiryPass").value,
                countryForApplication: document.getElementById("CountryForapplication").value,
                Forapplication: document.getElementById("Forapplication").value,
                boardForapplication: document.getElementById("boardForapplication").value,


                //Secondary Part Of Form Where Academic Details Are Included
                primarySchool: document.getElementById("primarySchoolName").value,
                primarySchoolAddress: document.getElementById("primarySchoolAddress").value,
                primaryStartedDate: document.getElementById("primaryStartedDate").value,
                primarycompletionDate: document.getElementById("primaryCompletionDate").value,
                secondarySchool: document.getElementById("secondarySchoolName").value,
                secondarySchoolAddress: document.getElementById("secondarySchoolAddress").value,
                secondaryStartedDate: document.getElementById("secondaryStartedDate").value,
                secondarycompletionDate: document.getElementById("secondaryCompletionDate").value,
                higherSchool: document.getElementById("higherSchool").value,
                higherSchoolAddress: document.getElementById("higherAddress").value,
                higherStartedDate: document.getElementById("higherStartedDate").value,
                highercompletionDate: document.getElementById("higherCompletionDate").value,


                //Third Part Of Form Where Nurshing Education Details Are Included
                pclSchoolName: document.getElementById("pclSchoolName").value,
                pclSchoolAddress: document.getElementById("pclSchoolAddress").value,
                pclDateOfStarted: document.getElementById("pclDateOfStarted").value,
                pclDateOfCompletion: document.getElementById("pclDateOfCompletion").value,
                bnbscSchoolName: document.getElementById("bn/bscSchoolName").value,
                bnbscSchoolAddress: document.getElementById("bn/bscSchoolAddress").value,
                bnbscDateOfStarted: document.getElementById("bn/bscDateOfStarted").value,
                bnbscDateOfCompletion: document.getElementById("bn/bscDateOfCompletion").value,

                //Fourth Part Of Form Where Nurshing Licensure Detail part Is Included
                nncRegdNo: document.getElementById("nncRegistrationNumber").value,
                nncExamDate: document.getElementById("nncExamDate").value,
                nncRegistrationDate: document.getElementById("nncRegistrationDate").value,
                nncExpiryDate: document.getElementById("nncExpiryDate").value,
                exam: document.querySelector('input[name="exam"]:checked') ? document.querySelector('input[name="exam"]:checked').value : '',
                noOfAttempts: document.getElementById("noOfAttempts").value,


                //Fifth Part Of form Where Job Details Are Included
                jobTitle: document.getElementById("jobTitle").value,
                hospitalName: document.getElementById("jobHospitalName").value,
                hospitalPermanentAddress: document.getElementById("jobHospitalAddress").value,
                supervisiorName: document.getElementById("jobSupervisiorName").value,
                supervisiorPosition: document.getElementById("jobSupervisiorPost").value,
                dateOfStarted: document.getElementById("jobDateOfStarted").value,
                dateOfCompletion: document.getElementById("jobDateOfCompletion").value,

                //Sixth Part Of form Where Job Details Are Included
                langTest: document.getElementById("langTest").value,
                langTestDate: document.getElementById("langTestDate").value,
                langTestMarks: document.getElementById("langTestMarks").value,

                //Seventh Part Of form Where guardian Details Are Included
                guardianName: document.getElementById("guardianName").value,
                relation: document.getElementById("guardianRelation").value,
                guardianAddress: document.getElementById("guardianAddress").value,
                guardianContact: document.getElementById("guardianContact").value,
                guardianOccupation: document.getElementById("guardianOccupation").value,
            };

            localStorage.setItem('userFormData', JSON.stringify(formData));
        }

        function loadFormData() {
            const savedFormData = localStorage.getItem('userFormData');

            if (savedFormData) {
                const parsedData = JSON.parse(savedFormData);
                document.getElementById('fullNameFirst').value = parsedData.fullNameFirst || '';
                document.getElementById('middleNameFirst').value = parsedData.middleNameFirst || '';
                document.getElementById("lastNameFirst").value = parsedData.lastname || '';
                document.getElementById('fullNamealt').value = parsedData.fullNameAlt || '';
                document.getElementById('middleNamealt').value = parsedData.middleNameAlt || '';
                document.getElementById("lastNamealt").value = parsedData.lastnameAlt || '';
                document.getElementById("NNCnumber").value = parsedData.nncNumber || '';
                document.getElementById("street").value = parsedData.permanentStreet || '';
                document.getElementById("ward").value = parsedData.permanentWard || '';
                document.getElementById("municipality").value = parsedData.permanentMunicipality || '';
                document.getElementById("district").value = parsedData.permanentDistrict || '';
                document.getElementById("province").value = parsedData.permanentprovince || '';
                document.getElementById("country").value = parsedData.permanentcountry || '';
                document.getElementById("streetTemp").value = parsedData.tempStreet || '';
                document.getElementById("wardTemp").value = parsedData.tempWard || '';
                document.getElementById("municipalityTemp").value = parsedData.tempMunicipality || '';
                document.getElementById("tempDistrict").value = parsedData.tempDistrict || '';
                document.getElementById("provinceTemp").value = parsedData.tempprovince || '';
                document.getElementById("countryTemp").value = parsedData.tempcountry || '';
                document.getElementById("dateOfBirth").value = parsedData.dateOfBirth || '';
                document.getElementById("gender").value = parsedData.gender || '';
                document.getElementById("maritalStatus").value = parsedData.maritalStatus || '';
                document.getElementById("gmail").value = parsedData.gmail || '';
                document.getElementById("phoneNumber").value = parsedData.phoneNumber || '';
                document.getElementById("altNumber").value = parsedData.altNumber || '';
                document.getElementById("passportNumber").value = parsedData.passportNumber || '';
                document.getElementById("passIssueCountry").value = parsedData.issuedCountry || '';
                document.getElementById("issuedDistrict").value = parsedData.issuedDistrict || '';
                document.getElementById("dateOfIssuePass").value = parsedData.dateOfIssue || '';
                document.getElementById("dateOfExpiryPass").value = parsedData.dateofExpiry || '';
                document.getElementById("CountryForapplication").value = parsedData.countryForApplication || '';
                document.getElementById("Forapplication").value = parsedData.Forapplication || '';
                document.getElementById("boardForapplication").value = parsedData.boardForapplication || '';


                //Secondary Part Of Form Where Academic Details Are Included
                document.getElementById("primarySchoolName").value = parsedData.primarySchool || '';
                document.getElementById("primarySchoolAddress").value = parsedData.primarySchoolAddress || '';
                document.getElementById("primaryStartedDate").value = parsedData.primaryStartedDate || '';
                document.getElementById("primaryCompletionDate").value = parsedData.primarycompletionDate || '';
                document.getElementById("secondarySchoolName").value = parsedData.secondarySchool || '';
                document.getElementById("secondarySchoolAddress").value = parsedData.secondarySchoolAddress || '';
                document.getElementById("secondaryStartedDate").value = parsedData.secondaryStartedDate || '';
                document.getElementById("secondaryCompletionDate").value = parsedData.secondarycompletionDate || '';
                document.getElementById("higherSchool").value = parsedData.higherSchool || '';
                document.getElementById("higherAddress").value = parsedData.higherSchoolAddress || '';
                document.getElementById("higherStartedDate").value = parsedData.higherStartedDate || '';
                document.getElementById("higherCompletionDate").value = parsedData.highercompletionDate || '';


                //Third Part Of Form Where Nurshing Education Details Are Included
                document.getElementById("pclSchoolName").value = parsedData.pclSchoolName || '';
                document.getElementById("pclSchoolAddress").value = parsedData.pclSchoolAddress || '';
                document.getElementById("pclDateOfStarted").value = parsedData.pclDateOfStarted || '';
                document.getElementById("pclDateOfCompletion").value = parsedData.pclDateOfCompletion || '';
                document.getElementById("bn/bscSchoolName").value = parsedData.bnbscSchoolName || '';
                document.getElementById("bn/bscSchoolAddress").value = parsedData.bnbscSchoolAddress || '';
                document.getElementById("bn/bscDateOfStarted").value = parsedData.bnbscDateOfStarted || '';
                document.getElementById("bn/bscDateOfCompletion").value = parsedData.bnbscDateOfCompletion || '';

                //Fourth Part Of Form Where Nurshing Licensure Detail part Is Included
                document.getElementById("nncRegistrationNumber").value = parsedData.nncRegdNo || '';
                document.getElementById("nncExamDate").value = parsedData.nncExamDate || '';
                document.getElementById("nncRegistrationDate").value = parsedData.nncRegistrationDate || '';
                document.getElementById("nncExpiryDate").value = parsedData.nncExpiryDate || '';


                if (parsedData.exam && (parsedData.exam === 'Yes' || parsedData.exam === 'No')) {
                    document.getElementById(`exam_${parsedData.exam.toLowerCase()}`).checked = true;
                }

                document.getElementById("noOfAttempts").value = parsedData.noOfAttempts || '';


                //Fifth Part Of form Where Job Details Are Included
                document.getElementById("jobTitle").value = parsedData.jobTitle || '';
                document.getElementById("jobHospitalName").value = parsedData.hospitalName || '';
                document.getElementById("jobHospitalAddress").value = parsedData.hospitalPermanentAddress || '';
                document.getElementById("jobSupervisiorName").value = parsedData.supervisiorName || '';
                document.getElementById("jobSupervisiorPost").value = parsedData.supervisiorPosition || '';
                document.getElementById("jobDateOfStarted").value = parsedData.dateOfStarted || '';
                document.getElementById("jobDateOfCompletion").value = parsedData.dateOfCompletion || '';

                //Sixth Part Of form Where Job Details Are Included
                document.getElementById("langTest").value = parsedData.langTest || '';
                document.getElementById("langTestDate").value = parsedData.langTestDate || '';
                document.getElementById("langTestMarks").value = parsedData.langTestMarks || '';

                //Seventh Part Of form Where guardian Details Are Included
                document.getElementById("guardianName").value = parsedData.guardianName || '';
                document.getElementById("guardianRelation").value = parsedData.relation || '';
                document.getElementById("guardianAddress").value = parsedData.guardianAddress || '';
                document.getElementById("guardianContact").value = parsedData.guardianContact || '';
                document.getElementById("guardianOccupation").value = parsedData.guardianOccupation || '';
            }
        }
        // Load saved data when the page is loaded
        window.onload = loadFormData;
    </script>
    <script src="../../pgiwebform/pgiform/index.js"></script>
</body>

</html>