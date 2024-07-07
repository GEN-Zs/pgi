let fname = localStorage.getItem('storedFullNameFirst');
let mname = localStorage.getItem('storedMiddleNameFirst');
let lname = localStorage.getItem('storedLastNameFirst');
let altFname = localStorage.getItem('storedAltNameFirst');
let altMname = localStorage.getItem('storedAltNameMiddle');
let altLname = localStorage.getItem('storedAltNameLast');
let perStreet = localStorage.getItem('storedPermastreet');
let perWard = localStorage.getItem('storedPermaward');
let perMunicipality = localStorage.getItem('storedPermaMunicipality');
let perDistrict = localStorage.getItem('storedPermadistrict');
let perProvince = localStorage.getItem('storedPermaProvi');
let perCountry = localStorage.getItem('storedPermaCont');
let tempStreet = localStorage.getItem('storedTempStreet');
let tempWard = localStorage.getItem('storedTempWard');
let tempMunicipality = localStorage.getItem('storedTempmunic');
let tempDistrict = localStorage.getItem('storedTempDistrict');
let tempProvince = localStorage.getItem('storedTempProvit');
let tempCountry = localStorage.getItem('storedTempCont');
let dateOfBirth = localStorage.getItem('storedDateOfBirth');
let gender = localStorage.getItem('storedGender');
let maritalStatus = localStorage.getItem('storedMaritalSatus');
let gmail = localStorage.getItem('storedGmail');
let phoneNumber = localStorage.getItem('storedNumber');
let passNumber = localStorage.getItem('storedPassNumber');
let issueCon = localStorage.getItem('storedIssueContry');
let issueDis = localStorage.getItem('storedIssueDis');
let issueDate = localStorage.getItem('storedIssueDate');
let expiryDate = localStorage.getItem('storedIssueExpiry');
let conForApplication = localStorage.getItem('storedConForApp');
let forApplication = localStorage.getItem('storedForApp');
let boardOfApplication = localStorage.getItem('storedBoardOfApp');
let primaryScl = localStorage.getItem('storedPrimeName');
let primarySclAdd = localStorage.getItem('storedPrimeSclAdd');
let primaryStartDate = localStorage.getItem('storedPrimeStart');
let primaryEndedDate = localStorage.getItem('storedPrimeComp');
let secSclName = localStorage.getItem('storedSecName');
let secSclAdd = localStorage.getItem('storedSecAdd');
let secStartDate = localStorage.getItem('storedSecStart');
let secEndDate = localStorage.getItem('storedSecComp');
let highSclName = localStorage.getItem('storedHighScl');
let highSclAdd = localStorage.getItem('storedHighAdd');
let highStatrtDate = localStorage.getItem('storedHighStart');
let highEndDate = localStorage.getItem('storedHighComp');
let pclSclName = localStorage.getItem('storedPclSclName');
let pclSclAdd = localStorage.getItem('storedPclSclAdd');
let pclSclStart = localStorage.getItem('storedPclStart');
let pclSclEnd = localStorage.getItem('storedPclComp');
let bscSclName = localStorage.getItem('storedBscSclName');
let bscSclAdd = localStorage.getItem('storedBScAdd');
let bscstart = localStorage.getItem('storedBscStart');
let bscComp = localStorage.getItem('storedBscComp');
let nncRegd = localStorage.getItem('storedNncregd');
let nncExamDate = localStorage.getItem('storedNncExamDate');
let nncRegdDate = localStorage.getItem('storedNncRegdDate');
let nncExpiry = localStorage.getItem('storedNncExpiry');
let nncMultiExam = localStorage.getItem('storedMultipleExam');
let noOfAtempt = localStorage.getItem('storedNoOfAtempts');
let jobTitle = localStorage.getItem('storedJobTitle');
let hosname = localStorage.getItem('storedHosName');
let hosAdd = localStorage.getItem('storedHosAdd');
let superName = localStorage.getItem('storedSuperName');
let superposition = localStorage.getItem('storedSuperPosition');
let dateOfStart = localStorage.getItem('storedDateOfSatrt');
let dateOfComp = localStorage.getItem('storedDateOfComp');
let langTestProfile = localStorage.getItem('storedLangTest');
let langDateProfile = localStorage.getItem('storedLangDate');
let langMarkProfile = localStorage.getItem('storedLangMark');
let guardNameProfile = localStorage.getItem('storedGuardName');
let guardRelationProfile = localStorage.getItem('storedRelation');
let guardAddressProfile = localStorage.getItem('storedGuardAdd');
let guardContactProfile = localStorage.getItem('storedGuardContact');
let guardOccupaProfile = localStorage.getItem('storedGuardOccup');


let full_name = fname + " " + mname + " " + lname;
document.getElementById('heading_name').innerHTML = full_name;


document.getElementById('first_name').innerHTML = fname;
document.getElementById('middle_name').innerHTML = mname;
document.getElementById('last_name').innerHTML = lname;
document.getElementById('alt_fname').innerHTML = altFname;
document.getElementById('alt_mname').innerHTML = altMname;
document.getElementById('alt_lname').innerHTML = altLname;
document.getElementById('perm_street').innerHTML = perStreet;
document.getElementById('perm_ward').innerHTML = perWard;
document.getElementById('perm_municipality').innerHTML = perMunicipality;
document.getElementById('perm_district').innerHTML = perDistrict;
document.getElementById('perm_province').innerHTML = perProvince;
document.getElementById('perm_country').innerHTML = perCountry;
document.getElementById('temp_street').innerHTML = tempStreet;
document.getElementById('temp_ward').innerHTML = tempWard;
document.getElementById('temp_municipality').innerHTML = tempMunicipality;
document.getElementById('temp_district').innerHTML = tempDistrict;
document.getElementById('temp_province').innerHTML = tempProvince;
document.getElementById('temp_country').innerHTML = tempCountry;
document.getElementById('dob_profile').innerHTML = dateOfBirth;
document.getElementById('gender_profile').innerHTML = gender;
document.getElementById('ms_profile').innerHTML = maritalStatus;
document.getElementById('mail_profile').innerHTML = gmail;
document.getElementById('number_profile').innerHTML = phoneNumber;
document.getElementById('profile_pass').innerHTML = passNumber;
document.getElementById('profile_isscountry').innerHTML = issueCon;
document.getElementById('profile_issuecon').innerHTML = issueDis;
document.getElementById('profile_issuedate').innerHTML = issueDate;
document.getElementById('profile_expirydate').innerHTML = expiryDate;
document.getElementById('profile_conforapp').innerHTML = conForApplication;
document.getElementById('profile_appforcourse').innerHTML = forApplication;
document.getElementById('profile_boardnurse').innerHTML = boardOfApplication;
document.getElementById('profile_sclnameprime').innerHTML = primaryScl;
document.getElementById('profile_scladdprime').innerHTML = primarySclAdd;
document.getElementById('profile_sclstartprime').innerHTML = primaryStartDate;
document.getElementById('profile_sclcompprime').innerHTML = primaryEndedDate;
document.getElementById('profil_secsclname').innerHTML = secSclName;
document.getElementById('profil_secscladd').innerHTML = secSclAdd;
document.getElementById('profil_secsclstart').innerHTML = secStartDate;
document.getElementById('profil_secsclcomp').innerHTML = secEndDate;
document.getElementById('profile_highsclname').innerHTML = highSclName;
document.getElementById('profile_highscladd').innerHTML = highSclAdd;
document.getElementById('profile_highsclstart').innerHTML = highStatrtDate;
document.getElementById('profile_highsclcomp').innerHTML = highEndDate;
document.getElementById('profile_pclsclname').innerHTML = pclSclName;
document.getElementById('profile_pclscladd').innerHTML = pclSclAdd;
document.getElementById('profile_pclsclstart').innerHTML = pclSclStart;
document.getElementById('profile_pclsclcomp').innerHTML = pclSclEnd;
document.getElementById('profile_bscsclname').innerHTML = bscSclName;
document.getElementById('profile_bscscladd').innerHTML = bscSclAdd;
document.getElementById('profile_bscsclstart').innerHTML = bscstart;
document.getElementById('profile_bscsclcomp').innerHTML = bscComp;
document.getElementById('profile_nncregdnum').innerHTML = nncRegd;
document.getElementById('profile_nncexamdate').innerHTML = nncExamDate;
document.getElementById('profile_regddate').innerHTML = nncRegdDate;
document.getElementById('profile_nncexpirydate').innerHTML = nncExpiry;
document.getElementById('profile_multipleexam').innerHTML = nncMultiExam;
document.getElementById('profile_numofattem').innerHTML = noOfAtempt;
document.getElementById('profile_jobtitle').innerHTML = jobTitle;
document.getElementById('profile_hosname').innerHTML = hosname;
document.getElementById('profile_permadd').innerHTML = hosAdd;
document.getElementById('profile_supername').innerHTML = superName;
document.getElementById('profile_superposition').innerHTML = superposition;
document.getElementById('profile_jobstartdate').innerHTML = dateOfStart;
document.getElementById('profile_jobcompdate').innerHTML = dateOfComp;
document.getElementById('profile_testname').innerHTML = langTestProfile;
document.getElementById('profile_testexamdate').innerHTML = langDateProfile;
document.getElementById('profile_testmarks').innerHTML = langMarkProfile;
document.getElementById('profile_guardname').innerHTML = guardNameProfile;
document.getElementById('profile_guardrel').innerHTML = guardRelationProfile;
document.getElementById('profile_guardperadd').innerHTML = guardAddressProfile;
document.getElementById('profile_guardnum').innerHTML = guardContactProfile;
document.getElementById('profile_guardocc').innerHTML = guardOccupaProfile;
// document.getElementById('profile_picofdigitpic').parentNode.innerHTML = createDownloadLink('Digital Photo', digitalPhotoProfile);
// document.getElementById('profile_picofexplett').parentNode.innerHTML = createDownloadLink('Experience Letter', expLetterProfile);
// document.getElementById('profile_picofpassfron').parentNode.innerHTML = createDownloadLink('Passport Front', passFronProfile);
// document.getElementById('profile_picofpassback').parentNode.innerHTML = createDownloadLink('Passport Back', passBackProfile);
// document.getElementById('profile_picofslcmarkchar').parentNode.innerHTML = createDownloadLink('SLC Mark', SLCMarkandChar);
// document.getElementById('profile_picofnncregd').parentNode.innerHTML = createDownloadLink('NNC Registration', NNCRegdPic);
// document.getElementById('profile_picofpclmarkchar').parentNode.innerHTML = createDownloadLink('PCL Marksheet and Character', PCLMarkandChar);
// document.getElementById('profile_picofbachtranschar').parentNode.innerHTML = createDownloadLink('Bachelor Transcript and Character', bachTranandChar);
// document.getElementById('profile_picofotherdoc').parentNode.innerHTML = createDownloadLink('Other Documents', othersdoc);
// document.getElementById('profile_picofstudsign').parentNode.innerHTML = createDownloadLink('Student Signature', studSign);

// function createDownloadLink(label, fileContent) {
//   var blob = new Blob([fileContent], { type: 'application/octet-stream' });
//   var url = URL.createObjectURL(blob);
  
//   return '<a href="' + url + '" download="' + label + '">' + label + '</a>';
// }




// document.getElementById('photoInput').addEventListener('change', function(event) {
//     handleFileUpload(event.target.files[0], 'photo');
//   });
  
//   function handleFileUpload(file, inputName) {
//     var formData = new FormData();
//     formData.append(inputName, file);
  
//     // Send the file to the server (you'll need to implement this on the server-side)
//     // Example using fetch API:
//     fetch('/upload-endpoint', {
//       method: 'POST',
//       body: formData
//     })
//     .then(response => response.json())
//     .then(data => {
//       if (data.success) {
//         var downloadLink = createDownloadLink(data.fileName, inputName);
//         document.getElementById(inputName + 'Download').innerHTML = downloadLink;
//       } else {
//         console.error('File upload failed');
//       }
//     })
//     .catch(error => {
//       console.error('Error during file upload:', error);
//     });
//   }
  
  // function createDownloadLink(fileName, inputName) {
  //   var downloadLink = '<a href="/download-endpoint?file=' + fileName + '" download="' + fileName + '">Download</a>';
  //   return downloadLink;
  // }
  

