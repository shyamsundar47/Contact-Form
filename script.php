  
<!DOCTYPE html>
<html>
<head>
   <title>Details</title>
</head>
<br><br><br><br>
<center>
<body style="background-color: #92DFF1">

  <?php
      
     
          $title = $_POST['title'];
          $firstname = $_POST['fname'];
          $lastname = $_POST['lname'];
          $DOB = $_POST['dobdate'];
          $telephone = $_POST['idnumber'];
          $fileupload = $_POST['file'];
          $message = $_POST['message'];
          echo "Thank you $title $firstname $lastname <br><br> You have submitted the following details: <br><br> Date Of Birth: $DOB <br><br>
            Telephone: $telephone <br><br>
            File Uploaded: $fileupload <br><br>
            Message: $message";
           
   ?>

</body>
</center>
</html>   