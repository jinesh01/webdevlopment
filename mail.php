<?php
    if(isset($_POST["submit"]))
    {
      $link=mysqli_connect("localhost","root","");
      mysqli_select_db($link, "car_rental");
      $count=0;
      mysqli_query($link, "insert into contact values('','$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t4]')");
      ?>
       <script type="text/javascript">
          alert("Are you sure to send your information");
        </script>
        <?php
     }
?>