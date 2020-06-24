<!-- Admin File -->
<!DOCTYPE html>
<html>
<head>
  <title>Login Form</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- <script type="text/javascript">
var ck_email = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/; 
var ck_password =  /^[A-Za-z0-9!@#$%^&*()_]{6,20}$/;


function validate(form){
 var email = form.email.value;
 var password = form.password.value;
  
  
 var errors = [];

if (email==""||password=="")
  {
  errors[errors.length] = "Enter valid email Address and Enter valid password .";

  }
  else if(!ck_email.test(email) && !ck_password.test(password) && email!="" && password!="")
  {
    errors[errors.length] = "You must enter a valid email address and valid Password min 6 char.";
  }
 else if (!ck_email.test(email)) {
  errors[errors.length] = "You must enter a valid email address.";
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
        <!-- <li class="tab"><a href="#signup">Sign Up</a></li> -->
        <li class="tab active"><a href="">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        
        <div id="login">   
          <h1>Welcome Back Admin!</h1>
          
          <form method="POST" action="" name="form" >
          
           <div class="field-wrap">
            <label>
              Email Address
            </label>
            <input type="text" name="t1"/>
           </div>
          
          <div class="field-wrap">
            <label>
              Password
            </label>
            <input type="password" name="t2"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button  type="submit" value="login" name="submit" class="button button-block"/>Log In</button>
          
          </form>
          <br><br>
           <a id="abcde" href="registration.php">Sign Up</a>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
<script src='js/index2.js'></script>
<script  src="js/index.js"></script>



  <?php
    if(isset($_POST["submit"]))
    {
      
      $link=mysqli_connect("localhost","root","");
      mysqli_select_db($link, "jloginregister");
      $count=0;
      $res=mysqli_query($link, "select *from admin where email='$_POST[t1]' && password='$_POST[t2]'");
      $count=mysqli_num_rows($res);
  
      //echo"<script>alert('".$_SESSION["user"]."')</script>";
      if($count>0)
      {
        ?>
        <script type="text/javascript">
          // alert("Jinesh");
          
          window.location="admin.php";
        </script>

        <?php
      //   session_start();
      // $_SESSION["user"] = $_POST["t1"];
      }
      else
      {
        ?>
        <script type="text/javascript">
          alert("Incorrect Email Or Password");
        </script>
        <?php
      }
    }
    ?>

</body>
</html>
