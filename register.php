
<?php include('register_server.php') ?>

<!DOCTYPE html>
<html>
<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="css\user.css">
  <link rel="stylesheet" type="text/css" href="css\reg.css">

<style>


</style>
</head>

<body>


<center>

  <div class="bbb">

  <div class="bb">
<form id="regForm" method="post" action="register.php">


  <h2>Register your account</h2>

  <!-- One "tab" for each step in the form: -->
  <div class="tab">
    <div class="input-group">
      <label>First name</label>
      <input placeholder="First name" id="fname" value="<?php echo $fname; ?>" name="fname" oninput="this.className = ''">
    </div>
    <div class="input-group">
      <label>Last name</label>
      <input placeholder="Last name" id="lname" value="<?php echo $lname; ?>" name="lname" oninput="this.className = ''">
    </div>
  </div>

  <div class="tab">
    <div class="input-group">
      <label>Email</label>
      <input name="email" id="email" value="<?php echo $email; ?>" placeholder="*@gamil.com" oninput="this.className = ''">
    </div>
    <div class="input-group">
      <label>Mobile</label>
      <input name="mobile" id="mobile" value="<?php echo $mobile; ?>" placeholder="07********" oninput="this.className = ''">
    </div>
  </div>


  <div class="tab">
    <div class="input-group">
      <label>Password</label>
      <input placeholder="minimum 8 characters" type="password" name="password_1" id="password"
       autocomplete="none"  oninput="this.className = ''" max="20" >

         <a class="st">strong</a><progress class="strength" max="100" value="0" id="strength"></progress>

    </div>
    <div class="input-group">
      <label>Confirm password</label>
      <input placeholder="Confirm password" name="password_2" id="password_2"
       autocomplete="none" type="password" oninput="this.className = ''" max="20">
    </div>
  </div>

<br>
<div class="input-group">
      <button class="bttn" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
      <button class="bttn" type="button" id="nextBtn" onclick="nextPrev(1)" >Next</button>
      <button type="submit" class="bttn"  id="sub" name="reg_user" onclick="nextPrev(1)">Submit</button>
</div>

  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<p>
  Already a member?   <a href="login.php">   Sign in</a>
</p>


</div>


<div class="right-section">

  <a href="index.php">
  <div  style="width:50px; height:50px; background-color:#f44336; position: relative;  top:0px; right:-125px;">

    <img src="images/into.png" style="width:18px;height:18px; padding-top:15px">

  </div>
  </a>

  <div class="Rerror">
      <div id="phpMsg">
        <?php include('errors.php'); ?>
      </div>
      <div id="fnameMsg" class="msg">
        <p id="fnameMsgNum" style="color : #f44336; padding-left: 20px">Only letters are allowed in <b>first name</b></p>
      </div>
      <div id="lnameMsg" class="msg">
        <p id="lnameMsgNum" style="color : #f44336; padding-left: 20px">Only letters are allowed in <b>last name</b></p>
      </div>
      <div id="emailMsg" class="msg">
        <p id="emailMsgInvalid" style="color : #f44336; padding-left: 20px">Please enter valid <b>email</b></p>
        <p id="emailMsgGmail" style="color : #f44336; padding-left: 20px">Please enter only <b>gmail-ID</b></p>
      </div>
      <div id="mobileMsg" class="msg">
        <p id="mobileMsgInvalid" style="color : #f44336; padding-left: 20px">Invalid <b>mobile number</b></p>
      </div>
      <div id="passMsg" class="msg">
        <h3>Password must contain the following : </h3>
        <p id="passMsgLetter" class="invalid"><b>A lowercase letter</b></p>
        <p id="passMsgCapital" class="invalid"><b>A capital (uppercase) letter</b></p>
        <p id="passMsgNumber" class="invalid"><b>A number</b></p>
        <p id="passMsgLength" class="invalid"><b>Minimum 8 characters</b></p>
      </div>
      <div id="cnfMsg" class="msg">
          <p id="cnfMsgInvalid" style="color : #f44336; padding-left: 20px"><b>Confirmation password</b> do not match</p>
      </div>



  </div>
</div>

</div>
  </center>





  <script>//tabs

  var currentTab = 0; // Current tab is set to be the first tab (0)
  showTab(currentTab); // Display the current tab

  var f = 0, l = 0, e = 0, m = 0, p = 0, c = 0;


  function nextPrev(n) {                                                        // This function will figure out which tab to display
    // This function will figure out which tab to display                       // Exit the function if any field in the current tab is invalid
    var x = document.getElementsByClassName("tab");
    // Exit the function if any field in the current tab is invalid:
    if (n == 1 && !validate()){
       return false;
    }
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form... :
    if (currentTab >= x.length) {
      //...the form gets submitted:
      return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab);
  }

  function showTab(n) {                                                         // This function will display the specified tab of the form
    // This function will display the specified tab of the form ...             // and fix the Previous/Next buttons
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // ... and fix the Previous/Next buttons:
    if (n == 0) {
      document.getElementById("prevBtn").style.display = "none";
      document.getElementById("sub").style.display = "none";
    } else {
      document.getElementById("prevBtn").style.display = "inline";
      document.getElementById("sub").style.display = "none";
    }
    if (n == (x.length - 1)) {
      document.getElementById("sub").style.display = "inline";
      document.getElementById("prevBtn").style.display = "inline";
      document.getElementById("nextBtn").style.display = "none";
    } else {
      document.getElementById("nextBtn").style.display = "inline";
      document.getElementById("nextBtn").innerHTML = "Next";
    }
    // ... and run a function that displays the correct step indicator:
    fixStepIndicator(n)
  }




  function fixStepIndicator(n) {                                                // This function removes the "active" class of all steps
                                                                                //  and adds the "active" class to the current step
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
      x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class to the current step:
    x[n].className += " active";
  }





  function validate() {                                                         // This function deals with validation of the form fields
                                                                                //and check empty fields
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
      // If a field is empty...
      if (y[i].value == "") {

        // add an "invalid" class to the field:
        y[i].className += " invalid";
        // and set the current valid status to false:
        valid = false;
      }else{
        valid = validateForm();
      }
    }

    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
      document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
  }


  function validateForm() {                                                     // This function deals with validation of the form fields
    // This function deals with validation of the form fields                   //checking field are invalid
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");


    if(currentTab==0){
        // If field are invalid
        if (f == 1) {
          // add an "invalid" class to the field:
          y[0].className += " invalid";
          // and set the current valid status to false:
          valid = false;
        }
        if(l == 1){
          // add an "invalid" class to the field:
          y[1].className += " invalid";
          // and set the current valid status to false:
          valid = false;
        }
      }

      if(currentTab==1){
        // If field are invalid
        if (e == 1) {
          // add an "invalid" class to the field:
          y[0].className += " invalid";
          // and set the current valid status to false:
          valid = false;
        }
        if(m == 1){
          // add an "invalid" class to the field:
          y[1].className += " invalid";
          // and set the current valid status to false:
          valid = false;
        }
      }
        if(currentTab==2){
        // If field are invalid
        if (p == 1) {
          // add an "invalid" class to the field:
          y[0].className += " invalid";
          // and set the current valid status to false:
          valid = false;
        }
        if(c == 1){
          // add an "invalid" class to the field:
          y[1].className += " invalid";
          // and set the current valid status to false:
          valid = false;
        }
      }



      return valid;
  }






  //name validation

  var fname = document.getElementById("fname");                                 //name validation
  var lname = document.getElementById("lname");

  // When the user clicks on the first name field, show the message box
  fname.onfocus = function() {
    document.getElementById("fnameMsg").style.display = "block";
  }
  lname.onfocus = function() {
    document.getElementById("lnameMsg").style.display = "block";
  }

  // When the user clicks outside of the first name field, hide the message box
  fname.onblur = function() {
    document.getElementById("fnameMsg").style.display = "none";
  }
  lname.onblur = function() {
    document.getElementById("lnameMsg").style.display = "none";
  }

fname.onkeyup = function() {
  var name = /^[A-Za-z]+$/g;
  if(!fname.value.match(name)){
    document.getElementById("fnameMsgNum").style.display = "block";
    document.getElementById("phpMsg").style.display = "none";
    f = 1;
  }else{
    document.getElementById("fnameMsgNum").style.display = "none";
    document.getElementById("phpMsg").style.display = "block";
    f = 0;
  }
}

lname.onkeyup = function() {
  var name = /^[A-Za-z]+$/g;
  if(!lname.value.match(name)){
    document.getElementById("lnameMsgNum").style.display = "block";
    document.getElementById("phpMsg").style.display = "none";
    l = 1;
  }else{
    document.getElementById("lnameMsgNum").style.display = "none";
    document.getElementById("phpMsg").style.display = "block";
    l = 0;
  }
}







//email and mobile validation

  var email = document.getElementById("email");                                 //email and mobile validation
  var mobile = document.getElementById("mobile");


// When the user clicks on the email field, show the message box
  email.onfocus = function() {
    document.getElementById("emailMsg").style.display = "block";
  }
  mobile.onfocus = function() {
    document.getElementById("mobileMsg").style.display = "block";
  }

  // When the user clicks outside of the email field, hide the message box
  email.onblur = function() {
    document.getElementById("emailMsg").style.display = "none";
  }
  mobile.onblur = function() {
    document.getElementById("mobileMsg").style.display = "none";
  }



  email.onkeyup = function() {

    var email = document.getElementById("email");
    var email_value = document.getElementById("email").value;
    var email_length = email_value.length;
    var atindex = email_value.indexOf('@');
    var dotindex = email_value.indexOf('.');
    var mindex = email_value.lastIndexOf('m');

    var lastIndex = email.length;


    if(atindex<7||dotindex<9||!dotindex-atindex>0|| mindex != email_length-1) {
      document.getElementById("emailMsgInvalid").style.display = "block";
      document.getElementById("phpMsg").style.display = "none";
      e = 1;
    }
    else{
      document.getElementById("emailMsgInvalid").style.display = "none";
      document.getElementById("phpMsg").style.display = "block";
    }


/*Gg*/if(email_value.charCodeAt(atindex+1)!=71 && email_value.charCodeAt(atindex+1)!=103 ||
/*Mm*/  email_value.charCodeAt(atindex+2)!=77 && email_value.charCodeAt(atindex+2)!=109 ||
/*Aa*/  email_value.charCodeAt(atindex+3)!=65 && email_value.charCodeAt(atindex+3)!=97  ||
/*Ii*/  email_value.charCodeAt(atindex+4)!=73 && email_value.charCodeAt(atindex+4)!=105 ||
/*Ll*/  email_value.charCodeAt(atindex+5)!=76 && email_value.charCodeAt(atindex+5)!=108||
/*.*/   email_value.charCodeAt(atindex+6)!=46||
/*Cc*/  email_value.charCodeAt(atindex+7)!=67 && email_value.charCodeAt(atindex+7)!=99 ||
/*Oo*/  email_value.charCodeAt(atindex+8)!=79 && email_value.charCodeAt(atindex+8)!=111||
/*Mm*/  email_value.charCodeAt(atindex+9)!=77 && email_value.charCodeAt(atindex+9)!=109)
      {
        document.getElementById("emailMsgGmail").style.display = "block";
        document.getElementById("phpMsg").style.display = "none";
        e = 1;
      }else{
        document.getElementById("emailMsgGmail").style.display = "none";
        document.getElementById("phpMsg").style.display = "block";
        e = 0;

      }

  }


  mobile.onkeyup = function() {


    var phoneno = /^\d{10}$/;
    if(!mobile.value.match(phoneno)) {
      document.getElementById("mobileMsgInvalid").style.display = "block";
      document.getElementById("phpMsg").style.display = "none";
      m = 1;
    }else{
      document.getElementById("mobileMsgInvalid").style.display = "none";
      document.getElementById("phpMsg").style.display = "block";
      m = 0;
    }
  }





//password validation

var pass = document.getElementById("password");                                 //password validation
var letter = document.getElementById("passMsgLetter");
var capital = document.getElementById("passMsgCapital");
var number = document.getElementById("passMsgNumber");
var length = document.getElementById("passMsgLength");

var lc = 0, uc = 0, nu = 0, ln = 0;


// When the user clicks on the password field, show the message box
pass.onfocus = function() {
    document.getElementById("passMsg").style.display = "block";
    document.getElementById("phpMsg").style.display = "none";
}

// When the user clicks outside of the password field, hide the message box
pass.onblur = function() {
    document.getElementById("passMsg").style.display = "none";
    document.getElementById("phpMsg").style.display = "block";
}


// When the user starts to type something inside the password field
pass.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(pass.value.match(lowerCaseLetters)) {
    letter.classList.remove("invalid");
    letter.classList.add("valid");
    lc = 0;
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
    lc = 1;
  }

  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(pass.value.match(upperCaseLetters)) {
    capital.classList.remove("invalid");
    capital.classList.add("valid");
    uc = 0;
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
    uc = 1;
  }



  // Validate numbers
  var numbers = /[0-9]/g;
  if(pass.value.match(numbers)) {
    number.classList.remove("invalid");
    number.classList.add("valid");
    nu = 0;
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
    nu = 1;
  }

  // Validate length
  if(pass.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
    ln = 0;
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
    ln = 1;
  }

  if(uc==1 || lc==1 || nu==1 || ln==1){
    p = 1;
  }
  else{
    p = 0;
  }
}


//cnf pass

var pass2 = document.getElementById("password_2");                              //cnf pass validation

// When the user clicks on the password field, show the message box
pass2.onfocus = function() {
    document.getElementById("cnfMsg").style.display = "block";
    document.getElementById("phpMsg").style.display = "none";
}

// When the user clicks outside of the password field, hide the message box
pass2.onblur = function() {
    document.getElementById("cnfMsg").style.display = "none";
    document.getElementById("phpMsg").style.display = "block";
}

pass2.onkeyup = function() {

  if (!(document.getElementById("password").value==document.getElementById('password_2').value)){
    document.getElementById("cnfMsgInvalid").style.display = "block";
    document.getElementById("phpMsg").style.display = "none";
    c = 1;
  }else{
    document.getElementById("cnfMsgInvalid").style.display = "none";
    document.getElementById("phpMsg").style.display = "block";
    c = 0;
  }


}


var pass = document.getElementById("password")                                  //password strength
pass.addEventListener('keyup',function(){checkPassword(pass.value)})
function checkPassword(password){
  var strengthBar = document.getElementById("strength")
  var strength = 0;


  if(password.length>8)
  {
    strength += 1
  }
  if(password.match(/[a-z]+/))
  {
    strength += 1
  }
  if(password.match(/[A-Z]+/))
  {
    strength += 1
  }
  if(password.match(/[0-9]+/))
  {
    strength += 1
  }
  if(password.match(/[!@#$%^&*()~<>?]+/))
  {
    strength += 1
  }
  if(password.match(/[,.]+/))
  {
    strength += 1
  }
  if(password.length>12)
  {
    strength += 1
  }

  switch(strength)
  {
    case 0 : strengthBar.value = 2;
             break
    case 1 :
             strengthBar.value = 16;
             break

    case 2 :
             strengthBar.value = 30;
             break

    case 3 :
             strengthBar.value = 44;
             break

    case 4 :
             strengthBar.value = 58;
             break

    case 5 :
             strengthBar.value = 72;
             break

    case 6 :
             strengthBar.value = 86;
             break

    case 7 :
              strengthBar.value = 100;
              break
  }
}



function showpass() {                                                           //show password function
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>




</body>
</html>
