
    let originalState = false;

function resetRadio(radio) {
   
    if (originalState) {
        radio.checked = false;
    } else {
        originalState = true;
    }
}


//function to Change Form On click Of button which have onclick attribute on index.php file

let personalDetails = document.getElementById("personal");
let academicDetails = document.getElementById("academic");
let nurshingEd = document.getElementById("nurshingEducation");
let nurshingLicense = document.getElementById("nursingLicensure");
let jobQualid = document.getElementById("jobQualification");
let langTest = document.getElementById("languageTest");
let familydetails = document.getElementById("familyDetails");
let documentDetails = document.getElementById("documentSection");


function nurshingEducation() {
    academicDetails.classList.add("hide");
    nurshingEd.classList.remove("hide");
};
function nurshinglicensure() {
    nurshingEd.classList.add("hide");
    nurshingLicense.classList.remove("hide");
};
function jobQualification() {
    nurshingLicense.classList.add("hide");
    jobQualid.classList.remove("hide");
};
function languageTest() {
    jobQualid.classList.add("hide");
    langTest.classList.remove("hide");
};
function familyDetails() {
    langTest.classList.add("hide");
    familydetails.classList.remove("hide");
};





let firstButton = document.getElementById("firstNext");
let firstSelector = document.getElementById("academicList");

function personalform() {
    personalDetails.classList.remove("hide");
    academicDetails.classList.add("hide");
    nurshingEd.classList.add("hide");
    nurshingLicense.classList.add("hide");
    jobQualid.classList.add("hide");
    langTest.classList.add("hide");
    familydetails.classList.add("hide");
    documentDetails.classList.add("hide");
};

function academicform() {
    academicDetails.classList.remove("hide");
    personalDetails.classList.add("hide");
    nurshingEd.classList.add("hide");
    nurshingLicense.classList.add("hide");
    jobQualid.classList.add("hide");
    langTest.classList.add("hide");
    familydetails.classList.add("hide");
    documentDetails.classList.add("hide");

};

function nurshingForm() {
    nurshingEd.classList.remove("hide");
    academicDetails.classList.add("hide");
    personalDetails.classList.add("hide");
    nurshingLicense.classList.add("hide");
    jobQualid.classList.add("hide");
    langTest.classList.add("hide");
    familydetails.classList.add("hide");
    documentDetails.classList.add("hide");

};

function licenseForm() {
    nurshingLicense.classList.remove("hide");
    nurshingEd.classList.add("hide");
    academicDetails.classList.add("hide");
    personalDetails.classList.add("hide");
    jobQualid.classList.add("hide");
    langTest.classList.add("hide");
    familydetails.classList.add("hide");
    documentDetails.classList.add("hide");

};

function jobForm() {
    jobQualid.classList.remove("hide");
    nurshingEd.classList.add("hide");
    academicDetails.classList.add("hide");
    personalDetails.classList.add("hide");
    nurshingLicense.classList.add("hide");
    langTest.classList.add("hide");
    familydetails.classList.add("hide");
    documentDetails.classList.add("hide");

};
function languageForm() {
    nurshingEd.classList.add("hide");
    academicDetails.classList.add("hide");
    personalDetails.classList.add("hide");
    nurshingLicense.classList.add("hide");
    jobQualid.classList.add("hide");
    langTest.classList.remove("hide");
    familydetails.classList.add("hide");
    documentDetails.classList.add("hide");

};
function familyForm() {
    familydetails.classList.remove("hide");
    langTest.classList.add("hide");
    nurshingEd.classList.add("hide");
    academicDetails.classList.add("hide");
    personalDetails.classList.add("hide");
    nurshingLicense.classList.add("hide");
    jobQualid.classList.add("hide");
    documentDetails.classList.add("hide");

};

function documentForm() {
    nurshingEd.classList.add("hide");
    academicDetails.classList.add("hide");
    personalDetails.classList.add("hide");
    nurshingLicense.classList.add("hide");
    jobQualid.classList.add("hide");
    langTest.classList.add("hide");
    familydetails.classList.add("hide");
    documentDetails.classList.remove("hide");

};


function yourForm() {
    nurshingEd.classList.add("hide");
    academicDetails.classList.add("hide");
    personalDetails.classList.add("hide");
    nurshingLicense.classList.add("hide");
    jobQualid.classList.add("hide");
    langTest.classList.add("hide");
    familydetails.classList.add("hide");
    documentDetails.classList.add("hide");

};

//Completed And Incomplete Notation for PERONAL DETAILS SECTION
function personalDetonator() {
    let firstname = document.getElementById("fullNameFirst").value;
        let middlename = document.getElementById("middleNameFirst").value;
        let lastname = document.getElementById("lastNameFirst").value;
        let firstnamealt = document.getElementById("fullNamealt").value;
        let middlenamealt = document.getElementById("middleNamealt").value;
        let lastnamealt = document.getElementById("lastNamealt").value;
        let nncnumber = document.getElementById("NNCnumber").value;
        let permanentStreet = document.getElementById("street").value;
        let permanentWard = document.getElementById("ward").value;
        let permanentMunicipality = document.getElementById("municipality").value;
        let permanentDistrict = document.getElementById("district").value;
        let permanentprovince = document.getElementById("province").value;
        let permanentcountry = document.getElementById("country").value;
        let dateOfBirth = document.getElementById("dateOfBirth").value;
        let gender = document.getElementById("gender").value;
        let maritalStatus = document.getElementById("maritalStatus").value;
        let gmail = document.getElementById("gmail").value;
        let phoneNumber = document.getElementById("phoneNumber").value;
        let altnum = document.getElementById("altNumber").value;
        let passportNumber = document.getElementById("passportNumber").value;
        let issuedCountry = document.getElementById("passIssueCountry").value;
        let issuedDistrict = document.getElementById("issuedDistrict").value;
        let dateOfIssue = document.getElementById("dateOfIssuePass").value;
        let dateofExpiry = document.getElementById("dateOfExpiryPass").value;
        let countryForApplication = document.getElementById("CountryForapplication").value;
        let Forapplication = document.getElementById("Forapplication").value;
        let boardForapplication = document.getElementById("boardForapplication").value;
        let personalCompleted = document.getElementById("personalPositive");
        let personalIncomplete = document.getElementById("personalNegative");
        let personalWarning = document.getElementById("personalWarning");

    if (firstname === "" || lastname === "" || permanentStreet === "" || permanentWard === "" || permanentMunicipality === "" || permanentDistrict === ""  || nncnumber === "" || permanentprovince === "" ||  permanentcountry === "" ||dateOfBirth === "" || gender === "Not selected" || maritalStatus === "Not selected" || gmail === "" || phoneNumber === "" || passportNumber === "" || issuedCountry === "" || issuedDistrict === "" || dateOfIssue === "" || dateofExpiry === "" || countryForApplication === "Not selected" || Forapplication === "Not selected" || boardForapplication === "Not selected") {
        personalCompleted.classList.add("hide");
        personalIncomplete.classList.remove("hide");
        personalWarning.classList.add("hide")
       
    } else if( middlename === ""|| firstnamealt === "" || middlenamealt === "" || lastnamealt === "" || altnum === "" ){
        personalCompleted.classList.add("hide");
        personalWarning.classList.remove("hide");
        personalIncomplete.classList.add("hide");
    }else{
    personalCompleted.classList.remove("hide");
    personalWarning.classList.add("hide");
    personalIncomplete.classList.add("hide");
}};

//Completed And Incomplete Notation for ACADEMIC DETAILS SECTION
function academicDetonator() {
    let primarySchool = document.getElementById("primarySchoolName").value;
    let primarySchoolAddress = document.getElementById("primarySchoolAddress").value;
    let primaryStartedDate = document.getElementById("primaryStartedDate").value;
    let primarycompletionDate = document.getElementById("primaryCompletionDate").value;
    let secondarySchool = document.getElementById("secondarySchoolName").value;
    let secondarySchoolAddress = document.getElementById("secondarySchoolAddress").value;
    let secondaryStartedDate = document.getElementById("secondaryStartedDate").value;
    let secondarycompletionDate = document.getElementById("secondaryCompletionDate").value;
    let higherSchool = document.getElementById("higherSchool").value;
    let higherSchoolAddress = document.getElementById("higherAddress").value;
    let higherStartedDate = document.getElementById("higherStartedDate").value;
    let highercompletionDate = document.getElementById("higherCompletionDate").value;
    let academicCompleted = document.getElementById("academicPositive");
    let academicWarning = document.getElementById("academicWarning");
    let academicIncomplete = document.getElementById("academicNegative");


    if (primarySchool === "" || primarySchoolAddress === ""|| secondarySchool === "" || secondarySchoolAddress === ""|| higherSchool === "" || higherSchoolAddress === "")  {
        academicCompleted.classList.add("hide");
        academicIncomplete.classList.remove("hide");
        academicWarning.classList.add("hide")
       
    } else if(primaryStartedDate === "" || primarycompletionDate === "" || secondaryStartedDate === "" || secondarycompletionDate === "" || higherStartedDate === "" || highercompletionDate === ""){
        academicCompleted.classList.add("hide");
        academicWarning.classList.remove("hide");
        academicIncomplete.classList.add("hide");
    }else{
        academicCompleted.classList.remove("hide");
    academicWarning.classList.add("hide");
    academicIncomplete.classList.add("hide");
}};


//Completed And Incomplete Notation for NURSHING DETAILS SECTION
function nurshingDetonator() {
    let pclSchoolName = document.getElementById("pclSchoolName").value;
    let pclSchoolAddress = document.getElementById("pclSchoolAddress").value;
    let pclDateOfStarted = document.getElementById("pclDateOfStarted").value;
    let pclDateOfCompletion = document.getElementById("pclDateOfCompletion").value;
    let bnbscSchoolName = document.getElementById("bn/bscSchoolName").value;
    let bnbscSchoolAddress = document.getElementById("bn/bscSchoolAddress").value;
    let bnbscDateOfStarted = document.getElementById("bn/bscDateOfStarted").value;
    let bnbscDateOfCompletion = document.getElementById("bn/bscDateOfCompletion").value;
    let nurshignCompleted = document.getElementById("nurshignPositive");
    let nurshingwarning = document.getElementById("nurshingwarning");
    let nurshingIncomplete = document.getElementById("nurshingNegative");


    if(pclSchoolName === "" || pclSchoolAddress === "" || pclDateOfStarted === "" || pclDateOfCompletion === "" || bnbscSchoolName === "" || bnbscSchoolAddress === "" || bnbscDateOfStarted === "" || bnbscDateOfCompletion === "") {
        nurshignCompleted.classList.add("hide");
        nurshingwarning.classList.remove("hide");
        nurshingIncomplete.classList.add("hide");
       
    } else {
        nurshignCompleted.classList.remove("hide");
        nurshingwarning.classList.add("hide");
        nurshingIncomplete.classList.add("hide");
}};


//Completed And Incomplete Notation for NURSHING DETAILS SECTION
function licensureDetonator() {

    let selectedRadio = document.querySelector('input[name="exam"]:checked');

let multipleExam;
if (selectedRadio) {
    multipleExam = selectedRadio.value;
} else {
    multipleExam = "Not selected";
}

        let nncRegdNo = document.getElementById("nncRegistrationNumber").value;
        let nncExamDate = document.getElementById("nncExamDate").value;
        let nncRegistrationDate = document.getElementById("nncRegistrationDate").value;
        let nncExpiryDate = document.getElementById("nncExpiryDate").value;
         let noOfattempts = document.getElementById("noOfAttempts").value;
         let licenseCompleted = document.getElementById("licensePositive");
         let licensewarning = document.getElementById("licenseWarning");
         let licenseIncomplete = document.getElementById("licenseNegative");


    if(nncRegdNo === "" || nncExamDate === "" || nncRegistrationDate === "" || nncExpiryDate === "")  {  
        licenseCompleted.classList.add("hide");
        licenseIncomplete.classList.remove("hide");
        licensewarning.classList.add("hide")
       
    } else if(multipleExam === "" || noOfattempts === ""){
        licenseCompleted.classList.add("hide");
        licensewarning.classList.remove("hide");
        licenseIncomplete.classList.add("hide");
    }else{
        licenseCompleted.classList.remove("hide");
    licensewarning.classList.add("hide");
    licenseIncomplete.classList.add("hide");
}};

//Completed And Incomplete Notation for JOBQUALIFICATION DETAILS SECTION
function jobDetonator (){
        let jobTitle = document.getElementById("jobTitle").value;
        let hospitalName = document.getElementById("jobHospitalName").value;
        let hospitalPermanentAddress = document.getElementById("jobHospitalAddress").value;
        let supervisiorName = document.getElementById("jobSupervisiorName").value;
        let supervisiorPosition = document.getElementById("jobSupervisiorPost").value;
        let dateOfStarted = document.getElementById("jobDateOfStarted").value;
        let dateOfCompletion = document.getElementById("jobDateOfCompletion").value;
        let jobCompleted = document.getElementById("jobPositive");
        let jobWarning = document.getElementById("jobWarning");
        let jobIncomplete = document.getElementById("jobNegative");
    
    
        if (jobTitle === "" || hospitalName === "" || hospitalPermanentAddress === "" || supervisiorName === "" || supervisiorPosition === "")  {
            jobCompleted.classList.add("hide");
            jobIncomplete.classList.remove("hide");
            jobWarning.classList.add("hide")
           
        } else if(dateOfStarted === "" || dateOfCompletion === ""){
            jobCompleted.classList.add("hide");
            jobWarning.classList.remove("hide");
            jobIncomplete.classList.add("hide");
        }else{
            jobCompleted.classList.remove("hide");
            jobWarning.classList.add("hide");
            jobIncomplete.classList.add("hide");
}};

//Completed And Incomplete Notation for LANGUAGE DETAILS SECTION
function langDetonator() {
    let langTest = document.getElementById("langTest").value;
    let langTestDate = document.getElementById("langTestDate").value;
    let langTestMarks = document.getElementById("langTestMarks").value;
    let langCompleted = document.getElementById("langPositive");
    let langWarning = document.getElementById("langWarning");
    let langIncomplete = document.getElementById("langNegative");

    if(langTest === "" || langTestDate === "" || langTestMarks === "") {
        langCompleted.classList.add("hide");
        langWarning.classList.remove("hide");
        langIncomplete.classList.add("hide");
       
    } else {
        langCompleted.classList.remove("hide");
        langWarning.classList.add("hide");
        langIncomplete.classList.add("hide");
}};
//Completed And Incomplete Notation for FAMILY DETAILS SECTION
function familyDetonator (){
    let guardianName = document.getElementById("guardianName").value;
    let relation = document.getElementById("guardianRelation").value;
    let guardianAddress = document.getElementById("guardianAddress").value;
    let guardianContact = document.getElementById("guardianContact").value;
    let guardianOccupation = document.getElementById("guardianOccupation").value;
    let familyCompleted = document.getElementById("familyPositive");
    let familyWarning = document.getElementById("familyWarning");
    let familyIncomplete = document.getElementById("familyNegative");


    if (guardianName === "" || relation === "" || guardianAddress === "" || guardianContact === "" || guardianOccupation === "")  {
        familyCompleted.classList.add("hide");
        familyWarning.classList.remove("hide");
        familyIncomplete.classList.add("hide");
       
    } else {
        familyCompleted.classList.remove("hide");
        familyWarning.classList.add("hide");
        familyIncomplete.classList.add("hide");
}};

//Completed And Incomplete Notation for DOCUMENTS DETAILS SECTION
function docDetonator (){
    let digitalPhoto = document.getElementById("photoInput").files;
    let experienceLetter = document.getElementById("experience").files;
    let passportFront = document.getElementById("passportFront").files;
    let passportBack = document.getElementById("passportBack").files;
    let slcMarkAndcharacter = document.getElementById("SLCMarkandCharacter").files;
    let nncRegistrationBothSide = document.getElementById("NNCRegd").files;
    let pclMarksheetCharacter = document.getElementById("PCLMarkandCharacter").files;
    let bachelorTranscriptCharacter = document.getElementById("BachelorMarkandCharacter").files;
    let studentSignature = document.getElementById("signature").files;
    let recogonizedPGI = document.getElementById("recogonizedPGI").value;
    let referredby = document.getElementById("referredaby").value;
    let docCompleted = document.getElementById("docPositive");
    let docWarning = document.getElementById("docWarning");
    let docIncomplete = document.getElementById("docNegative");

    if (digitalPhoto.length === 0 || experienceLetter.length === 0 || passportFront.length === 0 ||
        passportBack.length === 0 || slcMarkAndcharacter.length === 0 || nncRegistrationBothSide.length === 0 ||
        pclMarksheetCharacter.length === 0 || bachelorTranscriptCharacter.length === 0 || studentSignature.length === 0)  {
        docCompleted.classList.add("hide");
        docIncomplete.classList.remove("hide");
        docWarning.classList.add("hide")
       
    } else if(recogonizedPGI === "" || referredby === ""){
        docCompleted.classList.add("hide");
        docWarning.classList.remove("hide");
        docIncomplete.classList.add("hide");
    }else{
    docCompleted.classList.remove("hide");
    docWarning.classList.add("hide");
    docIncomplete.classList.add("hide");
}};
    




function validateForm() {
    let fiirstname = document.getElementById("fullNameFirst").value;
    let lastname = document.getElementById("lastNameFirst").value;
    let permanentStreet = document.getElementById("street").value;
    let permanentWard = document.getElementById("ward").value;
    let permanentMunicipality = document.getElementById("municipality").value;
    let permanentDistrict = document.getElementById("district").value;
    let permanentprovince = document.getElementById("province").value;
    let permanentcountry = document.getElementById("country").value;
    let dateOfBirth = document.getElementById("dateOfBirth").value;
    let gender = document.getElementById("gender").value;
    let maritalStatus = document.getElementById("maritalStatus").value;
    let gmail = document.getElementById("gmail").value;
    let phoneNumber = document.getElementById("phoneNumber").value;
    let passportNumber = document.getElementById("passportNumber").value;
    let issuedCountry = document.getElementById("passIssueCountry").value;
    let issuedDistrict = document.getElementById("issuedDistrict").value;
    let dateOfIssue = document.getElementById("dateOfIssuePass").value;
    let dateofExpiry = document.getElementById("dateOfExpiryPass").value;
    let countryForApplication = document.getElementById("CountryForapplication").value;
    let Forapplication = document.getElementById("Forapplication").value;
    let boardForapplication = document.getElementById("boardForapplication").value;
    let primarySchool = document.getElementById("primarySchoolName").value;
    let primarySchoolAddress = document.getElementById("primarySchoolAddress").value;
    let primaryStartedDate = document.getElementById("primaryStartedDate").value;
    let primarycompletionDate = document.getElementById("primaryCompletionDate").value;
    let secondarySchool = document.getElementById("secondarySchoolName").value;
    let secondarySchoolAddress = document.getElementById("secondarySchoolAddress").value;
    let secondaryStartedDate = document.getElementById("secondaryStartedDate").value;
    let secondarycompletionDate = document.getElementById("secondaryCompletionDate").value;
    let higherSchool = document.getElementById("higherSchool").value;
    let higherSchoolAddress = document.getElementById("higherAddress").value;
    let higherStartedDate = document.getElementById("higherStartedDate").value;
    let highercompletionDate = document.getElementById("higherCompletionDate").value;
    let nncRegdNo = document.getElementById("nncRegistrationNumber").value;
    let nncExamDate = document.getElementById("nncExamDate").value;
    let nncRegistrationDate = document.getElementById("nncRegistrationDate").value;
    let nncExpiryDate = document.getElementById("nncExpiryDate").value;
    let jobTitle = document.getElementById("jobTitle").value;
    let hospitalName = document.getElementById("jobHospitalName").value;
    let hospitalPermanentAddress = document.getElementById("jobHospitalAddress").value;
    let supervisiorName = document.getElementById("jobSupervisiorName").value;
    let supervisiorPosition = document.getElementById("jobSupervisiorPost").value;
    let dateOfStarted = document.getElementById("jobDateOfStarted").value;
    let dateOfCompletion = document.getElementById("jobDateOfCompletion").value;
    let guardianName = document.getElementById("guardianName").value;
    let relation = document.getElementById("guardianRelation").value;
    let guardianAddress = document.getElementById("guardianAddress").value;
    let guardianContact = document.getElementById("guardianContact").value;
    let guardianOccupation = document.getElementById("guardianOccupation").value;

    if (fiirstname === "" || lastname === "" || permanentStreet === "" || permanentWard === "" || permanentMunicipality === "" || permanentDistrict === "" || permanentprovince === "" || permanentcountry === "" || dateOfBirth === "" || gender === "" || maritalStatus === "" || gmail === "" || phoneNumber === "" || passportNumber === "" || issuedCountry === "" || issuedDistrict === "" || dateOfIssue === "" || dateofExpiry === "" || countryForApplication === "" || Forapplication === "" || boardForapplication === "" || primarySchool === "" || primarySchoolAddress === "" || primaryStartedDate === "" || primarycompletionDate === "" || secondarySchool === "" || secondarySchoolAddress === "" || secondaryStartedDate === "" || secondarycompletionDate === "" || higherSchool === "" || higherSchoolAddress === "" || higherStartedDate === "" || highercompletionDate === "" || nncRegdNo === "" || nncExamDate === "" || nncRegistrationDate === "" || nncExpiryDate === "" || jobTitle === "" || hospitalName === "" || hospitalPermanentAddress === "" || supervisiorName === "" || supervisiorPosition === "" || dateOfStarted === "" || dateOfCompletion === "" || guardianName === "" || relation === "" || guardianAddress === "" || guardianContact === "" || guardianOccupation === "") {
        alert("Please fill in all required fields.");
        return false;
    }
    window.location.href = "../../pgiform/taker/exit.php";
    return true;

}

// function validateForm() {
//     let firstname = document.getElementById("fullNameFirst").value;
//     let middlename = document.getElementById("middleNameFirst").value;
//     let lastname = document.getElementById("lastNameFirst").value;
//     let firstnamealt = document.getElementById("fullNamealt").value;
//     let middlenamealt = document.getElementById("middleNamealt").value;
//     let lastnamealt = document.getElementById("lastNamealt").value;
//     let permanentStreet = document.getElementById("street").value;
//     let permanentWard = document.getElementById("ward").value;
//     let permanentMunicipality = document.getElementById("municipality").value;
//     let permanentDistrict = document.getElementById("district").value;
//     let permanentprovince = document.getElementById("province").value;
//     let permanentcountry = document.getElementById("country").value;
//     let dateOfBirth = document.getElementById("dateOfBirth").value;
//     let gender = document.getElementById("gender").value;
//     let maritalStatus = document.getElementById("maritalStatus").value;
//     let gmail = document.getElementById("gmail").value;
//     let phoneNumber = document.getElementById("phoneNumber").value;
//     let passportNumber = document.getElementById("passportNumber").value;
//     let issuedCountry = document.getElementById("passIssueCountry").value;
//     let issuedDistrict = document.getElementById("issuedDistrict").value;
//     let dateOfIssue = document.getElementById("dateOfIssuePass").value;
//     let dateofExpiry = document.getElementById("dateOfExpiryPass").value;
//     let countryForApplication = document.getElementById("CountryForapplication").value;
//     let Forapplication = document.getElementById("Forapplication").value;
//     let boardForapplication = document.getElementById("boardForapplication").value;
//     let primarySchool = document.getElementById("primarySchoolName").value;
//     let primarySchoolAddress = document.getElementById("primarySchoolAddress").value;
//     let primaryStartedDate = document.getElementById("primaryStartedDate").value;
//     let primarycompletionDate = document.getElementById("primaryCompletionDate").value;
//     let secondarySchool = document.getElementById("secondarySchoolName").value;
//     let secondarySchoolAddress = document.getElementById("secondarySchoolAddress").value;
//     let secondaryStartedDate = document.getElementById("secondaryStartedDate").value;
//     let secondarycompletionDate = document.getElementById("secondaryCompletionDate").value;
//     let higherSchool = document.getElementById("higherSchool").value;
//     let higherSchoolAddress = document.getElementById("higherAddress").value;
//     let higherStartedDate = document.getElementById("higherStartedDate").value;
//     let highercompletionDate = document.getElementById("higherCompletionDate").value;
//     let pclSchoolName = document.getElementById("pclSchoolName").value;
//     let pclSchoolAddress = document.getElementById("pclSchoolAddress").value;
//     let pclDateOfStarted = document.getElementById("pclDateOfStarted").value;
//     let pclDateOfCompletion = document.getElementById("pclDateOfCompletion").value;
//     let bn/bscSchoolName = document.getElementById("bn/bscSchoolName").value;
//     let bn/bscSchoolAddress = document.getElementById("bn/bscSchoolAddress").value;
//     let bn/bscDateOfStarted = document.getElementById("bn/bscDateOfStarted").value;
//     let bn/bscDateOfCompletion = document.getElementById("bn/bscDateOfCompletion").value;
//     let nncRegdNo = document.getElementById("nncRegistrationNumber").value;
//     let nncExamDate = document.getElementById("nncExamDate").value;
//     let nncRegistrationDate = document.getElementById("nncRegistrationDate").value;
//     let nncExpiryDate = document.getElementById("nncExpiryDate").value;
//     let multipleExam = document.querySelector('input[name="exam"]:checked').value;
//      let noOfattempts = document.getElementById("noOfAttempts").value;
//     let jobTitle = document.getElementById("jobTitle").value;
//     let hospitalName = document.getElementById("jobHospitalName").value;
//     let hospitalPermanentAddress = document.getElementById("jobHospitalAddress").value;
//     let supervisiorName = document.getElementById("jobSupervisiorName").value;
//     let supervisiorPosition = document.getElementById("jobSupervisiorPost").value;
//     let dateOfStarted = document.getElementById("jobDateOfStarted").value;
//     let dateOfCompletion = document.getElementById("jobDateOfCompletion").value;
//     let langTest = document.getElementById("langTest").value;
//     let langTestDate = document.getElementById("langTestDate").value;
//     let langTestMarks = document.getElementById("langTestMarks").value;
//     let guardianName = document.getElementById("guardianName").value;
//     let relation = document.getElementById("guardianRelation").value;
//     let guardianAddress = document.getElementById("guardianAddress").value;
//     let guardianContact = document.getElementById("guardianContact").value;
//     let guardianOccupation = document.getElementById("guardianOccupation").value;
//     let digitalPhoto = document.getElementById("photoInput").value;
//     let experienceLetter = document.getElementById("experience").value;
//     let passportFront = document.getElementById("passportFront").value;
//     let passportBack = document.getElementById("passportBack").value;
//     let slcMarkAndcharacter = document.getElementById("SLCMarkandCharacter").value;
//     let nncRegistrationBothSide = document.getElementById("NNCRegd").value;
//     let pclMarksheetCharacter = document.getElementById("PCLMarkandCharacter").value;
//     let bachelorTranscriptCharcter = document.getElementById("BachelorMarkandCharacter").value;
//     let studentSignature = document.getElementById("signature").value;


//Personaldetails script for same as above button

// Function to copy permanent address to temporary address


try{

    document.getElementById('sameAsAbove').addEventListener('click', function () {
        if (this.checked) {
            copyAddressDetails();
        }
    });
    //academic script to copy primary scl details and copy it to secondary school
document.getElementById('SchoolSameAsAbove').addEventListener('change', function () {
    if (this.checked) {
        // Copy Primary Address details to Secondary Address
        copyInputsDetails('.Primarylevel', '.SecondaryLevel');
    }
});
}catch(err){
console.log(err);
}
function copyAddressDetails() {
    // Get input fields for Permanent Address
    let permanentInputs = document.querySelectorAll('.permanent-address input');

    // Get input fields for Temporary Address
    let temporaryInputs = document.querySelectorAll('.temporary-address input');

    // Copy values from Permanent Address to Temporary Address
    for (let i = 0; i < permanentInputs.length; i++) {
        temporaryInputs[i].value = permanentInputs[i].value;
    }
};



function copyInputsDetails(primarySelector, secondarySelector) {
    // Get input fields for Primary Address
    let primaryInputs = document.querySelectorAll(primarySelector + ' input');

    // Get input fields for Secondary Address
    let secondaryInputs = document.querySelectorAll(secondarySelector + ' input');

    // Copy values from Primary Address to Secondary Address
    for (let i = 0; i < primaryInputs.length; i++) {
        secondaryInputs[i].value = primaryInputs[i].value;
    }
};


