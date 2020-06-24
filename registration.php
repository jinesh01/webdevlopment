<!DOCTYPE html>
<html>
<head>
  <title>Sign-Up/Login Form</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- <script type="text/javascript">
var ck_name = /^[A-Za-z0-9]{3,20}$/;
var ck_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 
var ck_lastname = /^[A-Za-z0-9_]{1,20}$/;
var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;


function validate(form){
var name = form.name.value;
 var email = form.email.value;
 var lastname = form.lastname.value;
 var password = form.password.value;
  
  
 var errors = [];

if(name=="" || email==""||lastname==""||password=="") 
  {
    errors[errors.length] = "Enter Name .";
  errors[errors.length] = "Enter email .";
  errors[errors.length] = "Enter lastname .";
  errors[errors.length] = "Enter password .";

  }
 else if (!ck_name.test(name)) {
  errors[errors.length] = "Enter Your valid Name .";
 }
  
 else if (!ck_email.test(email)) {
  errors[errors.length] = "You must enter a valid email address.";
 }
 else if (!ck_lastname.test(lastname)) {
  errors[errors.length] = "You valid UserName no special char .";
 }

 else if (!ck_password.test(password)) {
  errors[errors.length] = "You must enter a valid Password min 6 char.";
 }
 
 
 
 if (errors.length > 0) {
  reportErrors(errors);
  return false;
 }
 
 return true;
}

function reportErrors(errors){
 var msg = "Please Enter Valide Data...";
 for (var i = 0; i<errors.length; i++) {
  var numError = i + 1;
  msg += "\n" + numError + ". " + errors[i];
 }
 alert(msg);
}
</script>  -->
</head>

<body>
  <div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form method="POST" action="" name="form" >
            <!-- onsubmit="return validate(this);" -->
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name
              </label>
              <input type="text" name="t1" required pattern="^[A-Za-z0-9]{3,20}+">
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name
              </label>
              <input type="text" name="t2" required>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address
            </label>
            <input type="text" name="t3" required pattern="^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}+">
          </div>
          
          <div class="field-wrap">
            <label>
              Enter Password
            </label>
            <input type="password" name="t4" required pattern="^[A-Za-z0-9!@#$%^&*()_]{6,20}+">
          </div>
         <!--  <div class="field-wrap">
            <label> -->
              <!-- Confirm Password
            </label>
            <input type="password" name="cpassword">
          </div> -->
          
          <button type="submit" name="submit" value="submit" class="button button-block"/>Register</button>
          
          </form>
          <br><br>
          <b><a id="abcd" href="login.php">Already have an account? Login</a></b><br><br>
          <b><a id="abcd" href="admin_login.php">You are Admin?</a></b>
        </div>
<script src='js/index2.js'></script>
<script  src="js/index.js"></script>



    <?php
    if(isset($_POST["submit"]))
    { 
      $link=mysqli_connect("localhost","root","");
      mysqli_select_db($link, "jloginregister");
      $count=0;
      $res=mysqli_query($link, "select *from jregistration where email='$_POST[t3]'");
      $count=mysqli_num_rows($res);
      if($count>0)
      {
        ?>
        <script type="text/javascript">
          alert("This Emial id is alredy Exists");
        </script>
        <?php
      }
      else
      {
        $pwd=md5($_POST["t4"]);
        mysqli_query($link, "insert into jregistration values('','$_POST[t1]','$_POST[t2]','$_POST[t3]','$pwd')");
        ?>
        <script type="text/javascript">
          alert("Record insert Successfully");
        </script>
        <?php
           
      }

      
    }
    
    ?>

</body>
</html>
